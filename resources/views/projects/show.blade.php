@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-dark-bg text-white pt-40 pb-20 px-6">
    <div class="max-w-4xl mx-auto">
        
        {{-- Header Section: High-End Glassmorphism Style --}}
        <div class="min-h-[80vh] flex flex-col justify-center">
            <header class="mb-16 pt-12">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-10 pb-12 border-b border-white/5">
                    <div class="space-y-6">
                        {{-- Kategori: Lebih Kecil & Tracking Lebih Luas --}}
                        <div class="flex items-center gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-electric-purple shadow-[0_0_12px_rgba(168,85,247,0.8)]"></span>
                            <p class="text-electric-purple font-black tracking-[0.5em] text-[9px] uppercase opacity-90">
                                {{ $project['category'] }}
                            </p>
                        </div>
                        
                        {{-- Judul: Extra Bold / Black untuk Impact Maksimal --}}
                        <h1 class="text-7xl md:text-6x1 font-black tracking-tighter text-white leading-[0.8] uppercase ">
                            {{ $project['title'] }}
                        </h1>
                    </div>
                    
                    {{-- Back Button: Lebih Redup agar Fokus ke Judul --}}
                    <div class="pb-2">
                        <a href="{{ url('/') }}#projects" class="group relative inline-block">
                            <span class="text-[10px] font-bold tracking-[0.4em] text-soft-gray/50 group-hover:text-white transition-all duration-500 uppercase">
                                Lihat Semua Proyek
                            </span>
                            {{-- Underline Glow --}}
                            <span class="absolute -bottom-2 left-0 w-0 h-[1px] bg-gradient-to-r from-electric-purple to-transparent transition-all duration-700 group-hover:w-full"></span>
                        </a>
                    </div>
                </div>

                {{-- Tech Stack: Glass Style --}}
                <div class="mt-10 flex flex-wrap gap-3">
                    @foreach($project['tech_stack'] as $tech)
                        @php
                            $lowTech = strtolower($tech);
                            // Kita gunakan satu warna border tipis saja untuk kesan Glass yang konsisten
                            $dotColor = 'bg-white/20';
                            if(str_contains($lowTech, 'laravel')) $dotColor = 'bg-red-500';
                            elseif(str_contains($lowTech, 'tailwind')) $dotColor = 'bg-cyan-400';
                            elseif(str_contains($lowTech, 'mysql')) $dotColor = 'bg-orange-400';
                            elseif(str_contains($lowTech, 'javascript')) $dotColor = 'bg-yellow-400';
                        @endphp
                        
                        <div class="group flex items-center gap-2.5 px-5 py-2 bg-white/[0.03] border border-white/5 rounded-full backdrop-blur-xl transition-all duration-500 hover:bg-white/[0.08] hover:border-white/20 hover:-translate-y-1">
                            <span class="w-1 h-1 rounded-full {{ $dotColor }} shadow-[0_0_5px_currentColor] opacity-60 group-hover:opacity-100 transition-opacity"></span>
                            <span class="text-[10px] font-bold text-soft-gray/70 group-hover:text-white tracking-widest uppercase transition-colors">
                                {{ $tech }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </header>

            {{-- Metadata Section: Bento Glass Style --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-24">
                @php
                    $metadata = [
                        ['label' => 'Peran', 'value' => $project['role'], 'icon' => 'user'],
                        ['label' => 'Batas Waktu', 'value' => $project['timeline'], 'icon' => 'calendar'],
                        ['label' => 'Tim', 'value' => $project['team'], 'icon' => 'users'],
                        ['label' => 'Tipe Proyek', 'value' => $project['type'], 'icon' => 'briefcase'],
                    ];
                @endphp

                @foreach($metadata as $item)
                <div class="group relative p-6 rounded-[2rem] bg-white/[0.02] border border-white/5 backdrop-blur-md transition-all duration-500 hover:bg-white/[0.05] hover:border-white/20 hover:shadow-2xl hover:shadow-white/5">
                    {{-- Label --}}
                    <p class="text-[9px] font-black tracking-[0.3em] text-soft-gray/30 group-hover:text-electric-purple transition-colors uppercase mb-4">
                        {{ $item['label'] }}
                    </p>
                    
                    {{-- Value --}}
                    <p class="text-sm md:text-base font-bold text-white tracking-tight leading-tight ">
                        {{ $item['value'] }}
                    </p>

                </div>
                @endforeach
            </div>
        </div>

        <div class="mb-16 group">
        {{-- Shadow dibuat lebih rapat (shadow-lg) agar tidak terlalu melebar --}}
        <div class="relative rounded-[2.5rem] overflow-hidden border border-white/10 shadow-lg shadow-white/5 
            transition-all duration-1000 ease-out 
            group-hover:scale-[1.015] group-hover:shadow-xl group-hover:shadow-white/10 group-hover:border-white/20">
    
            <div class="bg-white/5 px-6 py-4 border-b border-white/10 flex items-center gap-2">
                <div class="flex gap-1.5">
                    <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
                    <div class="w-2.5 h-2.5 rounded-full bg-white/10"></div>
                </div>
            </div>

            {{-- Brightness dihapus, hanya menyisakan Opacity dan Scale --}}
            <img src="{{ asset('images/projects/' . ($project['folder'] ?? 'default') . '/' . $project['hero_image']) }}" 
                class="w-full h-auto opacity-80 group-hover:opacity-100 transition-all duration-1000" 
                alt="{{ $project['title'] }}">
        </div>
    </div>

        {{-- OVERVIEW SECTION --}}
        <div class="grid lg:grid-cols-12 gap-12 mb-16">
            <div class="lg:col-span-3">
                <h2 class="text-lg font-bold text-electric-purple uppercase tracking-[0.3em] sticky top-32">
                    Deskripsi Proyek
                </h2>
            </div>
            <div class="lg:col-span-9 max-w-3xl">
                <div class="space-y-8">
                    {{-- Teks Deskripsi Utama --}}
                    <div class="text-soft-gray text-sm leading-relaxed text-justify [hyphens:auto] [text-justify:inter-word]">
                        <p>{{ $project['description'] }}</p>
                    </div>

                    {{-- Notice Box Dinamis --}}
                    @if(isset($project['notice']))
                    <div class="pt-6 border-t border-white/5">
                        <div class="group flex items-start gap-4 p-5 rounded-2xl bg-white/[0.02] border border-white/5 transition-all duration-500 hover:border-white/10 hover:bg-white/[0.03]">
                            {{-- Icon Info --}}
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-electric-purple/10 flex items-center justify-center border border-electric-purple/20">
                                <svg class="w-4 h-4 text-electric-purple" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            
                            {{-- Teks Notice --}}
                            <div class="space-y-1">
                                <span class="text-[10px] font-black uppercase tracking-widest text-white/40 group-hover:text-electric-purple transition-colors">
                                    Catatan Penting
                                </span>
                                <p class="text-[11px] leading-relaxed text-soft-gray/60 italic">
                                    {{ $project['notice'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        
        {{-- LINK PROJECT SECTION --}}
       {{-- LINK PROJECT SECTION: Simple & Direct --}}
        <div class="mb-16 p-5 rounded-xl bg-white/[0.02] border border-white/5 flex flex-col sm:flex-row items-center justify-between gap-6 transition-all hover:border-white/10">
            <div class="flex items-center gap-4">
                {{-- Ikon Utama diganti jadi Link --}}
                <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center text-soft-gray border border-white/10 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                </div>
                <div>
                    {{-- Kalimat diganti sesuai permintaanmu --}}
                    <p class="font-bold text-xs uppercase tracking-tight text-white">
                        Link Akses Proyek
                    </p>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                {{-- Opsi 1: Link Utama (Jika Private tampilkan Gembok) --}}
                @if($project['is_private'])
                    <div class="px-4 py-2 bg-white/5 rounded-lg text-soft-gray/40 flex items-center gap-2 text-[10px] font-bold border border-white/5 cursor-not-allowed uppercase tracking-widest ">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Privat Hosted
                    </div>
                @else
                    <a href="{{ $project['demo_url'] }}" target="_blank" class="px-4 py-2 bg-white text-black rounded-lg text-[10px] font-extrabold hover:bg-electric-purple hover:text-white transition-all uppercase tracking-wider">
                        Buka Projek
                    </a>
                @endif

                {{-- Opsi 2: Artikel Jurnal --}}
                @if(isset($project['journal_url']))
                    <a href="{{ $project['journal_url'] }}" target="_blank" class="px-4 py-2 bg-electric-purple/10 text-electric-purple rounded-lg text-[10px] font-extrabold border border-electric-purple/20 hover:bg-electric-purple hover:text-white transition-all uppercase tracking-wider flex items-center gap-2">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        Jurnal Artikel
                    </a>
                @endif
            </div>
        </div>

        {{-- FEATURES DISPLAY: Clean & Focused --}}
        <div class="space-y-10 md:space-y-20"> 
            @foreach($project['features'] as $index => $feature)
                <div class="flex flex-col {{ $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center gap-8 md:gap-12 group">
                    
                    {{-- AREA GAMBAR: Diperbesar ke 70% --}}
                    <div class="w-full md:w-[60%]">
                        {{-- EFEK SCALE KEMBALI DI SINI (group-hover:scale) --}}
                        <div class="relative rounded-[1.5rem] overflow-hidden bg-[#0e0e10] border border-white/10 shadow-sm 
                                    transition-all duration-700 ease-out 
                                    group-hover:scale-[1.02] group-hover:shadow-xl group-hover:shadow-white/5 group-hover:border-white/20">
                            
                            {{-- Minimal Browser UI --}}
                            <div class="flex items-center gap-1.5 px-5 py-3 border-b border-white/5 bg-white/[0.02]">
                                <div class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-white/40 transition-colors"></div>
                                <div class="w-1.5 h-1.5 rounded-full bg-white/20 group-hover:bg-white/40 transition-colors"></div>
                            </div>

                            {{-- IMAGE: Tanpa brightness agar tabel tajam, tapi opacity tetap main --}}
                            <img src="{{ asset('images/projects/' . ($project['folder'] ?? 'default') . '/' . $feature['image']) }}" 
                                class="w-full opacity-90 group-hover:opacity-100 transition-opacity duration-700 object-cover"
                                alt="{{ $feature['title'] }}">
                        </div>
                    </div>

                    {{-- AREA TEKS: 30% --}}
                    <div class="w-full md:w-[40%]">
                        <div class="space-y-4">
                            <h3 class="text-lg md:text-xl font-bold tracking-tight uppercase text-white group-hover:text-electric-purple transition-all duration-500">
                                {{ $feature['title'] }}
                            </h3>
                            
                           <p class="text-soft-gray text-xs md:text-sm leading-relaxed font-medium opacity-70 group-hover:opacity-100 transition-all duration-500 text-left">
                                {{ $feature['desc'] }}
                           </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection