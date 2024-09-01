<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .scroll-bg {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            transition: opacity 0.3s, background-color 0.3s, backdrop-filter 0.3s;
            height: 60px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(0px);
        }

        .scroll-bg.bg-active {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(3px);
            opacity: 1;
        }

        .section-padding {
            padding-top: 60px;
        }

        .logo {
            height: 40px;
            width: auto;
        }

        .nav-link {
            position: relative;
            font-size: 0.875rem;
            font-weight: 500;
            color: #333;
            transition: color 0.3s, transform 0.3s;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-color: #1D4ED8;
            transition: width 0.3s, transform 0.3s;
            transform: scaleX(0);
            transform-origin: bottom right;
        }

        .nav-link:hover::before {
            width: 100%;
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .nav-link:hover {
            color: #1D4ED8;
            text-shadow: 0 0 5px rgba(29, 78, 216, 0.5);
            transform: translateY(-3px);
        }

        .logo-text {
            font-size: 1rem;
            color: #333;
            font-weight: normal;
        }

        #mobileMenu {
            backdrop-filter: blur(5px);
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 0.5s ease, transform 0.5s ease;
            opacity: 0;
            transform: translateY(-100%);
            height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        #mobileMenu.show {
            opacity: 1;
            transform: translateY(0);
        }

        .menu-item {
            animation: fadeIn 0.5s ease forwards;
            color: #fff;
            margin: 10px 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .close-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 9999px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .close-menu:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav id="navbar" class="z-50 flex justify-between items-center font-lora text-lg w-full px-6 lg:px-36 scroll-bg">
        <div class="flex items-center space-x-4">
            <img src="assets/img/profilesena.jpg" alt="Profile Photo"
                class="rounded-full logo xs:h-20 xs:w-20">
            <span class="text-xs xs:text-sm sm:text-base font-merriweather font-medium text-blue-500">
                Porto<span class="text-blue-700 font-gloock text-xs xs:text-sm sm:text-base">Sena</span>
            </span>
        </div>

        <div class="flex items-center lg:hidden">
            <button id="menuToggle" class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <div class=" hidden lg:flex justify-between space-x-12">
            <a href="#profile.section" class="nav-link">Profile</a>
            <a href="#skill.section" class="nav-link">Skill</a>
            <a href="#project.section" class="nav-link">Project</a>
            <a href="#certi.section" class="nav-link">Certificate</a>
        </div>

        <div id="mobileMenu" class="hidden">
            <button class="close-menu px-3 py-1.5 rounded-full">×</button>
            <a href="#profile.section" class="menu-item nav-link">Profile</a>
            <a href="#skill.section" class="menu-item nav-link">Skill</a>
            <a href="#project.section" class="menu-item nav-link">Project</a>
            <a href="#certi.section" class="menu-item nav-link">Certificate</a>
        </div>
    </nav>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeMenuButton = document.querySelector('.close-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('show');
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('show');
        });

        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-active', 'text-black');
            } else {
                navbar.classList.remove('bg-active', 'text-black');
            }
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('show');
            }
        });

        window.addEventListener('load', () => {
            if (window.innerWidth < 1024) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
