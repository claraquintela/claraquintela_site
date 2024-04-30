@extends('partials.base')

@section('title', 'The Artist')

@section('content')

    <section>

        <div>


            <p>{{ $course->name }}</p>
            <p>{{ $course->description }}</p>
            <p>{{ $course->price }}</p>

        </div>

    </section>

@endsection

@extends('partials.footer')
