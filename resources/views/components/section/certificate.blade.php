<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certi Section</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .carousel-wrapper {
            transition: transform 0.5s ease;
        }

        .carousel-bar div {
            transition: background-color 0.3s, transform 0.3s;
        }

        .carousel-bar div.active {
            background-color: #1e40af;
            transform: scale(1.2);
        }

        .carousel-container {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transform: translateY(-10px);
        }

        .carousel-item {
            cursor: pointer;
        }

        .description-wrapper p {
            font-size: 0.875rem;
        }

        @media (min-width: 640px) {
            .description-wrapper p {
                font-size: 1rem;
            }
        }

        @media (min-width: 768px) {
            .description-wrapper p {
                font-size: 1.125rem;
            }
        }

        @media (min-width: 1024px) {
            .description-wrapper p {
                font-size: 1.25rem;
            }
        }

        .carousel-item .description-wrapper {
            padding: 0.5rem;
        }

        @media (min-width: 640px) {
            .carousel-item .description-wrapper {
                padding: 0.75rem;
            }
        }

        @media (min-width: 768px) {
            .carousel-item .description-wrapper {
                padding: 1rem;
            }
        }

        @media (min-width: 1024px) {
            .carousel-item .description-wrapper {
                padding: 1.25rem;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <h1 class="font-gloock text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-4 sm:mb-5 md:mb-6 lg:mb-7 text-center">
        Certificate</h1>
    <div
        class="relative w-full xs:w-4/5 sm:w-4/5 md:w-4/5 lg:w-1/2 h-[150px] xs:h-[200px] sm:h-[250px] md:h-[300px] lg:h-[350px] overflow-hidden mx-auto rounded-lg carousel-container">
        <div class="flex w-full h-full carousel-wrapper" id="carouselWrapper">
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1pI5Y-W21RHyOquFl3O6b38257MRpgEnZ/view?usp=drive_link">
                <img src="assets/img/certi1.1.jpg" alt="Slide 1" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 1.1 : </span>Javascript specialist - Certiport</p>
                </div>
            </div>
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1em0NdFvOajbvLTqPPLgk6P5XswG_vxnm/view?usp=drive_link">
                <img src="assets/img/certi1.2.png" alt="Slide 2" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 1.2 : </span>Javascript specialist - Certiport</p>
                </div>
            </div>
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1NONSAoVgVbCzDvlZhh8kWIXa6iGumiRX/view?usp=drive_link">
                <img src="assets/img/certi2.1.png" alt="Slide 3" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 2.1 : </span>Wordpress developer - Jagoan Hosting</p>
                </div>
            </div>
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1NONSAoVgVbCzDvlZhh8kWIXa6iGumiRX/view?usp=drive_link">
                <img src="assets/img/certi2.2.png" alt="Slide 4" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 2.2 : </span>Wordpress developer - Jagoan Hosting</p>
                </div>
            </div>
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1IGDcByemNZ3ftxQG-KgURNo-G2xWhPAf/view?usp=drive_link">
                <img src="assets/img/certi3.png" alt="Slide 5" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 3 : </span>Cyber security awareness - Yayasan Pendidikan
                        Telkom</p>
                </div>
            </div>
            <div class="flex-none w-full h-full bg-black flex justify-center items-center carousel-item"
                data-url="https://drive.google.com/file/d/1h9O5Ocqs_CBKfrD3azWXKC4nR1Y7_yKw/view?usp=drive_link">
                <img src="assets/img/certi4.png" alt="Slide 6" class="w-full h-full object-cover">
                <div class="absolute bottom-0 w-full bg-black/60 text-white description-wrapper">
                    <p><span class="font-semibold">Certificate 4 : </span>Gerakan nasional 1000 startup digital -
                        Kominfo</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-2 carousel-bar" id="carouselBar">
        <div onclick="goToSlide(0)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
        <div onclick="goToSlide(1)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
        <div onclick="goToSlide(2)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
        <div onclick="goToSlide(3)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
        <div onclick="goToSlide(4)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
        <div onclick="goToSlide(5)"
            class="h-2 xs:h-3 sm:h-3 md:h-3 lg:h-3 w-2 xs:w-3 sm:w-3 md:w-3 lg:w-3 bg-gray-400 mx-1 rounded-full"></div>
    </div>

    <script>
        const carouselWrapper = document.getElementById('carouselWrapper');
        const carouselBar = document.getElementById('carouselBar').children;
        let index = 0;
        let slideInterval = setInterval(nextSlide, 2000);

        function showSlide(i) {
            const slides = document.querySelectorAll('.carousel-item');
            const totalSlides = slides.length;
            if (i >= totalSlides) index = 0;
            else if (i < 0) index = totalSlides - 1;
            else index = i;
            carouselWrapper.style.transform = `translateX(-${index * 100}%)`;
            updateBar();
        }

        function nextSlide() {
            showSlide(index + 1);
        }

        function goToSlide(i) {
            index = i;
            clearInterval(slideInterval);
            showSlide(index);
            slideInterval = setInterval(nextSlide, 2000);
        }

        function updateBar() {
            for (let i = 0; i < carouselBar.length; i++) {
                carouselBar[i].classList.remove('active');
            }
            carouselBar[index].classList.add('active');
        }

        document.querySelectorAll('.carousel-item').forEach(item => {
            item.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                window.open(url, '_blank');
            });
        });
    </script>
</body>

</html>
