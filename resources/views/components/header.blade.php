<!-- NAVBAR -->
<header class="fixed inset-x-0 top-0 z-50 transition">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <a href="{{ url('/') }}" class="flex items-center gap-3" data-aos="fade-down" data-aos-duration="700">
        <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-roy-500 to-roy-700 grid place-content-center font-display text-xl font-black">R</div>
        <span class="font-display text-lg font-bold tracking-wide">Royco Jerseys</span>
      </a>
      <nav class="hidden md:flex items-center gap-8 font-medium" data-aos="fade-down" data-aos-delay="100" data-aos-duration="700">
        
        <!-- Products dropdown -->
        <div class="relative group">
          <a href="{{ url('products') }}" class="hover:text-roy-300 flex items-center gap-1">
            Products <i class="fa-solid fa-angle-down"></i>
          </a>
          <div class="absolute left-0 mt-2 hidden w-56 rounded-lg bg-white shadow-lg group-hover:block">
            <ul class="py-2 text-gray-800">
              <li><a href="{{ url('products?category=Yoga+Costume') }}" class="block px-4 py-2 hover:bg-roy-100">Yoga costume</a>
              </li>
              <li><a href="{{ url('products?category=Athletics+Pant') }}" class="block px-4 py-2 hover:bg-roy-100">Athletics
                  pant</a></li>
              <li><a href="{{ url('products?category=Tracksuit+Set') }}" class="block px-4 py-2 hover:bg-roy-100">Tracksuit
                  set</a></li>
              <li><a href="{{ url('products?category=Slacks') }}" class="block px-4 py-2 hover:bg-roy-100">Slacks
                  (stretchable)</a></li>
              <li><a href="{{ url('products?category=Inners') }}"
                  class="block px-4 py-2 hover:bg-roy-100">Full sleeves inner (Stretchable)</a></li>
              <li><a href="{{ url('products?category=T-Shirt') }}" class="block px-4 py-2 hover:bg-roy-100">T-shirt</a></li>
              <li><a href="{{ url('products?category=Jersey+Set') }}" class="block px-4 py-2 hover:bg-roy-100">Jersey set</a></li>
              <li><a href="{{ url('products?category=Half+Pant') }}" class="block px-4 py-2 hover:bg-roy-100">Half pant</a></li>
              <li><a href="{{ url('products?category=Swimming+Costume') }}" class="block px-4 py-2 hover:bg-roy-100">Swimming
                  Costumes</a></li>
              <li><a href="{{ url('products?category=Bibs') }}" class="block px-4 py-2 hover:bg-roy-100">Bibs</a></li>
            </ul>
          
          </div>
        </div>
        
        <a href="#custom" class="hover:text-roy-300">Customize</a>
        <a href="{{ url('gallery') }}" class="hover:text-roy-300">Designs</a>
        <a href="#process" class="hover:text-roy-300">Process</a>
        <a href="{{ url('manufacture') }}" class="hover:text-roy-300">Manufacture</a>
        <a href="#contact" class="hover:text-roy-300">Contact</a>
        <a href="#quote" class="magnet inline-flex items-center gap-2 rounded-xl bg-roy-600 px-4 py-2 font-semibold shadow-glow hover:bg-roy-500">Get a Quote</a>
      </nav>

      <button id="openMenu" class="md:hidden magnet rounded-xl bg-white/10 px-3 py-2" aria-label="Open Menu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6"><path d="M3.75 5.25h16.5v1.5H3.75v-1.5zm0 6h16.5v1.5H3.75v-1.5zm0 6h16.5v1.5H3.75v-1.5z"/></svg>
      </button>
    </div>
  </div>
</header>

<!-- Mobile sidebar -->
<div id="sidebar" class="fixed inset-0 z-50 hidden">
  <div class="absolute inset-0 bg-black/50"></div>
  <aside class="ml-auto h-full w-80 bg-[#0c1326] p-6 shadow-2xl glass" data-aos="fade-left">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-roy-500 to-roy-700 grid place-content-center font-display text-xl font-black">R</div>
        <span class="font-display text-lg font-bold">Royco Jerseys</span>
      </div>
      <button id="closeMenu" class="rounded-xl bg-white/10 p-2" aria-label="Close Menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>

    <div class="mt-8 grid gap-4 text-lg">
      <!-- Mobile Products dropdown -->
      <details class="group">
        <summary class="flex cursor-pointer items-center justify-between hover:text-roy-300">
          Products <i class="fa-solid fa-angle-down mt-2"></i>
        </summary>
        <div class="ml-4 mt-2 space-y-2 text-base text-gray-200">
          <a href="{{ url('products?category=Yoga+Costume') }}" class="block hover:text-roy-300">Yoga costume</a>
          <a href="{{ url('products?category=Athletics+Pant') }}" class="block hover:text-roy-300">Athletics pant</a>
          <a href="{{ url('products?category=Tracksuit+Set') }}" class="block hover:text-roy-300">Tracksuit set</a>
          <a href="{{ url('products?category=Slacks') }}" class="block hover:text-roy-300">Slacks
            (stretchable)</a>
          <a href="{{ url('products?category=Inners') }}" class="block hover:text-roy-300">Full
            sleeves inner (Stretchable)</a>
          <a href="{{ url('products?category=T-Shirt') }}" class="block hover:text-roy-300">T-shirt</a>
          <a href="{{ url('products?category=Jersey+Set') }}" class="block hover:text-roy-300">Jersey set</a>
          <a href="{{ url('products?category=Half+Pant') }}" class="block hover:text-roy-300">Half pant</a>
          <a href="{{ url('products?category=Swimming+Costume') }}" class="block hover:text-roy-300">Swimming Costumes</a>
          <a href="{{ url('products?category=Bibs') }}" class="block hover:text-roy-300">Bibs</a>
        </div>
      </details>

      <a href="#custom" class="hover:text-roy-300">Customize</a>
      <a href="{{ url('gallery') }}" class="hover:text-roy-300">Designs</a>
      <a href="#process" class="hover:text-roy-300">Process</a>
      <a href="{{ url('manufacture') }}" class="hover:text-roy-300">Manufacture</a>
      <a href="#contact" class="hover:text-roy-300">Contact</a>
      <a href="#quote" class="mt-3 magnet inline-flex items-center justify-center gap-2 rounded-xl bg-roy-600 px-4 py-3 font-semibold shadow-glow hover:bg-roy-500">Get a Quote</a>
    </div>
  </aside>
</div>
