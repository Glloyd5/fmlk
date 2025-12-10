<header class="banner pt-5 bg-primary text-secondary">
  <div class="container py-4">

    {{-- Top row: Logo and Mobile Menu --}}
    <div class="flex flex-wrap items-center justify-between">

      {{-- Logo --}}
      <div class="flex-1 min-w-[0]">
        <a class="text-xl font-heading inline-block" href="{{ home_url('/') }}">
          <img src="{{ get_stylesheet_directory_uri() }}/resources/images/FMLK.jpg" alt="Logo"
          class="w-32 md:w-40 lg:w-48 h-auto max-w-full object-contain rounded-4xl">
        </a>
        <p class="mt-4 text-3xl font-accent text-white">Never trust a skinny cook</p>
      </div>

      {{-- Desktop search (≥1360px) --}}
      <div class="hidden xl:flex flex-1 justify-end">
        <form role="search" method="get" class="w-full max-w-md" action="{{ esc_url(home_url('/')) }}">
          <label for="search" class="sr-only">Search</label>
          <input type="search" id="search"
                 class="w-full px-4 py-2 rounded bg-white text-black"
                 placeholder="Search..."
                 value="{{ get_search_query() }}"
                 name="s" />
        </form>
      </div>

      {{-- Mobile Menu Toggle (<1360px) --}}
      <div class="xl:hidden mt-2 flex-shrink-0">
        <button id="mobileMenuButton"
                class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-red-700
                       font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center"
                type="button">
          <svg id="hamburgerIcon" class="w-6 h-6 block" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M1 1h15M1 7h15M1 13h15" />
          </svg>
          <svg id="closeIcon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>

        {{-- Mobile Dropdown --}}
        <div id="mobileMenu" class="hidden absolute right-0 mt-2 bg-primary rounded shadow w-44 z-50">
          @if(has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'flex flex-col gap-2 py-2',
              'container' => false,
              'echo' => false,
              'walker' => new App\Nav\Menu_Walker()
            ]) !!}
          @endif
        </div>
      </div>

      {{-- Mobile search (<1360px) --}}
      <div class="w-full xl:hidden mt-4">
        <form role="search" method="get" class="w-full max-w-md mx-auto" action="{{ esc_url(home_url('/')) }}">
          <label for="search" class="sr-only">Search</label>
          <input type="search" id="search"
                 class="w-full px-4 py-2 rounded bg-white text-black"
                 placeholder="Search..."
                 value="{{ get_search_query() }}"
                 name="s" />
        </form>
      </div>

    </div>
  </div>

  {{-- Bottom row: Desktop Navigation (≥1360px) --}}
  @if(has_nav_menu('primary_navigation'))
    <nav class="bg-primary text-secondary hidden xl:flex justify-center">
      {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'menu_class' => 'flex gap-6 py-3',
        'container' => false,
        'echo' => false,
        'walker' => new App\Nav\Menu_Walker()
      ]) !!}
    </nav>
  @endif
</header>
