@extends('layouts.app')

@section('content')
    <section class="pt-5 my-20">
        <h1 class="text-5xl font-bold text-primary">Award winning hot sauces and catering</h1>
    </section>

    <section class="relative w-full my-5">
        <img src="{{ get_stylesheet_directory_uri() }}/resources/images/ProductLineup.webp"
            alt="Fatmanlittlekitchen catering brisket dish" class="rounded-lg shadow-lg w-full h-150 object-cover">
            <a href="{{ get_permalink(get_page_by_path('shop')) }}"
            class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700">Our products</a>
        <a href="{{ get_permalink(get_page_by_path('catering')) }}"
            class="mt-6 inline-block bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700">Catering</a>
    </section>

    <section class="my-20 flex flex-col gap-5">
        <h2 class="text-2xl">What we do</h3>
            <p>
                At Fat Man Little Kitchen, we provide food services, and the thing which started it all; high end
                sauces and spice blends that are well above industry standard. We also have a business model
                focused on training, development, ownership potential and the utilization of talented, educated
                and motivated Indigenous people.
            </p>
            <p>
                We have perfected a 100-year-old recipe from Jamaica and enhanced it with a modern and
                healthy twist. All our spices use Potassium Chloride instead of table salt to help mitigate the
                high consumption of Sodium Chloride in modern diets. This is especially true for Indigenous
                populations where high potassium traditional diets have been replaced by highly processed and
                ready to eat foods.
            </p>
            <p>
                We are an Indigenous owned company who want to make the world a little bit better of a place. The
                corporate culture of support, guidance and mentorship for anyone who works for us, will develop new
                business opportunities, meaningful employment, and training in Indigenous communities, all while
                taking people to the next level of spicy and exciting food.
            </p>
    </section>

    <section class="relative w-full pb-[56.25%] my-5">
        <iframe class="absolute top-0 left-0 w-full h-full"
            src="https://www.youtube-nocookie.com/embed/OGS0Qz9FmjA?si=t7PA7bGUNDR4Y38B&amp;start=218"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </section>

    <section id="default-carousel" class="relative w-full py-10" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            <!-- Slide 1 -->
            <div class="hidden duration-700" data-carousel-item>
                <img src="{{ get_stylesheet_directory_uri() }}/resources/images/CAB_logo.jpg"
                    class="w-full h-full object-contain absolute inset-0" alt="CAB logo">
            </div>

            <!-- Slide 2 -->
            <div class="hidden duration-700" data-carousel-item>
                <img src="{{ get_stylesheet_directory_uri() }}/resources/images/canada-flag.webp"
                    class="w-full h-full object-contain absolute inset-0" alt="Canada flag">
            </div>

            <!-- Slide 3 -->
            <div class="hidden duration-700" data-carousel-item>
                <img src="{{ get_stylesheet_directory_uri() }}/resources/images/capsaicinoids.png"
                    class="w-full h-full object-contain absolute inset-0" alt="Capsaicin">
            </div>
        </div>

        <!-- Indicators (3 total) -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>

        <!-- Prev button -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 
                    rounded-full group-hover:bg-black/30
                    group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-gray rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>

        <!-- Next button -->
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 
                    rounded-full bg-white/30 group-hover:bg-black/30
                    group-focus:ring-4 group-focus:ring-white">
                <svg class="w-4 h-4 text-gray rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </section>

    <section class="my-20 flex flex-col gap-5">
        <h3 class="text-2xl">Want to learn more?</h3>
        <p>Check out our <a class="text-red-700" href="about">about</a> us page or take a look at our products in our <a
                class="text-red-700" href="shop">shop</a>.</p>

    </section>
@endsection