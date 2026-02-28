<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery - Royco Sports</title>
    @vite('resources/css/app.css')
    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>
<body class="bg-gray-100 text-white">

    @include('components.header')

    <!-- Hero Banner -->
    <section id="gallery-hero" 
        class="h-64 flex flex-col items-center justify-center bg-center bg-cover text-center"
        style="background-image: url('{{ asset('gallery-banner.jpg') }}')">
        <h1 class="text-6xl md:text-5xl font-bold text-white drop-shadow-lg mb-4">
            Explore Our Sports Gallery
        </h1>
        <a href="{{ url('/') }}" 
           class="px-6 py-2 text-gray-200 rounded-lg shadow hover:text-red-700 transition">
            Back to Home
        </a>
    </section>

    <!-- Gallery -->
    <div class="max-w-7xl mx-auto py-10 px-4">
        <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 [column-fill:_balance]">
            @foreach ($images as $image)
                <div class="mb-4 break-inside-avoid overflow-hidden rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] transition duration-300">
                    <img src="{{ asset($image) }}" alt="Sports image" loading="lazy" 
                         class="w-full h-auto rounded-lg">
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10 flex justify-center">
            {{ $images->links('pagination::tailwind') }}
        </div>
    </div>

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

</body>
</html>
