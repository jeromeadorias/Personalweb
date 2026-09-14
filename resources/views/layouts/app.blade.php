<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon"
          type="image/png"
          href="{{ asset('storage/images/jga-logo.png') }}">

    <title>
        @yield('title', 'Personal Portfolio - Jerome Giovanni Adorias')
    </title>

    <meta name="description"
          content="Jerome Giovanni Adorias - BS Computer Science Graduate and Web Developer">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #080808;
        }

        ::selection {
            background: #dc2626;
            color: white;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .glow {
            box-shadow:
                0 0 80px rgba(220, 38, 38, .12);
        }

        .red-glow {
            box-shadow:
                0 0 35px rgba(220, 38, 38, .25);
        }

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-100 {
            transition-delay: .1s;
        }

        .delay-200 {
            transition-delay: .2s;
        }

        .delay-300 {
            transition-delay: .3s;
        }

        .delay-400 {
            transition-delay: .4s;
        }

        .float {
            animation: float 5s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        .pulse-ring {
            animation: pulseRing 2s infinite;
        }

        @keyframes pulseRing {
            0% {
                box-shadow: 0 0 0 0 rgba(220, 38, 38, .35);
            }

            70% {
                box-shadow: 0 0 0 18px rgba(220, 38, 38, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
            }
        }

        .line-animation {
            animation: lineGrow 1.5s ease forwards;
            transform-origin: left;
        }

        @keyframes lineGrow {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }
    </style>
</head>

<body class="bg-[#080808] text-white antialiased">

    <!-- Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">

        <div class="absolute top-[-200px] left-[-200px]
                    w-[500px] h-[500px]
                    rounded-full
                    bg-red-700/10
                    blur-[120px]">
        </div>

        <div class="absolute top-[35%] right-[-250px]
                    w-[500px] h-[500px]
                    rounded-full
                    bg-red-700/10
                    blur-[130px]">
        </div>

        <div class="absolute bottom-[-200px] left-[35%]
                    w-[450px] h-[450px]
                    rounded-full
                    bg-red-900/10
                    blur-[130px]">
        </div>

        <div class="absolute inset-0 grid-bg"></div>

    </div>


    <!-- Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50
                   border-b border-white/5
                   bg-black/70 backdrop-blur-xl">

        <nav class="max-w-7xl mx-auto
                    px-6 lg:px-10
                    h-20
                    flex items-center justify-between">

            <!-- Logo -->
            <a href="#home"
               class="group flex items-center gap-3">

                <div class="w-10 h-10
                            rounded-xl
                            bg-red-600
                            flex items-center justify-center
                            font-black
                            group-hover:rotate-6
                            transition duration-300">

                    JGA.
                </div>

                <div class="hidden sm:block">
                    <p class="font-bold text-sm">
                    JEROME GIOVANNI ADORIAS
                    </p>

                    <p class="text-[10px] text-gray-500 tracking-[.25em]">
                        COMPUTER SCIENCE
                    </p>
                </div>

            </a>


            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">

                <a href="#home"
                   class="text-sm text-gray-400 hover:text-white transition">
                    Home
                </a>

                <a href="#about"
                   class="text-sm text-gray-400 hover:text-white transition">
                    About
                </a>

                <a href="#skills"
                   class="text-sm text-gray-400 hover:text-white transition">
                    Skills
                </a>

                <a href="#projects"
                   class="text-sm text-gray-400 hover:text-white transition">
                    Projects
                </a>

                <a href="#journey"
                   class="text-sm text-gray-400 hover:text-white transition">
                    Journey
                </a>

                <a href="#contact"
                   class="px-5 py-2.5
                          rounded-full
                          bg-white text-black
                          text-sm font-semibold
                          hover:bg-red-600
                          hover:text-white
                          transition duration-300">
                    Contact
                </a>

            </div>

        </nav>

    </header>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="border-t border-white/10
                   py-8
                   text-center
                   text-gray-500
                   text-sm">

        <p>
            © {{ date('Y') }} Jerome Giovanni Adorias.
            All rights reserved.
        </p>

    </footer>


    <!-- Scroll Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const revealElements =
                document.querySelectorAll('.reveal');

            const observer = new IntersectionObserver(
                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );

            revealElements.forEach(element => {
                observer.observe(element);
            });

        });
    </script>

</body>
</html>