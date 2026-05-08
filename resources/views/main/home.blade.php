<x-layouts.main.base>
    @section('page-hero')
        <x-ui.home-hero />
    @endsection

    <!-- SERVICES OVERVIEW -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Our Complete Services Ecosystem</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    From admissions to career success — we're your complete education partner
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Admissions & Scholarships -->
                <a href="/admissions" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-emerald-400 dark:hover:border-emerald-600">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-100 to-cyan-100 dark:from-emerald-900/30 dark:to-cyan-900/30 text-emerald-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">Admissions & Scholarships
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            Guidance for BBA, BCA, B.Tech, MBA with 100% scholarship options and guaranteed placement
                            support.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-emerald-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Training & Placements -->
                <a href="#" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-600">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-purple-100 dark:from-blue-900/30 dark:to-purple-900/30 text-blue-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">Training & Placements</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            Professional skill development, coding bootcamps, and direct placements with ₹15+ LPA
                            average package.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-blue-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- IP & Legal -->
                <a href="/intellectual-property" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-purple-400 dark:hover:border-purple-600">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30 text-purple-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-scales"></i>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">IP & Legal Services</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            Trademark, patent, MSME registration, ISO certification, and complete legal compliance
                            support.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-purple-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Research & Academic -->
                <a href="/research" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-orange-400 dark:hover:border-orange-600">
                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-100 to-red-100 dark:from-orange-900/30 dark:to-red-900/30 text-orange-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-flask-vial"></i>
                        </div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">Research & Academic</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                            Thesis, research papers, journal publication (SCI, Scopus), data analysis, and literature
                            review.
                        </p>
                        <div
                            class="inline-flex items-center gap-2 text-orange-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- STATS COUNTER SECTION -->
   <section class="py-16 bg-gradient-to-r from-slate-900 to-slate-800 relative overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-10 w-96 h-96 bg-primary-600/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-8">

            <div class="text-center">
                <div
                    class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-400 mb-2">
                    1000+
                </div>
                <p class="text-white/80 text-sm md:text-base font-semibold">
                    Students & Professionals Guided
                </p>
            </div>

            <div class="text-center">
                <div
                    class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400 mb-2">
                    50+
                </div>
                <p class="text-white/80 text-sm md:text-base font-semibold">
                    Academic & Industry Partners
                </p>
            </div>

            <div class="text-center">
                <div
                    class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-green-400 mb-2">
                    200+
                </div>
                <p class="text-white/80 text-sm md:text-base font-semibold">
                    Training & Placement Supports
                </p>
            </div>

            <div class="text-center">
                <div
                    class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-400 mb-2">
                    150+
                </div>
                <p class="text-white/80 text-sm md:text-base font-semibold">
                    Research & Documentation Projects
                </p>
            </div>

            <div class="text-center">
                <div
                    class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400 mb-2">
                    100+
                </div>
                <p class="text-white/80 text-sm md:text-base font-semibold">
                    IP & Legal Consultations
                </p>
            </div>

        </div>
    </div>
</section>

    <!-- HOW IT WORKS -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">How It Works</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Simple 4-step journey to success</p>
            </div>

            <div class="relative">
                <div
                    class="hidden md:block absolute top-12 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 via-cyan-400 to-blue-400">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">1</span>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center border border-slate-200 dark:border-slate-700">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Consultation</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Free 1-on-1 consultation with our
                                expert counselors</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">2</span>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center border border-slate-200 dark:border-slate-700">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Profile Building</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Complete profile assessment &
                                personalized recommendations</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">3</span>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center border border-slate-200 dark:border-slate-700">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Application</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">End-to-end application support with
                                guaranteed admission</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">4</span>
                        </div>
                        <div
                            class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center border border-slate-200 dark:border-slate-700">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Success</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Lifetime support for training,
                                placement & career growth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- call banner --}}
<section class="relative py-15 overflow-hidden" id="get-started">

    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">

        <!-- Top Badge -->
        <div class="inline-flex items-center px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-md mb-6">
            <span class="text-sm md:text-base font-semibold tracking-wide text-cyan-200 uppercase">
                Limited Time Free Consultation
            </span>
        </div>

        <!-- Main Heading -->
        <h2 class="text-3xl md:text-5xl font-black leading-tight text-white mb-6">
            Free 30-Minute Expert Consultation
        </h2>

        <!-- Subtitle -->
        <p class="max-w-3xl mx-auto text-lg md:text-2xl text-slate-200 leading-relaxed mb-10">
            Get professional guidance for admissions, training, placements,
            research projects, patents, copyrights, and startup registrations.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-5">

           <a href="tel:{{ env('WA_NUMBER') }}"
    class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white bg-cyan-600 hover:bg-cyan-500 rounded-xl shadow-2xl transition duration-300">
    Book Your Free Call
</a>

              <a href="https://wa.me/{{ env('WA_NUMBER') }}" target="_blank"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-green-600 hover:bg-green-500 text-white font-bold rounded-xl shadow-lg transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Chat on WhatsApp
                </a>

        </div>

    </div>

    <!-- Decorative Blur -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-cyan-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-600/20 rounded-full blur-3xl"></div>

</section>

    <!-- TESTIMONIALS -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Success Stories</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Hear from our success stories</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Rahul+Kumar&background=0f172a&color=fff&bold=true"
                            alt="Rahul" class="w-14 h-14 rounded-full">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Rahul Kumar</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400">B.Tech, IIT Delhi</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        "Exceptional guidance! Got 100% scholarship to IIT Delhi. Now at Google with ₹45 LPA.
                        Life-changing service!"
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Priya+Sharma&background=0f172a&color=fff&bold=true"
                            alt="Priya" class="w-14 h-14 rounded-full">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Priya Sharma</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400">BCA, Delhi University</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        "Best decision! Got 75% scholarship and free coding training. Placed at Amazon SDE with ₹28
                        LPA!"
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Arjun+Singh&background=0f172a&color=fff&bold=true"
                            alt="Arjun" class="w-14 h-14 rounded-full">
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Arjun Singh</h4>
                            <p class="text-sm text-slate-600 dark:text-slate-400">BBA, XLRI Jamshedpur</p>
                        </div>
                    </div>
                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        "Got 50% scholarship to XLRI with outstanding mentorship. Now at McKinsey earning ₹35 LPA!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNER COLLEGES LOGOS -->
    <section class="py-16 bg-white dark:bg-slate-800 border-t border-slate-200 dark:border-slate-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3
                class="text-center text-sm font-bold text-slate-600 dark:text-slate-400 mb-10 uppercase tracking-widest">
                Trusted by 100+ colleges</h3>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center justify-items-center">
                <div class="text-slate-400 dark:text-slate-600 text-lg font-black">Delhi University</div>
                <div class="text-slate-400 dark:text-slate-600 text-lg font-black">IIT Delhi</div>
                <div class="text-slate-400 dark:text-slate-600 text-lg font-black">XLRI Jamshedpur</div>
                <div class="text-slate-400 dark:text-slate-600 text-lg font-black">Ashoka University</div>
                <div class="text-slate-400 dark:text-slate-600 text-lg font-black">BIT Mesra</div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-20 bg-gradient-to-r from-primary-600 to-primary-800 relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-10 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-primary-400/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl font-black text-white mb-4">Start Your Success Journey Today</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Join 5000+ students who transformed their careers with our expert guidance
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center flex-wrap">
                <a href="/admissions"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-600 font-bold rounded-xl hover:bg-slate-100 hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <i class="fas fa-pen-to-square text-lg"></i>
                    Explore Admissions
                </a>
                <a href="https://wa.me/{{ env('WA_NUMBER') }}" target="_blank"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/20 hover:bg-white/30 text-white font-bold rounded-xl border-2 border-white/50 transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </section>

</x-layouts.main.base>
