<section id="projects" class="py-16 md:py-20 bg-dark-bg px-6 relative overflow-hidden">
    {{-- Dekorasi Cahaya Background --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-electric-purple/5 blur-[120px] rounded-full -z-10"></div>

    <div class="max-w-7xl mx-auto">
        <div class="mb-10 text-center lg:text-left">
            <h3 class="text-electric-purple font-bold text-lg uppercase tracking-[0.3em] mb-3">Karya </h3>
            <h2 class="text-4xl font-extrabold text-white leading-tight">Proyek <br class="md:hidden"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-soft-gray">Terbaru</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            {{-- Proyek 1: SI-PATEN --}}
            @include('components.project-card', [
                'image' => 'login-sipaten.webp',
                'title' => 'SI-PATEN',
                'description' => 'SI-PATEN atau Sistem Informasi Pencatatan Ternak merupakan proyek penelitian skripsi berbasis sistem informasi website yang dirancang untuk membantu pihak BUMDes dalam meningkatkan efektivitas.',
                'tags' => ['Laravel', 'Tailwind CSS', 'MySql', 'Javascript'],
                'link' => route('project.detail', 'si-paten')
            ])

            {{-- Proyek 2: Monalisa --}}
            @include('components.project-card', [
                'image' => 'monalisa.webp',
                'title' => 'MONALISA',
                'description' => 'Monalisa, atau Sistem Pemantauan Aktivitas dan Kualitas untuk BPS Buleleng, adalah sistem pemantauan aktivitas lapangan yang dikembangkan selama masa magang saya.',
                'tags' => ['Laravel', 'Tailwind CSS', 'MySql', 'Javascript'],
                'link' => route('project.detail', 'monalisa')
            ])

            {{-- Proyek 3: Monaku --}}
            @include('components.project-card', [
                'image' => 'monaku.webp',
                'title' => 'MONAKU',
                'description' => 'Monaku, atau Sistem Monitoring Administrasi Keuangan, adalah proyek magang sistem informasi yang dirancang untuk membantu staf memantau.',
                'tags' => ['Laravel', 'Tailwind CSS', 'MySql', 'Javascript'],
                'link' => route('project.detail', 'monaku'){{-- Tautan aktif ke halaman detail --}}
            ])
        </div>
    </div>
</section>