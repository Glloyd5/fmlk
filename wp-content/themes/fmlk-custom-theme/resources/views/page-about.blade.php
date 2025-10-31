@extends('layouts.app')

@section('content')

    <h1 class="text-5xl font-bold my-20">About Us</h1>
    <section class="pt-5 my-20 flex flex-col md:flex-row items-center gap-10">
        <div class="flex flex-col gap-5 lg:w-1/2">
            <h2 class="text-5xl text-primary text-center lg:text-left">Our history</h2>
            <p>
                Fat Man Little Kitchen is the creation of Chef Marcel, an Indigenous chef passionate about
                blending cultural tradition with modern culinary innovation.
            </p>
            <p>
                What started as a food truck has grown into a dynamic business offering both high-quality catering services
                and a signature line of handcrafted hot sauces.
            </p>
            <p>
                Rooted in creativity, resilience, and community, FMLK celebrates the flavours of Indigenous cuisine while
                supporting local ingredients, sustainable practices, and meaningful food connections.
            </p>
        </div>
        <img src="{{ get_stylesheet_directory_uri() }}/resources/images/CCAB.png" class="w-full lg:w-1/2 h-auto"
            alt="CAB logo">
    </section>

    <section class="pt-5 my-20 flex flex-col-reverse md:flex-row items-center gap-10">
        <img src="{{ get_stylesheet_directory_uri() }}/resources/images/Marcel.png"
            class="w-full lg:w-1/2 h-auto order-1 lg:order-1 rounded-2xl" alt="CAB logo">
        <div class="flex flex-col gap-5 lg:w-1/2 order-2 lg:order-2">
            <h2 class="text-5xl text-primary text-center lg:text-left">Meet Marcel</h2>
            <p>
                Chef Marcel Martell is the creative force behind Fat Man Little Kitchen, blending his Indigenous heritage
                with a passion for bold, modern flavours.
            </p>
            <p>
                In 2022, he launched FMLK to share dishes and hot sauces that celebrate culture, community, and storytelling
                through food.
            </p>
        </div>
    </section>


    <section class="my-20 text-center grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Request Catering
        </a>
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Contact Us
        </a>
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Shop
        </a>
    </section>

    <section class="my-20">
        <h2 class="text-5xl text-primary text-center lg:text-left mb-10">Frequently asked questions</h2>
        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-red-600 text-white" data-inactive-classes="text-black bg-white">
            <h3 id="accordion-color-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-b-0 border-slate-900 rounded-t-xl focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                    aria-controls="accordion-color-body-1">
                    <span class="text-xl md:2xl">Where can I find your hot sauces?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 border border-b-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">You can buy our sauces online in our <a href="shop"
                            class="text-red-500 hover:underline">shop</a></p>
                    <p>But if you can't wait for them to ship check out these <a href="find-us#stores"
                            class="text-red-500 hover:underline">stores</a> where you can pick them up in person.
                    </p>
                    <p>Or come visit us at the next <a href="find-us#events" class="text-red-500 hover:underline">event</a> we are attending.
                    </p>
                </div>
            </div>

            <h3 id="accordion-color-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-b-0 border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                    aria-controls="accordion-color-body-2">
                    <span class="text-xl md:2xl">How hot are your hot sauces?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 border border-b-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">Our hot sauces range quite a bit in heat level.</p>
                    <p>Our <a href="https://flowbite.com/figma/" class="text-red-500 hover:underline">Not Hot Hot Sauce</a> is mild 
                        and can be enjoyed worry free by anyone.</p>
                    <p>
                        while our <a href="https://flowbite.com/figma/" class="text-red-500 hover:underline">Very Hot Hot Sauce</a>
                        is extremely hot and should be used with caution.
                    </p>
                </div>
            </div>

            <h3 id="accordion-color-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                    aria-controls="accordion-color-body-3">
                    <span class="text-xl md:2xl">Are your hot sauces gluten-free / vegan ?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 border border-t-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">All of our sauces are gluten free and vegan!</p>
                    <p class="mb-2">Our sauces are also low in soduim as we use a <a href="#">potassium salt</a> substitue.</p>
                </div>
            </div>

            <h3 id="accordion-color-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-4" aria-expanded="false"
                    aria-controls="accordion-color-body-4">
                    <span class="text-xl md:2xl">Do you offer gift sets or seasonal products?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                <div class="p-5 border border-t-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">Yes, we do offer seasonal gift baskets of our product range.</p>
                    <p class="mb-2">If you're looking for a custom gift basket please
                        <a href="https://flowbite.com/pro/" class="text-red-500 hover:underline">contact us</a>
                        and we can set something up!
                    </p>
                    <p class="mb-2">We also offer our sauces white label, so you can customize them with your own logo for an event or gift.</p>
                </div>
            </div>

            <h3 id="accordion-color-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-5" aria-expanded="false"
                    aria-controls="accordion-color-body-5">
                    <span class="text-xl md:2xl">How long do the sauces last? Do they need to be refrigerated?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                <div class="p-5 border border-t-0 border-slate-900 bg-black text-white">
                    <ul class="ps-5 list-disc">
                        <li>Sealed our products will last upwards of a year.</li>
                        <li>Once a bottle is opened it should then be refrigerated.</ul>
                </div>
            </div>

            <h3 id="accordion-color-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-6" aria-expanded="false"
                    aria-controls="accordion-color-body-6">
                    <span class="text-xl md:2xl">What types of events do you cater?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                <div class="p-5 border border-t-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">We cater:</p>
                    <ul class="ps-5 list-disc">
                        <li>Weddings</li>
                        <li>Corporate Events</li>
                        <li>Festivals</li>
                        <li>Private parties</li>
                    </ul>
                </div>
            </div>

            <h3 id="accordion-color-heading-7">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-black hover:text-white border border-slate-900 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-7" aria-expanded="false"
                    aria-controls="accordion-color-body-7">
                    <span class="text-xl md:2xl">Do you offer full service catering or drop off only?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                <div class="p-5 border border-t-0 border-slate-900 bg-black text-white">
                    <p class="mb-2">We typically do drop off only, but we do offer full service upon request.</p>
                </div>
            </div>
        </div>
    </section>



@endsection