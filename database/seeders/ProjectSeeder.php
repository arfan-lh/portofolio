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
            'title' => 'Produk Manager',
            'description' => " Website ini dikembangkan menggunakan framework Laravel dengan tujuan mempermudah proses pengelolaan data dan aktivitas pengguna secara digital. Sistem dirancang menggunakan arsitektur Model–View–Controller (MVC) untuk menjaga struktur kode tetap rapi, terorganisir, dan mudah dikembangkan.
                                Proyek ini berfokus pada pengembangan backend yang stabil, pengelolaan database yang terstruktur, serta penyediaan fitur-fitur inti seperti autentikasi pengguna, manajemen data (CRUD), dan dashboard informatif yang mudah dipahami oleh pengguna.",
            
            'features' => [
                'Registrasi Mudah – Proses pendaftaran dan login yang cepat dan aman.',
                'Kelola Produk – Fitur CRUD untuk manajemen data produk secara efisien.',
                'Dashboard Lengkap – Tampilan ringkasan data untuk memantau aktivitas sistem.',
                
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
            'title' => 'Java Web Product Manager',
            'description' =>' TokoKu adalah aplikasi web berbasis Java (JSP & JDBC) yang digunakan untuk mengelola data produk secara digital. Sistem ini terintegrasi dengan database MySQL dan dikembangkan menggunakan konsep server-side rendering untuk memproses dan menampilkan data secara dinamis.
                            Aplikasi ini berfokus pada pengelolaan data produk dengan fitur CRUD serta implementasi koneksi database secara langsung menggunakan JDBC.',
            
             'features' => [
                'Manajemen Produk (CRUD) — Tambah, lihat, edit, dan hapus data produk',
                'Integrasi Database — Menggunakan MySQL dengan koneksi JDBC',
                'Berbasis Java Web — Dibangun dengan JSP untuk proses server-side',
                'Kode Terstruktur — Mudah dikembangkan dan dipelihara',
            ],
            'link' => 'https://github.com/arfan-lh/tokoku.git',                 
            'tech_stack' => ['Java', 'HTML & CSS', 'Web Logic & Data Management'],
            'images' => [
                'images/Tokoku/Toko1.png',
                'images/Tokoku/Toko2.png',
                'images/Tokoku/Toko3.png',
                'images/Tokoku/Toko4.png',
            ]
        ]);
    }
}