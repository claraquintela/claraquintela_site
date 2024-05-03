@extends('partials.base')

@section('title', 'The Artist')

@section('content')



    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Among needles and
                    threads</h2>
                <p class="mb-4">As a passionate textile artist, I weave creativity into every thread. With a background in
                    knitting, embroidery, weaving, and spinning, I transform fibers into intricate masterpieces. </p>

                <p>My journey includes earning a Fine Arts degree in Fibre and Material Practices from Concordia University
                    in Montreal, Canada. As an experienced educator, with more than 10 years of experience in class, I share
                    my love for these crafts, nurturing the next generation of textile enthusiasts.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ Vite::asset('resources/img/20221004_Claraautomne2022.jpg') }}"
                    alt="Clara Quintela">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ Vite::asset('resources/img/tricotaportuguesa.jpg') }}"
                    alt="Tricotando em Washington D.C">
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
                <div class="items-center bg-[#ece2d7] rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[36rem] rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ Vite::asset('resources/img/art.jpg') }}" alt="Marielle Franco's portrait">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Textile art</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Embroidery is my media to express
                            myself about subjects that matter to me</p>
                    </div>
                </div>
                <div class="items-center bg-[#ece2d7] rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[20rem] rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ Vite::asset('resources/img/embroidery.jpg') }}" alt="Kit Luna">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Embroidery kits</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">If you want start embroidering
                            right now</p>
                    </div>
                </div>

                <div class="items-center bg-[#ece2d7] rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[18rem] rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ Vite::asset('resources/img/knitting.jpg') }}" alt="Raindrops and Roses shawl">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Knitting patterns</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Check my designs</p>
                    </div>
                </div>

                <div class="items-center bg-[#ece2d7] rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-[33rem]  rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ Vite::asset('resources/img/class.jpg') }}" alt="Sashiko embroidery class">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Classes</a>
                        </h3>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Are you planning to learn some
                            textile skills? I might have a class for you</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
