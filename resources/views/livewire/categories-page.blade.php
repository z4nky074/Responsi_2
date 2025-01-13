<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">

      <!-- Unique Card for Voucher Game -->
       @foreach ($categories as $category)
       <a class="group flex flex-col bg-white border-2 border-gray-200 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out transform hover:scale-105" href="#" wire:key="{{ $category->id }}">
        <div class="p-6 flex flex-col justify-between">
          <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-4">
              <div class="h-[5rem] w-[5rem] bg-gradient-to-r from-green-400 to-blue-500 rounded-lg flex items-center justify-center">
                <img class="h-12 w-12 object-cover" src="{{ url('storage', $category->image) }}" alt="{{ $category->name }}">
              </div>
              <div>
                <h3 class="group-hover:text-blue-600 text-xl font-semibold text-gray-800 dark:text-gray-200">{{ $category->name }}</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">The best vouchers for your gaming experience.</p>
              </div>
            </div>
            <div class="flex items-center justify-center p-2 bg-gray-100 rounded-full hover:bg-blue-600 transition-all duration-300">
              <svg class="w-5 h-5 text-gray-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
              </svg>
            </div>
          </div>
          
          <div class="bg-gray-100 p-4 rounded-lg mt-5 text-center">
            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">Rp.50.000</p>
            <span class="text-sm text-gray-500">Available for purchase</span>
          </div>
        </div>
      </a>
       @endforeach
      

    </div>
  </div>
</div>
