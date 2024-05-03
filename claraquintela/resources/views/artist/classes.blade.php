@extends('partials.base')

@section('title', 'The Artist')

@section('content')

    <div>

        @forelse ($courses as $course)
            <div class="m-6">
                <p>

                    <a href="{{ route('courses.show', ['course' => $course->id]) }}">{{ $course->name }}</a>

                </p>
            </div>

        @empty
            <x-alert :type="'infos'">
                Hello world!
            </x-alert>
        @endforelse

        <div class="m-8 ">
            <a href="{{ route('courses.index', ['tri' => 'price', 'direction' => 'desc']) }}"
                class="m-2 border border-1 p-3">Trier par
                prix</a>
            <a href="{{ route('courses.index', ['tri' => 'name', 'direction' => 'asc']) }}"
                class="m-2 border border-1 p-3">Trier par nom</a>
            <a href="{{ route('courses.index', ['tri' => 'price', 'direction' => 'asc', 'prix-max' => 0.5]) }}"
                class="m-2 border border-1 p-3">Spéciaux de
                la
                fin
                de semaine</a>
        </div>

    </div>
@endsection
