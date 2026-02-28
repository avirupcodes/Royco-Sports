<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royco - Jersey Manufacturer</title>
    @vite('resources/css/app.css')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">
    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body class="bg-[#070b15] text-white font-body">
    @include('components.header')
    @include('components.hero')
    @include('components.products-sample')
    @include('components.customize')
    @include('components.process')
    @include('components.portfolio')
    @include('components.testimonials')
    @include('components.cta')
    @include('components.contact')
    @include('components.footer')





    <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      once: false,
      duration: 900,
      easing: 'ease-out-cubic',
      offset: 80,
    });

    const header = document.querySelector("header");

    window.addEventListener("scroll", () => {
      if (window.scrollY > 0) {
        header.classList.add("bg-black/50", "backdrop-blur-md");
      } else {
        header.classList.remove("bg-black/50", "backdrop-blur-md");
      }
    });
    // mobile sidebar
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('openMenu');
    const closeBtn = document.getElementById('closeMenu');
    openBtn.addEventListener('click', () => sidebar.classList.remove('hidden'));
    closeBtn.addEventListener('click', () => sidebar.classList.add('hidden'));

    // year
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper('.swiper', {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      breakpoints: {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>