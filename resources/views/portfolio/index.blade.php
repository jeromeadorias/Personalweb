@extends('layouts.app')

@section('title', 'Jerome Giovanni Adorias | Portfolio')

@section('content')

<!-- =========================================================
     HERO
========================================================= -->

<section id="home"
         class="min-h-screen
                flex items-center
                relative
                overflow-hidden
                pt-24">

    <div class="max-w-7xl mx-auto
                px-6 lg:px-10
                w-full">

        <div class="grid lg:grid-cols-2
                    gap-16
                    items-center">

            <!-- LEFT -->
            <div class="reveal">

                <!-- Availability -->
                <div class="inline-flex items-center gap-3
                            px-4 py-2
                            rounded-full
                            border border-white/10
                            bg-white/[.03]
                            backdrop-blur-md
                            mb-8">

                    <span class="relative flex h-2.5 w-2.5">

                        <span class="absolute inline-flex
                                     h-full w-full
                                     rounded-full
                                     bg-green-500
                                     opacity-75
                                     animate-ping">
                        </span>

                        <span class="relative inline-flex
                                     rounded-full
                                     h-2.5 w-2.5
                                     bg-green-500">
                        </span>

                    </span>

                    <span class="text-xs
                                 uppercase
                                 tracking-[.2em]
                                 text-gray-400">

                        Available for opportunities

                    </span>

                </div>


                <!-- Small Label -->
                <p class="text-red-500
                          font-semibold
                          tracking-[.3em]
                          text-xs
                          uppercase
                          mb-5">

                    Computer Science • Web Development

                </p>


                <!-- Main Heading -->
                <h1 class="text-5xl
                           sm:text-6xl
                           lg:text-8xl
                           font-black
                           leading-[.9]
                           tracking-[-.06em]">

                    JEROME

                    <span class="block text-white/20">
                        GIOVANNI
                    </span>

                    <span class="block text-red-600">
                        ADORIAS.
                    </span>

                </h1>


                <div class="w-24 h-1
                            bg-red-600
                            mt-8 mb-8
                            line-animation">
                </div>


                <!-- Description -->
                <p class="max-w-xl
                          text-gray-400
                          text-base
                          sm:text-lg
                          leading-relaxed">

                    A Bachelor of Science in Computer Science graduate
                    passionate about building practical web applications,
                    database systems, and modern digital solutions.

                </p>


                <!-- Buttons -->
                <div class="flex flex-wrap
                            gap-4
                            mt-9">

                    <a href="#projects"
                       class="group
                              px-6 py-3.5
                              rounded-full
                              bg-red-600
                              font-semibold
                              text-sm
                              hover:bg-red-500
                              hover:shadow-[0_0_30px_rgba(220,38,38,.35)]
                              transition duration-300">

                        View Projects

                        <span class="inline-block ml-2
                                     group-hover:translate-x-1
                                     transition">
                            →
                        </span>

                    </a>


                    <a href="#contact"
                       class="px-6 py-3.5
                              rounded-full
                              border border-white/10
                              bg-white/[.03]
                              font-semibold
                              text-sm
                              hover:bg-white
                              hover:text-black
                              transition duration-300">

                        Let's Connect

                    </a>

                </div>

            </div>


            <!-- RIGHT -->
            <div class="relative
                        flex justify-center
                        reveal delay-200">

                <!-- Decorative Circle -->
                <div class="absolute
                            w-[330px] h-[330px]
                            sm:w-[430px] sm:h-[430px]
                            rounded-full
                            border border-red-600/20
                            pulse-ring">
                </div>


                <div class="absolute
                            w-[280px] h-[280px]
                            sm:w-[370px] sm:h-[370px]
                            rounded-full
                            border border-white/5">
                </div>


                <!-- Profile -->
                <div class="relative
                            w-64 h-80
                            sm:w-80 sm:h-[420px]
                            rounded-[2rem]
                            overflow-hidden
                            border border-white/10
                            bg-neutral-900
                            shadow-2xl
                            float">

                    <img src="{{ asset('storage/images/profile.jpg') }}"
                         alt="Jerome Giovanni Adorias"
                         class="w-full h-full
                                object-cover
                                grayscale
                                hover:grayscale-0
                                scale-105
                                hover:scale-100
                                transition duration-700">

                    <!-- Image Overlay -->
                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/70
                                via-transparent
                                to-transparent">
                    </div>


                    <div class="absolute
                                bottom-6
                                left-6
                                right-6">

                        <p class="text-xs
                                  uppercase
                                  tracking-[.25em]
                                  text-red-400">

                            BSCS • 2026

                        </p>

                        <p class="font-bold mt-1">
                            Web Developer
                        </p>

                    </div>

                </div>


                <!-- Floating Badge -->
                <div class="absolute
                            bottom-8
                            -left-3
                            sm:-left-10
                            px-5 py-4
                            rounded-2xl
                            border border-white/10
                            bg-black/80
                            backdrop-blur-xl
                            shadow-xl">

                    <p class="text-2xl font-black">
                        2026
                    </p>

                    <p class="text-[10px]
                              text-gray-500
                              uppercase
                              tracking-widest">
                        Graduate
                    </p>

                </div>


                <!-- Floating Badge -->
                <div class="absolute
                            top-8
                            -right-3
                            sm:-right-8
                            px-5 py-4
                            rounded-2xl
                            border border-red-500/20
                            bg-red-600/10
                            backdrop-blur-xl">

                    <p class="text-red-400
                              text-xs
                              uppercase
                              tracking-widest">
                        Focus
                    </p>

                    <p class="font-bold">
                        Laravel
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     ABOUT
========================================================= -->

<section id="about"
         class="py-32
                border-t border-white/5">

    <div class="max-w-7xl mx-auto
                px-6 lg:px-10">

        <div class="grid lg:grid-cols-3
                    gap-12">

            <!-- Heading -->
            <div class="reveal">

                <p class="text-red-500
                          text-xs
                          uppercase
                          tracking-[.3em]
                          font-semibold">
                    01 / About
                </p>

                <h2 class="text-4xl
                           sm:text-5xl
                           font-black
                           mt-4">
                    About<br>
                    <span class="text-white/20">
                        Me.
                    </span>
                </h2>

            </div>


            <!-- Text -->
            <div class="lg:col-span-2
                        reveal delay-200">

                <p class="text-xl
                          sm:text-2xl
                          leading-relaxed
                          text-gray-300">

                    I am a

                    <span class="text-white font-semibold">
                        BS Computer Science graduate
                    </span>

                    from Colegio de Sta. Ana de Victorias,
                    interested in web development, database systems,
                    technical support, and continuous learning.

                </p>


                <p class="text-gray-500
                          leading-relaxed
                          mt-7
                          max-w-3xl">

                    During my studies and on-the-job training,
                    I developed experience working with Laravel,
                    PHP, MySQL, Bootstrap, JavaScript, documentation,
                    troubleshooting, inventory systems, and other
                    technology-related tasks.

                </p>


                <!-- Stats -->
                <div class="grid sm:grid-cols-3
                            gap-5
                            mt-10">

                    <div class="p-6
                                rounded-2xl
                                border border-white/10
                                bg-white/[.02]
                                hover:border-red-500/30
                                transition">

                        <p class="text-3xl font-black">
                            BSCS
                        </p>

                        <p class="text-xs
                                  text-gray-500
                                  uppercase
                                  tracking-wider
                                  mt-2">
                            Degree
                        </p>

                    </div>


                    <div class="p-6
                                rounded-2xl
                                border border-white/10
                                bg-white/[.02]
                                hover:border-red-500/30
                                transition">

                        <p class="text-3xl font-black">
                            2026
                        </p>

                        <p class="text-xs
                                  text-gray-500
                                  uppercase
                                  tracking-wider
                                  mt-2">
                            Graduate
                        </p>

                    </div>


                    <div class="p-6
                                rounded-2xl
                                border border-white/10
                                bg-white/[.02]
                                hover:border-red-500/30
                                transition">

                        <p class="text-3xl font-black">
                            Web
                        </p>

                        <p class="text-xs
                                  text-gray-500
                                  uppercase
                                  tracking-wider
                                  mt-2">
                            Development
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     WHAT I DO
========================================================= -->

<section class="py-32
                bg-white/[.015]
                border-y border-white/5">

    <div class="max-w-7xl mx-auto
                px-6 lg:px-10">

        <div class="mb-16 reveal">

            <p class="text-red-500
                      text-xs
                      uppercase
                      tracking-[.3em]
                      font-semibold">
                02 / What I Do
            </p>

            <h2 class="text-4xl
                       sm:text-6xl
                       font-black
                       mt-4">
                Building useful
                <span class="text-white/20">
                    digital solutions.
                </span>
            </h2>

        </div>


        <div class="grid md:grid-cols-2
                    lg:grid-cols-4
                    gap-5">

            @php
                $services = [
                    [
                        'number' => '01',
                        'title' => 'Web Development',
                        'text' => 'Responsive and practical websites using modern web technologies.'
                    ],
                    [
                        'number' => '02',
                        'title' => 'Laravel Development',
                        'text' => 'Building web applications using Laravel, PHP, MySQL, and Blade.'
                    ],
                    [
                        'number' => '03',
                        'title' => 'Database Systems',
                        'text' => 'Designing and managing structured database-driven applications.'
                    ],
                    [
                        'number' => '04',
                        'title' => 'Technical Support',
                        'text' => 'Basic troubleshooting, equipment support, documentation, and technical assistance.'
                    ],
                ];
            @endphp


            @foreach ($services as $service)

                <div class="group
                            p-7
                            min-h-[260px]
                            rounded-3xl
                            border border-white/10
                            bg-[#0d0d0d]
                            hover:border-red-500/30
                            hover:-translate-y-2
                            transition duration-500
                            reveal">

                    <div class="flex justify-between">

                        <span class="text-red-500
                                     font-mono
                                     text-sm">
                            {{ $service['number'] }}
                        </span>

                        <span class="text-gray-700
                                     group-hover:text-red-500
                                     transition">
                            ↗
                        </span>

                    </div>


                    <h3 class="text-xl
                               font-bold
                               mt-16">

                        {{ $service['title'] }}

                    </h3>


                    <p class="text-sm
                              text-gray-500
                              leading-relaxed
                              mt-4">

                        {{ $service['text'] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>



<!-- =========================================================
     SKILLS
========================================================= -->

<section id="skills"
         class="py-32">

    <div class="max-w-7xl mx-auto
                px-6 lg:px-10">

        <div class="grid lg:grid-cols-2
                    gap-16">

            <div class="reveal">

                <p class="text-red-500
                          text-xs
                          uppercase
                          tracking-[.3em]
                          font-semibold">
                    03 / Skills
                </p>

                <h2 class="text-4xl
                           sm:text-6xl
                           font-black
                           mt-4">

                    Tools I use
                    <span class="text-white/20">
                        to build.
                    </span>

                </h2>

                <p class="text-gray-500
                          leading-relaxed
                          mt-7
                          max-w-lg">

                    A growing technical skill set developed through
                    academic projects, OJT, and personal development.

                </p>

            </div>


            <div class="space-y-4 reveal delay-200">

                @php
                    $skills = [
                        ['name' => 'PHP / Laravel', 'level' => 'Advanced'],
                        ['name' => 'HTML / CSS / Bootstrap', 'level' => 'Advanced'],
                        ['name' => 'MySQL', 'level' => 'Intermediate'],
                        ['name' => 'JavaScript', 'level' => 'Intermediate'],
                        ['name' => 'Technical Support', 'level' => 'Intermediate'],
                    ];
                @endphp


                @foreach ($skills as $skill)

                    <div class="group
                                p-6
                                rounded-2xl
                                border border-white/10
                                bg-white/[.02]
                                hover:bg-white/[.04]
                                hover:border-red-500/30
                                transition duration-300">

                        <div class="flex justify-between
                                    items-center">

                            <span class="font-semibold">
                                {{ $skill['name'] }}
                            </span>

                            <span class="text-xs
                                         text-gray-500
                                         group-hover:text-red-400
                                         transition">

                                {{ $skill['level'] }}

                            </span>

                        </div>


                        <div class="h-1
                                    bg-white/5
                                    rounded-full
                                    mt-5
                                    overflow-hidden">

                            <div class="h-full
                                        w-4/5
                                        bg-red-600
                                        rounded-full
                                        group-hover:w-full
                                        transition-all
                                        duration-700">
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     PROJECTS
========================================================= -->

<section id="projects"
         class="py-32
                bg-white/[.015]
                border-y border-white/5">

    <div class="max-w-7xl mx-auto
                px-6 lg:px-10">

        <div class="flex flex-col
                    md:flex-row
                    md:items-end
                    justify-between
                    gap-6
                    mb-16
                    reveal">

            <div>

                <p class="text-red-500
                          text-xs
                          uppercase
                          tracking-[.3em]
                          font-semibold">
                    04 / Selected Work
                </p>

                <h2 class="text-4xl
                           sm:text-6xl
                           font-black
                           mt-4">
                    Projects.
                </h2>

            </div>


            <p class="text-gray-500
                      max-w-md
                      text-sm
                      leading-relaxed">

                Academic and development projects created
                using different technologies and frameworks.

            </p>

        </div>


        @php
            $projects = [
                [
                    'title' => 'Boarding Locator',
                    'category' => 'Web Application',
                    'description' => 'A proximity-based boarding house finder system designed to help users locate and explore nearby boarding houses.',
                    'image' => 'boarding-locator.jpg',
                    'tech' => 'Laravel • PHP • MySQL • Bootstrap • Leaflet'
                ],
                [
                    'title' => 'Stockroom Inventory',
                    'category' => 'Management System',
                    'description' => 'An inventory management system for monitoring stock, equipment, requests, releases, and records.',
                    'image' => 'inventory.jpg',
                    'tech' => 'Laravel • PHP • MySQL • Bootstrap • Excel'
                ],
                [
                    'title' => 'Student Attendance',
                    'category' => 'School System',
                    'description' => 'A web-based attendance system for recording student time-in, time-out, subjects, and attendance records.',
                    'image' => 'attendance.jpg',
                    'tech' => 'Laravel • PHP • MySQL • Bootstrap'
                ],
                [
                    'title' => 'Online Enrollment',
                    'category' => 'Digital System',
                    'description' => 'An online application and enrollment system designed to simplify student information and application processes.',
                    'image' => 'enrollment.jpg',
                    'tech' => 'Laravel • PHP • MySQL • SMS • Email'
                ],
            ];
        @endphp


        <div class="grid md:grid-cols-2
                    gap-7">

            @foreach ($projects as $project)

                <article class="group
                                rounded-3xl
                                overflow-hidden
                                border border-white/10
                                bg-[#0b0b0b]
                                hover:border-red-500/30
                                transition duration-500
                                reveal">

                    <!-- Image -->
                    <div class="relative
                                aspect-[16/10]
                                overflow-hidden">

                        <img src="{{ asset('storage/images/' . $project['image']) }}"
                             alt="{{ $project['title'] }}"
                             class="w-full h-full
                                    object-cover
                                    grayscale
                                    group-hover:grayscale-0
                                    group-hover:scale-105
                                    transition duration-700">


                        <div class="absolute inset-0
                                    bg-gradient-to-t
                                    from-black
                                    via-transparent
                                    to-transparent
                                    opacity-70">
                        </div>


                        <div class="absolute
                                    top-5
                                    left-5">

                            <span class="px-3 py-1.5
                                         rounded-full
                                         bg-black/70
                                         border border-white/10
                                         text-[10px]
                                         uppercase
                                         tracking-widest">

                                {{ $project['category'] }}

                            </span>

                        </div>

                    </div>


                    <!-- Content -->
                    <div class="p-7">

                        <div class="flex
                                    justify-between
                                    gap-5">

                            <h3 class="text-2xl
                                       font-bold
                                       group-hover:text-red-500
                                       transition">

                                {{ $project['title'] }}

                            </h3>


                            <span class="text-gray-600
                                         group-hover:text-red-500
                                         transition">
                                ↗
                            </span>

                        </div>


                        <p class="text-gray-500
                                  text-sm
                                  leading-relaxed
                                  mt-4">

                            {{ $project['description'] }}

                        </p>


                        <p class="text-xs
                                  text-gray-600
                                  mt-6">

                            {{ $project['tech'] }}

                        </p>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>



<!-- =========================================================
     JOURNEY
========================================================= -->

<section id="journey"
         class="py-32">

    <div class="max-w-5xl mx-auto
                px-6 lg:px-10">

        <div class="text-center
                    mb-20
                    reveal">

            <p class="text-red-500
                      text-xs
                      uppercase
                      tracking-[.3em]
                      font-semibold">
                05 / Journey
            </p>

            <h2 class="text-4xl
                       sm:text-6xl
                       font-black
                       mt-4">
                My Journey.
            </h2>

        </div>


        <div class="relative">

            <!-- Timeline Line -->
            <div class="absolute
                        left-4
                        md:left-1/2
                        top-0
                        bottom-0
                        w-px
                        bg-white/10">
            </div>


            @php
                $journey = [
                    [
                        'year' => '2026',
                        'title' => 'Education',
                        'text' => 'Completed Bachelor of Science in Computer Science at Colegio de Sta. Ana de Victorias.'
                    ],
                    [
                        'year' => '2026',
                        'title' => 'OJT — Sidmax Technology',
                        'text' => 'Gained practical exposure to technical support, inventory, CCTV systems, documentation, and multimedia tasks.'
                    ],
                    [
                        'year' => '2025',
                        'title' => 'Development',
                        'text' => 'Worked on web development and database-driven academic projects.'
                    ],
                    [
                        'year' => 'NOW',
                        'title' => 'Career',
                        'text' => 'Ready to begin a professional career, gain experience, and contribute to a growing organization.'
                    ],
                ];
            @endphp


            <div class="space-y-14">

                @foreach ($journey as $index => $item)

                    <div class="relative
                                grid md:grid-cols-2
                                gap-8
                                reveal">

                        <!-- Dot -->
                        <div class="absolute
                                    left-[10px]
                                    md:left-1/2
                                    -translate-x-1/2
                                    w-3 h-3
                                    rounded-full
                                    bg-red-600
                                    border-4
                                    border-[#080808]
                                    z-10">
                        </div>


                        @if ($index % 2 == 0)

                            <div class="md:text-right
                                        pl-12
                                        md:pl-0
                                        md:pr-12">

                                <p class="text-red-500
                                          font-mono
                                          text-sm">
                                    {{ $item['year'] }}
                                </p>

                                <h3 class="text-2xl
                                           font-bold
                                           mt-2">
                                    {{ $item['title'] }}
                                </h3>

                            </div>


                            <div class="pl-12
                                        md:pl-12">

                                <p class="text-gray-500
                                          leading-relaxed">
                                    {{ $item['text'] }}
                                </p>

                            </div>

                        @else

                            <div class="hidden md:block"></div>

                            <div class="pl-12
                                        md:pl-12">

                                <p class="text-red-500
                                          font-mono
                                          text-sm">
                                    {{ $item['year'] }}
                                </p>

                                <h3 class="text-2xl
                                           font-bold
                                           mt-2">
                                    {{ $item['title'] }}
                                </h3>

                                <p class="text-gray-500
                                          leading-relaxed
                                          mt-4">
                                    {{ $item['text'] }}
                                </p>

                            </div>

                        @endif

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     CONTACT
========================================================= -->

<section id="contact"
         class="py-32
                relative
                overflow-hidden
                border-t border-white/5">

    <div class="max-w-5xl mx-auto
                px-6 lg:px-10">

        <div class="relative
                    rounded-[2rem]
                    border border-white/10
                    bg-white/[.025]
                    p-8
                    sm:p-12
                    lg:p-16
                    overflow-hidden
                    reveal">

            <!-- Glow -->
            <div class="absolute
                        -top-40
                        -right-40
                        w-80 h-80
                        rounded-full
                        bg-red-600/10
                        blur-[100px]">
            </div>


            <div class="relative">

                <p class="text-red-500
                          text-xs
                          uppercase
                          tracking-[.3em]
                          font-semibold">
                    06 / Contact
                </p>


                <h2 class="text-4xl
                           sm:text-6xl
                           font-black
                           mt-5
                           max-w-3xl">

                    Let's build
                    something
                    <span class="text-red-600">
                        meaningful.
                    </span>

                </h2>


                <p class="text-gray-500
                          max-w-xl
                          leading-relaxed
                          mt-7">

                    I am open to opportunities where I can
                    apply my skills, learn new technologies,
                    and contribute to a professional team.

                </p>


              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=jerome.adorias12@gmail.com"
   target="_blank"
   rel="noopener noreferrer"
   class="inline-flex items-center gap-3 mt-10 text-lg sm:text-2xl font-semibold hover:text-red-500 transition">

    jerome.adorias12@gmail.com

    <span>
        ↗
    </span>
</a>


                <!-- Social Links -->
                <div class="flex flex-wrap
                            gap-3
                            mt-10">

                    <a href="https://github.com/JeromeAdorias"
                       target="_blank"
                       class="px-5 py-3
                              rounded-full
                              border border-white/10
                              bg-black/30
                              text-sm
                              hover:bg-white
                              hover:text-black
                              transition">

                        GitHub

                    </a>


                    <a href="https://www.facebook.com/JeromeAdorias"
                       target="_blank"
                       class="px-5 py-3
                              rounded-full
                              border border-white/10
                              bg-black/30
                              text-sm
                              hover:bg-white
                              hover:text-black
                              transition">

                        Facebook

                    </a>


                    <a href="#"
                       class="px-5 py-3
                              rounded-full
                              border border-white/10
                              bg-black/30
                              text-sm
                              hover:bg-white
                              hover:text-black
                              transition">

                        LinkedIn

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection