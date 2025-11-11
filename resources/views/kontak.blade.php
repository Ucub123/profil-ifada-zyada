<!-- Kontak Section -->
<section id="kontak" class="py-20 relative">
    <div class="container mx-auto px-4 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-6 py-2 glass-effect rounded-full text-purple-400 text-sm font-medium mb-4">
                <i class="fas fa-envelope mr-2"></i> Hubungi Saya
            </span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Mari <span class="text-gradient">Terhubung</span>
            </h2>
            <p class="text-gray-400 max-w-2xl mx-auto">
                Jangan ragu untuk menghubungi saya. Saya akan senang mendengar dari Anda!
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Info -->
                <div>
                    <div class="glass-effect rounded-2xl p-8 mb-6">
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <i class="fas fa-info-circle text-purple-400 mr-3"></i>
                            Informasi Kontak
                        </h3>
                        
                        <div class="space-y-6">
                            <!-- Location -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Lokasi</h4>
                                    <p class="text-gray-400">Makassar, South Sulawesi</p>
                                    <p class="text-gray-400">Indonesia</p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-envelope text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Email</h4>
                                    <a href="mailto:ifada.ziyada@email.com" class="text-purple-400 hover:text-purple-300 transition-colors">
                                        ifada.ziyada@email.com
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="flex items-start">
                                <div class="w-12 h-12 gradient-bg rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-phone text-white text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Telepon</h4>
                                    <a href="tel:+62" class="text-purple-400 hover:text-purple-300 transition-colors">
                                        +62 xxx xxxx xxxx
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="glass-effect rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                            <i class="fas fa-share-alt text-purple-400 mr-3"></i>
                            Media Sosial
                        </h3>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <a href="#" class="glass-effect rounded-xl p-4 hover:bg-blue-600 transition-all duration-300 group card-hover">
                                <div class="flex items-center">
                                    <i class="fab fa-linkedin text-3xl text-blue-400 group-hover:text-white mr-3"></i>
                                    <div>
                                        <p class="text-white font-semibold">LinkedIn</p>
                                        <p class="text-gray-400 text-sm group-hover:text-gray-200">Connect</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="glass-effect rounded-xl p-4 hover:bg-gray-800 transition-all duration-300 group card-hover">
                                <div class="flex items-center">
                                    <i class="fab fa-github text-3xl text-gray-400 group-hover:text-white mr-3"></i>
                                    <div>
                                        <p class="text-white font-semibold">GitHub</p>
                                        <p class="text-gray-400 text-sm group-hover:text-gray-200">Follow</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="glass-effect rounded-xl p-4 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 transition-all duration-300 group card-hover">
                                <div class="flex items-center">
                                    <i class="fab fa-instagram text-3xl text-pink-400 group-hover:text-white mr-3"></i>
                                    <div>
                                        <p class="text-white font-semibold">Instagram</p>
                                        <p class="text-gray-400 text-sm group-hover:text-gray-200">Follow</p>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="#" class="glass-effect rounded-xl p-4 hover:bg-blue-500 transition-all duration-300 group card-hover">
                                <div class="flex items-center">
                                    <i class="fab fa-twitter text-3xl text-blue-400 group-hover:text-white mr-3"></i>
                                    <div>
                                        <p class="text-white font-semibold">Twitter</p>
                                        <p class="text-gray-400 text-sm group-hover:text-gray-200">Follow</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="glass-effect rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-paper-plane text-purple-400 mr-3"></i>
                        Kirim Pesan
                    </h3>
                    
                    <form id="contact-form" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-white font-medium mb-2">
                                <i class="fas fa-user mr-2 text-purple-400"></i>Nama Lengkap
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 transition-colors"
                                placeholder="Masukkan nama Anda"
                                required
                            >
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-white font-medium mb-2">
                                <i class="fas fa-envelope mr-2 text-purple-400"></i>Email
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 transition-colors"
                                placeholder="nama@email.com"
                                required
                            >
                        </div>
                        
                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-white font-medium mb-2">
                                <i class="fas fa-tag mr-2 text-purple-400"></i>Subjek
                            </label>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 transition-colors"
                                placeholder="Topik pesan"
                                required
                            >
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-white font-medium mb-2">
                                <i class="fas fa-comment-dots mr-2 text-purple-400"></i>Pesan
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5" 
                                class="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 transition-colors resize-none"
                                placeholder="Tulis pesan Anda..."
                                required
                            ></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            class="w-full gradient-bg text-white py-4 rounded-lg font-semibold hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 flex items-center justify-center"
                        >
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                    
                    <!-- Success/Error Message -->
                    <div id="form-message" class="mt-4 hidden">
                        <div class="p-4 rounded-lg">
                            <p class="text-center font-medium"></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Download CV -->
            <div class="mt-12 text-center">
                <div class="glass-effect rounded-2xl p-8 inline-block">
                    <h3 class="text-2xl font-bold text-white mb-4">
                        Tertarik untuk bekerja sama?
                    </h3>
                    <p class="text-gray-400 mb-6">
                        Download CV saya untuk informasi lebih lengkap
                    </p>
                    <a href="#" class="gradient-bg text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg hover:shadow-purple-500/50 transition-all duration-300 inline-flex items-center">
                        <i class="fas fa-download mr-2"></i>
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Contact Form Handler
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formMessage = document.getElementById('form-message');
        const messageText = formMessage.querySelector('p');
        
        // Simulate form submission
        formMessage.classList.remove('hidden');
        formMessage.querySelector('div').classList.add('bg-green-500/20', 'border', 'border-green-500');
        messageText.classList.add('text-green-400');
        messageText.textContent = 'Pesan Anda berhasil dikirim! Saya akan segera menghubungi Anda.';
        
        // Reset form
        this.reset();
        
        // Hide message after 5 seconds
        setTimeout(() => {
            formMessage.classList.add('hidden');
        }, 5000);
    });
</script>
@endpush