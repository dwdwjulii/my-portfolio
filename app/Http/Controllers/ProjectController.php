<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function show($slug)
{
    // Kumpulan data proyek (seperti database mini)
    $projects = [
        'monaku' => [
            'title' => 'MONAKU',
            'folder' => 'monaku',
            'hero_image' => 'monaku-dashboard.webp',
            'category' => 'Proyek Website',
            'tech_stack' => ['Laravel', 'Tailwind', 'Javascript', 'MySQL'],
            'role' => 'Front End Developer',
            'timeline' => 'Mei 2024 - Jul 2024',
            'team' => '5 Anggota',
            'type' => 'Proyek Magang',
            'is_private' => true,
            'github_url' => 'https://github.com/dwdwjulii',
            'demo_url' => null,
            'journal_url' => 'https://journal.unpas.ac.id/index.php/infomatek/article/view/19231',
            'description' => 'Monaku, atau Sistem Monitoring Administrasi Keuangan, adalah proyek magang sistem informasi yang dirancang untuk membantu staf memantau proses administrasi keuangan yang sebelumnya dilakukan secara manual di Badan Pusat Statistik (BPS) Kabupaten Buleleng. Saya merupakan bagian dari tim yang terdiri dari lima orang dan bertugas sebagai pengembang front-end yang bertanggung jawab dalam merancang antarmuka pengguna sistem untuk menyelesaikan tantangan dalam pemantauan keuangan. Saya juga bekerja sama dengan tim backend dengan menampilkan data yang disampaikan melalui API. Saya merancang lima halaman utama sistem: Beranda, Kegiatan Administratif, Akun, Transaksi, dan Berkas Administratif. Sistem Monaku saat ini digunakan oleh BPS Kabupaten Buleleng untuk pemantauan administrasi keuangan. Selain itu, tim kami telah menerbitkan hasil proyek ini sebagai artikel jurnal ilmiah.',
            'notice' => 'Data yang ditampilkan adalah data contoh/palsu untuk tujuan demonstrasi guna menjaga kerahasiaan.',
            'features' => [
                // Fitur 1
                [
                'title' => 'Beranda', 
                'desc' => 'Halaman ini berisi ringkasan fungsi BPS Kabupaten Buleleng. Saya membuat komponen kartu yang menampilkan ringkasan kemajuan administrasi keuangan dalam persentase, jumlah berkas yang diunggah, dan nilai total transaksi.', 
                'image' => 'homepage.webp'
                ],
                // Fitur 2
                [
                    'title' => 'Halaman Aktivitas Administratif', 
                    'desc' => 'Pada halaman ini, saya mendesain tata letak responsif untuk daftar aktivitas administratif keuangan yang akan dimasukkan oleh pengguna.', 
                    'image' => 'administrasi.webp'
                ],
                // Fitur 3
                [
                    'title' => 'Halaman Akun', 
                    'desc' => 'Halaman ini berisi daftar akun yang terkait dengan aktivitas administrasi keuangan.', 
                    'image' => 'halaman-akun.webp'
                ],
                // Fitur 4
                [
                    'title' => 'Halaman Transaksi', 
                    'desc' => 'Halaman transaksi menampilkan transaksi keuangan yang dikategorikan berdasarkan setiap akun dan aktivitas administratif.', 
                    'image' => 'halaman-transaksi.webp'
                ],
                // Fitur 5
                [
                    'title' => 'Halaman Berkas Administrasi', 
                    'desc' => 'Halaman ini berisi kumpulan berkas administrasi keuangan berdasarkan transaksi, akun, dan aktivitas administrasi terkait. Saya merancang antarmuka agar memudahkan pengguna untuk mengidentifikasi berkas mana yang belum diunggah, dan untuk menampilkan kemajuan setiap tugas pemantauan berkas administrasi. Ringkasan ini kemudian ditampilkan di halaman beranda.', 
                    'image' => 'halaman-berkas.webp'
                ],
            ]
        ],

        'monalisa' => [
            'title' => 'MONALISA',
            'folder' => 'monalisa',
            'hero_image' => 'dashboard-monalisa.webp',
            'category' => 'Proyek Website',
            'tech_stack' => ['Laravel', 'Tailwind', 'Javascript', 'MySQL'],
            'role' => 'Front End Developer',
            'timeline' => 'Feb 2024 - Apr 2024',
            'team' => '5 Anggota',
            'type' => 'Proyek Magang',
            'is_private' => true,
            'github_url' => 'https://github.com/dwdwjulii',
            'demo_url' => null,
            'description' => 'Monalisa, atau Sistem Pemantauan Aktivitas dan Kualitas untuk BPS Buleleng, adalah sistem pemantauan aktivitas lapangan yang dikembangkan selama masa magang saya. Saya bertugas sebagai pengembang front-end dalam tim beranggotakan lima orang. Kami membangun sistem ini untuk mengatasi masalah pemantauan aktivitas statistik di lapangan yang konvensional dan manual. Sistem ini membantu memantau tugas, penugasan berdasarkan fungsi, dan proses pengarsipan. Sistem ini mencakup fitur CRUD lengkap yang dapat diakses oleh mitra, staf, dan administrator.',
            'notice' => 'Data yang ditampilkan adalah data contoh/palsu untuk tujuan demonstrasi guna menjaga kerahasiaan.',
            'features' => [
                // Fitur 1
                [
                'title' => 'Halaman Kemajuan Aktivitas Statistik', 
                'desc' => 'Tugas saya adalah merancang dan mengembangkan halaman kemajuan aktivitas statistik, yang menampilkan nama aktivitas, periode pelaksanaan, dan persentase kemajuan secara real-time dari setiap aktivitas. Saya mengimplementasikan data yang dikirim melalui API yang disediakan oleh tim backend.', 
                'image' => 'halaman-aktivitas.webp'
                ],
                // Fitur 2
                [
                    'title' => 'Halaman CRUD Memperbarui Tugas Aktivitas', 
                    'desc' => 'Pada halaman ini, saya mengembangkan antarmuka yang responsif dan ramah pengguna untuk mengelola pembaruan tugas dalam aktivitas statistik. Antarmuka ini membantu petugas lapangan untuk dengan mudah memahami data yang ditampilkan dan melakukan operasi CRUD.', 
                    'image' => 'halaman-crud.webp'
                ],
                 // Fitur 3
                [
                    'title' => 'Halaman CRUD Tugas Aktivitas Enumerasi', 
                    'desc' => 'Halaman ini berfungsi serupa dengan halaman pembaruan tugas. Saya membangun antarmuka berdasarkan data API terkait enumerasi dari tim backend, dengan tata letak yang responsif dan jelas secara visual. Saya juga mengimplementasikan tombol ekspor Excel untuk menyederhanakan pembuatan tugas berdasarkan format yang telah ditentukan.', 
                    'image' => 'halaman-crud-aktivitas.webp'
                ],
                
            ]
        ],

        'si-paten' => [
            'title' => 'SI-PATEN',
            'folder' => 'sipaten',
            'hero_image' => 'dashboard-sipaten.webp',
            'category' => 'Proyek Website',
            'tech_stack' => ['Laravel', 'Tailwind', 'Javascript', 'MySQL'],
            'role' => 'Full Stack Developer',
            'timeline' => 'Jun 2025 - Nov 2025',
            'team' => '1 Anggota',
            'type' => 'Proyek Skripsi',
            'is_private' => true,
            'github_url' => 'https://github.com/dwdwjulii',
            'demo_url' => null,
            'journal_url' => 'https://journal.eng.unila.ac.id/index.php/jitet/article/view/8111',
            'description' => 'SI-PATEN atau Sistem Informasi Pencatatan Ternak merupakan proyek penelitian skripsi berbasis sistem informasi website yang dirancang untuk membantu pihak BUMDes dalam meningkatkan efektivitas pengelolaan program ternak. Sistem ini dikembangkan sebagai solusi atas proses pencatatan dan pelaporan data ternak yang sebelumnya masih dilakukan secara konvensional di BUMDes Dwi Amertha Sari, Desa Jinengdalem.Dalam pengembangan sistem ini, saya berperan sebagai full-stack developer yang bertanggung jawab dalam perancangan hingga implementasi sistem. SI-PATEN n memiliki dua peran pengguna, yaitu admin dan petugas, serta dilengkapi dengan berbagai fitur, antara lain dashboard, pengelolaan pengguna, pengelolaan anggota, pengelolaan catatan ternak, arsip laporan, dan pencatatan aktivitas petugas.Saat ini, SI-PATEN telah diimplementasikan dan digunakan sebagai sistem pendukung dalam pelaksanaan program ternak di BUMDes Dwi Amertha Sari.',
            'notice' => 'Data yang ditampilkan adalah data contoh/palsu untuk tujuan demonstrasi guna menjaga kerahasiaan.',
            'features' => [
                // Fitur 1
                [
                'title' => 'Halaman Dashboard Admin', 
                'desc' => 'Dashboard Si-Paten menapilkan gambaran umum data dan aktivitas pengelolaan ternak. Terdapat kartu ringkasan seperti jumlah pengguna dan anggota, grafik perkembangan populasi ternak, serta informasi tambahan berupa total harga awal ternak, jumlah ternak, dan persebaran lokasi kandang. Halaman ini membantu admin memantau data secara terpusat.', 
                'image' => 'halaman-dashboard.webp'
                ],
                // Fitur 2
                [
                'title' => 'Kelola Anggota', 
                'desc' => 'Halaman Kelola Anggota merupakan pusat manajemen data anggota peternak dalam program ternak BUMDes. Pada halaman ini, saya mengimplementasikan fitur pencarian, filter, serta pengelolaan data CRUD untuk memudahkan admin dalam mengelola dan memperbarui data anggota secara efisien', 
                'image' => 'kelola-anggota.webp'
                ],
                // Fitur 3
                [
                    'title' => 'Kelola Catatan', 
                    'desc' => 'Halaman Kelola Catatan berfungsi sebagai modul monitoring untuk menampilkan aktivitas pencatatan ternak oleh petugas. Halaman ini difokuskan pada penyajian data dengan fitur pencarian, filter, ekspor, dan pengarsipan laporan guna mendukung analisis dan pengambilan keputusan', 
                    'image' => 'kelola-catatan.webp'
                ],
                // Fitur 4
                [
                    'title' => 'Arsip Laporan', 
                    'desc' => 'Halaman Arsip Laporan digunakan sebagai media penyimpanan arsip catatan ternak dalam bentuk dokumen PDF berdasarkan periode bulan dan tahun. Halaman ini memudahkan admin dalam mengakses, menyimpan, dan mengelola riwayat laporan secara terstruktur, sehingga data tetap terdokumentasi dengan baik dan siap digunakan untuk kebutuhan evaluasi.', 
                    'image' => 'arsip-laporan.webp'
                ],
                // Fitur 5
                [
                    'title' => 'Halaman Utama Pencatatan Petugas', 
                    'desc' => 'Halaman Tugas Pencatatan berguna bagi petugas dalam melakukan pencatatan data ternak berdasarkan anggota yang terdaftar. Halaman ini, saya merancang daftar tugas yang menampilkan informasi anggota. Petugas dapat dengan mudah melakukan pencatatan melalui aksi “Buat Catatan” pada setiap anggota yang ingin dicatat. Selain itu, saya juga mengimplementasikan fitur filter dan pencarian untuk mempermudah pengelolaan tugas pencatatan secara terstruktur.', 
                    'image' => 'pencatatan-petugas.webp'
                ],
                // Fitur 6
                [
                    'title' => 'Form Pencatatan Petugas', 
                    'desc' => 'Form pencatatan petugas, pada bagian ini saya merancang form pendataan ternak yang dioperasikan oleh petugas lapangan. Pada halaman ini, mengintegrasikan antarmuka penginputan data ternak dan dilengkapi dengan fitur manajemen dokumentasi secara realtime.', 
                    'image' => 'form-pencatatan.webp'
                ],
                
            ]
        ],
    ];

    // Ambil data berdasarkan slug yang ada di URL
    $project = $projects[$slug] ?? abort(404);

    return view('projects.show', compact('project'));
}
}