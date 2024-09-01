<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Component</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnH/PRJzRAcUqSkrVf0XpRPY7ipJT/s5Gx7fXr9Qgi74Yg8QF3DhA6YY7MXlgPCL3Ts8lDWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .contact-details {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .contact-details.translate-x-full {
            transform: translateX(100%);
        }

        .contact-component {
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .contact-component.translate-x-full {
            transform: translateX(calc(100% + 2rem));
        }

        .contact-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem;
            font-size: 0.875rem;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }
    </style>

</head>

<body class="relative bg-gray-100">
    <div id="contact-component"
        class="fixed right-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 rounded-l-full p-2 text-white flex items-center justify-center cursor-pointer transition-transform duration-300 ease-in-out z-40">
        <div id="contact-icon" class="text-2xl">➤</div>
    </div>

    <div id="contact-details"
        class="fixed text-lg rounded-md right-6 top-1/2 transform -translate-y-1/2 text-white flex flex-col space-y-4 opacity-0 pointer-events-none transition-transform duration-400 ease-in-out z-40 translate-x-full">

        <a href="https://www.instagram.com/senafth_/" target="_blank"
            class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 contact-item flex items-center justify-center text-xl hover:text-pink-500 transition-transform duration-400 ease-in-out p-2 rounded-md shadow-2xl hover:shadow-xl hover:-translate-y-1">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="mailto:muhammadaftah63@gmail.com"
            class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 contact-item flex items-center justify-center text-xl hover:text-yellow-500 transition-transform duration-400 ease-in-out p-2 rounded-md shadow-lg hover:shadow-xl hover:-translate-y-1">
            <i class="fas fa-envelope"></i>
        </a>
        <a href="https://github.com/aftahamasena" target="_blank"
            class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 contact-item flex items-center justify-center text-xl hover:text-gray-900 transition-transform duration-400 ease-in-out p-2 rounded-md shadow-lg hover:shadow-xl hover:-translate-y-1">
            <i class="fab fa-github "></i>
        </a>
        <a href="https://www.linkedin.com/in/muhammad-aftah-amasena-138920280" target="_blank"
            class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 contact-item flex items-center justify-center text-xl hover:text-blue-400 transition-transform duration-400 ease-in-out p-2 rounded-md shadow-lg hover:shadow-xl hover:-translate-y-1">
            <i class="fab fa-linkedin "></i>
        </a>
    </div>

    <script>
        const contactComponent = document.getElementById('contact-component');
        const contactDetails = document.getElementById('contact-details');
        const contactIcon = document.getElementById('contact-icon');

        contactComponent.addEventListener('click', (event) => {
            event.stopPropagation();
            toggleContactDetails();
        });

        document.addEventListener('click', (event) => {
            const isClickInside = contactComponent.contains(event.target) || contactDetails.contains(event.target);

            if (!isClickInside) {
                closeContactDetails();
            }
        });

        function toggleContactDetails() {
            const isOpen = contactDetails.classList.contains('opacity-100');

            if (isOpen) {
                closeContactDetails();
            } else {
                openContactDetails();
            }
        }

        function openContactDetails() {
            contactDetails.classList.remove('opacity-0', 'pointer-events-none', 'translate-x-full');
            contactDetails.classList.add('opacity-100', 'pointer-events-auto');
            contactComponent.classList.add('translate-x-full');
            contactComponent.classList.remove('translate-x-0');
            contactIcon.innerHTML = '⮜'; 
        }

        function closeContactDetails() {
            contactDetails.classList.remove('opacity-100', 'pointer-events-auto');
            contactDetails.classList.add('opacity-0', 'pointer-events-none', 'translate-x-full');
            contactComponent.classList.add('translate-x-0');
            contactComponent.classList.remove('translate-x-full');
            contactIcon.innerHTML = '➤'; 
        }
    </script>

</body>

</html>
