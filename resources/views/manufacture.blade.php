<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manufacture | Royco Jerseys</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-[#0c1326] text-gray-200">

    @include('components.header')

    <!-- HERO -->
    <section class="relative h-[90vh] flex items-center bg-black">
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('video/page-back.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Text Content -->
        <div class="relative z-10 max-w-4xl px-6 ml-10 md:ml-20">
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-white leading-tight">
                Your <span class="italic">Trusted</span> Tailoring <br>
                Made <span class="italic">Simple</span>
            </h1>
            <a href="#about"
                class="mt-8 inline-block bg-[#b08968] hover:bg-[#a17759] text-white font-medium px-6 py-3 rounded shadow-md transition">
                Learn More
            </a>
        </div>

        <!-- Floating Right Icons -->
        <div class="absolute right-4 top-1/2 -translate-y-1/2 space-y-4 z-10">
            <a href="#" class="block bg-[#b08968] hover:bg-[#a17759] p-3 rounded shadow-md text-white">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="#" class="block bg-[#b08968] hover:bg-[#a17759] p-3 rounded shadow-md text-white">
                <i class="fa-solid fa-image"></i>
            </a>
            <a href="#" class="block bg-[#b08968] hover:bg-[#a17759] p-3 rounded shadow-md text-white">
                <i class="fa-solid fa-wallet"></i>
            </a>
        </div>

        <!-- Scroll Down -->
        <div class="absolute bottom-6 right-6 z-10 flex items-center gap-2 text-white text-sm">
            <span>Scroll Down</span>
            <i class="fa-solid fa-arrow-down-long"></i>
        </div>
    </section>



  <!-- INTRO -->
  <section class="py-20 bg-[#f8f5f1]">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <!-- Left Images -->
        <div class="relative flex justify-center md:justify-start">
        <img src="{{ asset('manufacture-img/manufacture3.jpeg') }}" alt="Threads" class="w-96 md:w-full rounded-lg shadow-lg">
        <img src="{{ asset('manufacture-img/manufacture2.jpeg') }}" alt="Tailor at work" 
            class="absolute -bottom-10 right-5 w-64 md:w-96 rounded-lg shadow-2xl border-4 border-white">
        </div>

        <!-- Right Text -->
        <div class="text-left">
        <p class="uppercase tracking-widest text-sm font-semibold text-gray-500 mb-3">Personal Tailor</p>
        <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 leading-snug mb-6">
            We'll Create Your <br> Perfect Suit
        </h2>
        <p class="text-gray-600 mb-6">
            We appreciate your trust greatly. Our clients choose us and our products because they know we are the best.
        </p>
        <div class="text-sm mb-6">
            <p class="text-gray-800 font-medium">Mon–Fri: <span class="text-gray-600">9 AM – 10 PM</span></p>
            <p class="text-gray-800 font-medium">Saturday: <span class="text-gray-600">9 AM – 8 PM</span></p>
        </div>
        <a href="#about" 
            class="inline-block bg-[#b08968] hover:bg-[#a17759] text-white px-6 py-3 rounded-md font-medium shadow-md transition">
            About Us
        </a>
        </div>

    </div>
    </section>


  <!-- PRODUCTS -->
<section class="py-20 bg-[#f8f5f1]">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Heading -->
    <h2 class="text-4xl md:text-5xl font-serif font-bold text-center text-gray-900 mb-14">
      Products We Manufacture
    </h2>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12 text-center">

      <!-- Item -->
      <div class="group">
        <i class="fa-solid fa-shirt text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Yoga Costume</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Designed for flexibility and comfort, perfect for yoga and pilates sessions.
        </p>
      </div>

      <div class="group">
        <i class="fa-solid fa-person-running text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Athletics Pant</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Performance-oriented pants tailored for running, gym, and training.
        </p>
      </div>

      <div class="group">
        <i class="fa-solid fa-vest text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Tracksuit Set</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Stylish and comfortable, perfect for warm-ups and casual wear.
        </p>
      </div>

      <div class="group">
        <i class="fa-solid fa-ruler-vertical text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Slacks (Stretchable)</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Highly flexible slacks engineered for comfort and movement.
        </p>
      </div>

      <div class="group">
        <i class="fa-solid fa-shirt-long-sleeve text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">Full Sleeves Inner</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Stretchable innerwear for enhanced comfort and thermal regulation.
        </p>
      </div>

      <div class="group">
        <i class="fa-solid fa-tshirt text-4xl text-[#b08968] mb-4 group-hover:scale-110 transition"></i>
        <h3 class="text-xl font-semibold mb-2 text-gray-900">T-shirt & Jerseys</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Custom sports T-shirts and jersey sets for teams and organizations.
        </p>
      </div>

    </div>
  </div>
</section>


    <!-- PROCESS -->
    <section class="py-20 bg-[#f8f5f1]">
        <div class="">
    
            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">Our Manufacturing Process</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                    From concept to completion, each step is carefully executed to craft sportswear
                    that blends style, comfort, and durability.
                </p>
            </div>
    
            <div class="space-y-20">
                <!-- Step 1 -->
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <img src="{{ asset('manufacture-img/design.jpeg') }}" alt="Designing" class="">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 px-6">Design</h3>
                        <p class="text-gray-600 px-6">
                            At Royco Sports, we are committed to conceptualizing and creating sportswear that goes beyond the ordinary. Each piece is designed with a modern touch, seamlessly blending high-performance functionality with contemporary style. Our mission is to empower athletes and fitness enthusiasts with apparel that not only enhances performance but also makes a bold statement. From breathable fabrics and ergonomic fits to trend-driven designs, every detail reflects our dedication to innovation, comfort, and durability. With Royco Sports, you don’t just wear sportswear—you wear confidence, energy, and style that keeps you moving forward.
                        </p>
                    </div>
                </div>
    
                <!-- Step 2 -->
                <div class="grid md:grid-cols-2 gap-10 items-center md:flex-row-reverse">
                    <img src="{{ asset('manufacture-img/cutting.jpeg') }}" alt="Fabric Cutting" class="md:order-2">
                    <div class="md:order-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 px-6">Fabric Cutting</h3>
                        <p class="text-gray-600 px-6">
                            At Royco Sports, precision cutting lies at the heart of our craftsmanship. Every stitch, seam, and contour is carefully engineered to ensure the perfect fit that complements the body’s natural movement. This meticulous attention to detail not only enhances the overall structure of our apparel but also guarantees long-lasting wearability, even through the most intense training sessions or competitive performances. By combining advanced cutting techniques with premium fabrics, we create sportswear that delivers unmatched comfort, durability, and style—designed to perform as hard as you do.
                        </p>
                    </div>
                </div>
    
                <!-- Step 3 -->
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <img src="{{ asset('manufacture-img/stitching.jpeg') }}" alt="Stitching" class="">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 px-6">Stitching</h3>
                        <p class="text-gray-600 px-6">
                            At Royco Sports, expert tailoring is more than just a process—it’s a promise. Our skilled craftsmanship combines years of experience with modern techniques to create sportswear that feels as good as it performs. Every garment is carefully tailored to deliver an impeccable fit, ensuring complete freedom of movement without compromising on style. With reinforced stitching, premium materials, and an unwavering focus on detail, our apparel is built to last, offering unmatched comfort and durability both on and off the field. It’s this dedication to tailoring excellence that makes Royco Sports a trusted choice for athletes who demand the very best.
                        </p>
                    </div>
                </div>
    
                <!-- Step 4 -->
                <div class="grid md:grid-cols-2 gap-10 items-center md:flex-row-reverse">
                    <img src="{{ asset('manufacture-img/check.jpeg') }}" alt="Quality Check" class="md:order-2">
                    <div class="md:order-1">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 px-6">Quality Check</h3>
                        <p class="text-gray-600 px-6">
                            At Royco Sports, quality is never an afterthought—it is a commitment. Each product we create undergoes strict and thorough testing at multiple stages of production to ensure it not only meets but exceeds global quality standards. From fabric durability and color fastness to flexibility, breathability, and overall performance, every detail is carefully evaluated. This rigorous process guarantees that our apparel stands strong under pressure, delivering consistent comfort, resilience, and reliability. With Royco Sports, athletes can be confident that they are wearing sportswear built on trust, precision, and world-class quality.
                        </p>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

    <!-- MEET OUR TEAM -->
    <section class="py-20 bg-[#f8f5f1]">
    <div class="max-w-6xl mx-auto px-6 text-center">
        
        <!-- Section Heading -->
        <h2 class="text-4xl md:text-5xl font-serif font-bold text-gray-900">Meet Our Team</h2>
        <p class="text-gray-600 mt-4 mb-12 max-w-2xl mx-auto">
        The heart of Royco lies in its people — skilled designers, passionate craftsmen, 
        and quality experts who work together to deliver excellence.
        </p>

        <!-- Team Image -->
        <div>
        <img src="{{ asset('manufacture-img/team.jpeg') }}" alt="Our Team" 
            class="rounded-xl shadow-2xl mx-auto">
        </div>

    </div>
    </section>






  <!-- CTA -->
  <section class="bg-gradient-to-r from-[#C19A5B] to-[#C19A5B] py-20 text-center text-white">
    <h2 class="text-4xl font-bold mb-6">Partner with Royco for Premium Manufacturing</h2>
    <p class="max-w-2xl mx-auto mb-8 text-lg">Whether it’s jerseys, tracksuits, or custom sportswear, we deliver products that inspire confidence and performance.</p>
    <a href="#quote" class="bg-white text-roy-700 px-6 py-3 rounded-xl font-semibold shadow-lg hover:bg-gray-100 transition">Get a Quote</a>
  </section>

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
