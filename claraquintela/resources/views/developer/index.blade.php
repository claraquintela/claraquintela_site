<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

@extends('partials.base')

@section('title', 'Developer')

@section('content')




    <div class="bg-white flex">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('developer.index.aboutme') }}
                </h2>
                <p class="mt-4 text-gray-500">{{ __('developer.index.presentation-part1') }}</p>

                <p class="mt-4 text-gray-500">{{ __('developer.index.presentation-part2') }}</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.education-title') }}</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.education-li1') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.education-li2') }}
                        </dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.education-li3') }}
                        </dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.education-li4') }}
                        </dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.technicalskills-title') }}</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li1') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li2') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li3') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li4') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li5') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.technicalskills-li6') }}</dd>
                    </div>


                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.journalism-title') }}</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.journalism-li1') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.journalism-li2') }}</dd>

                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.fullstack-title') }}</dt>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li1') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li2') }}</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.competencies-title') }}</dt>
                        <p>{{ __('developer.index.competencies-li1') }}</p>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li2') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li3') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li4') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li5') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.competencies-li6') }}</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">{{ __('developer.index.learning-title') }}</dt>
                        <p>{{ __('developer.index.learning-li1') }}</p>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.learning-li2') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.learning-li3') }}</dd>
                        <dd class="mt-2 text-sm text-gray-500">{{ __('developer.index.learning-li4') }}</dd>

                    </div>
                </dl>
            </div>

            <div class="px-4 my-[-20px] mx-4">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl my-4">
                    {{ __('developer.index.projects-title') }}</h2>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">

                    <div class=" justify-center align-middle">
                        <a href="https://github.com/claraquintela/wow-organizational-chart" target="blank">
                            <img src="{{ Vite::asset('resources/img/wow.jpeg') }}" alt="WoW organization chart"
                                class="rounded-lg bg-gray-100 w-[150px]">
                        </a>
                        <p>WoW organization chart</p>
                    </div>
                    <div class=" justify-center align-middle">
                        <a href="https://github.com/claraquintela/4elements" target="blank">
                            <img src="{{ Vite::asset('resources/img/4elements.png') }}" alt="4 Elements"
                                class="rounded-lg bg-gray-100 w-[150px]">
                        </a>
                        <p>4 Elements: a collective project</p>
                    </div>


                </div>

            </div>

        </div>
    </div>

@endsection
