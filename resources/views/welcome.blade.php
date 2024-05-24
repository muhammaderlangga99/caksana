<x-app-layout>
    <style>
        .responsive-scroll {
            position: relative;
            justify-content: center;
            width: 50px;
            height: 75px;
            border: #000 2px solid;
            border-radius: 10px;
            transition: all 450ms ease;
        }

        @-webkit-keyframes responsive-scroll {
            0% {
                margin-top: 25%;
                opacity: 0;
            }

            33% {
                margin-top: 36.55%;
                opacity: 1;
            }

            100% {
                margin-top: 60%;
                opacity: 0;
            }
        }

        @keyframes responsive-scroll {
            0% {
                margin-top: 25%;
                opacity: 0;
            }

            33% {
                margin-top: 36.55%;
                opacity: 1;
            }

            100% {
                margin-top: 60%;
                opacity: 0;
            }
        }

        @-webkit-keyframes responsive-scroll-rwd {
            0% {
                margin-top: 75%;
                opacity: 0;
            }

            33% {
                margin-top: 58.5%;
                opacity: 1;
            }

            100% {
                margin-top: 25%;
                opacity: 0;
            }
        }

        @keyframes responsive-scroll-rwd {
            0% {
                margin-top: 75%;
                opacity: 0;
            }

            33% {
                margin-top: 58.5%;
                opacity: 1;
            }

            100% {
                margin-top: 25%;
                opacity: 0;
            }
        }

        .responsive-scroll:before {
            content: "";
            position: absolute;
            display: block;
            width: 40%;
            height: 3px;
            max-height: 3px;
            border-bottom-left-radius: 1000px;
            border-bottom-right-radius: 1000px;
            background-color: #000;
            transition: all 450ms ease;
        }

        .responsive-scroll:after {
            content: "";
            position: absolute;
            bottom: 5px;
            display: block;
            width: 55%;
            height: 2px;
            max-height: 2px;
            border-radius: 1000px;
            background-color: #000;
            opacity: 0.1;
            transition: all 950ms ease;
        }

        .responsive-scroll:hover:after {
            opacity: 1;
        }

        .responsive-scroll .scroll-thisico {
            display: block;
            width: 8px;
            height: 35px;
            margin-top: 65%;
            border-radius: 1000px 1000px 3px 3px;
            background-color: #000;
            transform: translatex(6px) rotate(-45deg);
            transform-origin: top left;
            -webkit-animation: responsive-scroll-rwd infinite 2250ms;
            animation: responsive-scroll-rwd infinite 2250ms;
            transition: all 450ms ease;
        }

        .responsive-scroll.is-notTouch {
            border: #000 2px solid;
            border-radius: 25px;
        }

        .responsive-scroll.is-notTouch:before,
        .responsive-scroll.is-notTouch:after {
            max-height: 0;
        }

        .responsive-scroll.is-notTouch .scroll-thisico {
            height: 8px;
            margin-top: 25%;
            border-radius: 1000px;
            background-color: #000;
            transform: translatex(0px) rotate(0deg);
            -webkit-animation: responsive-scroll infinite 2250ms;
            animation: responsive-scroll infinite 2250ms;
        }

        .controls {
            position: fixed;
            top: 2rem;
            display: flex;
        }

        .controls .button {
            display: block;
            padding: 5px 25px;
            color: #000;
            border: #000 2px solid;
            background-color: transparent;
            font-weight: 500;
            font-style: italic;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            transition: all 450ms ease;
            cursor: pointer;
        }

        .controls .button:first-child {
            border-top-left-radius: 1000px;
            border-bottom-left-radius: 1000px;
        }

        .controls .button:last-child {
            border-top-right-radius: 1000px;
            border-bottom-right-radius: 1000px;
        }

        .controls .button:hover {
            background-color: rgba(250, 250, 250, 0.1);
        }

        .controls .button.selected {
            color: #212121;
            background-color: #000;
        }


        body footer:hover {
            opacity: 1;
        }
    </style>

    <div class="relative flex items-top justify-center sm:items-center sm:pt-0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        {{-- <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($posts)
                <header class="text-center py-5 mt-5 mb-3">
                    <h1 class="text-3xl font-bold dark:text-white my-3">
                        {{ config('app.name') }}
                        @if (config('blog.demoMode'))
                            <span
                                class="bg-green-500 text-green-900 text-sm rounded-lg px-2 py-1 my-1 ml-3 absolute">Demo
                                Mode</span>
                        @endif
                    </h1>
                    <h2 class="text-2xl font-medium dark:text-white">Latest Blog Posts</h2>
                </header>

                <livewire:latest-blog-posts />
            @else
                <header class="text-center py-5 mt-5 mb-3">
                    <h2 class="text-2xl font-medium dark:text-white">There are no posts here!</h2>
                </header>
            @endif
        </section> --}}
    </div>

    <div class="md:h-[80vh] h-[90vh] w-full flex mt-20 z-10 relative overflow-hidden" id="home">
        <div class="w-96 h-96 rounded-full bg-yellow-300 opacity-25 blur-3xl absolute -translate-x-52">
        </div>

        <div
            class="w-96 h-96 rounded-full bg-indigo-300 opacity-25 blur-3xl absolute right-0 -translate-y-16 bottom-0 translate-x-52">
        </div>
        <div class="max-w-3xl m-auto py-4 text-center tracking-wider relative">
            <i class="bi bi-star-fill text-xl absolute text-yellow-300 -translate-x-10 left-0"></i>
            <i class="bi bi-moon-stars text-xl absolute text-indigo-500 translate-x-10 right-0"></i>
            <h1 class="text-6xl text-orange-400  font-cherry">Haii bunda, selamat datang <span class="text-indigo-500">
                    di
                    caksana!</span></h1>
            <h3 class="text-lg font-bold text-yellow-400 mt-3">Daycare plus</h3>
            <p class="mt-5 text-white flex flex-wrap justify-center gap-2"> <span
                    class="bg-indigo-500 px-2 py-1.5 rounded-md rotate-3">orang tua
                    bekerja
                    tenang</span> <span class="bg-orange-400 px-2 py-1.5 -rotate-3 rounded-md">anak bermain
                    riang</span></p>

            <div class="responsive-scroll mx-auto mt-10 flex md:hidden">
                <span class="scroll-thisico"></span>
            </div>

            <img src="{{ asset('/img/hallo.png') }}"
                class="h-[50vh] absolute m-auto md:left-64 -translate-y-28 md:translate-y-0" alt="daycere">
        </div>
    </div>


    {{-- jargon --}}
    <section class="max-w-7xl md:max-w-full mx-auto sm:px-6 lg:px-8 mt-5 md:mt-0 md:py-5 relative z-20">
        <div class="md:max-w-7xl m-auto grid grid-cols-1 md:grid-cols-3 gap-5">
            <div
                class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto md:shadow-lg rounded-lg overflow-hidden">
                <div class="p-4 text-center">
                    <h3
                        class="font-bold text-sm md:text-xl font-cherry tracking-wider mb-2 text-yellow-400 dark:text-white">
                        <i class="bi bi-award-fill"></i>
                        Profesional
                    </h3>
                    <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">
                        Dibimbing oleh mahasiswa PG PAUD yang berpengalaman serta profesional di bidangnya.
                    </p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto md:shadow-lg rounded-lg overflow-hidden">
                <div class="p-4 text-center">
                    <h3
                        class="font-bold text-sm md:text-xl font-cherry tracking-widest mb-2 text-indigo-600 dark:text-white">
                        <i class="bi bi-emoji-laughing"></i> fun Activities
                    </h3>
                    <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">Kami merancang program kegiatan
                        yang interaktif dan edukatif, termasuk seni dan kerajinan, permainan kelompok, dan eksplorasi
                        alam.</p>
                </div>
            </div>
            <div
                class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto md:shadow-lg rounded-lg overflow-hidden">
                <div class="p-4 text-center">
                    <h3
                        class="font-bold text-sm md:text-xl font-cherry tracking-wider mb-2 text-orange-400 dark:text-white">
                        <i class="bi bi-bookmark-heart"></i>
                        Rapor Harian
                    </h3>
                    <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">Kami menyediakan rapor harian
                        tentang aktivitas, makan, tidur, dan perkembangan anak di daycare untuk informasi orang tua.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- buatkan section dengan dua column responsive di kiri text dan di kanan adalah gambar --}}
    <div class="max-w-7xl mx-auto px-3 md:px-0 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 mt-20 m-auto relative"
        id="about">
        <div class="w-96 h-96 rounded-full bg-yellow-300 opacity-25 blur-3xl absolute -translate-y-16 -translate-x-52">
        </div>
        <div class="md:order-2 col-span-2">
            <img src="{{ asset('/img/about.png') }}" alt="daycare" class="w-full h-full object-cover rounded-xl">
        </div>
        <div class="md:order-1 col-span-1 flex flex-col justify-center tracking-wider">
            <h2 class="text-2xl font-bold text-indigo-500 dark:text-white font-cherry">Tentang Kami 👋</h2>
            <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed tracking-wide mt-3" data-aos-delay="100">
                Caksana Daycare Plus adalah tempat penitipan anak usia dini dengan fokus pendidikan, pengasuhan,
                perawatan, pertumbuhan, dan
                perkembangan anak dengan berbagai sentra bermain yang dirancang
                untuk mendukung lima aspek perkembangan: kognitif, sosial-emosional, bahasa,
                fisik dan motorik.
            </p>
        </div>
    </div>

    <div class="border-b-4 border-dotted border-indigo-400 mt-10 -translate-x-20 relative" id="fasilitas">
        <i
            class="bi bi-airplane-engines-fill absolute right-0 rotate-90 inline-block text-xl -translate-y-3 text-indigo-400 translate-x-6"></i>

        <div
            class="w-96 h-96 rounded-full bg-indigo-300 opacity-25 blur-3xl absolute -z-50 right-0 -translate-y-32 translate-x-20">
        </div>
    </div>


    {{-- trust --}}
    <div class="max-w-7xl mx-auto px-3 md:px-0 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 mt-20 m-auto">
        <div class="">
            <h1 class="font-bold text-2xl md:text-5xl text-orange-400 font-cherry tracking-wider z-40">Bekerja Tenang,
                Si
                Kecil Terjaga.
            </h1>
            <p class="text-base mt-2 tracking-wider text-indigo-600">fasilitas yang lengkap untuk tumbuh kembang sikecil
            </p>
        </div>
    </div>
    <div class="swiper mySwiper mt-5">
        <div class="swiper-wrapper p-3 md:p-0">
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden md:ml-20">
                <img src="{{ asset('img/d.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/kasur.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/ruangan.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/kayu.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/dokter.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/belajar.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/abang.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/kreatif.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
            <div class="swiper-slide inline-block rounded-xl shadow-lg overflow-hidden">
                <img src="{{ asset('img/mainan.jpg') }}" alt=""
                    class="object-cover overflow-hidden m-auto w-full h-full">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="program mt-10" id="program">
        <img src="{{ asset('/svg/wave.svg') }}" alt="">
        <div class="w-full py-5 bg-orange-400 -mt-2">
            <h1 class="text-2xl md:text-4xl text-white text-center font-bold font-cherry mb-8 tracking-widest">Program
                Keunggulan</h1>
            <div class="max-w-7xl mx-auto px-3 md:px-0 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 m-auto">
                <div class="col-span-1 grid gap-3 grid-cols-2 w-full">
                    <div class="overflow-hidden col-span-1">
                        <img src="{{ asset('/img/belajar.jpg') }}" alt="ceksana"
                            class="w-full h-full rounded-2xl object-cover shadow-lg col-span-1">
                    </div>
                    <div class="overflow-hidden col-span-1">
                        <img src="{{ asset('/img/kasur.jpg') }}" alt="ceksana"
                            class="w-full h-full rounded-2xl object-cover shadow-lg col-span-1">
                    </div>
                    <div class="overflow-hidden col-span-1">
                        <img src="{{ asset('/img/kayu.jpg') }}" alt="ceksana"
                            class="w-full h-full rounded-2xl object-cover shadow-lg col-span-1">
                    </div>
                    <div class="overflow-hidden col-span-1">
                        <img src="{{ asset('/img/mainan.jpg') }}" alt="ceksana"
                            class="w-full h-full rounded-2xl object-cover shadow-lg col-span-1">
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-10 justify-center w-10/12 tracking-wider">
                    <div class="">
                        <h2 class="text-lg font-semibold text-white">Permainan</h2>
                        <p class="text-white text-sm tracking-wide">Di Caksana Daycare Plus, tersedia mainan untuk
                            melatih motorik kasar dan halus, termasuk playground dengan perosotan dan jungkat-jungkit,
                            serta Lego, puzzle, dan mainan edukatif lainnya.
                        </p>
                    </div>
                    <div class="">
                        <h2 class="text-lg font-semibold text-white">Membacakan buku cerita setiap hari
                        </h2>
                        <p class="text-white text-sm tracking-wide">Misi Caksana Daycare Plus adalah mencerdaskan
                            bangsa dengan membiasakan anak membaca sejak dini, untuk membentuk wawasan luas dan semangat
                            pantang menyerah.
                        </p>
                    </div>
                    <div class="">
                        <h2 class="text-lg font-semibold text-white">jadwal yang teratur
                        </h2>
                        <p class="text-white text-sm tracking-wide">Anak belajar jadwal kegiatan, membentuk hidup
                            teratur dan disiplin sejak bayi, memudahkan mereka memasuki pendidikan formal.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('/svg/wave.svg') }}" alt="" class="rotate-180 -translate-y-2">
    </div>
    <div class="dark:bg-gray-900">
        <div class="border-b-4 border-dotted border-yellow-400 translate-x-20 relative">
            <i
                class="bi bi-airplane-engines-fill absolute left-0 -rotate-90 inline-block text-xl -translate-y-3 text-yellow-400 "></i>

            <div
                class="w-96 h-96 rounded-full bg-indigo-300 opacity-25 blur-3xl absolute -z-50 left-0 -translate-y-32 -translate-x-20">
            </div>
            <i class="bi bi-stars text-yellow-400 m-auto left-32 text-xl translate-y-10 absolute "></i>
            <i class="bi bi-stars text-yellow-400 m-auto left-72 text-xl -translate-y-10 absolute "></i>
            <i class="bi bi-stars text-yellow-400 m-auto left-96 text-xl translate-y-10 absolute "></i>
            <i class="bi bi-stars text-yellow-400 m-auto right-96 text-xl -translate-y-10 absolute "></i>
            <i class="bi bi-stars text-yellow-400 m-auto right-80 text-xl translate-y-10 absolute "></i>
            <i class="bi bi-stars text-yellow-400 m-auto right-52 text-xl -translate-y-10 absolute "></i>
        </div>


        {{-- blog --}}
        <div class="max-w-7xl mx-auto px-3 md:px-0 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 mt-20 m-auto"
            id="blog">
            <div class="z-30">
                <h1 class="font-bold text-2xl md:text-5xl text-orange-400 font-cherry tracking-wider">Yuk baca blog
                    kami
                    bersama sikecil
                </h1>
                <p class="text-base mt-2 tracking-wider text-indigo-600">cerita kami merawat dan menjaga sikecil anda
                </p>
            </div>
        </div>
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 *:">
            @if ($posts)
                <livewire:latest-blog-posts />
            @else
                <header class="text-center py-5 mt-5 mb-3">
                    <h2 class="text-2xl font-medium dark:text-white">There are no posts here!</h2>
                </header>
            @endif
        </section>
    </div>

    {{-- lokasi --}}
    <div class="dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-3 md:px-0 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-10 pt-20 m-auto dark:bg-gray-900"
            id="lokasi">
            <div class="z-30">
                <h1 class="font-bold text-2xl md:text-5xl text-orange-400 font-cherry tracking-wider">Lokasi Kami
                </h1>
                <p class="text-base mt-2 tracking-wider text-indigo-600">Temukan kami di sini
                </p>
            </div>
        </div>
        <div
            class="max-w-7xl dark:bg-gray-900 mx-auto px-3 md:px-0 sm:px-6 lg:px-8 md:grid grid-cols-1 md:grid-cols-3 gap-10 pt-8 m-auto">
            <div class="col-span-2 rounded-xl bg-slate-600 overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.082819422254!2d106.84659737485495!3d-6.252818293735654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a5be656509%3A0xb407f61e419da940!2sUniversitas%20Trilogi!5e0!3m2!1sid!2sid!4v1716444612262!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-span-1 pt-5 md:mt-0">
                <div class="flex flex-col justify-around h-full gap-3">
                    <div
                        class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto rounded-lg overflow-hidden">
                        <div class="p-4 text-center">
                            <h3
                                class="font-bold text-sm md:text-xl font-cherry tracking-wider mb-2 text-yellow-400 dark:text-white">
                                <i class="bi bi-geo-alt-fill"></i>
                                Alamat
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">
                                Universitas Trilogi
                                Jl. TMP. Kalibata No.1, RT.4/RW.04, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan,
                                Daerah
                                Khusus Ibukota Jakarta 12760
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto rounded-lg overflow-hidden">
                        <div class="p-4 text-center">
                            <h3
                                class="font-bold text-sm md:text-xl font-cherry tracking-widest mb-2 text-indigo-600 dark:text-white">
                                <i class="bi bi-telephone-fill"></i>
                                Kontak
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">
                                +62852-8300-6742
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-white dark:bg-gray-800 border shadow w-11/12 md:w-full m-auto rounded-lg overflow-hidden">
                        <div class="p-4 text-center">
                            <h3
                                class="font-bold text-sm md:text-xl font-cherry tracking-wider mb-2 text-orange-400 dark:text-white">
                                <i class="bi bi-clock-fill"></i>
                                Jam Operasional
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 text-sm tracking-wide">
                                Senin - Jumat: 07.00 - 17.00 WIB
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- price list --}}
        <section class="pt-20 max-w-7xl m-auto px-3 md:px-0 dark:bg-gray-900">
            <h2 class="text-center font-bold font-cherry tracking-widest text-3xl text-orange-500 mb-5">Price List</h2>
            <ul class="max-w-7xl divide-y divide-gray-200 dark:divide-gray-700 m-auto">
                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Pendaftaran
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Uang Pendaftaran
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp400.000,-
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Paket Reguler
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Uang SPP / Bulan
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp1.250.000,-
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4 space-y-3">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Paket Irreguler
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                SPP Harian
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp200.000,-
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                SPP Setengah Hari
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp100.000,-
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                Overtime Penjemputan / 15 Menit
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            Rp20.000,-
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     pagination: {
        //         el: ".swiper-pagination",
        //         dynamicBullets: true,
        //     },
        // });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>

</x-app-layout>
