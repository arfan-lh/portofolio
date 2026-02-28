<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        // 1. UI Wireframe StyleSavvy (Tema: Fashion & UI Design)
        Project::create([
            'title' => 'UI/UX Wireframe Toko StyleSavvy',
            'description' => 'StyleSavvy merupakan proyek perancangan UI/UX aplikasi fashion yang dikembangkan dengan pendekatan desain modern dan berorientasi pada kebutuhan pengguna. Proyek ini berfokus pada proses perancangan antarmuka yang intuitif, mulai dari analisis kebutuhan pengguna, penyusunan user flow, pembuatan wireframe, hingga pengembangan prototype visual.
                            Fitur utama “Find My Outfit” dirancang untuk membantu pengguna dalam menentukan pilihan outfit yang sesuai dengan aktivitas, preferensi, dan gaya personal melalui alur interaksi yang sederhana dan mudah dipahami.',
            'features' => [
                'Find My Outfit — Fitur rekomendasi outfit berdasarkan kebutuhan dan preferensi pengguna',
                'User Flow Terstruktur — Alur navigasi yang jelas untuk meningkatkan kenyamanan pengguna',
                'Wireframe & Prototype — Perancangan tampilan awal hingga visual final',
                'Desain Modern & Konsisten — Menggunakan design system agar tampilan seragam',
                'Responsive Design — Antarmuka menyesuaikan berbagai ukuran layar',
            ],
            'link' => 'https://github.com/arfan-lh/uiux-stylesavvy.git',
            'tech_stack' => ['Figma', 'UI/UX', 'Prototyping'],
            'images' => [
                'images/projectUI/Home-2.png', // Gambar Wireframe/Design
                'images/projectUI/Upload Foto.png', // Gambar Fashion
                'images/projectUI/Check Body.png',
                'images/projectUI/Result.png',
                'images/projectUI/Chekout.png',  // Gambar Baju
            ]
        ]);

        // 2. IoT Smart Classroom (Tema: Elektronik & Coding)
        Project::create([
            'title' => 'IoT Smart Classroom System',
            'description' => "Smart Classroom merupakan sistem Internet of Things (IoT) yang dirancang untuk meningkatkan efisiensi pengelolaan ruang kelas melalui integrasi perangkat IoT berbasis ESP32 dengan website.
             Sistem ini memanfaatkan beberapa sensor untuk melakukan identifikasi pengguna serta monitoring kondisi lingkungan kelas secara real-time.
            \nData yang diperoleh dari sensor dikirim dan ditampilkan melalui website, sehingga proses pemantauan dan pengelolaan kelas dapat dilakukan secara otomatis dan terpusat.",
            
            'features' => [
                'RFID Attendance System — Identifikasi pengguna menggunakan kartu RFID',
                'Monitoring Suhu Ruangan — Pemantauan kondisi suhu secara real-time',
                'Monitoring Intensitas Cahaya — Pengukuran tingkat pencahayaan ruang kelas',
                'Integrasi Website — Data sensor ditampilkan secara langsung pada website',
                'Automasi Sistem — Mengurangi proses manual dalam pengelolaan kelas',
            ],
            'link' => 'https://github.com/arfan-lh/absensi-iot.git',
            'tech_stack' => ['Html + Css', 'Arduino/ESP32', 'IoT',],
            'images' => [
                'images/IOT/web1.jpeg',
                'images/IOT/web2.jpeg',
                'images/IOT/web3.jpeg',
                'images/IOT/web4.jpeg',
                'images/IOT/alat1.jpeg', // Gambar Circuit Board
              
            ]
        ]);

        // 3. Style Savvy Java (Tema: Coding & Desktop)
        Project::create([
            'title' => 'Aplikasi Kasir Style Savvy (Java)',
            'description' => "Website SyleSavvy dikembangkan menggunakan bahasa pemrograman Java dengan menerapkan konsep Object-Oriented Programming (OOP). Sistem dirancang secara modular dengan pemisahan antara logika aplikasi, pengelolaan data, dan tampilan antarmuka.
                            Pendekatan OOP digunakan untuk meningkatkan keterbacaan kode, memudahkan pemeliharaan sistem, serta memungkinkan pengembangan fitur baru secara berkelanjutan.",
            
            'features' => [
                'Manajemen Data Produk — Pengelolaan data outfit secara terstruktur',
                'Penerapan Konsep OOP — Class, object, dan relasi antar komponen',
                'Struktur Kode Modular — Memudahkan pengembangan dan debugging',
                'Antarmuka Website Sederhana — Fokus pada fungsionalitas sistem',
            ],
            'link' => 'https://github.com/arfan-lh/StyleSavvy-app.git',
            'tech_stack' => ['Java', 'JSP', 'MySQL', 'Servlet', 'MVC Pattern'],
            'images' => [
                'images/SavvyJava/Java1.jpeg', // Gambar Coding Laptop
                'images/SavvyJava/java6.jpeg',
                'images/SavvyJava/java5.jpeg',
                'images/SavvyJava/java3.jpeg',
               
            ]
        ]);

        // 4. Website Ordering Books (Tema: Perpustakaan)
        Project::create([
            'title' => 'Web Ordering Books',
            'description' => " Website pemesanan buku ini dikembangkan menggunakan framework Laravel dengan tujuan mempermudah proses pemesanan dan pengelolaan data buku secara digital. Sistem dirancang dengan arsitektur Model–View–Controller (MVC) untuk menjaga struktur kode tetap rapi dan terorganisir.
                                Proyek ini berfokus pada pengembangan backend yang stabil, pengelolaan database, serta alur pemesanan yang mudah dipahami oleh pengguna.",
            
            'features' => [
                'Daftar & Detail Buku — Menampilkan informasi buku secara lengkap',
                'Sistem Pemesanan Buku — Proses pemesanan yang terstruktur',
                'Manajemen Data Buku — CRUD data buku melalui sistem backend',
                'Arsitektur MVC Laravel — Pemisahan logika, tampilan, dan data',
            ],
            'link' => 'https://github.com/arfan-lh/laravel-ordering-books.git',
            'tech_stack' => ['Laravel', 'PHP', 'MySQL', 'MVC Architecture'],
            'images' => [
                'images/Books/bok1.png', // Gambar Buku
                'images/Books/bok2.png', // Gambar Perpustakaan
                'images/Books/bok3.png',
                'images/Books/bok4.png',
                'images/Books/bok5.png',
                'images/Books/bok6.png',
            ]
        ]);

        // 5. Produk App (Tema: Gudang & Data)
        Project::create([
            'title' => 'Produk App Management',
            'description' =>' Website toko aplikasi ini merupakan proyek pengembangan web sederhana menggunakan bahasa Java. Sistem dirancang untuk menampilkan daftar aplikasi serta informasi detail setiap aplikasi. Fokus utama proyek ini adalah penerapan logika program yang terstruktur dan pengelolaan data yang rapi.
                             Website ini menjadi media pembelajaran untuk memahami alur kerja aplikasi web berbasis Java.',
            
             'features' => [
                'Daftar Aplikasi — Menampilkan kumpulan aplikasi yang tersedia',
                'Detail Informasi Aplikasi — Informasi deskripsi dan detail aplikasi',
                'Pengelolaan Data Aplikasi — Manajemen data berbasis Java',
                'Struktur Program Terorganisir — Kode mudah dibaca dan dipahami',
            ],
            'link' => 'https://github.com/arfan-lh/tokoku.git',                 
            'tech_stack' => ['Java', 'HTML & CSS', 'Web Logic & Data Management'],
            'images' => [
                'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80', // Gambar Gudang
                'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80', // Gambar Data/Chart
                'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&q=80'  // Gambar Analisa
            ]
        ]);
    }
}