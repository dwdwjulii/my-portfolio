<div class="bg-white/5 border border-white/10 rounded-3xl overflow-hidden backdrop-blur-sm 
            transition-all duration-300 
            hover:bg-white/[0.08] 
            hover:border-white/20 
            hover:shadow-glow-purple 
            hover:-translate-y-1 
            will-change-transform [backface-visibility:hidden] [transform:translateZ(0)] 
            group relative">
    
    <div class="relative h-56 overflow-hidden">
        {{-- Badge Utama (Menonjolkan Tech Utama) --}}
        <div class="absolute top-4 left-4 z-20">
            <span class="bg-dark-bg/60 backdrop-blur-md border border-white/10 text-red-500 text-[10px] font-bold px-3 py-1.5 rounded-full uppercase tracking-widest shadow-xl">
                {{ $tags[0] }} </span>
        </div>

        <img src="{{ asset('images/projects/' . $image) }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover transition-transform duration-700 ease-in-out group-hover:scale-110">
        
        {{-- Overlay Gradient --}}
        <div class="absolute inset-0 bg-gradient-to-t from-dark-bg via-dark-bg/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
    </div>
    
    <div class="p-8">
        {{-- Tags Pills --}}
        <div class="flex flex-wrap gap-2 mb-4">
            @foreach($tags as $index => $tag)
            {{-- Kita skip tag pertama karena sudah jadi badge di atas --}}
            @if($index > 0)
                @php
                    // Logika penentuan warna berdasarkan nama tag
                    $tagLower = strtolower($tag);
                    $colorClass = 'text-soft-gray border-white/10'; // Warna default

                    if (str_contains($tagLower, 'mysql')) {
                        $colorClass = 'text-orange-400 border-orange-400/30';
                    } elseif (str_contains($tagLower, 'tailwind')) {
                        $colorClass = 'text-cyan-400 border-cyan-400/30';
                    } elseif (str_contains($tagLower, 'javascript')) {
                        $colorClass = 'text-yellow-400 border-yellow-400/30';
                    }  elseif (str_contains($tagLower, 'css')) {
                        $colorClass = 'text-blue-500 border-blue-500/30';
                    }
                @endphp

                    <span class="text-[9px] uppercase tracking-tighter bg-white/5 border px-2 py-1 rounded-md font-medium {{ $colorClass }} transition-colors duration-300">
                        {{ $tag }}
                    </span>
                @endif
            @endforeach
        </div>

        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-electric-purple transition-colors">
            {{ $title }}
        </h3>
        
        <p class="text-soft-gray text-sm leading-relaxed mb-8 opacity-80 group-hover:opacity-100 transition-opacity line-clamp-3">
            {{ $description }}
        </p>

        <div class="pt-6 border-t border-white/5">
            <a href="{{ $link }}" class="relative inline-flex items-center gap-2 font-bold text-sm text-white group/link transition-colors duration-300 hover:text-electric-purple"> 
                <span>Detail Proyek</span>
                {{-- Efek Underline Slide --}}
                <span class="absolute -bottom-1 left-0 w-0 h-[2px] bg-electric-purple transition-all duration-300 group-hover/link:w-full"></span>
            </a>
        </div>
    </div>
</div>