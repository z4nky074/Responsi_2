<footer class="relative overflow-hidden bg-slate-950 text-gray-400">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[40rem] -right-[40rem] w-[80rem] h-[80rem] rounded-full bg-blue-600/5"></div>
        <div class="absolute -bottom-[40rem] -left-[40rem] w-[80rem] h-[80rem] rounded-full bg-blue-600/5"></div>
    </div>

    <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-16">
            {{-- Top Section with Logo and Quick Links --}}
            <div class="grid grid-cols-1 lg:grid-cols-6 gap-12 pb-16 border-b border-gray-800/50">
                {{-- Logo Section --}}
                <div class="lg:col-span-2 space-y-6">
                    <a href="/" class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="w-12 h-12 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-xl flex items-center justify-center shadow-xl">
                                <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 2L2 8L12 14L22 8L12 2Z" stroke="currentColor" stroke-width="2" />
                                    <path d="M2 14L12 20L22 14" stroke="currentColor" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="absolute -inset-0.5 bg-gradient-to-tr from-blue-600 to-blue-400 rounded-xl blur-lg opacity-30 group-hover:opacity-50 transition"></div>
                        </div>
                        <span class="text-3xl font-bold text-white">SkyHigh</span>
                    </a>
                    <p class="text-lg text-gray-400 max-w-sm">
                        Elevate your shopping experience with premium products and exceptional service.
                    </p>
                </div>

                {{-- Quick Links Sections --}}
                <div class="lg:col-span-4 grid grid-cols-1 sm:grid-cols-3 gap-8">
                    {{-- Products --}}
                    <div class="space-y-6">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <h4 class="text-lg font-semibold text-white">Products</h4>
                        </div>
                        <ul class="space-y-4">
                            @foreach(['Categories', 'All Products', 'New Arrivals'] as $item)
                                <li>
                                    <a href="#" class="group flex items-center text-gray-400 hover:text-white transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-2 text-gray-600 group-hover:text-blue-400 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Company --}}
                    <div class="space-y-6">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <h4 class="text-lg font-semibold text-white">Company</h4>
                        </div>
                        <ul class="space-y-4">
                            @foreach(['About Us', 'Blog', 'Careers'] as $item)
                                <li>
                                    <a href="#" class="group flex items-center text-gray-400 hover:text-white transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-2 text-gray-600 group-hover:text-blue-400 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Support --}}
                    <div class="space-y-6">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <h4 class="text-lg font-semibold text-white">Support</h4>
                        </div>
                        <ul class="space-y-4">
                            @foreach(['Help Center', 'Contact Us', 'FAQs'] as $item)
                                <li>
                                    <a href="#" class="group flex items-center text-gray-400 hover:text-white transition-colors duration-200">
                                        <svg class="w-4 h-4 mr-2 text-gray-600 group-hover:text-blue-400 transition-colors" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                        {{ $item }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Bottom Section --}}
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500">
                    © {{ date('Y') }} SkyHigh. All rights reserved.
                </p>
                
                {{-- Social Links --}}
                <div class="flex items-center space-x-4">
                    @foreach([
                        ['icon' => 'facebook', 'label' => 'Facebook'],
                        ['icon' => 'twitter', 'label' => 'Twitter'],
                        ['icon' => 'instagram', 'label' => 'Instagram']
                    ] as $social)
                        <a href="#" class="group relative p-2" aria-label="{{ $social['label'] }}">
                            <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 opacity-0 group-hover:opacity-100 blur transition-opacity"></div>
                            <div class="relative p-2 bg-gray-800 rounded-full group-hover:bg-gray-900 transition-colors">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    @if($social['icon'] === 'facebook')
                                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.183 3.946 9.45 9 9.95v-7.05H8v-3h3v-2c0-2.208 1.284-3.417 3.5-3.417.765 0 1.5.057 1.5.057v3h-1c-1 0-1.5.896-1.5 1.5v2h3l-.5 3h-2.5v7.05c5.054-.5 9-4.767 9-9.95z"/>
                                    @elseif($social['icon'] === 'twitter')
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                                    @else
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    @endif
                                </svg>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>