@extends('layouts.app')

@section('content')
    <section class="pt-5 my-20">
        <h1 class="text-5xl font-bold text-primary">Find us</h1>
    </section>

    <section>
        <h2 id="events" class="text-5xl">Events</h2>
        {!! the_content() !!}
    </section>

    <section class="my-20 flex justify-center flex-col gap-5">
        <h2 id="stores" class="text-5xl">Friends of the Fat Man</h2>
        <section class="container mx-auto px-4 py-20">
  <h2 class="text-4xl md:text-5xl font-extrabold text-center text-red-600 uppercase tracking-wide mb-12">
    Find Our Products
  </h2>

  <p class="text-center text-gray-600 max-w-2xl mx-auto mb-16">
    You can find <span class="font-semibold text-black">Fat Man Little Kitchen</span> products at these partner locations across Alberta.
  </p>

  <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
    <!-- I.A.M Collective -->
    <div class="group border border-gray-200 rounded-2xl shadow-md hover:shadow-lg transition-all p-6">
      <h3 class="text-2xl font-bold text-red-600 mb-2 group-hover:text-red-700">I.A.M Collective – Edmonton</h3>
      <p class="text-gray-700 mb-3 leading-relaxed">
        A community-driven Indigenous arts market featuring local First Nations, Métis, and Inuit creators.
      </p>
      <ul class="text-gray-600 text-sm mb-4 space-y-1">
        <li><span class="font-semibold text-black">Old Strathcona Farmers Market</span><br>10310 83 Ave NW<br>Saturday 8am – 3pm</li>
        <li><span class="font-semibold text-black">Fort Edmonton Park</span><br>7000 143 ST NW<br>
          May–Oct: Wed–Sun 10am–5pm<br>
          Nov–Apr: Sat–Sun 12pm–4pm
        </li>
      </ul>
      <a href="https://iamcollective.ca" target="_blank"
        class="inline-flex items-center text-sm font-medium text-white bg-red-600 rounded-md px-4 py-2 hover:bg-red-700 transition">
        Visit Website
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 14 10">
          <path stroke-linecap="round" stroke-linejoin="round" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
      </a>
    </div>

    <!-- Rosario’s Pub -->
    <div class="group border border-gray-200 rounded-2xl shadow-md hover:shadow-lg transition-all p-6">
      <h3 class="text-2xl font-bold text-red-600 mb-2 group-hover:text-red-700">Rosario’s Pub – Edmonton</h3>
      <p class="text-gray-700 mb-3 leading-relaxed">
        A long-standing neighbourhood pub where you can enjoy great food and discover our products.
      </p>
      <ul class="text-gray-600 text-sm mb-4 space-y-1">
        <li>11715 108 Ave NW, Edmonton, AB</li>
        <li>Mon–Sun: 11am – 2am</li>
      </ul>
    </div>

    <!-- Petro-Canada -->
    <div class="group border border-gray-200 rounded-2xl shadow-md hover:shadow-lg transition-all p-6">
      <h3 class="text-2xl font-bold text-red-600 mb-2 group-hover:text-red-700">Petro-Canada – Cold Lake</h3>
      <p class="text-gray-700 mb-3 leading-relaxed">
        Select <span class="font-semibold text-black">FMLK</span> items are available at this Petro-Canada location serving the Cold Lake area.
      </p>
      <ul class="text-gray-600 text-sm mb-4 space-y-1">
        <li>Hwy 28 & Range Rd 423A<br>Cold Lake, AB</li>
      </ul>
    </div>
  </div>
</section>

        <div class="flex justify-center">
            <iframe class="rounded-xl" src="https://www.google.com/maps/d/u/1/embed?mid=12k58C1TE2ZRI-2mQ1H7rOvAYituJJcY&ehbc=2E312F&noprof=1"
                width="1000" height="600">
            </iframe>
        </div>
    </section>
@endsection