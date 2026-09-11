<header class="sticky top-0 z-50 bg-ink/95 backdrop-blur border-b-2 border-surface">
    <nav class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <a href="#home" class="flex items-center gap-3 shrink-0">
                <img src="images/gym_logo.jpg" alt="GT Fitness logo" class="h-11 w-11 object-cover rounded-sm">
                <span class="font-display font-semibold text-xl tracking-wide">GT FITNESS</span>
            </a>

            <div class="hidden lg:flex items-center gap-8 font-display uppercase text-sm tracking-wide">
                <a href="#home" class="hover:text-red transition-colors">Home</a>
                <a href="#about" class="hover:text-red transition-colors">About</a>
                <a href="#plans" class="hover:text-red transition-colors">Plans</a>
                <a href="#services" class="hover:text-red transition-colors">Services</a>
                <a href="#gallery" class="hover:text-red transition-colors">Gallery</a>
                <a href="#contact" class="hover:text-red transition-colors">Contact</a>
            </div>

            <div class="hidden lg:flex items-center gap-3">
                <x-button href="https://www.facebook.com/profile.php?id=61558571424663" variant="ghost">Message Us</x-button>
                <x-button href="#plans" variant="primary">Join Now</x-button>
            </div>

            <button id="menu-btn" class="lg:hidden text-bone" aria-label="Open menu" aria-expanded="false">
                <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden pb-6 flex flex-col gap-4 font-display uppercase text-sm tracking-wide border-t border-surface pt-5">
            <a href="#home" class="hover:text-red">Home</a>
            <a href="#about" class="hover:text-red">About</a>
            <a href="#plans" class="hover:text-red">Plans</a>
            <a href="#services" class="hover:text-red">Services</a>
            <a href="#gallery" class="hover:text-red">Gallery</a>
            <a href="#contact" class="hover:text-red">Contact</a>
            <x-button href="#plans" variant="primary" class="mt-2 w-full">Join Now</x-button>
        </div>
    </nav>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        menuBtn.addEventListener('click', () => {
            const isHidden = menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
            menuBtn.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
        });
    </script>
</header>
