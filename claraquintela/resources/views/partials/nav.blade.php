  <nav class="flex items-center justify-evenly p-3 lg:px-8 my-2 mb-2" aria-label="Global">
      <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Clara Quintela</span>
              <img class="h-64 w-auto" src="{{ Vite::asset('resources/img/logo_cq.png') }}" alt="logo">
          </a>
      </div>
      <div class="flex lg:hidden">
          <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
          </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-20">
          <a href="/" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.home') }}</a>
          <a href="/developer" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.developer') }}</a>
          <a href="/artist" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.artist') }}</a>
          {{-- <a href="/blog" class="text-sm font-semibold leading-6 text-gray-900">Blog</a> --}}
          <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.contact') }}</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
              {{-- <span aria-hidden="true">&rarr;</span> --}}
          </a>
      </div>
  </nav>
