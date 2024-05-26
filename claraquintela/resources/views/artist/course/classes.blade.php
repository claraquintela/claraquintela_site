@extends('partials.base')

@section('title', 'The Artist')

@section('content')
    <section class="bg-white px-20 flex flex-col justify-center items-center">
        @if (session('success'))
            <x-alert :type="'success'">
                {{ session('success') }}
            </x-alert>
        @endif

        <h1 class="text-black-700 font-bold mb-10 text-3xl m-20">Classes</h1>

        <div>
            <a href="{{ route('courses.index', ['tri' => 'price', 'direction' => 'asc']) }}"
                class="m-2 border border-1 p-3">{{ __('courses.classes.btn-price') }}</a>
            <a href="{{ route('courses.index', ['tri' => 'name', 'direction' => 'asc']) }}"
                class="m-2 border border-1 p-3">{{__("courses.classes.btn-name")}}</a>
            <a href="{{ route('courses.index', ['tri' => 'price', 'direction' => 'asc', 'prix-max' => 0.5]) }}"
                class="m-2 border border-1 p-3">{{__("courses.classes.btn-special")}}</a>
        </div>

        <div
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">


            @foreach ($courses as $course)
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <a href="{{ route('courses.show', ['course' => $course->id]) }}">
                        <img src="{{ $course->imageFullPath() }}" alt="{{ $course->name }}"
                            class="h-80 w-72 object-cover rounded-t-xl" />
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-400 mr-3 uppercase text-xs">{{ $course->category }}</span>
                            <p class="text-lg font-bold text-black truncate block capitalize">
                                <a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->name }}</a>
                            </p>

                            <div class="flex items-center">
                                <p class="text-lg font-semibold text-black cursor-auto my-3">{{ $course->price }}</p>
                                {{-- <del>
                            <p class="text-sm text-gray-600 cursor-auto ml-2">{{ $course->price }}</p>
                                </del> --}}
                                <div class="ml-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <form action="{{ route('courses.destroy', $course) }}" method="POST">
                        @csrf
                        @method('DELETE ')
                        <button class="rounded-sm cursor-pointer p-3">Delete</button>
                    </form>
                    <a href="{{ route('courses.edit', $course) }}" class="rounded-sm cursor-pointer p-3">
                        Update
                    </a>
                </div>
            @endforeach

            {{ $courses->links() }}
            <div>

            </div>
        </div>
    </section>
@endsection
