<div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- <div class="flex flex-row flex-wrap justify-start">
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    </div> --}}

    {{-- <footer class="my-3 mx-auto px-5">
        {{ $posts->links() }}
    </footer> --}}

    <div class="swiper blog">
        <div class="swiper-wrapper">
            @foreach ($posts as $post)
                <div class="swiper-slide"><x-post-card :post="$post" /></div>
            @endforeach
            {{-- see other blog --}}
            {{-- <div class="swiper-slide">
                <div class="flex flex-col items-center justify-center h-[50vh] bg-gray-100 rounded-lg">
                    <div class="text-3xl font-bold text-gray-800">See Other Blogs</div>
                    <div class="text-gray-600">Click the button below to see other blogs</div>
                    <div class="mt-5">
                        <a href="" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">See
                            Blogs</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".blog", {
            slidesPerView: 1,
            spaceBetween: 10,
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
</div>
