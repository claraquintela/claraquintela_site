@extends('partials.base')

@section('title', 'The Artist')

@section('content')

    <section>

        @foreach ($courses as $course)
            <div>
                <p>

                    <a href="{{ route('classes.show', ['class' => $course->id]) }}">{{ $course->name }}</a>

                </p>
            </div>
        @endforeach
    </section>

@endsection

@extends('partials.footer')
