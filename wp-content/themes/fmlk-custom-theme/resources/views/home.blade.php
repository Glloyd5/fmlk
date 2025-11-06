@extends('layouts.app')

@section('content')
    <section class="container mx-auto px-4 my-20">
        <?php
    $categories = get_categories([
        'orderby' => 'name',
        'order' => 'ASC',
    ]);

    foreach ($categories as $category):
        $args = [
            'posts_per_page' => 3,
            'cat' => $category->term_id,
        ];
        $posts = get_posts($args);

        if ($posts): ?>
        <div class="my-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-center mb-8 text-red-600 uppercase tracking-wide mt-10">
                <?= esc_html($category->name); ?>S
            </h2>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <?php        foreach ($posts as $post):
                setup_postdata($post);
                $image_url = get_the_post_thumbnail_url($post->ID, 'medium_large') ?:  get_stylesheet_directory_uri().'/resources/images/gangster_spices.png';
                      ?>
                <div
                    class="group  border-zinc-700 rounded-2xl shadow-xl overflow-hidden transition-transform transform hover:-translate-y-1 hover:shadow-lg">
                    <a href="<?= get_permalink($post->ID); ?>">
                        <img class="w-full h-48 object-cover group-hover:opacity-90 transition-opacity duration-300"
                            src="<?= esc_url($image_url); ?>" alt="<?= esc_attr(get_the_title($post->ID)); ?>" />
                    </a>

                    <div class="p-6">
                        <a href="<?= get_permalink($post->ID); ?>">
                            <h3
                                class="mb-3 text-xl font-semibold text-black group-hover:text-red-300 transition-colors duration-300">
                                <?= esc_html(get_the_title($post->ID)); ?>
                            </h3>
                        </a>
                        <p class="mb-4 text-gray-400 text-sm leading-relaxed">
                            <?= wp_trim_words(get_the_excerpt($post->ID), 20, '...'); ?>
                        </p>
                        <a href="<?= get_permalink($post->ID); ?>"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:ring-2 focus:ring-red-500 focus:outline-none transition">
                            Read more
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <?php        endforeach;
            wp_reset_postdata(); ?>
            </div>
        </div>
        <?php    endif;
    endforeach;
      ?>
    </section>
@endsection