@extends('template.layout')
@section('konten')
    <div class="pages w-full h-screen font-sans">
        <div class="page-hero h-screen">
            <div class="navbar capitalize grid grid-cols-2 gap-2 mt-10 mx-20 content-center">
                <div class="logo font-extrabold text-3xl">
                    <h1>logo</h1>
                </div>
                <div class="section font-medium grid grid-cols-5 font-sans">
                    <h1>beranda</h1>
                    <h1>layanan</h1>
                    <h1>tentang kami</h1>
                    <h1>testimonial</h1>
                    <h1>hubungi kami</h1>
                </div>
            </div>
    
            <div class="register flex gap-2 mt-40 m-20 content-center">
                <div class="info w-7/12">
                    <h1 class="font-bold text-xl mb-5">Ahian wa sahlan <span class="font-normal">di situs resmi</span></h1>
                    <h1 class="text-5xl font-bold text-blue-600	mb-4">Mulai Umrohmu bersama</h1>
                    <h1 class="text-5xl font-bold text-blue-600 mb-4">Sinai Umroh Padang.</h1>
                    <h1 class="mt-8 text-xl font-light">Halo calon jamaah umroh kami adalah mitra terpercaya untuk perjalanan spiritual anda dengan pengalaman <span class="font-bold">8+ tahun</span> kami siap mendampingi ibdadah umroh dan haji anda</h1>
                    <div class="button font-medium text-white mt-5">
                        <button class="bg-blue-600 capitalize px-4 py-2 rounded-2xl">daftar sekarang</button>
                        <button class="border-2 capitalize px-4 py-2 text-black rounded-2xl">masuk</button>
                    </div>
                </div>
                <div class="testimonial content-center text-center w-5/12 bg-gray-300 shadow-lg mx-10">
                    <h1 class="">testimonial jama'ah</h1>
                </div>
            </div>
        </div>

        <div class="about-me capitalize m-20">
            <h1 class="text-lg text-medium text-blue-600">tentang kami.</h1>
            <div class="detail grid grid-cols-2">
                <h1 class="text-3xl font-semibold w-2/4">Siapa sih Sinai Umroh Padang itu?</h1>
                <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolorem sed iure odit? Dignissimos, qui reprehenderit. Tenetur provident recusandae, aut laboriosam qui veniam necessitatibus nihil.</h1>
            </div>
            <div class="image grid grid-cols-5 gap-2 mt-10">
                <div class="item">
                    <div class="w-full h-80 bg-gray-300 rounded-xl"></div>
                    <h1 class="mt-2">Lorem ipsum dolor sit.</h1>
                </div>
                <div class="item">
                    <div class="w-full h-80 bg-gray-300 rounded-xl"></div>
                    <h1 class="mt-2">Lorem ipsum dolor sit.</h1>
                </div>
                <div class="item">
                    <div class="w-full h-80 bg-gray-300 rounded-xl"></div>
                    <h1 class="mt-2">Lorem ipsum dolor sit.</h1>
                </div>
                <div class="item">
                    <div class="w-full h-80 bg-gray-300 rounded-xl"></div>
                    <h1 class="mt-2">Lorem ipsum dolor sit.</h1>
                </div>
                <div class="item">
                    <div class="w-full h-80 bg-gray-300 rounded-xl"></div>
                    <h1 class="mt-2">Lorem ipsum dolor sit.</h1>
                </div>
            </div>
        </div>

        <div class="dream m-20 grid grid-cols-2 gap-2">
            <div class="image mx-10 p-100 h-96 bg-gray-300 rounded-xl">

            </div>
            <div class="dream-detail">
                <h1 class="text-lg text-medium text-blue-600">tentang kami.</h1>
                <h1 class="text-3xl font-semibold">Wujudkan impian tersebut bersama</h1>
                <h1 class="text-3xl font-semibold">Kami dalam nabung umrah</h1>
                <h1 class="text-2xl mt-4 font-semibold">mengisi formulir pendaftaran umroh</h1>
                <div class="requirement grid grid-rows-3">
                    <div class="require flex items-center gap-2 mt-4">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-center">Menyiapkan KTP</h1>
                    </div>
                    <div class="require flex items-center gap-2 mt-4">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-center">Menyiapkan KTP</h1>
                    </div>
                    <div class="require flex items-center gap-2 mt-4">
                        <div class="icon p-2 w-fit rounded-full bg-blue-100 text-blue-300">O</div>
                        <h1 class="text-center">Menyiapkan KTP</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="packet h-screen mt-4">
            <h1 class="bg-black">s</h1>
        </div>
    </div>
@endsection