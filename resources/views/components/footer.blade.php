<footer class="bg-dark-bg py-12 px-6 border-t border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            
            <div class="text-center md:text-left space-y-2">
                <h2 class="text-2xl font-bold text-white tracking-tighter">
                    DEWA<span class="text-electric-purple">JULI.</span>
                </h2>
                <p class="text-soft-gray text-sm">
                    © 2026 Dewa Made Julijati Putra. All rights reserved.
                </p>
            </div>

            @php
                // Cek apakah sedang di halaman utama
                $isHome = Request::is('/');
            @endphp

            <nav class="flex flex-wrap justify-center gap-6 text-sm font-medium text-soft-gray">
                {{-- Link dinamis: Jika di home pakai #ID, jika tidak pakai URL lengkap --}}
                <a href="{{ $isHome ? '#hero' : url('/') }}" class="hover:text-electric-purple transition-colors">Beranda</a>
                <a href="{{ $isHome ? '#about' : url('/#about') }}" class="hover:text-electric-purple transition-colors">Tentang Saya</a>
                <a href="{{ $isHome ? '#projects' : url('/#projects') }}" class="hover:text-electric-purple transition-colors">Proyek</a>
                <a href="{{ $isHome ? '#experience' : url('/#experience') }}" class="hover:text-electric-purple transition-colors">Pengalaman</a>
                <a href="{{ $isHome ? '#contact' : url('/#contact') }}" class="hover:text-electric-purple transition-colors">Kontak</a>
            </nav>
            
        </div>
    </div>
</footer>