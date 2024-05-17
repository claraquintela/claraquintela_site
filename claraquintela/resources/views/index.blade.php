@extends('partials.base')

@section('title', 'Clara Quintela')

@section('content')

    <main>

        <section class="bg-[#ece2d7] mt-8">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto  mt-8 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 w-64">
                        Latest news in my blog <a href="#" class="font-semibold text-indigo-600">
                        <span class="absolute inset-0" aria-hidden="true"></span>Read more<span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white my-8">Stitches Bits</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">You
                        might be interested in knitting. Or perhaps you're looking for a skillful web developer. It doesn't
                        really matter. Anyway you find the right person: me!</p>

                    <a href="/developer"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        The Developer
                    </a>
                    <a href="/artist"
                        class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        The Artist
                    </a>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
                    <img src="{{ Vite::asset('resources/img/fp_hero_cut.png') }}"
                        alt="Image showing a laptop computer, yarn and scissors" class="rounded-lg">
                </div>
            </div>
        </section>
    </main>

@endsection
