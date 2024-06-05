  <nav class="flex items-center justify-evenly p-3 lg:px-8 my-2 mb-2" aria-label="Global">
      <div class="flex lg:flex-1">
          <a href="/" class="-m-1.5 p-1.5">
              <span class="sr-only">Clara Quintela</span>
              <img class="h-64 w-auto" src="{{ Vite::asset('resources/img/logo_cq.png') }}" alt="logo">
          </a>
      </div>

      <div class=" lg:flex lg:gap-x-20">

          <svg xmlns="/" viewBox="0 0 576 512" class="w-7">
              <a href="/">
                  <path
                      d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
              </a>
          </svg>


          <a href="/developer" class="text-lg font-semibold leading-6 text-gray-900">{{ __('nav.developer') }}</a>
          <a href="/artist" class="text-lg font-semibold leading-6 text-gray-900">{{ __('nav.artist') }}</a>
          {{-- <a href="/blog" class="text-lg font-semibold leading-6 text-gray-900">Blog</a> --}}
          <a href="/contact" class="text-lg font-semibold leading-6 text-gray-900">{{ __('nav.contact') }}</a>
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
