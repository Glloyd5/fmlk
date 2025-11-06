@if (post_password_required())
  <p class="text-center text-black">This post is password protected. Enter the password to view comments.</p>
  @return
@endif

<div id="comments" class="max-w-4xl mx-auto mt-12">
  {{-- Comments Title --}}
  @if (have_comments())
    <h2 class="text-2xl font-bold mb-6 text-black">
      {{ get_comments_number() }} {{ _n('Comment', 'Comments', get_comments_number()) }}
    </h2>

    {{-- Comment List --}}
    <ol class="space-y-6">
      @foreach ($comments as $comment)
        <li id="comment-{{ $comment->comment_ID }}" class="border border-red-700 rounded-lg p-5 ">
          <div class="flex items-start gap-4">
            {{-- Avatar --}}
            <div class="shrink-0">
              {!! get_avatar($comment, 48, '', '', ['class' => 'rounded-full']) !!}
            </div>

            {{-- Comment Body --}}
            <div class="flex-1">
              <div class="flex items-center justify-between mb-2">
                <h4 class="font-semibold text-black">{{ get_comment_author($comment) }}</h4>
                <a href="{{ esc_url(get_comment_link($comment->comment_ID)) }}" class="text-sm text-gray-400">
                  {{ get_comment_date('', $comment) }}
                </a>
              </div>

              <div class="text-gray-300 text-sm leading-relaxed mb-3">
                {!! get_comment_text($comment) !!}
              </div>

              {{-- Reply Link --}}
              <div class="text-sm">
                {!! comment_reply_link([
                    'depth'     => $depth ?? 1,
                    'max_depth' => get_option('thread_comments_depth'),
                    'reply_text' => 'Reply',
                    'class'     => 'text-red-500 hover:underline',
                ], $comment->comment_ID) !!}
              </div>
            </div>
          </div>
        </li>
      @endforeach
    </ol>

    {{-- Pagination --}}
    @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav class="flex justify-between mt-8 text-sm">
        <div class="text-gray-400">{!! previous_comments_link('&larr; Older Comments') !!}</div>
        <div class="text-gray-400">{!! next_comments_link('Newer Comments &rarr;') !!}</div>
      </nav>
    @endif
  @endif

  {{-- Comment Form --}}
  @if (comments_open())
    <div id="respond" class="my-12 p-6 rounded-lg shadow-sm">
      <h3 class="text-xl font-semibold mb-4 text-red-600">Leave a Reply</h3>
      {!! comment_form([
          'class_form'         => 'space-y-4',
          'title_reply'        => '',
          'comment_field'      => '<textarea id="comment" name="comment" rows="4" class="w-full p-3 rounded-md  text-black border border-gray-700 focus:border-red-500 focus:ring-1 focus:ring-red-500" placeholder="Your comment..." required></textarea>',
          'fields'             => [
              'author' => '<input id="author" name="author" type="text" class="w-full p-3 rounded-md  text-black border border-gray-700 focus:border-red-500 focus:ring-1 focus:ring-red-500" placeholder="Name *" required>',
              'email'  => '<input id="email" name="email" type="email" class="w-full p-3 rounded-md  text-black border border-gray-700 focus:border-red-500 focus:ring-1 focus:ring-red-500" placeholder="Email *" required>',
              'url'    => '',
          ],
          'submit_button'      => '<button type="submit" class="px-5 py-2 bg-red-600 text-black rounded-md hover:bg-red-700 transition">Post Comment</button>',
      ]) !!}
    </div>
  @else
    <p class="text-gray-400 mt-6">Comments are closed.</p>
  @endif
</div>

