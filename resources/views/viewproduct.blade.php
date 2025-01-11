@extends('layouts.master')

@section('content')
    <div class="mx-auto mt-5 ">
        <!-- Product Details Grid -->
        <div class="grid grid-cols-1 gap-6 px-4 lg:px-16 md:grid-cols-4">
            <!-- Product Image -->
            <div class="md:col-span-1">
                <img src="{{ asset('images/products/' . $product->photopath) }}" alt="{{ $product->name }}"
                    class="object-cover w-full transition-transform duration-300 transform rounded-lg shadow-lg h-72 md:h-96 hover:scale-105">
            </div>

            <!-- Product Info -->
            <div class="col-span-2 px-4 border-gray-200 border-x">


                <h2 class="text-2xl font-bold text-gray-600">{{ $product->name }}</h2>
                <p class="mt-2 text-lg font-bold text-gray-600">
                    @if ($product->discounted_price != '')
                        Rp. {{ $product->discounted_price }}
                        <span class="text-sm font-thin text-red-600 line-through">Rp. {{ $product->price }}</span>
                    @else
                        Rp. {{ $product->price }}
                    @endif
                </p>

                <!-- Quantity and Add to Cart -->
                <form action="{{ route('cart.store') }}" method="POST" class="mt-5">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="flex items-center space-x-1">
                        <button class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300" onclick="return dec()">-</button>
                        <input type="text" class="px-4 py-2 text-center bg-gray-100 border-none w-14" value="1"
                            id="qty" name="qty" readonly>
                        <button class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300" onclick="return inc()">+</button>
                    </div>
                    <p class="mt-2 text-gray-500">In Stock: {{ $product->stock }}</p>



                    <div class="flex items-center mt-2">
                        {{-- Display the stars for average rating --}}
                        <div class="flex items-center">
                            @php
                                // Calculate the number of full stars, half stars, and empty stars
                                $fullStars = floor($averageRating); // Full stars based on rating
                                $halfStars = $averageRating - $fullStars >= 0.5 ? 1 : 0; // Half star if remaining rating is >= 0.5
                                $emptyStars = 5 - ($fullStars + $halfStars); // Remaining empty stars
                            @endphp

                            {{-- Full stars --}}
                            @for ($i = 0; $i < $fullStars; $i++)
                                <i class='text-yellow-500 bx bxs-star'></i>
                            @endfor

                            {{-- Half star --}}
                            @if ($halfStars)
                                <i class='text-yellow-500 bx bxs-star-half'></i>
                            @endif

                            {{-- Empty stars --}}
                            @for ($i = 0; $i < $emptyStars; $i++)
                                <i class='text-yellow-500 bx bx-star'></i>
                            @endfor
                        </div>

                        {{-- Average rating and review count --}}
                        <span class="ml-2 text-sm text-yellow-500">{{ number_format($averageRating, 1) }}</span>
                        <span class="ml-2 text-sm text-gray-400">{{ $reviews->count() }} reviews</span>
                    </div>


                    @if ($product->stock <= 0)
                        <p class="text-red-600">Stok Habis</p>
                        <button type="submit" class="bg-[#9a031fdd] text-white px-4 py-2 mt-5 rounded" disabled>
                            Tambah Ke Keranjang <i class="text-lg bx bx-cart"></i>
                        </button>
                    @else
                        <button type="submit" class="bg-[#9a031fdd] text-white px-4 py-2 mt-5 rounded">
                        Tambah Ke Keranjang <i class="text-lg bx bx-cart"></i>
                        </button>
                    @endif
                    {{--
                    <button type="submit"
                        class="flex items-center px-6 py-3 mt-4 space-x-2 text-white bg-[#9a031fdd] rounded-md  ">
                        <span class="text-lg">Add to Cart</span>
                        <i class="text-lg bx bx-cart"></i>
                    </button> --}}

                </form>
            </div>

            <!-- Delivery & Support Info -->
            <div class="px-4 py-4 rounded-lg shadow-sm bg-gray-50">
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-indigo-600 bx bxs-truck"></i>
                        <span class="text-sm text-gray-600">Pengiriman dalam 5 hari</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-green-600 bx bx-refresh"></i>
                        <span class="text-sm text-gray-600">Kebijakan pengembalian 7 hari</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-orange-600 bx bx-credit-card"></i>
                        <span class="text-sm text-gray-600">Pembayaran tunai saat pengiriman tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-red-600 bx bx-shield"></i>
                        <span class="text-sm text-gray-600">Garansi tersedia</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-blue-600 bx bx-headphone"></i>
                        <span class="text-sm text-gray-600">dukungan pelanggan 24/7</span>
                    </div>
                    <div class="flex items-center">
                        <i class="mr-2 text-xl text-teal-600 bx bx-lock-alt"></i>
                        <span class="text-sm text-gray-600">Pembayaran aman 100%.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="px-4 mt-10 lg:px-16">
            <h2 class="text-2xl font-bold text-black">Tentang Produk</h2>
            <p class="mt-2 text-lg text-gray-600">{{ $product->description }}</p>
        </div>

        <!-- Reviews Section -->
        <div class="px-4 mt-10 lg:px-16">
            <h2 class="pl-2 mb-4 text-2xl font-semibold border-l-4 border-yellow-500">Review costumer</h2>
            @if ($reviews->isEmpty())
                <p class="text-gray-500">Belum ada ulasan. Jadilah orang pertama yang mengulas produk ini🥺!</p>
            @else
                <div class="h-56 mt-2 space-y-4 overflow-y-auto "> {{-- Wrap reviews in a flex container for spacing --}}
                    @foreach ($reviews as $review)
                        <div class="p-6 mb-4 bg-white rounded-lg shadow-lg review">
                            <div class="flex items-center">
                                <div
                                    class="flex items-center justify-center w-12 h-12 text-xl font-semibold text-white bg-[#9a031fdd] rounded-full user-avatar">
                                    {{ strtoupper(substr($review->user->name, 0, 1)) }}
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">{{ $review->user->name }}</h4>
                                    <div class="flex items-center">
                                        <!-- Display star rating based on review rating -->
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-6 h-6 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927C9.362 2.015 10.639 2.015 10.951 2.927l1.163 3.587 3.897.022c.998.006 1.412 1.285.611 1.846l-3.145 2.204 1.194 3.73c.322.986-.846 1.81-1.696 1.267L10 13.347l-3.174 2.236c-.85.543-2.018-.281-1.696-1.267l1.194-3.73-3.145-2.204c-.801-.561-.387-1.84.611-1.846l3.897-.022L9.049 2.927z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">Posted on
                                        {{ $review->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                            <p class="mt-4 text-gray-700">{{ $review->review }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>


        {{-- allow auth user to give review --}}

        <!-- Allow authenticated user to submit a review -->
        <!-- Review Form Section -->
        @auth


            <div class="px-4 mt-10 review-form lg:px-16">
                <h2 class="pl-2 mb-4 text-2xl font-semibold border-l-4 border-yellow-500">Leave a Review</h2>
                <form action="{{ route('review.store', $product->id) }}" method="POST"
                    class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    @csrf
                    <div class="flex items-center mb-4">
                        <label for="rating" class="mr-4">Rating:</label>
                        <select name="rating" id="rating" class="p-2 border rounded-md">
                            <option value="1">1 ⭐</option>
                            <option value="2">2 ⭐</option>
                            <option value="3">3 ⭐</option>
                            <option value="4">4 ⭐</option>
                            <option value="5">5 ⭐</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="review" class="block mb-2">Review:</label>
                        <textarea name="review" id="review" rows="4" class="w-full p-2 border rounded-md" required></textarea>
                    </div>
                    <button type="submit" class="p-2 text-white bg-[#9a031fdd] rounded-lg ">Submit
                        Review</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="px-4 mt-5 lg:px-16">
                <p class="text-sm text-gray-600">Please <a href="{{ route('login') }}" class="text-yellow-500 underline">log
                        in</a> to leave a review.</p>
            </div>
        @endguest

    </div>
    </div>


    </div>






    <!-- Related Products Section -->
    <div class="px-4 mt-10 lg:px-16">
        <div class="pl-2 border-l-4 border-yellow-500">
            <h1 class="text-2xl font-bold text-gray-900">Related Products</h1>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($relatedproducts as $rproduct)
                {{-- Ensure this matches the variable passed from the controller --}}
                <a href="{{ route('viewproduct', $rproduct->id) }}" class="flex-shrink-0">
                    <!-- Product card with fixed min-width for small/medium devices -->
                    <div class="overflow-hidden border rounded-lg shadow-lg min-w-[16rem]">
                        <img src="{{ asset('images/products/' . $rproduct->photopath) }}" alt="{{ $rproduct->name }}"
                            class="object-cover w-full h-64">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ Str::limit($rproduct->name, 20) }}</h3>
                            <p class="text-sm text-gray-500">{{ Str::limit($rproduct->description, 20) }}</p>
                            <div class="mt-2">
                                <span class="text-lg font-bold text-gray-900">Rs. {{ $rproduct->price }}</span>
                                @if ($rproduct->discounted_price)
                                    <span class="text-sm text-gray-400 line-through">Rs.
                                        {{ $rproduct->discounted_price }}</span>
                                    <span
                                        class="text-sm font-bold text-red-500">({{ round((($rproduct->discounted_price - $rproduct->price) / $rproduct->discounted_price) * 100) }}%
                                        OFF)</span>
                                @endif
                            </div>

                            <!-- Display the average rating for the related product -->
                            <div class="flex items-center mt-2">
                                @php
                                    // Calculate the number of full stars, half stars, and empty stars for related products
                                    $fullStars = floor($relatedProductRatings[$rproduct->id] ?? 0);
                                    $halfStars =
                                        ($relatedProductRatings[$rproduct->id] ?? 0) - $fullStars >= 0.5 ? 1 : 0;
                                    $emptyStars = 5 - ($fullStars + $halfStars);
                                @endphp

                                {{-- Full stars --}}
                                @for ($i = 0; $i < $fullStars; $i++)
                                    <i class='text-yellow-500 bx bxs-star'></i>
                                @endfor

                                {{-- Half star --}}
                                @if ($halfStars)
                                    <i class='text-yellow-500 bx bxs-star-half'></i>
                                @endif

                                {{-- Empty stars --}}
                                @for ($i = 0; $i < $emptyStars; $i++)
                                    <i class='text-yellow-500 bx bx-star'></i>
                                @endfor

                                {{-- Average rating and review count --}}
                                <span
                                    class="ml-2 text-sm text-yellow-500">{{ number_format($relatedProductRatings[$rproduct->id] ?? 0, 1) }}</span>
                                <span class="ml-2 text-sm text-gray-400">{{ $rproduct->reviews()->count() }}
                                    reviews</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>



    <script>
        function inc() {
            let qty = document.getElementById('qty');
            if (parseInt(qty.value) < {{ $product->stock }})
                qty.value = parseInt(qty.value) + 1;
            return false;
        }

        function dec() {
            let qty = document.getElementById('qty');
            if (parseInt(qty.value) > 1)
                qty.value = parseInt(qty.value) - 1;
            return false;
        }
    </script>
@endsection
