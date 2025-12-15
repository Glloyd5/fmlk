@extends('layouts.app')

@section('content')
<section class="container mx-auto px-4 py-20">
    <h1 class="text-4xl font-bold text-red-600 mb-8">Search Results for: "{{ get_search_query() }}"</h1>

    @if(have_posts())
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @while(have_posts()) @php(the_post())
                <?php
                    $image_url = get_the_post_thumbnail_url() ?: get_stylesheet_directory_uri().'/resources/images/placeholder.png';
                ?>

                <div class="group border border-gray-200 rounded-2xl shadow-md hover:shadow-lg overflow-hidden transition-transform transform hover:-translate-y-1">
                    <a href="{{ get_permalink() }}">
                        <img class="w-full h-48 object-cover" src="{{ $image_url }}" alt="{{ get_the_title() }}">
                    </a>
                    <div class="p-6">
                        <a href="{{ get_permalink() }}">
                            <h3 class="mb-3 text-xl font-semibold text-black group-hover:text-red-600 transition-colors duration-300">
                                {{ get_the_title() }}
                            </h3>
                        </a>
                        <p class="text-gray-600 mb-4 text-sm">{{ wp_trim_words(get_the_excerpt(), 20, '...') }}</p>
                        <a href="{{ get_permalink() }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition">
                            Read more
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 14 10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endwhile
        </div>

        <div class="mt-10">
            {!! paginate_links() !!}
        </div>
    @else
        <p class="text-gray-600">No results found for "{{ get_search_query() }}". Try a different keyword.</p>
    @endif
</section>
@endsection
