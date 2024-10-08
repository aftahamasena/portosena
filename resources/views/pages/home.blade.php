<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SenaPorto - Home</title>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Lora:wght@400;500;700&family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600;700&family=Gloock:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<x-navbar />
<x-contact />

<body class="bg-white flex justify-center">
    <main class="pt-5 text-center font-lora bg-white pb-44">
        {{-- profile --}}
        <section id="profile.section" class="section-padding ">
            <x-section.profile />
        </section>
        <hr class="border-gray-200 my-20 mx-10">
        {{-- myskills --}}
        <section id="skill.section" class="section-padding mb-44">
            <x-section.skill />
        </section>
        <hr class="border-gray-200 my-20 mx-10">
        {{-- myporto --}}
        <section id="project.section" class="section-padding xs:px-5">
            <x-section.project />
        </section>
        <hr class="border-gray-200 my-20 mx-10">
        {{-- certi --}}
        <section id="certi.section" class="xs:px-10 section-paddingc">
            <x-section.certificate />
        </section>
    </main>

</body>
<x-footer />

</html>
