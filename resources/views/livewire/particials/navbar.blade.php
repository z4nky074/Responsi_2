<header class="flex z-50 sticky top-0 flex-wrap md:justify-start md:flex-nowrap w-full bg-gradient-to-r from-blue-500 to-purple-600 text-sm py-4 text-white shadow-lg">
  <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
    <div class="relative md:flex md:items-center md:justify-between">
      <div class="flex items-center justify-between">
        <a class="flex-none text-2xl font-bold tracking-wide" href="/" aria-label="Brand">SkyHigh</a>
        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle flex justify-center items-center w-10 h-10 text-sm font-semibold rounded-lg bg-white text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 md:block">
        <div class="flex flex-col md:flex-row md:items-center md:justify-end gap-4 mt-4 md:mt-0">
          <a wire:navigate class="font-medium transition-all duration-200 hover:scale-105 hover:text-blue-200" href="/" aria-current="page">Home</a>
          <a wire:navigate class="font-medium transition-all duration-200 hover:scale-105 hover:text-blue-200" href="/categories">Categories</a>
          <a wire:navigate class="font-medium transition-all duration-200 hover:scale-105 hover:text-blue-200" href="/products">Products</a>

          @auth
          <a class="font-medium flex items-center gap-2 transition-all duration-200 hover:scale-105 hover:text-blue-200" href="/cart">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
            <span>Cart</span>
            <span class="py-0.5 px-1.5 rounded-full text-xs font-medium bg-white text-blue-500">1</span>
          </a>

          <div class="hs-dropdown md:py-4">
            <button type="button" class="flex items-center gap-2 text-white">
              {{ auth()->user()->name }}
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
              </svg>
            </button>

            <div class="hs-dropdown-menu hidden mt-2 bg-white text-gray-700 rounded-lg shadow-lg">
              <a class="block px-4 py-2 hover:bg-gray-100" href="#">My Orders</a>
              <a class="block px-4 py-2 hover:bg-gray-100" href="#">My Account</a>
              <a class="block px-4 py-2 text-red-500 hover:bg-red-100" href="/logout">Logout</a>
            </div>
          </div>
          @endauth

          @guest
          <a wire:navigate class="py-2.5 px-4 inline-flex items-center text-sm font-semibold bg-white text-blue-600 rounded-lg shadow-md hover:bg-gray-200" href="/login">
            Log in
          </a>
          @endguest
        </div>
      </div>
    </div>
  </nav>
</header>
