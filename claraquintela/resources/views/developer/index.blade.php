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

@section('title', 'Clara Quintela')

@section('content')




    <div class="bg-white">
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">About me</h2>
                <p class="mt-4 text-gray-500">I am a tech enthusiast with a diverse background that spans from journalism to
                    web development. My journey has led me to explore different domains and acquire valuable skills along
                    the way.</p>

                <p class="mt-4 text-gray-500">I’m excited to continue my journey as a developer, exploring new technologies
                    and crafting innovative solutions. If you’re seeking someone passionate about code and with an
                    analytical mindset, I’m ready to collaborate on challenging projects.</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Education</dt>
                        <dd class="mt-2 text-sm text-gray-500">Diploma in Web Design and Development (AEC) from Maisonneuve
                            College (2023-2024)</dd>
                        <dd class="mt-2 text-sm text-gray-500">Diploma in Full Stack Development from Concordia University
                            (2019)
                        </dd>
                        <dd class="mt-2 text-sm text-gray-500">Bachelor in Fine Arts - Textile Art from Concordia University
                            (2014-2018)
                        </dd>
                        <dd class="mt-2 text-sm text-gray-500">Bachelor in Social Communication - Journalism from
                            Universidade Federal do Ceará - Brasil ( 1995-1999)
                        </dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Technical Skills</dt>
                        <dd class="mt-2 text-sm text-gray-500">JavaScript: Proficient in frameworks like React and Vue.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Node.js: Experience building server-side applications.</dd>
                        <dd class="mt-2 text-sm text-gray-500">PHP (Laravel): Developing robust web applications.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Bootstrap and Tailwind: Creating responsive and elegant
                            interfaces.</dd>
                        <dd class="mt-2 text-sm text-gray-500">MySQL Database: Efficient data management.</dd>
                        <dd class="mt-2 text-sm text-gray-500">HTML, CSS</dd>
                    </div>


                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Journalism and Project Management</dt>
                        <dd class="mt-2 text-sm text-gray-500">Worked as a journalist, mastering the art of storytelling
                            on TV, radio, newspapers and especially the Internet</dd>
                        <dd class="mt-2 text-sm text-gray-500">Served as a project manager and information architect,
                            leading teams and ensuring successful project delivery.</dd>

                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Full Stack Development </dt>
                        <dd class="mt-2 text-sm text-gray-500">As a full stack developer, I create end-to-end web solutions,
                            from front-end to back-end.</dd>
                        <dd class="mt-2 text-sm text-gray-500">My passion for problem-solving and creating exceptional user
                            experiences drives me to continuously learn and improve my skills.</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Additional Competencies</dt>
                        <p>Beyond technical skills, my market experience has equipped me with:</p>
                        <dd class="mt-2 text-sm text-gray-500">Team Leadership: I’ve led multidisciplinary teams, fostering
                            collaboration and achieving shared goals.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Effective Communication: My journalism background taught me
                            to convey information clearly and concisely, without forgeting the human being needs.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Organization and Punctuality: I manage projects efficiently,
                            meeting deadlines while maintaining quality.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Decision-Making: I make informed decisions, considering all
                            relevant aspects.</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Continuous Learning and Adaptability</dt>
                        <p>As a professional who transitioned from journalism to full stack development, I understand the
                            importance of staying current in the ever-evolving tech landscape. Here’s how I embrace
                            continuous learning:</p>
                        <dd class="mt-2 text-sm text-gray-500">Curiosity: I’m naturally curious and always eager to explore
                            new technologies, frameworks, and best practices.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Online Courses and Workshops: I regularly participate in
                            online courses, workshops, and webinars to expand my knowledge.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Community Involvement: Engaging with developer communities,
                            attending meetups, and contributing to open-source projects keep me informed and connected.</dd>
                        <dd class="mt-2 text-sm text-gray-500">Adaptability: Whether it’s a new programming language or a
                            paradigm shift, I adapt quickly and thrive in dynamic environments.</dd>
                    </div>
                </dl>
            </div>
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl my-4">Projects I developed</h2>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">

                    <a href="https://github.com/claraquintela/stampee" target="blank"><img
                            src="{{ Vite::asset('resources/img/Stampee.png') }}" alt="Stampee: auction house online"
                            class="rounded-lg bg-gray-100"></a>
                    <a href=""><img src="{{ Vite::asset('resources/img/creuset.png') }}"
                            alt="Top down view of walnut card tray with embedded magnets and card groove."
                            class="rounded-lg bg-gray-100"></a>
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-03.jpg"
                        alt="Side of walnut card tray with card groove and recessed card area."
                        class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-04.jpg"
                        alt="Walnut card tray filled with cards and card angled in dedicated groove."
                        class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
                        alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                        class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
                        alt="Top down view of walnut card tray with embedded magnets and card groove."
                        class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg"
                        alt="Walnut card tray with white powder coated steel divider and 3 punchout holes."
                        class="rounded-lg bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-02.jpg"
                        alt="Top down view of walnut card tray with embedded magnets and card groove."
                        class="rounded-lg bg-gray-100">
                </div>
            </div>
        </div>
    </div>

@endsection
