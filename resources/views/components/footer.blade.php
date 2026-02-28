<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-400">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

    <!-- About -->
    <div>
      <!-- <h3 class="text-xl font-bold text-white mb-4">Royco Jerseys</h3> -->
       <img src="{{ asset('ROYCO LOGO 2.png') }}" alt="Royco Logo" class="w-30 mb-3">
      <p class="text-sm leading-relaxed">
        We design premium custom jerseys and sportswear that combine
        performance, comfort, and style. Crafted for athletes, teams,
        and fans who want to stand out.
      </p>
    </div>

    <!-- Quick Links -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">Quick Links</h4>
      <ul class="space-y-3">
        <li><a href="{{ url('/gallery') }}" class="hover:text-cyan-400 transition">Products</a></li>
        <li><a href="#customize" class="hover:text-cyan-400 transition">Customize</a></li>
        <li><a href="#process" class="hover:text-cyan-400 transition">Process</a></li>
        <li><a href="#work" class="hover:text-cyan-400 transition">Work</a></li>
        <li><a href="#contact" class="hover:text-cyan-400 transition">Contact</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">Follow Us</h4>
      <div class="flex space-x-5">
        <a href="#" class="hover:text-cyan-400 transition">
          <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="hover:text-cyan-400 transition">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        <a href="#" class="hover:text-cyan-400 transition">
          <i class="fab fa-twitter text-xl"></i>
        </a>
        <a href="#" class="hover:text-cyan-400 transition">
          <i class="fab fa-linkedin-in text-xl"></i>
        </a>
      </div>
    </div>

    <!-- Contact / Extra -->
    <div>
      <h4 class="text-lg font-semibold text-white mb-4">Contact</h4>
      <ul class="space-y-2 text-sm">
        <li>Email: <a href="mailto:" class="hover:text-cyan-400">NA</a></li>
        <li>Phone: <a href="tel:+919830285919" class="hover:text-cyan-400">+91 98302 85919</a></li>
        <li>Location: 5 SARADA MATA LANE,RISHRA, HOOGHLY, near, SARADA MATA LANE, Rishra, West Bengal 712248</li>
      </ul>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-gray-700 py-6 text-center text-sm text-gray-500">
    <p>© <span id="year"></span> Royco Jerseys. All rights reserved.</p>
  </div>
</footer>

