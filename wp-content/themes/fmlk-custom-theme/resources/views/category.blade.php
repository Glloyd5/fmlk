@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 my-20">

  {{-- Category Title --}}
  <h1 class="text-3xl md:text-5xl font-extrabold text-center mb-8 text-red-600 uppercase tracking-wide mt-10">
    {{ single_cat_title('', false) }}S
  </h1>

  {{-- Optional Category Description --}}
  @if (category_description())
    <div class="max-w-3xl mx-auto text-center text-gray-500 mb-12">
      {!! category_description() !!}
    </div>
  @endif

  {{-- Category Posts --}}
  @if (have_posts())
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      @while (have_posts()) @php(the_post())
        <?php
          $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?: get_stylesheet_directory_uri() . '/resources/images/gangster_spices.png';
        ?>

        <div class="group border-zinc-700 rounded-2xl shadow-xl overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-lg">
          <a href="{{ get_permalink() }}">
            <img class="w-full h-48 object-cover" src="{{ esc_url($image_url) }}" alt="{{ esc_attr(get_the_title()) }}">
          </a>

          <div class="p-6">
            <a href="{{ get_permalink() }}">
              <h3 class="mb-3 text-xl font-semibold text-black group-hover:text-red-700 transition-colors duration-300">
                {{ get_the_title() }}
              </h3>
            </a>

            <p class="mb-4 text-gray-400 text-sm leading-relaxed">
              {!! wp_trim_words(get_the_excerpt(), 20, '...') !!}
            </p>

            <a href="{{ get_permalink() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:outline-none transition">
              Read more
              <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
            </a>
          </div>
        </div>
      @endwhile
    </div>

    {{-- Pagination --}}
    <div class="mt-12 flex justify-center">
      {!! get_the_posts_pagination([
          'mid_size'  => 2,
          'prev_text' => __('&laquo; Previous', 'sage'),
          'next_text' => __('Next &raquo;', 'sage'),
          'screen_reader_text' => '',
      ]) !!}
    </div>
  @else
    <p class="text-center text-gray-500">No posts found in this category.</p>
  @endif
</section>
@endsection
