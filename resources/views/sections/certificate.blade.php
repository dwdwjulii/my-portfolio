<section id="certificate" class="py-16 md:py-20 px-6 bg-dark-bg">
    <div class="max-w-7xl mx-auto">
        {{-- Header Section --}}
        <div class="mb-12">
            <h4 class="text-electric-purple text-lg font-bold tracking-[0.3em] uppercase mb-3">
                Pencapaian
            </h4>
             <h2 class="text-4xl font-extrabold text-white leading-tight">Serti<span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-soft-gray">fikat </span></h2>
        </div>

        {{-- Grid Sertifikat --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $certificates = [
                    [
                        'title' => 'BPS Kabupaten Buleleng',
                        'issuer' => 'Sertifikat Praktek Kerja Lapangan',
                        'date' => '12 Juli 2024',
                        'image' => 'sertifikat-magang.webp',
                        'link' => 'https://drive.google.com/file/d/1J_O-UsLBdBY-EJeEidt93xiTsioxhJeA/view?usp=sharing'
                    ],
                    // Tambahkan sertifikat lainnya di sini
                ];
            @endphp

            @foreach($certificates as $cert)
                <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden backdrop-blur-sm 
            transition-all duration-300 
            hover:bg-white/[0.08] 
            hover:border-white/20 
            hover:shadow-glow-purple 
            hover:-translate-y-1 
            will-change-transform [backface-visibility:hidden] [transform:translateZ(0)] 
            group relative">
                    {{-- Preview Gambar Sertifikat --}}
                    <div class="relative h-48 overflow-hidden bg-slate-800">
                        <img src="{{ asset('images/certificates/' . $cert['image']) }}" 
                             alt="{{ $cert['title'] }}"
                             class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700">
                        
                        {{-- Overlay Button --}}
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500 bg-dark-bg/60 backdrop-blur-sm">
                            <a href="{{ $cert['link'] }}" target="_blank" class="px-5 py-2 bg-electric-purple text-white text-sm font-bold rounded-lg transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                Lihat Kredensial
                            </a>
                        </div>
                    </div>

                    {{-- Informasi Sertifikat --}}
                    <div class="p-6">
                        <span class="text-[10px] font-black uppercase tracking-widest text-electric-purple mb-2 block">
                            {{ $cert['issuer'] }}
                        </a>
                        <h3 class="text-lg font-bold text-white mb-1 group-hover:text-electric-purple transition-colors">
                            {{ $cert['title'] }}
                        </h3>
                        <p class="text-soft-gray text-xs font-medium">
                            Diterbitkan: {{ $cert['date'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>