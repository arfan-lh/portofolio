<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Certificate;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data (nanti diisi lewat database seeder/manual)
        // Untuk contoh ini kita pakai dummy data jika DB kosong
        return view('home', [
            'projects' => Project::all(), 
            'certificates' => Certificate::all()
        ]);
        
    }

    public function show($id)
    {

        // Cari project berdasarkan ID, kalau ga ketemu tampilkan error 404
        $project = \App\Models\Project::findOrFail($id);
    
        // Kirim data project ke tampilan detail
        return view('project-detail', compact('project'));
    }
}