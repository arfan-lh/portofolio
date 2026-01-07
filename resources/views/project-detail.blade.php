@extends('layouts.app')

@section('content')

<section class="min-h-screen pt-24 pb-12 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <a href="{{ route('home') }}#projects" class="inline-flex items-center text-gray-400 hover:text-blue-400 mb-8 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            Kembali ke Home
        </a>

        <h1 class="text-4xl md:text-5xl font-black mb-4">{{ $project->title }}</h1>
        
        <div class="flex flex-wrap gap-2 mb-8">
            @if(is_array($project->tech_stack))
                @foreach($project->tech_stack as $tech)
                    <span class="px-3 py-1 bg-blue-900/50 text-blue-300 border border-blue-800 rounded-lg text-sm font-semibold">
                        {{ $tech }}
                    </span>
                @endforeach
            @endif
        </div>

        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-gray-800 bg-gray-900 group">
    
    <div class="slider-container flex flex-nowrap overflow-x-auto snap-x snap-mandatory scrollbar-hide" style="scroll-behavior: smooth; -webkit-overflow-scrolling: touch;">
        
        @php
            $imageList = is_string($project->images) ? json_decode($project->images) : $project->images;
        @endphp

        @if(!empty($imageList) && is_array($imageList) && count($imageList) > 0)
            @foreach($imageList as $img)
                <div class="snap-center shrink-0 w-full bg-black flex items-center justify-center">
                    <img src="{{ asset($img) }}" class="max-w-full max-h-[500px] object-contain">
                </div>
            @endforeach
        @else
            <div class="w-full h-[400px] flex items-center justify-center text-gray-500 bg-gray-800">
                Gambar tidak tersedia
            </div>
        @endif
    </div>

    @if(!empty($imageList) && count($imageList) > 1)
        <button onclick="moveDetailSlider(this, 'left')" class="absolute left-4 top-1/2 -translate-y-1/2 p-4 bg-black/50 hover:bg-blue-600 text-white rounded-full transition backdrop-blur-sm z-10">
            ❮
        </button>
        <button onclick="moveDetailSlider(this, 'right')" class="absolute right-4 top-1/2 -translate-y-1/2 p-4 bg-black/50 hover:bg-blue-600 text-white rounded-full transition backdrop-blur-sm z-10">
            ❯
        </button>
    @endif

    <div class="absolute bottom-4 left-0 right-0 text-center pointer-events-none">
        <span class="bg-black/50 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">
            Geser untuk melihat detail
        </span>
    </div>

    </div>
        <div class="prose prose-invert prose-lg max-w-none text-gray-300">
            <h3 class="text-2xl font-bold text-white mb-4">Tentang Project Ini</h3>
            
            <p class="leading-relaxed whitespace-pre-line">
                {{ $project->description }}
            </p>

            <div class="mt-8 p-6 bg-gray-800 rounded-xl border border-gray-700">
                <h4 class="text-xl font-bold text-white mb-4">Fitur Utama:</h4>
    
                <ul class="list-disc list-inside space-y-2 text-gray-300">
                    @if(!empty($project->features) && is_array($project->features))
            
                    @foreach($project->features as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach

                    @else
                        <li class="italic text-gray-500">Detail fitur belum ditambahkan.</li>
                    @endif
                </ul>
            </div>

        <div class="mt-12 pt-8 border-t border-gray-800 flex gap-4">
            <a href="{{ $project->link }}" target="_blank" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold transition shadow-lg shadow-blue-600/20">
                Github
            </a>
        </div>

    </div>
</section>

<script>
    function moveDetailSlider(button, direction) {
        // 1. Cari container slider (kotak pembungkus gambar)
        // Kita cari elemen terdekat dengan class .group (pembungkus utama)
        const parent = button.closest('.group'); 
        
        // 2. Cari elemen yang bisa di-scroll di dalamnya
        const container = parent.querySelector('.slider-container');

        if(container) {
            // 3. Hitung lebar 1 kali geser (sesuai lebar layar)
            const scrollAmount = container.clientWidth; 

            // 4. Lakukan scroll
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        } else {
            console.error('Container slider tidak ditemukan!');
        }
    }
</script>


@endsection

