<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="flex h-full items-center">
    <main class="w-full max-w-md mx-auto p-6">
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
              Already have an account?
              <a wire:navigate class="text-blue-600 decoration-2 hover:underline font-medium dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/login">
                Sign in here
              </a>
            </p>
          </div>
          <hr class="my-5 border-slate-300">
          <!-- Form -->
          <form wire:submit.prevent="save">
            <div class="grid gap-y-4">
              <!-- Name Field -->
              <div>
                <label for="name" class="block text-sm mb-2 dark:text-white">Name</label>
                <div class="relative">
                  <input type="text" id="name" wire:model="name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="name-error">
                  @error('name')
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M18 10A8 8 0 11.458 6.042 8 8 0 0118 10zM10 6a1 1 0 00-1 1v4a1 1 0 002 0V7a1 1 0 00-1-1zm0 8a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('name')
                <p class="text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                @enderror
              </div>
              <!-- Email Field -->
              <div>
                <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                <div class="relative">
                  <input type="email" id="email" wire:model="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="email-error">
                  @error('email')
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M18 10A8 8 0 11.458 6.042 8 8 0 0118 10zM10 6a1 1 0 00-1 1v4a1 1 0 002 0V7a1 1 0 00-1-1zm0 8a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('email')
                <p class="text-xs text-red-600 mt-2" id="email-error">{{ $message }}</p>
                @enderror
              </div>
              <!-- Password Field -->
              <div>
                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                <div class="relative">
                  <input type="password" id="password" wire:model="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" aria-describedby="password-error">
                  @error('password')
                  <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M18 10A8 8 0 11.458 6.042 8 8 0 0118 10zM10 6a1 1 0 00-1 1v4a1 1 0 002 0V7a1 1 0 00-1-1zm0 8a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/>
                    </svg>
                  </div>
                  @enderror
                </div>
                @error('password')
                <p class="text-xs text-red-600 mt-2" id="password-error">{{ $message }}</p>
                @enderror
              </div>
              <!-- Submit Button -->
              <button type="submit" class="w-full py-3 px-4 text-sm font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-1">
                Sign up
              </button>
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </main>
  </div>
</div>
