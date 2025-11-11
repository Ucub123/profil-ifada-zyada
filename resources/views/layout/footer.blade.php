<footer class="glass-effect border-t border-gray-800 mt-20">
    <div class="container mx-auto px-4 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- About Section -->
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-white">Ifada Ziyada</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Software Engineering Student | Administrative Professional di PT ICON+. 
                    Berfokus pada pengembangan teknologi dan transformasi digital.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#home" class="text-gray-400 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="#profil" class="text-gray-400 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Profil
                        </a>
                    </li>
                    <li>
                        <a href="#pengalaman" class="text-gray-400 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Pengalaman
                        </a>
                    </li>
                    <li>
                        <a href="#kontak" class="text-gray-400 hover:text-purple-400 transition-colors duration-300 flex items-center">
                            <i class="fas fa-chevron-right text-xs mr-2"></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Hubungi Saya</h3>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-map-marker-alt text-purple-400 mr-3"></i>
                        <span class="text-sm">Makassar, Indonesia</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-envelope text-purple-400 mr-3"></i>
                        <a href="mailto:ifada.ziyada@email.com" class="text-sm hover:text-purple-400 transition-colors">
                            ifada.ziyada@email.com
                        </a>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-phone text-purple-400 mr-3"></i>
                        <a href="tel:+62" class="text-sm hover:text-purple-400 transition-colors">
                            +62 xxx xxxx xxxx
                        </a>
                    </li>
                </ul>
                
                <!-- Social Media -->
                <div class="flex space-x-3 mt-6">
                    <a href="#" class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-purple-500 transition-all duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-purple-500 transition-all duration-300">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-purple-500 transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 glass-effect rounded-full flex items-center justify-center text-gray-400 hover:text-white hover:bg-purple-500 transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    © {{ date('Y') }} Ifada Ziyada Umar. All rights reserved.
                </p>
                <p class="text-gray-400 text-sm">
                    Made with <i class="fas fa-heart text-red-500"></i> using Laravel & Tailwind CSS
                </p>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 gradient-bg rounded-full flex items-center justify-center text-white shadow-lg hover:shadow-purple-500/50 transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>

@push('scripts')
<script>
    // Back to Top Button
    const backToTopBtn = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'invisible');
            backToTopBtn.classList.add('opacity-100', 'visible');
        } else {
            backToTopBtn.classList.remove('opacity-100', 'visible');
            backToTopBtn.classList.add('opacity-0', 'invisible');
        }
    });
    
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
@endpush