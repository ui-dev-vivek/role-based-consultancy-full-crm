<x-layouts.main.base>
    @section('page-hero')
        <x-ui.home-hero />
    @endsection

    <!-- SERVICES OVERVIEW -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">
                    Our Complete Services Ecosystem
                </h2>

                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">
                    From admissions and placements to research, legal consultancy, and digital growth —
                    we provide complete support for students, professionals, startups, and businesses.
                </p>
            </div>

            <!-- Main Services -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

                <!-- Admissions -->
                <a href="/admissions" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-emerald-400 dark:hover:border-emerald-600">

                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-emerald-100 to-cyan-100 dark:from-emerald-900/30 dark:to-cyan-900/30 text-emerald-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">
                            Admissions & Career Counseling
                        </h3>

                        <p class=" text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Personalized guidance for Technical, Management, and professional
                            courses with scholarship, college selection, and career support.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 text-emerald-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore Services
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Training -->
                <a href="/training-and-placements" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-600">

                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-100 to-cyan-100 dark:from-blue-900/30 dark:to-cyan-900/30 text-blue-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-briefcase"></i>
                        </div>

                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">
                            Training & Placements
                        </h3>

                        <p class=" text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Industry-focused training, internships, live projects, interview preparation,
                            resume building, and placement assistance for career growth.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 text-blue-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore Services
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- IP & Legal -->
                <a href="/intellectual-property" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-purple-400 dark:hover:border-purple-600">

                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30 text-purple-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                            <i class="fas fa-balance-scale"></i>
                        </div>

                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">
                            IP & Legal Services
                        </h3>

                        <p class="  text-slate-600 dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Trademark, patent, copyright, MSME registration, startup compliance,
                            and ISO certification services to legally protect your ideas and business.
                        </p>

                        <div
                            class="inline-flex  items-center gap-2 text-purple-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore Services
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Research -->
                <a href="/research" class="group">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all h-full border border-slate-200 dark:border-slate-700 hover:border-orange-400 dark:hover:border-orange-600">

                        <div
                            class="w-16 h-16 rounded-2xl bg-gradient-to-br from-orange-100 to-red-100 dark:from-orange-900/30 dark:to-red-900/30 text-orange-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                            <i class="fas fa-flask"></i>
                        </div>

                        <h3 class="text-xl font-black text-slate-900 dark:text-white mb-2">
                            Research & Academic Support
                        </h3>

                        <p class="text-slate-600  dark:text-slate-400 text-sm mb-4 leading-relaxed">
                            Professional assistance for thesis, dissertations, conference papers,
                            journal publications, literature review, and research documentation.
                        </p>

                        <div
                            class="inline-flex items-center gap-2 text-orange-600 font-bold text-sm group-hover:gap-3 transition-all">
                            Explore Services
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

            </div>

            <!-- Other Services -->
            <div class="mt-14">

                {{-- <div class="flex items-center gap-3 mb-6">
                    <div class="h-px flex-1 bg-slate-300 dark:bg-slate-700"></div>

                    <span class="text-sm font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">
                        Other Services
                    </span>

                    <div class="h-px flex-1 bg-slate-300 dark:bg-slate-700"></div>
                </div> --}}

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <!-- Digital Marketing -->
                    <div
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-6 py-5 hover:shadow-lg transition-all">

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center text-xl">
                                <i class="fas fa-bullhorn"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white">
                                    Digital Marketing
                                </h4>

                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                    SEO, social media, paid ads & lead generation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Branding -->
                    <div
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-6 py-5 hover:shadow-lg transition-all">

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 flex items-center justify-center text-xl">
                                <i class="fas fa-pen-nib"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white">
                                    Branding Solutions
                                </h4>

                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                    Brand identity, logos & professional design systems.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Development -->
                    <div
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-6 py-5 hover:shadow-lg transition-all">

                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center text-xl">
                                <i class="fas fa-code"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white">
                                    Web & App Development
                                </h4>

                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                    Custom websites, portals, SaaS & mobile applications.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 sm:gap-8">

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
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center mb-14">
                <span
                    class="inline-flex items-center px-4 py-1.5 rounded-full bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 text-sm font-bold mb-4">
                    Simple Process
                </span>

                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">
                    How We Help You Succeed
                </h2>

                <p class="text-base text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    A streamlined consultation process designed for students, researchers,
                    professionals, and startups.
                </p>
            </div>

            <!-- Steps -->
            <div class="relative">

                <!-- Line -->
                <div
                    class="hidden lg:block absolute top-7 left-24 right-24 h-[2px] bg-gradient-to-r from-emerald-400 via-cyan-400 to-purple-400">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

                    <!-- Step 1 -->
                    <div
                        class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 text-center shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-r from-emerald-500 to-cyan-500 flex items-center justify-center mx-auto mb-4 shadow-lg relative z-10">
                            <i class="fas fa-comments text-white text-lg"></i>
                        </div>

                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">
                            Step 01
                        </span>

                        <h3 class="text-lg font-black text-slate-900 dark:text-white mt-2 mb-2">
                            Consultation
                        </h3>

                        <p class="text-sm  leading-relaxed text-slate-600 dark:text-slate-400">
                            Share your goals related to admissions, placements,
                            research, or legal services.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div
                        class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 text-center shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mx-auto mb-4 shadow-lg relative z-10">
                            <i class="fas fa-user-check text-white text-lg"></i>
                        </div>

                        <span class="text-xs font-bold uppercase tracking-wider text-cyan-600">
                            Step 02
                        </span>

                        <h3 class="text-lg font-black text-slate-900 dark:text-white mt-2 mb-2">
                            Planning
                        </h3>

                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            We create a personalized roadmap based on your academic,
                            career, or business needs.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div
                        class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 text-center shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center mx-auto mb-4 shadow-lg relative z-10">
                            <i class="fas fa-rocket text-white text-lg"></i>
                        </div>

                        <span class="text-xs font-bold uppercase tracking-wider text-blue-600">
                            Step 03
                        </span>

                        <h3 class="text-lg font-black text-slate-900 dark:text-white mt-2 mb-2">
                            Execution
                        </h3>

                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Our experts assist with applications, training,
                            documentation, and implementation.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div
                        class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-5 text-center shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">

                        <div
                            class="w-14 h-14 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mx-auto mb-4 shadow-lg relative z-10">
                            <i class="fas fa-chart-line text-white text-lg"></i>
                        </div>

                        <span class="text-xs font-bold uppercase tracking-wider text-purple-600">
                            Step 04
                        </span>

                        <h3 class="text-lg font-black text-slate-900 dark:text-white mt-2 mb-2">
                            Growth
                        </h3>

                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Continue growing with career guidance,
                            mentorship, and long-term support.
                        </p>
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
            <div
                class="inline-flex items-center px-5 py-2 rounded-full border border-white/20 bg-white/10 backdrop-blur-md mb-6">
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

            <!-- Heading -->
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-sm font-bold mb-4">
                    Testimonials
                </span>

                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">
                    What Our Clients Say
                </h2>

                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Real experiences from students, professionals, and startups
                    who trusted our guidance and consultancy services.
                </p>
            </div>

            <!-- Testimonials -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-5">

                <!-- Testimonial 1 -->
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-7 shadow-sm hover:shadow-xl border border-slate-200 dark:border-slate-700 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <img src="https://ui-avatars.com/api/?name=Rahul+Kumar&background=0f172a&color=fff&bold=true"
                            alt="Rahul" class="w-14 h-14 rounded-full">

                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">
                                Rahul Kumar
                            </h4>

                            <p class="text-sm text-slate-500 dark:text-slate-400">
                                Career & Placement Support
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        “The guidance and mentorship helped me gain confidence,
                        improve my profile, and prepare professionally for career opportunities.”
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-7 shadow-sm hover:shadow-xl border border-slate-200 dark:border-slate-700 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <img src="https://ui-avatars.com/api/?name=Priya+Sharma&background=0f172a&color=fff&bold=true"
                            alt="Priya" class="w-14 h-14 rounded-full">

                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">
                                Priya Sharma
                            </h4>

                            <p class="text-sm text-slate-500 dark:text-slate-400">
                                Research & Academic Assistance
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        “Excellent support for documentation, research formatting,
                        and publication guidance throughout the entire process.”
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-7 shadow-sm hover:shadow-xl border border-slate-200 dark:border-slate-700 transition-all duration-300">

                    <div class="flex items-center gap-4 mb-5">
                        <img src="https://ui-avatars.com/api/?name=Arjun+Singh&background=0f172a&color=fff&bold=true"
                            alt="Arjun" class="w-14 h-14 rounded-full">

                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">
                                Arjun Singh
                            </h4>

                            <p class="text-sm text-slate-500 dark:text-slate-400">
                                Startup & Legal Consultancy
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-1 mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        “Very professional consultancy for trademark registration,
                        startup documentation, and business guidance.”
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- PARTNER COLLEGES LOGOS -->
    <section class=" bg-white dark:bg-slate-800 border-t border-slate-200 dark:border-slate-700">

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
