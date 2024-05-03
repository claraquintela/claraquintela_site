@extends('partials.base')

@section('title', 'Ajouter cours')

@section('content')

    <section class="mx-2">

        <h1>Add a class</h1>
        <form class="py-4 px-6" action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Class name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" type="text" placeholder="Enter class name" required
                    value="{{ old('name') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" rows="4" placeholder="Describe the class" required
                    value="{{ old('description') }}"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="price">
                    Price
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="price" name="price" type="number" step="0.01" placeholder="???" required
                    value="{{ old('price') }}">
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Category
                </label>

                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="category" name="category">
                    <option value="">Choose a category</option>
                    <option value="Knitting">Knitting</option>
                    <option value="Embroidery">Embroidery</option>

                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="image">
                    Image
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="image" name="image" type="file" accept="image/*" required>
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
