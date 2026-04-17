<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi data (Wajib diisi)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // 2. Simpan ke Database
        Contact::create($request->all());

        // 3. Kembali ke halaman Home dengan Pesan Sukses
        return redirect()->route('home', '#contact')->with('success', 'Pesan berhasil terkirim! Saya akan segera membalasnya.');
    }
}