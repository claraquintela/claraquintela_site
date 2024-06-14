<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css'])


    {{-- To use Quill in this site --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    @vite(['resources/js/app.js', 'resources/js/quill.js'])


    @yield('js-file')
    <title>@yield('title')</title>
</head>

<body class="bg-white">
    @if (session('success'))
        <x-alert :type="'success'">
            {{ session('success') }}
        </x-alert>
    @endif
    @if (session('erreur'))
        <x-alert :type="'erreur'">
            {{ session('erreur') }}
        </x-alert>
    @endif

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>

</html>
