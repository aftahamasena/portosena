<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Porto Section</title>
    <style>
        .project-card {
            position: relative;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .project-card img {
            transition: transform 0.3s ease-in-out;
            height: 16rem;
            width: 100%;
            object-fit: cover;
        }

        .project-card:hover img {
            transform: scale(1.05);
        }

        .project-card-content {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            color: white;
            transition: opacity 0.3s ease-in-out;
            z-index: 1;
        }

        .project-card:hover .project-card-content {
            opacity: 1;
        }

        .tech-icons {
            position: relative;
            background-color: #f9f9f9;
            padding: 1rem;
            border-radius: 0 0 0.5rem 0.5rem;
            z-index: 1;
        }

        .tech-icons img {
            transition: transform 0.3s ease-in-out;
            width: 2rem;
            height: 2rem;           
        }

        .tech-icons img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 639px) {

            .tech-icons img {
                width: 1rem;
                height: 1rem;
            }
        }

        @media (min-width: 640px) and (max-width: 767px) {

            .tech-icons img {
                width: 1.75rem;
                height: 1.75rem;
            }
        }

        @media (min-width: 768px) {

            .tech-icons img {
                width: 2rem;
                height: 2rem;
            }
        }
    </style>

</head>

<body>
    <div class="container mx-auto xs:px-0 sm:px-5 pb-20">
        <div class="lg:hidden sm:block md:block pt-8 justify-center items-center">
            <h1 class="xs:text-5xl text-center text-black mb-8  font-gloock">My Projects</h1>
        </div>
        <div class="grid grid-cols-1 xs:grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-5">
            <!-- Project Card 1 -->
            <div class="relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work11.png" alt="Project Image 1" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Portfolio Website</h2>
                    <a href="https://github.com/your-repository"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS Logo"
                        class="w-8 h-8">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                        alt="Laravel Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JavaScript Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>

            <div class="hidden lg:block pt-8 justify-center items-center">
                <h1 class="text-5xl text-center text-black mb-8  font-gloock">My Projects</h1>
            </div>

            <!-- Project Card 2 -->
            <div class="relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work7.png" alt="Project Image 2" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Library Website</h2>
                    <a href="https://github.com/aftahamasena/libraryweb_onprogress.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                        alt="Laravel Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/638632?s=200&v=4" alt="Guzzle Logo"
                        class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>
            <div class="hidden lg:block"></div>
            <!-- Project Card 3 -->
            <div class="lg:-mt-48 relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work8.png" alt="Project Image 2" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Full Stack <br>Coffe Shop Website</h2>
                    <a href="https://github.com/aftahamasena/libraryweb_onprogress.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class=" tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-node-js-logo-icon-download-in-svg-png-gif-file-formats--technology-social-media-vol-5-pack-logos-icons-3030179.png?f=webp&w=256"
                        alt="Node Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                        alt="React Logo" class="w-8 h-8">
                    <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/axios_logo_icon_168545.png"
                        alt="Axios Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>
            <div class="hidden lg:block"></div>
            <!-- Project Card 3 -->
            <div class="lg:-mt-36 relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work4.png" alt="Project Image 3" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Caffe Back-end</h2>
                    <a href="https://github.com/aftahamasena/be_caffe.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-node-js-logo-icon-download-in-svg-png-gif-file-formats--technology-social-media-vol-5-pack-logos-icons-3030179.png?f=webp&w=256"
                        alt="Node Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                </div>
            </div>
            <div class="hidden lg:block"></div>
            <!-- Project Card 4 -->
            <div class="lg:-mt-36 relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work6.png" alt="Project Image 4" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Admin Product Manipulation </h2>
                    <a href="https://github.com/aftahamasena/productdb.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                        alt="Laravel Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/638632?s=200&v=4" alt="Guzzle Logo"
                        class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>
            <div class="hidden lg:block"></div>
            <!-- Project Card 5 -->
            <div class="lg:-mt-48 relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work2.png" alt="Project Image 6" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Book E-Commerce Website</h2>
                    <a href="https://github.com/aftahamasena/fe_tokobuku.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                        alt="React Logo" class="w-8 h-8">
                    <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/axios_logo_icon_168545.png"
                        alt="Axios Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>
            <div class="hidden lg:block"></div>
            <!-- Project Card 6 -->
            <div class="lg:-mt-36 relative group project-card border border-gray-200 rounded-lg shadow-lg bg-white">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="assets/img/work5.png" alt="Project Image 7" class="w-full h-64 object-cover">
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex flex-col items-center justify-center p-6 text-white project-card-content rounded-lg">
                    <h2 class="text-2xl font-bold mb-4">Admin Library Website</h2>
                    <a href="https://github.com/aftahamasena/fe_admindash.git"
                        class="bg-white text-black px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors duration-200 ease-in-out">View
                        on GitHub</a>
                </div>
                <div class="tech-icons flex justify-center space-x-4 bg-gray-100 p-4 rounded-b-lg">
                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-html-5-logo-icon-download-in-svg-png-gif-file-formats--programming-langugae-language-pack-logos-icons-1175208.png?f=webp"
                        alt="Html5" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                        alt="React Logo" class="w-8 h-8">
                    <img src="https://cdn.icon-icons.com/icons2/2699/PNG/512/axios_logo_icon_168545.png"
                        alt="Axios Logo" class="w-8 h-8">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL Logo" class="w-8 h-8">
                    <img src="https://avatars.githubusercontent.com/u/67109815?v=4&s=400" alt="Tailwind CSS Logo"
                        class="w-8 h-8">
                </div>
            </div>

        </div>
    </div>
</body>

</html>
