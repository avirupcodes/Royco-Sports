<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Products - Royco Sports</title>
   @vite('resources/css/app.css')
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">
    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-white">

  <!-- Header -->
  @include('components.header')

  <!-- Banner -->
  <section class="relative h-64 flex items-center justify-center text-center">
    <img src="{{ asset('banner.jpg') }}" 
         alt="Products Banner" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10">
      <h1 class="text-3xl md:text-4xl font-bold text-white">Discover Our Premium Products</h1>
      <p class="mt-2 text-lg text-gray-200">Quality · Comfort · Performance</p>
    </div>
  </section>

   <div class="max-w-7xl mx-auto px-6 py-10">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      
      <!-- Sidebar (Categories) -->
      <aside class="md:col-span-1 bg-white rounded-xl shadow p-4">
        <h2 class="text-lg font-semibold mb-4 text-gray-800">Categories</h2>
        <ul class="space-y-2">
          @foreach($categories as $category => $subcategories)
            <li>
              <a href="{{ url('/products?category=' . urlencode($category)) }}"
                 class="block px-4 py-2 rounded-md 
                        {{ $selectedCategory === $category 
                          ? 'bg-blue-600 text-white' 
                          : 'text-gray-700 hover:bg-blue-100 hover:text-blue-800' }}">
                {{ $category }}
              </a>
            </li>
          @endforeach
        </ul>
      </aside>

      <!-- Products Grid -->
      <main class="md:col-span-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @forelse($products as $product)
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition duration-300 p-4">
              <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}"
                   class="w-full h-48 object-cover rounded-md">
              <h3 class="mt-4 text-lg font-semibold text-gray-800">{{ $product['name'] }}</h3>
              <p class="text-sm text-gray-500">{{ $product['category'] }}</p>
            </div>
          @empty
            <p class="col-span-full text-center text-gray-500">No products found.</p>
          @endforelse
        </div>
      </main>

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
