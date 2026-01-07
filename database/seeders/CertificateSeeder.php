<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        Certificate::truncate(); // Hapus data lama biar bersih

        // 1. Google Cybersecurity
        Certificate::create([
            'title'  => 'Google Cybersecurity Professional',
            'issuer' => 'Google Career Certificates',
            'image'  => 'images/cybersecurity.png', // Pastikan filenya ada di public/images
            'link'   => 'https://www.credly.com/badges/34c64257-d024-4143-a399-5a470f88fa83/public_url', // Ganti link asli kamu
        ]);

        
    }
}