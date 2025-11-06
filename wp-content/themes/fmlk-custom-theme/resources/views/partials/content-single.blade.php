<article @php(post_class('h-entry'))>

  <article @php(post_class('max-w-4xl mx-auto p-6'))>
    <header class="mb-8">
      <h1 class="text-4xl font-bold mb-2 text-primary">{!! get_the_title() !!}</h1>
      <p class="text-gray-500 text-sm">
        Posted on {{ get_the_date() }} by {{ get_the_author() }}
      </p>
      @if (has_post_thumbnail())
        <div class="mt-6">
          {!! the_post_thumbnail('large', ['class' => 'rounded-lg shadow-md w-full h-auto']) !!}
        </div>
      @endif
    </header>

    <div class="prose lg:prose-lg max-w-none">
      {!! the_content() !!}
    </div>

    <footer class="mt-10 border-t pt-6 text-sm text-gray-500">
      <p>Filed under: {!! get_the_category_list(', ') !!}</p>
      <p>{!! get_the_tag_list('Tags: ', ', ') !!}</p>
    </footer>
  </article>

  <div class="max-w-4xl mx-auto mt-12">
    @php(comments_template())
  </div>

</article>
