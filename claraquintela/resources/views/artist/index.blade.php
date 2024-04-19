@extends('partials.base')

@section('title', 'The Artist')

@section('content')


    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Among needles and
                    threads</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough
                    to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough
                    to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple
                    and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="{{ Vite::asset('resources\img\20221004_Claraautomne2022 Final-014.jpg') }}" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ Vite::asset('resources\img\tricotaportuguesa.jpg') }}"
                    alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">You might be
                    interested in...</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Knitting, embroidering, spinning
                    yarn,
                    weaving... I tell stories with needles and thread</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Textile art</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Check my designs</p>
                    </div>
                </div>
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Embroidery kits</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">If you want start embroidering
                            right now</p>
                    </div>
                </div>

                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Knitting patterns</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Check my designs</p>
                    </div>
                </div>

                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            alt="Bonnie Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Classes</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Check my designs</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
