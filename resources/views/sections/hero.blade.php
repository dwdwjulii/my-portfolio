<section id="hero" class="min-h-screen bg-dark-bg flex items-center pt-32 pb-16 px-6 relative overflow-hidden">
    
    {{-- Dekorasi Latar Belakang --}}
    <div class="absolute w-24 h-24 border-2 border-electric-purple/20 rounded-full blur-sm top-[20%] left-[5%] animate-pulse"></div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-12 lg:gap-16 relative z-10">
        
        {{-- SISI KIRI: Konten Teks --}}
        <div class="space-y-6 text-center lg:text-left order-2 lg:order-1 mt-8 lg:mt-0">
            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight opacity-90">
                Haii
            </h2>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight tracking-tighter">
                Saya <span class="text-electric-purple">Dewa Juli</span>
            </h1>
            <p class="text-lg md:text-xl font-semibold text-soft-gray tracking-wide flex items-center justify-center lg:justify-start gap-2">
                Web Developer <span class="text-electric-purple/50">|</span> <span class="text-sm md:text-base font-normal">Sarjana Komputer</span>
            </p>
            
            <div class="w-16 h-0.5 bg-electric-purple mx-auto lg:mx-0"></div>

            <p class="text-base md:text-base text-soft-gray leading-relaxed text- max-w-xl mx-auto lg:mx-0 opacity-80">
                Memiliki kompetensi dalam pengembangan sistem berbasis web dengan fokus pada Front End Developer serta tujuan untuk terus berkembang di bidang teknologi informasi dan berkontribusi dalam pengembangan solusi digital yang inovatif
            </p>

            {{-- Button Section --}}
            <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6 pt-4 justify-center lg:justify-start">
                <a href="{{ asset('storage/pdf/CV_Dewa_Made_Julijati_Putra.pdf') }}" 
                    download="CV_Dewa_Made_Julijati_Putra" class="w-full sm:w-auto px-7 py-3 md:px-8 md:py-3.5 bg-electric-purple text-white rounded-xl font-bold text-base md:text-lg hover:bg-purple-700 transition-all hover:shadow-[0_0_20px_rgba(109,40,217,0.5)] flex items-center justify-center gap-2.5 group">
                    Download CV
                </a>
                <a href="#projects" 
                    class="w-full sm:w-auto px-7 py-3 md:px-8 md:py-3.5 border border-white/20 text-white rounded-xl font-bold text-base md:text-lg hover:border-electric-purple hover:text-electric-purple transition-all flex items-center justify-center gap-2 group">
                        Proyek Saya
                </a>
            </div>
        </div>

        {{-- SISI KANAN: Visual Foto dengan Frame Clipping (SOLUSI TERBAIK) --}}
        <div class="relative flex justify-center items-center lg:justify-end order-1 lg:order-2">
            
            <div class="absolute w-[280px] h-[280px] md:w-[400px] md:h-[400px] bg-electric-purple/20 rounded-full blur-[80px] animate-pulse"></div>
            
            <div class="relative w-[230px] h-[230px] md:w-[330px] md:h-[330px] rounded-full border border-white/10 bg-white/[0.02] flex items-end justify-center overflow-hidden transition-transform duration-500 hover:scale-[1.02] shadow-[inset_0_0_30px_rgba(109,40,217,0.1)]">
                
                @if(file_exists(public_path('images/hero/juli.webp')))
                    <img src="{{ asset('images/hero/juli.webp') }}" alt="Dewa Juli" 
                         class="h-[105%] w-auto max-w-none object-contain mb-0 transform transition-transform duration-500 hover:scale-110">
                @else
                    <div class="mb-20 text-white opacity-20 font-bold uppercase tracking-widest text-xs">Foto Belum Ada</div>
                @endif

                <div class="absolute inset-0 rounded-full pointer-events-none shadow-[inset_0_0_40px_rgba(109,40,217,0.15)]"></div>
            </div>
        </div>
    </div>

    {{-- Social Media Links --}}
    <div class="absolute bottom-10 right-10 items-center gap-4 text-white z-20 hidden md:flex">
        <p class="text-sm font-bold tracking-widest uppercase opacity-50">Temukan saya di</p>
        <div class="h-[1px] w-8 bg-white/20"></div>
        
        @php
            $socials = [
                [
                    'name' => 'Facebook', 
                    'url' => 'https://www.facebook.com/share/1XzgGzS3T4/', 
                    'path' => '<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>'
                ],
                [
                    'name' => 'Instagram', 
                    'url' => 'https://www.instagram.com/dewahjuli/', 
                    // Path Instagram yang akurat dengan lubang lensa di tengah
                    'path' => '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.919-.058-1.265-.069-1.646-.069-4.849 0-3.204.012-3.583.069-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.668-.072-4.948-.197-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>'
                ],
                [
                    'name' => 'WhatsApp', 
                    'url' => 'https://wa.me/6285847269750?text=Halo%20Juli,%20saya%20ingin%20berkolaborasi%20dengan%20Anda.', 
                    // FIX: Path WhatsApp Solid yang identik dengan aslinya
                    'path' => '<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.993c-.001 5.45-4.436 9.884-9.888 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.414 0 0 5.414 0 12.05c0 2.123.552 4.197 1.6 6.037L0 24l6.105-1.603a11.81 11.81 0 005.94 1.6c6.63 0 12.045-5.414 12.045-12.047a11.82 11.82 0 00-3.542-8.528z"/>'
                ],
                [
                    'name' => 'LinkedIn', 
                    'url' => 'https://www.linkedin.com/in/dewa-made-julijati-putra-042ba9340?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 
                    'path' => '<path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>'
                ],
            ];
        @endphp

        @foreach($socials as $soc)
            <a href="{{ $soc['url'] }}" 
            title="{{ $soc['name'] }}"
            class="w-10 h-10 flex items-center justify-center bg-white/5 border border-white/10 rounded-full hover:border-electric-purple hover:text-electric-purple hover:bg-white/10 transition-all duration-300 group">
            
            <svg xmlns="http://www.w3.org/2000/svg" 
                    width="18" 
                    height="18" 
                    viewBox="0 0 24 24" 
                    fill="currentColor" 
                    class="group-hover:scale-110 transition-transform duration-300">
                    {!! $soc['path'] !!}
            </svg>
            </a>
        @endforeach
    </div>
</section>