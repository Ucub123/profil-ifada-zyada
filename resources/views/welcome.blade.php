@extends('layout.app')

@section('title', 'Home - Ifada Ziyada Umar')

@section('content')
<!-- Hero Section -->
<section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-20">
    <!-- Background Animation -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-1/2 -left-1/2 w-full h-full bg-purple-500 opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-1/2 -right-1/2 w-full h-full bg-pink-500 opacity-10 rounded-full blur-3xl"></div>
    </div>
    
    <div class="container mx-auto px-4 lg:px-8 relative z-10">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Profile Image -->
            <div class="mb-8 inline-block">
                <div class="w-32 h-32 md:w-40 md:h-40 gradient-bg rounded-full p-1 mx-auto animate-pulse">
                    <div class="w-full h-full bg-gray-900 rounded-full flex items-center justify-center">
                        <span class="text-5xl md:text-6xl font-bold text-gradient">IZ</span>
                    </div>
                </div>
            </div>
            
            <!-- Greeting -->
            <div class="mb-4">
                <span class="inline-block px-6 py-2 glass-effect rounded-full text-purple-400 text-sm font-medium mb-4">
                    <i class="fas fa-hand-wave mr-2"></i> Halo, Selamat Datang!
                </span>
            </div>
            
            <!-- Name -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6">
                Saya <span class="text-gradient">Ifada Ziyada Umar</span>
            </h1>
            
            <!-- Title -->
            <p class="text-xl md:text-2xl text-gray-300 mb-4">
                Software Engineering Student
            </p>
            <p class="text-lg md:text-xl text-purple-400 mb-8">
                Administrative Professional | Digital Enthusiast
            </p>
            
            <!-- Description -->
            <p class="text-gray-400 text-base md:text-lg max-w-3xl mx-auto mb-12 leading-relaxed">
                Mahasiswa D4 Teknik Elektro (Software Engineering - GCS Singapore) di Universitas Negeri Makassar. 
                Berpengalaman sebagai Administrative di PT ICON+ dengan fokus pada pengembangan teknologi 
                dan transformasi digital.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <a href="#profil" class="gradient-bg text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-user mr-2"></i> Lihat Profil
                </a>
                <a href="#kontak" class="glass-effect text-white px-8 py-4 rounded-full font-semibold border border-purple-500/50 hover:bg-white/10 transition-all duration-300 inline-flex items-center justify-center">
                    <i class="fas fa-envelope mr-2"></i> Hubungi Saya
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="glass-effect rounded-xl p-6 card-hover">
                    <i class="fas fa-graduation-cap text-purple-400 text-3xl mb-3"></i>
                    <h3 class="text-2xl font-bold text-white mb-1">D4</h3>
                    <p class="text-gray-400 text-sm">Teknik Elektro</p>
                </div>
                <div class="glass-effect rounded-xl p-6 card-hover">
                    <i class="fas fa-briefcase text-purple-400 text-3xl mb-3"></i>
                    <h3 class="text-2xl font-bold text-white mb-1">PT ICON+</h3>
                    <p class="text-gray-400 text-sm">Administrative</p>
                </div>
                <div class="glass-effect rounded-xl p-6 card-hover">
                    <i class="fas fa-code text-purple-400 text-3xl mb-3"></i>
                    <h3 class="text-2xl font-bold text-white mb-1">Software</h3>
                    <p class="text-gray-400 text-sm">Engineering</p>
                </div>
                <div class="glass-effect rounded-xl p-6 card-hover">
                    <i class="fas fa-chart-line text-purple-400 text-3xl mb-3"></i>
                    <h3 class="text-2xl font-bold text-white mb-1">BPS</h3>
                    <p class="text-gray-400 text-sm">Mitra Data</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#profil" class="text-gray-400 hover:text-purple-400 transition-colors">
            <i class="fas fa-chevron-down text-2xl"></i>
        </a>
    </div>
</section>

@include('profil')
@include('pengalaman')
@include('kontak')

@endsection