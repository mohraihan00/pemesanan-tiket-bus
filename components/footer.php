<!-- Footer -->
<footer class="bg-gray-100 mt-24 border-t border-gray-300">
  <div class="container mx-auto px-4 py-10 flex flex-col md:flex-row justify-between gap-8">
    <!-- Brand & Sosmed -->
    <div class="flex flex-col gap-4 md:w-1/3">
      <div class="flex items-center gap-3">
        <img src="./images/logo_gobus.png" alt="Logo" class="w-[180px]" />
        <p class="text-lg font-semibold text-gray-800">GoBus</p>
      </div>
      <div class="flex space-x-4">
        <a href="#"><i class="fab fa-instagram text-2xl"></i></a>
        <a href="#"><i class="fab fa-facebook text-2xl"></i></a>
        <a href="#"><i class="fab fa-whatsapp text-2xl"></i></a>
      </div>
    </div>

    <!-- Global Coverage -->
    <div class="md:w-1/3">
      <h4 class="text-sm font-semibold uppercase text-gray-700 mb-3">Global Coverage</h4>
      <ul class="space-y-2 text-sm text-gray-600">
        <li><a href="#" class="hover:text-green-700">All routes</a></li>
        <li><a href="#" class="hover:text-green-700">All stations</a></li>
        <li><a href="#" class="hover:text-green-700">All cities with routes</a></li>
        <li><a href="#" class="hover:text-green-700">Points of interest</a></li>
        <li><a href="#" class="hover:text-green-700">Disruptions</a></li>
        <li><a href="#" class="hover:text-green-700">Companies</a></li>
      </ul>
    </div>

    <!-- Company -->
    <div class="md:w-1/3">
      <h4 class="text-sm font-semibold uppercase text-gray-700 mb-3">Company</h4>
      <ul class="space-y-2 text-sm text-gray-600">
        <li><a href="#" class="hover:text-green-700">About</a></li>
        <li><a href="#" class="hover:text-green-700">Careers</a></li>
        <li><a href="#" class="hover:text-green-700">Partnership</a></li>
        <li><a href="#" class="hover:text-green-700">API Partner</a></li>
        <li><a href="#" class="hover:text-green-700">Blog</a></li>
        <li><a href="#" class="hover:text-green-700">Help</a></li>
      </ul>
    </div>
  </div>

  <div class="bg-gray-200 text-center py-4 text-sm text-gray-700">
    <p>&copy; <?= date('Y') ?> GoBus. All rights reserved.</p>
    <div class="mt-2 space-x-4">
      <a href="#" class="hover:text-green-700">Terms</a>
      <span>•</span>
      <a href="#" class="hover:text-green-700">Privacy</a>
      <span>•</span>
      <a href="#" class="hover:text-green-700">Refund Policy</a>
    </div>
  </div>
</footer>
