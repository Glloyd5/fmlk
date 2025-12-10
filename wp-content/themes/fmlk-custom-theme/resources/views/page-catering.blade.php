@extends('layouts.app')

@section('content')
<section class="container mx-auto px-6 py-20">
  <!-- Hero -->
  <div class="max-w-3xl mb-16">
    <h1 class="text-3xl md:text-5xl font-extrabold text-black mb-6">
      Catering with Heart & Heritage
    </h1>
    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
      Experience Western-style comfort food like Grandma used to make — 
      but with a bold Indigenous twist. We bring warmth, flavor, and 
      cultural storytelling to every plate we serve.
    </p>
  </div>

  <!-- Image + Description Section -->
  <div class="grid md:grid-cols-2 gap-10 items-center mb-20">
    <img 
      src="{{ get_stylesheet_directory_uri() }}/resources/images/fmlk-brisket.webp" 
      alt="Fatmanlittlekitchen catering brisket dish" 
      class="rounded-lg shadow-lg w-full h-72 object-cover"
    >

    <div>
      <h2 class="text-3xl font-bold text-red-600 mb-4">Crafted with Tradition</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Our catering menu celebrates local ingredients and time-honored 
        cooking traditions. From slow-braised meats to freshly baked bannock 
        and smoked salmon spreads, we offer soulful dishes that satisfy 
        and inspire conversation.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Whether you're hosting a corporate event, private party, or 
        wedding, we bring an authentic touch of home-style hospitality 
        and flavor to every occasion.
      </p>
    </div>
  </div>

  <!-- Menu Highlight Section -->
  <div class="mb-20">
    <h2 class="text-3xl font-bold text-black mb-10">Why choose us?</h2>
    <div class="grid text-center sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
        <h3 class="text-xl font-semibold text-red-600 mb-2">Custom Menu</h3>
        <p class="text-gray-700 text-sm">We work with you to craft a custom menu of delicious food you want to eat.</p>
      </div>
      <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
        <h3 class="text-xl font-semibold text-red-600 mb-2">Fresh Local Ingredients</h3>
        <p class="text-gray-700 text-sm">Once we have decided on a menu all the ingredients will be sourced locally ensuring the highest quality and supporting our local community.</p>
      </div>
      <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
        <h3 class="text-xl font-semibold text-red-600 mb-2">Authentic Indeigenous Flavours</h3>
        <p class="text-gray-700 text-sm">Celebrate heritage and culture through time-honored recipes and unique flavor combinations that tell a story with every bite.</p>
      </div>
      <div class="border border-gray-200 rounded-lg p-6 shadow-sm hover:shadow-md transition">
        <h3 class="text-xl font-semibold text-red-600 mb-2">Proffessional Service</h3>
        <p class="text-gray-700 text-sm">We take pride in our craft and you can taste it, one delicious mouthful at a time.</p>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="text-center bg-red-600 text-white rounded-xl py-12 px-8">
    <h2 class="text-3xl font-bold mb-4">Ready to Feed Your Guests?</h2>
    <p class="mb-6 text-lg">We'd love to help craft a custom menu for your event.</p>
    <a href="/contact"
       class="inline-block bg-white text-red-600 font-semibold px-6 py-3 rounded-md hover:bg-gray-100 transition">
      Contact Us
    </a>
  </div>
</section>
@endsection
