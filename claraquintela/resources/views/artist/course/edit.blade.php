@extends('partials.base')

@section('title', 'Edit class')

@section('content')

    <section class="mx-2 max-w-full flex flex-col justify-center px-64">

        <h1 class="text-black-700 font-bold mb-10 text-3xl">Edit class</h1>
        <form class="py-4 px-6" action="{{ route('courses.update', $course) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Class name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" type="text" placeholder="Enter class name"
                    value="{{ old('name', $course->name) }}">
                @error('name')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" rows="4" placeholder="Describe the class">{{ old('description', $course->description) }}</textarea>
                @error('description')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="price">
                    Price
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="price" name="price" type="number" step="0.01" placeholder="???"
                    value="{{ old('price', $course->price) }}">
                @error('price')
                    <p class="text-red-900 text-lg">Inform the price for this class</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="category"
                    value="{{ old('category', $course->category) }}">
                    Category
                </label>

                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="category" name="category">
                    <option value="">Choose a category</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Embroidery">Embroidery</option>
                </select>
                @error('category')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>

            @if ($course->img)
                <img class="" src="{{ $course->imageFullPath() }}" alt="{{ $course->name }}" />
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="img">
                    Image
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="img" name="img" type="file" accept="image/*">
                @error('img')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-center mb-4">
                <button
                    class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add Class
                </button>
            </div>

        </form>

    </section>

@endsection
