<footer class="bg-gray-900 text-white py-10 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo and Description -->
        <div class="flex flex-col items-center md:items-start">
            <img src="{{ asset('favicon/favicon.svg') }}" alt="Careea Logo" class="w-10 h-10 mb-2 animate-pulse">
            <h2 class="text-xl font-bold text-custom-pink">Careea News</h2>
            <p class="text-gray-400 mt-2 text-center md:text-left">Your gateway to career growth, innovation, and gender equality insights.</p>
        </div>

        <!-- Navigation Links -->
        <div class="flex flex-col text-center md:text-left space-y-2">
            <h3 class="font-semibold text-lg text-custom-pink">Explore</h3>
            <a class="text-gray-400 hover:text-custom-pink transition-colors duration-300" href="#">About Us</a>
            <a class="text-gray-400 hover:text-custom-pink transition-colors duration-300" href="#">Help</a>
            <a class="text-gray-400 hover:text-custom-pink transition-colors duration-300" href="#">Login</a>
            <a class="text-gray-400 hover:text-custom-pink transition-colors duration-300" href="#">Explore</a>
        </div>

        <!-- Social Media Links -->
        <div class="flex flex-col items-center md:items-start space-y-2">
            <h3 class="font-semibold text-lg text-custom-pink">Follow Us</h3>
            <div class="flex space-x-3">
                <a href="#" class="text-gray-400 hover:text-custom-pink transition-colors duration-300">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M22 5.99a8.11 8.11 0 01-2.34.64 4.08 4.08 0 001.8-2.26 8.2 8.2 0 01-2.61 1A4.1 4.1 0 0016.1 4a4.1 4.1 0 00-4.1 4.1c0 .32.04.64.1.95A11.65 11.65 0 013 5.47a4.1 4.1 0 00-1.27 2.8 4.1 4.1 0 001.83 3.41 4.08 4.08 0 01-1.85-.5v.05a4.1 4.1 0 003.3 4.02 4.08 4.08 0 01-1.85.07 4.1 4.1 0 003.83 2.84A8.25 8.25 0 012 19.54a11.63 11.63 0 006.29 1.85A11.6 11.6 0 0020.1 7.8c0-.18 0-.36-.01-.54A8.1 8.1 0 0022 5.99z"></path></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-custom-pink transition-colors duration-300">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.04c-5.49 0-9.96 4.47-9.96 9.96 0 4.98 3.65 9.13 8.42 9.86v-7h-2.53v-2.86h2.53v-2.16c0-2.5 1.47-3.89 3.73-3.89 1.08 0 2.22.2 2.22.2v2.43h-1.25c-1.23 0-1.61.76-1.61 1.55v1.87h2.74l-.44 2.86h-2.3v7c4.77-.73 8.42-4.88 8.42-9.86 0-5.49-4.47-9.96-9.96-9.96z"></path></svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-custom-pink transition-colors duration-300">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path d="M22.23 5.72a8.06 8.06 0 01-2.33.64 4.08 4.08 0 001.8-2.26 8.19 8.19 0 01-2.61 1 4.09 4.09 0 00-7 3.74 11.57 11.57 0 01-8.42-4.27 4.09 4.09 0 001.27 5.46 4.05 4.05 0 01-1.86-.51v.05a4.09 4.09 0 003.28 4.02 4.09 4.09 0 01-1.85.07 4.09 4.09 0 003.84 2.84A8.2 8.2 0 012 19.54a11.63 11.63 0 006.29 1.85 11.57 11.57 0 006.59-2.08 11.53 11.53 0 004.8-9.14v-.52a8.25 8.25 0 002.06-2.13z"></path></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Text -->
    <div class="text-center text-xs text-gray-500 mt-8">
        &copy; {{ date('Y') }} Careea News. All rights reserved.
    </div>
</footer>
