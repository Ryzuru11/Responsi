@extends('layouts.master')

@section('content')
    <div class="bg-[#F5F5F5] py-5">
        <div class="container px-4 mx-auto text-center">




            <div>
                <h1 class="text-3xl font-semibold text-[#9a031fdd] mb-6 pl-2">
                    <a href="{{ route('home') }}" class="text-[#9a031fdd]">Home</a> / Tentang kami
                </h1>
            </div>

            <!-- Image Section -->

            <img src="{{ asset('images/about.png') }}" alt="Tentang kami Image"
                class="top-0 object-cover w-full rounded-lg h-100">



            <!-- Description Section -->
            <div class="mt-12">
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700 ">
                    Welcome to <strong class="text-[#9a031fdd]">Ryzuru Store</strong>,Selamat datang di Ryzuru Store, tujuan utama Anda untuk semua kebutuhan koleksi dan merchandise anime! Kami menyediakan berbagai macam produk berkualitas tinggi, mulai dari figure anime eksklusif, pernak-pernik unik, hingga barang-barang yang wajib dimiliki oleh para penggemar.

Ryzuru Store hadir untuk memberikan pengalaman belanja terbaik bagi para otaku dan pecinta budaya pop Jepang. Kami berkomitmen untuk menghadirkan produk yang tidak hanya memuaskan koleksi Anda, tetapi juga membawa kebahagiaan dan inspirasi.

Nikmati berbagai pilihan figure edisi terbatas, aksesori menarik, serta barang-barang spesial yang sulit ditemukan di tempat lain. Bergabunglah dengan komunitas kami, dan jadikan Ryzuru Store sebagai tempat favorit Anda untuk merayakan cinta terhadap dunia anime!.
                </p>
            </div>

            <!-- Mission Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-semibold text-[#9a031fdd] mb-4">Misi Kami</h3>
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                    At <strong class="text-[#9a031fdd]">Ryzuru Store</strong>, Di Ryzuru Store, misi kami adalah menjadi toko pilihan utama bagi para penggemar anime dengan menghadirkan produk berkualitas tinggi yang terinspirasi dari dunia anime dan budaya pop Jepang.
                Kami berkomitmen untuk:<br> > Menyediakan koleksi figure dan merchandise yang otentik dan beragam.<br>
    > Mendukung komunitas otaku dengan produk-produk eksklusif yang sulit ditemukan.<br>
    > Memberikan pengalaman belanja yang mudah, aman, dan menyenangkan.<br>
Kami percaya bahwa setiap penggemar layak mendapatkan akses ke barang-barang favorit mereka untuk mengekspresikan cinta terhadap karakter dan cerita yang mereka kagumi. Dengan semangat ini, kami terus berinovasi untuk memenuhi kebutuhan dan keinginan Anda!
                </p>
            </div>

            <!-- Vision Section -->
            <div class="mt-16">
                <h3 class="text-3xl font-semibold text-[#9a031fdd] mb-4">Visi Kami</h3>
                <p class="max-w-full text-lg leading-relaxed text-justify text-gray-700">
                Di Ryzuru Store, visi kami adalah menjadi toko terpercaya dan terkemuka bagi para penggemar anime di seluruh Indonesia. Kami bercita-cita untuk menciptakan sebuah tempat di mana setiap penggemar dapat menemukan barang-barang impian mereka, mulai dari koleksi figure hingga merchandise unik yang mewakili cinta mereka terhadap dunia anime.
Kami ingin membangun komunitas yang kuat dan penuh semangat, di mana setiap orang dapat berbagi kebahagiaan, inspirasi, dan kebanggaan atas koleksi mereka. Dengan dedikasi untuk menghadirkan produk berkualitas dan layanan terbaik, kami berharap menjadi bagian dari perjalanan Anda dalam merayakan budaya anime yang luar biasa.
                </p>

            </div>



        </div>


    </div>
@endsection
