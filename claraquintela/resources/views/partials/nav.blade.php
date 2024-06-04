  <nav class="flex items-center justify-evenly p-3 lg:px-8 my-2 mb-2" aria-label="Global">
      <div class="flex lg:flex-1">
          <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">Clara Quintela</span>
              <img class="h-64 w-auto" src="{{ Vite::asset('resources/img/logo_cq.png') }}" alt="logo">
          </a>
      </div>

      <div class=" lg:flex lg:gap-x-20">
          <a href="/" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.home') }}</a>
          <a href="/developer" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.developer') }}</a>
          <a href="/artist" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.artist') }}</a>
          {{-- <a href="/blog" class="text-sm font-semibold leading-6 text-gray-900">Blog</a> --}}
          <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900">{{ __('nav.contact') }}</a>
      </div>
      @auth
          <div class="lg:flex lg:flex-1 lg:justify-end">
              <a href="{{ route('logout') }}" class="text-sm font-semibold leading-6 text-gray-900">Logout
                  <span aria-hidden="true">&rarr;</span>
              </a>
          </div>
      @endauth

      @guest
          <div class="lg:flex lg:flex-1 lg:justify-end">
              <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Login
                  <span aria-hidden="true">&rarr;</span>
              </a>
          </div>
      @endguest

  </nav>
