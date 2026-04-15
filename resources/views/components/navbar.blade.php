<nav class="bg-dark-bg/90 backdrop-blur-sm fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
        {{-- Logo --}}
        <a href="{{ Request::is('/') ? '#hero' : url('/') }}" class="text-2xl font-extrabold text-electric-purple tracking-tighter">
            Juli<span class="text-white">Portofolio</span>
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden md:flex items-center gap-8">
            @php
                $isHome = Request::is('/');
                $menuItems = [
                    ['name' => 'Beranda', 'url' => '#hero'],
                    ['name' => 'Tentang Saya', 'url' => '#about'],
                    ['name' => 'Proyek', 'url' => '#projects'],
                    ['name' => 'Pengalaman', 'url' => '#experience'],
                    ['name' => 'Sertifikat', 'url' => '#certificate'],
                ];
            @endphp

            @foreach($menuItems as $item)
                <a href="{{ $isHome ? $item['url'] : url('/' . $item['url']) }}" 
                   class="text-soft-gray hover:text-white transition-colors text-base font-medium nav-link">
                    {{ $item['name'] }}
                </a>
            @endforeach
            
            <a href="{{ $isHome ? '#contact' : url('/#contact') }}" 
               class="px-6 py-2.5 border border-electric-purple text-electric-purple rounded-lg font-semibold text-base hover:bg-electric-purple hover:text-white transition-all nav-link">
                Kontak
            </a>
        </div>

        {{-- Mobile Button --}}
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    {{-- Mobile Menu Overlay --}}
    <div id="mobile-menu" class="hidden md:hidden bg-dark-bg/95 border-b border-white/5 px-6 py-8 transition-all duration-300">
        <div class="flex flex-col gap-6">
            @foreach($menuItems as $item)
                <a href="{{ $isHome ? $item['url'] : url('/' . $item['url']) }}" 
                   class="text-soft-gray hover:text-white text-lg font-medium mobile-link">
                    {{ $item['name'] }}
                </a>
            @endforeach
            <a href="{{ $isHome ? '#contact' : url('/#contact') }}" 
               class="text-electric-purple font-bold text-lg mobile-link">
                Kontak Saya
            </a>
        </div>
    </div>
</nav>