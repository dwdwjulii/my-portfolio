<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio | {{ $title ?? 'Dewa Made' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 text-slate-900 font-sans">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script>
    window.addEventListener('scroll', () => {
        let current = "";
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link"); // Gunakan class khusus agar lebih spesifik

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 150) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("text-white");
            link.classList.add("text-soft-gray");
            
            const href = link.getAttribute("href");
            
            // Logika baru: Cek apakah href berakhiran dengan #id-section saat ini
            if (current && href.endsWith("#" + current)) {
                link.classList.add("text-white");
                link.classList.remove("text-soft-gray");
            }
        });
    });
</script>

<script>
    // Logic Mobile Menu
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function toggleMenu() {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }

    menuBtn.addEventListener('click', toggleMenu);

    // Tutup menu saat link diklik
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        });
    });
</script>

</body>
</html>