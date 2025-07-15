<footer class="bg-[#2C3930] text-gray-300 py-8 px-16">
  <div class="flex justify-between items-start mx-auto px-6">
    <div class="max-w-[300px]">
      <div class="flex mb-2">
            <img class="h-15 w-15" src="/images/logoputih.svg" alt="">
            <h1 class="text-2xl text-white px-4 font-bold">TAMAN <br /> EDELWEIS</h1>
        </div>
      <p class="text-gray-400 mb-6">
        Nikmati keindahan alam Bali di Taman Edelweiss, tempat yang sempurna untuk bersantai dan menikmati keindahan bunga Edelweiss yang langka.
    </div>

    <div class="flex flex-col text-start">
      <h1 class="font-bold text-white text-lg mb-4">Information</h1>
        <div class="flex flex-col space-y-1">
        <a href="{{ url('/#') }}" class="text-gray-400 hover:text-white">Home</a>
        <a href="{{ url('/#about') }}" class="text-gray-400 hover:text-white">About</a>
        <a href="{{ url('/#location') }}" class="text-gray-400 hover:text-white">Location</a>
        <a href="{{ url('/#gallery') }}" class="text-gray-400 hover:text-white">Gallery</a>
        <a href="{{ url('/#ticket') }}" class="text-gray-400 hover:text-white">Ticket</a>
        </div>
    </div>

    <div class="flex flex-col text-start -mt-0 max-w-[300px]">
      <h1 class="font-bold text-lg mb-6 text-white">Have a Questions?</h1>
        <div class="flex items-start pb-3 space-x-4">
            <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 0 1 6 0z" />
            </svg>
                <p class="text-gray-400">Besakih, Banjar Temukus, Kabupaten Karangasem, Bali 80863</p>
        </div>
        <div class="flex items-start space-x-4">
            <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <p class="text-gray-400">+62 812-3456-7890</p>
        </div>
        <div class="flex items-start pt-3 space-x-4">
                <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            <a href="mailto:info@tamanedelweisbali.com" class="text-gray-400 hover:text-green-800 hover:underline transition-colors duration-200 ease-in-out">info@tamanedelweisbali.com</a>
        </div>
    </div>
  </div>
    <div class="mt-4 border-t border-white pt-6 text-center text-sm text-white">
        © 2025 Taman EdelWeis. All rights reserved.
    </div>
</footer>

    {{-- <div class="flex items-start py-6 space-x-4">
        <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
        <p class="text-gray-700">+62 812-3456-7890</p>
    </div> --}}


      {{-- <!-- Kolom Kiri -->
      <div class="">
        <h1 class="font-bold text-xl mb-4">Taman EdelWeis Bali</h1>
        <p class="text-gray-400 mb-6">
          Nikmati keindahan alam Bali di Taman Edelweiss, tempat yang sempurna untuk bersantai dan menikmati keindahan bunga Edelweiss yang langka. Kami menyediakan pengalaman wisata yang
        </p>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-twitter text-xl"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-facebook-f text-xl"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-instagram text-xl"></i>
          </a>
        </div>
      </div>

      <!-- Kolom Tengah -->
      <div>
        <h3 class="font-bold text-lg mb-4">Information</h3>
        <ul class="space-y-2 text-[12px] text-gray-400">
          <li><a href="{{ url('/#') }}" class="hover:text-white">Home</a></li>
          <li><a href="{{ url('/#about') }}" class="hover:text-white">About</a></li>
          <li><a href="{{ url('/#location') }}" class="hover:text-white">Location</a></li>
          <li><a href="{{ url('/#gallery') }}" class="hover:text-white">Gallery</a></li>
          <li><a href="{{ url('/#ticket') }}" class="hover:text-white">Ticket</a></li>
        </ul>
      </div>

      <!-- Kolom Kanan -->
      <div class="mt-6">
        <h3 class="font-bold text-lg mb-6">Have a Questions?</h3>
        <ul class="space-y-2 text-gray-400 text-sm">
          <li class="flex items-start">
            <i class="fas fa-map-marker-alt mr-2 mt-1 text-white"></i>
            <span>Besakih, Banjar Temukus, Kabupaten Karangasem, Bali 80863</span>
          </li>
          <li class="flex items-center">
            <i class="fas fa-phone mr-2 text-white"></i>
            <span>+62 812-3456-7890</span>
          </li>
          <li class="flex items-center">
            <i class="fas fa-envelope mr-2 text-white"></i>
            <span>TamanEdelweisBali@gmail.com</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-10 border-t border-gray-600 pt-6 text-center text-sm text-gray-400">
      © 2025 Taman EdelWeis. All rights reserved.
    </div>
  </div> --}}

