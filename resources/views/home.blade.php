@extends('layouts.app')

@section('content')

<section id="home" class="min-h-screen flex items-center justify-center pt-16 relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600 rounded-full mix-blend-screen filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-600 rounded-full mix-blend-screen filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-96 h-96 bg-pink-600 rounded-full mix-blend-screen filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
    
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,.02)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_50%,#000,transparent)]"></div>

    <div class="text-center relative z-10 px-4 max-w-5xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
        <div class="inline-block mb-6 px-6 py-2 bg-white/5 backdrop-blur-sm border border-white/10 rounded-full" data-aos="zoom-in" data-aos-delay="200">
            <span class="text-blue-400 font-semibold text-sm tracking-wider">👋 Halo, Saya Mahasiswa Teknologi Informasi </span>
        </div>
        
        <h1 class="text-4xl sm:text-6xl md:text-8xl font-black mb-6 leading-tight" data-aos="fade-up" data-aos-delay="300">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 animate-gradient">
                Membangun Solusi
            </span>
            <br>
            <span class="text-white">Digital Modern</span>
        </h1>
        
       <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="400">
             Mahasiswa <span class="text-blue-400 font-semibold">Teknologi Informasi</span> dengan minat pada pengembangan website dan sistem terintegrasi IoT. 
             Berfokus pada <span class="text-purple-400 font-semibold">struktur kode yang rapi</span>, desain UI/UX yang fungsional, serta penerapan dasar cybersecurity.
            </p>

        
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12" data-aos="fade-up" data-aos-delay="500">
            <a href="#projects" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-2xl font-bold text-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:shadow-purple-500/50 hover:scale-105">
                <span class="relative z-10 flex items-center justify-center gap-2">
                    Lihat Project
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </a>
            
            <a href="#contact" class="px-8 py-4 bg-white/5 backdrop-blur-sm text-white border-2 border-white/20 rounded-2xl font-bold text-lg hover:bg-white/10 hover:border-white/40 transition-all duration-300 hover:scale-105">
                Contact Me
            </a>
        </div>
        
        <div class="animate-bounce mt-16" data-aos="fade-up" data-aos-delay="600">
            <svg class="w-6 h-6 mx-auto text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </div>
</section>

<section id="about" class="py-32 bg-gradient-to-b from-black via-gray-900 to-gray-800 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="false" class="relative w-64 md:w-80 mx-auto">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl blur-2xl opacity-30"></div>
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-purple-600 rounded-3xl rotate-3 group-hover:rotate-6 transition-transform duration-500"></div>
                    <img src="{{asset('images/me1.png')}}" 
                         alt="Profile" 
                         class="relative rounded-3xl shadow-2xl w-full object-cover border-4 border-gray-800 transform group-hover:scale-[1.02] transition-transform duration-500">
                </div>
                
                <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-blue-600 to-purple-600 text-white px-6 py-4 rounded-2xl shadow-xl" data-aos="zoom-in" data-aos-delay="300" data-aos-once="false">
                    <div class="text-sm font-medium">Technology</div>
                    <div class="text-sm font-medium">Enthusiast</div>
                </div>
            </div>
            
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="false" class="space-y-6">
                <div>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold text-lg tracking-wider uppercase" data-aos="fade-down" data-aos-delay="100" data-aos-once="false">About Me</span>
                    <h2 class="text-5xl font-black text-white mt-2 mb-6" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                        Hello I'am
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400"> Abdullah Arfan</span>
                    </h2>
                </div>
                
                <p class="text-lg text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                    Saya mahasiswa
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold">
                    Fakultas Teknologi Informasi</span> di <span class="font-semibold text-white">Telkom University</span>

                    </span>. 
                    Saya memiliki <span class="font-semibold text-white">passion yang kuat</span> dalam dunia teknologi, 
                    khususnya <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold">pengembangan web</span> 
                    dan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold">Internet of Things (IoT)</span>. 
                    Saya senang mengubah ide dan kebutuhan sistem menjadi solusi digital yang fungsional dan bermanfaat.
                    </p>


                
                <div class="grid grid-cols-2 gap-4 py-6">
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border-2 border-gray-700 hover:border-blue-500 transition-all duration-300 hover:shadow-lg hover:shadow-blue-500/20" data-aos="flip-left" data-aos-delay="400" data-aos-once="false">
                        <div class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">5+</div>
                        <div class="text-gray-300 font-semibold mt-2">Student Project</div>
                        <div class="h-1 w-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mt-3 group-hover:w-full transition-all duration-300"></div>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border-2 border-gray-700 hover:border-purple-500 transition-all duration-300 hover:shadow-lg hover:shadow-purple-500/20" data-aos="flip-right" data-aos-delay="500" data-aos-once="false">
                        <div class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-400">3+</div>
                        <div class="text-gray-300 font-semibold mt-2">Years Learning & Coding </div>
                        <div class="h-1 w-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mt-3 group-hover:w-full transition-all duration-300"></div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="false">
                    <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Tech Stack Favorit:</h4>
                    <div class="flex flex-wrap gap-3">
                        <span class="group px-5 py-2.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-bold shadow-lg hover:shadow-blue-500/50 hover:scale-110 transition-all duration-300 cursor-default">
                            Laravel
                        </span>
                        <span class="group px-5 py-2.5 bg-gradient-to-r from-purple-600 to-purple-700 text-white rounded-xl font-bold shadow-lg hover:shadow-purple-500/50 hover:scale-110 transition-all duration-300 cursor-default">
                            UI/UX Design
                        </span>
                        <span class="group px-5 py-2.5 bg-gradient-to-r from-pink-600 to-pink-700 text-white rounded-xl font-bold shadow-lg hover:shadow-pink-500/50 hover:scale-110 transition-all duration-300 cursor-default">
                            Java
                        </span>
                        <span class="group px-5 py-2.5 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white rounded-xl font-bold shadow-lg hover:shadow-indigo-500/50 hover:scale-110 transition-all duration-300 cursor-default">
                            IoT / Arduino
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="py-32 bg-gradient-to-b from-gray-800 via-gray-900 to-black relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-gradient-to-br from-blue-600 to-purple-600 rounded-full blur-3xl opacity-10"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold text-lg tracking-wider uppercase">Portfolio</span>
            <h2 class="text-5xl md:text-6xl font-black text-white mt-2 mb-6">
                Project <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Terbaru</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Berikut adalah beberapa proyek unggulan yang telah saya kerjakan dengan teknologi terkini
            </p>
        </div>

        <div class="space-y-24">
            @forelse($projects as $project)
            <div class="group relative" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false">
                <div class="flex flex-col lg:flex-row items-center gap-12 {{ $loop->iteration % 2 == 0 ? 'lg:flex-row-reverse' : '' }}">
                    
                    <div class="w-full lg:w-1/2 relative group" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-left' : 'fade-right' }}" data-aos-duration="1000" data-aos-delay="200" data-aos-once="false">
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-40 transition-opacity duration-500"></div>
                        
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-gray-800 bg-gray-900">
                            
                            <div class="slider-container flex overflow-x-auto snap-x snap-mandatory scrollbar-hide" style="scroll-behavior: smooth;">
                                @php
                                    // FORCE ARRAY: Pastikan data gambar jadi Array PHP
                                    $imageList = is_string($project->images) ? json_decode($project->images) : $project->images;
                                @endphp

                                @if(!empty($imageList) && is_array($imageList) && count($imageList) > 0)
                                    @foreach($imageList as $index => $img)
                                        <div class="snap-center shrink-0 w-full relative">
                                            <img src="{{ asset($img) }}" 
                                                 alt="{{ $project->title }}" 
                                                 class="w-full h-[350px] lg:h-[450px] object-contain ">
                                            
                                            <div class="absolute bottom-4 right-4 px-4 py-2 bg-black/60 backdrop-blur-md text-white text-sm font-bold rounded-full border border-white/10 shadow-lg">
                                                {{ $index + 1 }} / {{ count($imageList) }}
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="w-full h-[350px] lg:h-[450px] bg-gradient-to-br from-gray-800 to-gray-900 flex flex-col items-center justify-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span class="font-semibold">Gambar Belum Tersedia</span>
                                    </div>
                                @endif
                            </div>

                            <button onclick="moveSlider(this, 'left')" class="absolute inset-y-0 left-0 flex items-center pl-4 opacity-0 group-hover:opacity-100 transition duration-300 cursor-pointer z-20 hover:scale-110">
                                <div class="bg-gray-900/80 p-3 rounded-full text-blue-400 hover:bg-white hover:text-blue-600 shadow-lg border border-white/10 backdrop-blur-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/></svg>
                                </div>
                            </button>

                            <button onclick="moveSlider(this, 'right')" class="absolute inset-y-0 right-0 flex items-center pr-4 opacity-0 group-hover:opacity-100 transition duration-300 cursor-pointer z-20 hover:scale-110">
                                <div class="bg-gray-900/80 p-3 rounded-full text-purple-400 hover:bg-white hover:text-purple-600 shadow-lg border border-white/10 backdrop-blur-sm">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </button>
                        </div>
                        
                        <p class="lg:hidden text-center text-sm text-gray-500 mt-4 font-medium animate-pulse">← Swipe untuk melihat foto lain →</p>
                    </div>

                    <div class="w-full lg:w-1/2 space-y-6" data-aos="{{ $loop->iteration % 2 == 0 ? 'fade-right' : 'fade-left' }}" data-aos-duration="1000" data-aos-delay="300" data-aos-once="false">
                        <div class="relative">
                            <span class="absolute -left-4 -top-4 text-[120px] font-black text-gray-800/50 select-none">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>
                        
                        <h3 class="text-4xl lg:text-5xl font-black text-white relative z-10" data-aos="zoom-in" data-aos-delay="400" data-aos-once="false">
                            {{ $project->title }}
                        </h3>
                        
                        <p class="text-lg text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-delay="500" data-aos-once="false">
                            {{ Str::limit($project->description, 120, '...') }}
                        </p>

                        <div data-aos="fade-up" data-aos-delay="600" data-aos-once="false">
                            <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4 flex items-center gap-2">
                                <span class="w-8 h-1 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full"></span>
                                Tech Stack
                            </h4>
                            <div class="flex flex-wrap gap-3">
                                @if(is_array($project->tech_stack))
                                    @foreach($project->tech_stack as $tech)
                                        <span class="px-4 py-2 bg-gray-800 border-2 border-gray-700 text-gray-300 text-sm rounded-xl font-bold hover:border-blue-500 hover:text-blue-400 hover:shadow-lg hover:shadow-blue-500/20 transition-all duration-300 hover:scale-105">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <a href="{{ route('project.show', $project->id) }}" 
                            class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-2xl font-bold text-lg shadow-xl hover:shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 hover:scale-105"
                            data-aos="zoom-in" data-aos-delay="700" data-aos-once="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">                               
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />                            </svg>
                            <span>Detail Project</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            @empty
            <div class="text-center py-32 bg-gradient-to-br from-gray-800 to-gray-900 rounded-3xl shadow-xl border-2 border-gray-800" data-aos="zoom-in" data-aos-once="false">
                <div class="text-6xl mb-6">📦</div>
                <p class="text-gray-400 text-xl font-semibold mb-2">Belum ada proyek yang ditambahkan</p>
                <p class="text-sm text-gray-500">Jalankan <code class="px-3 py-1 bg-gray-800 rounded-lg font-mono">php artisan db:seed</code> untuk mengisi data</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section id="certificates" class="py-32 bg-gradient-to-b from-gray8gray-900 to-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 font-bold text-lg tracking-wider uppercase">Achievements</span>
            <h2 class="text-5xl md:text-6xl font-black text-white mt-2">
                Sertifikasi & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Pencapaian</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse($certificates as $cert)
        <a href="{{ $cert->link ?? '#' }}" target="_blank" class="group relative" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}" data-aos-duration="800">
            
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-0 group-hover:opacity-40 transition duration-500"></div>
            
            <div class="relative flex items-center gap-6 bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border-2 border-gray-700 hover:border-blue-500 shadow-lg hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-300 hover:scale-[1.02]">
                
                <div class="flex-shrink-0 w-20 h-20 bg-white rounded-2xl flex items-center justify-center p-2 shadow-lg group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 overflow-hidden">
                    @if(!empty($cert->image))
                        <img src="{{ asset($cert->image) }}" alt="{{ $cert->issuer }}" class="w-full h-full object-contain">
                    @else
                        <span class="text-4xl">🏆</span> @endif
                </div>
                
                <div class="flex-1">
                    <h3 class="text-lg md:text-xl font-bold text-white mb-1 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-300">
                        {{ $cert->title }}
                    </h3>
                    
                    <p class="text-blue-400 text-sm font-semibold mb-1">{{ $cert->issuer }}</p>
                    <p class="text-gray-500 text-xs">Klik untuk verifikasi</p>
                </div>
                
                <svg class="w-6 h-6 text-gray-600 group-hover:text-purple-400 group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </div>
        </a> @empty
        <div class="col-span-2 text-center py-20 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border-2 border-dashed border-gray-700">
            <div class="text-6xl mb-4">🎓</div>
            <p class="text-gray-400 text-lg font-semibold italic">Data sertifikat belum ditambahkan</p>
        </div>
    @endforelse
</div>

<section id="contact" class="py-32  >  
    
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-gradient-to-tr from-blue-600 to-purple-600 rounded-full blur-3xl opacity-10 pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-16" data-aos="fade-down">
        
            <h2 class="text-4xl md:text-5xl font-black text-white mt-2">
                Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Me </span>
            </h2>
        </div>

        <div class="bg-gray-900 p-8 rounded-3xl border border-gray-800 shadow-2xl" data-aos="fade-up">
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-500/10 border border-green-500 text-green-400 rounded-xl flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf 
                
                <div>
                    <label class="block text-gray-400 text-sm font-bold mb-2 ml-1">Nama Lengkap</label>
                    <input type="text" 
                           name="name" 
                           required
                           class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white focus:outline-none focus:border-blue-500 transition-colors placeholder-gray-600"
                           placeholder="Masukkan nama anda">
                </div>

                <div>
                    <label class="block text-gray-400 text-sm font-bold mb-2 ml-1">Email Address</label>
                    <input type="email" 
                           name="email" 
                           required
                           class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white focus:outline-none focus:border-blue-500 transition-colors placeholder-gray-600"
                           placeholder="email@contoh.com">
                </div>

                <div>
                    <label class="block text-gray-400 text-sm font-bold mb-2 ml-1">Pesan</label>
                    <textarea name="message" 
                              rows="4" 
                              required
                              class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl text-white focus:outline-none focus:border-blue-500 transition-colors placeholder-gray-600"
                              placeholder="Tuliskan pesan anda disini..."></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:shadow-blue-500/30 transform hover:scale-[1.02] transition-all duration-300">
                    Kirim Pesan Sekarang 🚀
                </button>
            </form>
        </div>
        </div>
</section>



<style>
@keyframes gradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 3s ease infinite;
}

@keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25% { transform: translate(20px, -50px) scale(1.1); }
    50% { transform: translate(-20px, 20px) scale(0.9); }
    75% { transform: translate(50px, 50px) scale(1.05); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>

<script>
// 1. Script Animasi AOS
document.addEventListener('DOMContentLoaded', function() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            once: false, 
            mirror: true, 
            offset: 100,
            easing: 'ease-out-cubic',
            anchorPlacement: 'top-bottom'
        });
        
        window.addEventListener('scroll', function() {
            AOS.refresh();
        });
    }
});

// 2. Script Slider (AGAR TOMBOL BERFUNGSI)
function moveSlider(button, direction) {
    const container = button.parentElement.querySelector('.slider-container');
    
    if(container) {
        const scrollAmount = container.offsetWidth; 

        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }
}
</script>

@endsection