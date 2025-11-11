<header class="fixed top-0 w-full z-50 glass-effect">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                    <i class="fas fa-code text-white text-xl"></i>
                </div>
                <span class="text-xl font-bold text-white hidden sm:block">Ifada Ziyada</span>
            </a>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home" class="nav-link text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium">
                    Home
                </a>
                <a href="#profil" class="nav-link text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium">
                    Profil
                </a>
                <a href="#pengalaman" class="nav-link text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium">
                    Pengalaman
                </a>
                <a href="#kontak" class="nav-link text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium">
                    Kontak
                </a>
            </nav>
            
            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#kontak" class="gradient-bg text-white px-6 py-2.5 rounded-full font-semibold hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 inline-block">
                    Hubungi Saya
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-white text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden glass-effect border-t border-gray-700">
        <nav class="container mx-auto px-4 py-6 flex flex-col space-y-4">
            <a href="#home" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2">
                <i class="fas fa-home mr-2"></i> Home
            </a>
            <a href="#profil" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2">
                <i class="fas fa-user mr-2"></i> Profil
            </a>
            <a href="#pengalaman" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2">
                <i class="fas fa-briefcase mr-2"></i> Pengalaman
            </a>
            <a href="#kontak" class="text-gray-300 hover:text-purple-400 transition-colors duration-300 font-medium py-2">
                <i class="fas fa-envelope mr-2"></i> Kontak
            </a>
            <a href="#kontak" class="gradient-bg text-white px-6 py-3 rounded-full font-semibold text-center mt-4">
                Hubungi Saya
            </a>
        </nav>
    </div>
</header>

@push('scripts')
<script>
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });
    
    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        });
    });
</script>
@endpush