<nav class="text-white">
  <div class="container mx-auto flex items-center justify-between px-4 py-3">
    <!-- Logo -->
    <a href="#" class="flex items-center">
      <img src="./assets/images/logo.png" alt="logo" class="h-16 w-24" />
    </a>

    <!-- Mobile Toggle Button -->
    <button
      class="lg:hidden text-gray-400 focus:outline-none focus:text-white"
      type="button"
      onclick="toggleMobileMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Navbar Links for Large Screens -->
    <div class="hidden lg:flex items-center w-full justify-center" id="navbarNav">
      <ul class="flex space-x-8">
        <li>
          <a href="#" class="text-gray-300 hover:text-white">Home</a>
        </li>
        <li class="relative group">
          <a href="#" class="text-gray-300 hover:text-white flex items-center">
            Our Services
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </a>
          <!-- Dropdown -->
          <ul class="absolute hidden group-hover:block bg-gray-800 text-gray-300 rounded shadow-lg mt-2">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-700">Visa Assistance</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-700">Legal Consultation</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-700">Immigration Paperwork</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" class="text-gray-300 hover:text-white">About Us</a>
        </li>
        <li>
          <a href="#" class="text-gray-300 hover:text-white">Immigration Plans</a>
        </li>
      </ul>
    </div>

    <!-- Contact Button -->
    <a
      href="#"
      class="px-6 py-2 border border-white text-black font-medium rounded bg-white hover:bg-black hover:text-white lg:inline-block hidden whitespace-nowrap">
      Contact Us
    </a>
  </div>

  <!-- Mobile Menu -->
  <div class="lg:hidden hidden" id="mobileMenu">
    <ul class="flex flex-col space-y-4 px-4 py-3 bg-gray-900">
      <li>
        <a href="#" class="block text-gray-300 hover:text-white">Home</a>
      </li>
      <li>
        <a href="#" class="block text-gray-300 hover:text-white">Our Services</a>
      </li>
      <li>
        <a href="#" class="block text-gray-300 hover:text-white">About Us</a>
      </li>
      <li>
        <a href="#" class="block text-gray-300 hover:text-white">Immigration Plans</a>
      </li>
      <li>
        <a href="#" class="block text-gray-300 hover:text-white">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>