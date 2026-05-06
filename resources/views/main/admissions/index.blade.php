<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Find Your Perfect" highlightText="College & Course"
            description="Expert guidance for BBA, BCA, B.Tech, MBA & more — with guaranteed placement support."
            badge="Admissions Open 2024–25" breadcrumbText="Admissions" primaryBtnText="Enquire Now" primaryBtnUrl="#apply"
            secondaryBtnText="Chat with Us" secondaryBtnUrl="https://wa.me/917619876249" height="400px" />
    @endsection

    <!-- 🎓 SCHOLARSHIP HERO SECTION -->
    <section
        class="py-20 bg-gradient-to-br from-emerald-50 to-cyan-50 dark:from-emerald-950/20 dark:to-cyan-950/20 relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-40 -right-40 w-80 h-80 bg-emerald-200/30 dark:bg-emerald-600/10 rounded-full blur-3xl">
            </div>
            <div
                class="absolute -bottom-40 -left-40 w-80 h-80 bg-cyan-200/30 dark:bg-cyan-600/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-100 dark:bg-emerald-900/30 border border-emerald-300 dark:border-emerald-800 mb-6">
                    <i class="fas fa-star text-emerald-600"></i>
                    <span class="font-bold text-emerald-900 dark:text-emerald-300">Up to 100% Scholarship
                        Available</span>
                </div>
                <h2 class="text-5xl font-black text-slate-900 dark:text-white mb-4">
                    Quality Education
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-cyan-600">
                        Without Financial Burden
                    </span>
                </h2>
                <p class="text-xl text-slate-700 dark:text-slate-300 max-w-3xl mx-auto">
                    We believe talent should never be limited by affordability. Get merit-based and need-based
                    scholarships covering 25% to 100% of your tuition fees.
                </p>
            </div>

            {{-- <!-- Scholarship Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <div
                    class="bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-2xl p-6 border border-slate-200 dark:border-slate-700 text-center">
                    <div class="text-4xl font-black text-emerald-600 mb-2">500+</div>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Scholarships Awarded</p>
                </div>
                <div
                    class="bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-2xl p-6 border border-slate-200 dark:border-slate-700 text-center">
                    <div class="text-4xl font-black text-cyan-600 mb-2">₹50Cr+</div>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Total Aid Distributed</p>
                </div>
                <div
                    class="bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-2xl p-6 border border-slate-200 dark:border-slate-700 text-center">
                    <div class="text-4xl font-black text-blue-600 mb-2">95%</div>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Approval Rate</p>
                </div>
                <div
                    class="bg-white/80 dark:bg-slate-800/80 backdrop-blur rounded-2xl p-6 border border-slate-200 dark:border-slate-700 text-center">
                    <div class="text-4xl font-black text-purple-600 mb-2">7 Days</div>
                    <p class="text-sm font-semibold text-slate-600 dark:text-slate-400">Quick Approval</p>
                </div>
            </div> --}}
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Scholarship Tiers & Eligibility</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Choose the scholarship that fits your profile</p>
            </div>


            <!-- LEFT SIDE - 2x2 SCHOLARSHIP CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-6 mb-12">
                <!-- 100% Scholarship -->
                <div class="relative group h-full hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-cyan-600 rounded-3xl blur-2xl opacity-0 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-slate-900 rounded-3xl p-7 border-2 border-emerald-300 dark:border-emerald-700 h-full flex flex-col shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="mb-4 flex items-center justify-between">
                            <span
                                class="inline-block px-3 py-1.5 bg-gradient-to-r from-emerald-500 to-cyan-500 text-white rounded-full text-sm font-bold">⭐
                                BEST</span>
                            <i class="fas fa-crown text-emerald-500 text-lg"></i>
                        </div>
                        <div class="text-4xl font-black text-emerald-600 mb-2">100%</div>
                        <p class="text-slate-700 dark:text-slate-300 mb-5 text-sm font-bold uppercase tracking-wide">
                            Full Scholarship</p>
                        <ul class="space-y-3 mb-6 grow">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-emerald-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Top 1% score</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-emerald-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Tuition + Hostel</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-emerald-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Mentorship</span>
                            </li>
                        </ul>
                        <button onclick="openAdmissionModal()"
                            class="w-full py-3 px-4 bg-gradient-to-r from-emerald-600 to-cyan-600 hover:from-emerald-700 hover:to-cyan-700 text-white rounded-xl font-bold transition-all hover:scale-105 text-sm shadow-lg">
                            Contact Us
                        </button>
                    </div>
                </div>

                <!-- 75% Scholarship -->
                <div class="relative group h-full hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-3xl blur-2xl opacity-0 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-slate-900 rounded-3xl p-7 border-2 border-cyan-300 dark:border-cyan-700 h-full flex flex-col shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="mb-4 flex items-center justify-between">
                            <span
                                class="inline-block px-3 py-1.5 bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-full text-sm font-bold">💎
                                POPULAR</span>
                            <i class="fas fa-gem text-cyan-500 text-lg"></i>
                        </div>
                        <div class="text-4xl font-black text-cyan-600 mb-2">75%</div>
                        <p class="text-slate-700 dark:text-slate-300 mb-5 text-sm font-bold uppercase tracking-wide">
                            Three-Quarter</p>
                        <ul class="space-y-3 mb-6 grow">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Top 5% score</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Tuition + 50%
                                    Hostel</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Mentorship</span>
                            </li>
                        </ul>
                        <button onclick="openAdmissionModal()"
                            class="w-full py-3 px-4 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-700 hover:to-blue-700 text-white rounded-xl font-bold transition-all hover:scale-105 text-sm shadow-lg">
                            Contact Us
                        </button>
                    </div>
                </div>

                <!-- 50% Scholarship -->
                <div class="relative group h-full hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl blur-2xl opacity-0 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-slate-900 rounded-3xl p-7 border-2 border-blue-300 dark:border-blue-700 h-full flex flex-col shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="mb-4 flex items-center justify-between">
                            <span
                                class="inline-block px-3 py-1.5 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-full text-sm font-bold">👍
                                COMMON</span>
                            <i class="fas fa-handshake text-blue-500 text-lg"></i>
                        </div>
                        <div class="text-4xl font-black text-blue-600 mb-2">50%</div>
                        <p class="text-slate-700 dark:text-slate-300 mb-5 text-sm font-bold uppercase tracking-wide">
                            Half Scholarship</p>
                        <ul class="space-y-3 mb-6 grow">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-blue-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Top 20% score</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-blue-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">50% Tuition</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-blue-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Support</span>
                            </li>
                        </ul>
                        <button onclick="openAdmissionModal()"
                            class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white rounded-xl font-bold transition-all hover:scale-105 text-sm shadow-lg">
                            Contact Us
                        </button>
                    </div>
                </div>

                <!-- No Scholarship (Direct Admission) -->
                <div class="relative group h-full hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 rounded-3xl blur-2xl opacity-0 group-hover:opacity-60 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative bg-white dark:bg-slate-900 rounded-3xl p-7 border-2 border-orange-300 dark:border-orange-700 h-full flex flex-col shadow-lg hover:shadow-2xl transition-shadow">
                        <div class="mb-4 flex items-center justify-between">
                            <span
                                class="inline-block px-3 py-1.5 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full text-sm font-bold">🎓
                                DIRECT</span>
                            <i class="fas fa-bolt text-orange-500 text-lg"></i>
                        </div>
                        <div class="text-4xl font-black text-orange-600 mb-2">0%</div>
                        <p class="text-slate-700 dark:text-slate-300 mb-5 text-sm font-bold uppercase tracking-wide">
                            Direct Entry</p>
                        <ul class="space-y-3 mb-6 grow">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-orange-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">No score limit</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-orange-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Full fee
                                    payment</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-check-circle text-orange-600 mt-1 shrink-0 text-lg"></i>
                                <span class="text-slate-700 dark:text-slate-300 font-medium">Fast admission</span>
                            </li>
                        </ul>
                        <button onclick="openAdmissionModal()"
                            class="w-full py-3 px-4 bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white rounded-xl font-bold transition-all hover:scale-105 text-sm shadow-lg">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>




        </div>
    </section>

    <!-- 💰 SCHOLARSHIP TIERS -->
    <section class="py-12" id="apply">
        <div class="bg-slate-900 py-12">
            <x-ui.admission-form class="border" />
        </div>
    </section>

    <!-- 📋 SCHOLARSHIP APPLICATION PROCESS -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Simple 4-Step Scholarship Process
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">From application to approval in just 7 days</p>
            </div>

            <div class="relative">
                <!-- Progress Line -->
                <div
                    class="hidden md:block absolute top-16 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 via-cyan-400 to-blue-400">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">1</span>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Fill Application</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Complete your profile with academic
                                details and family income</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">2</span>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Document Submission</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Upload 12th mark sheet, entrance
                                score, and income proof</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">3</span>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Verification Call</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Our team verifies your documents and
                                discusses your profile</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
                            <span class="text-white font-black text-lg">4</span>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 text-center">
                            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Approval & Award</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Get your scholarship letter within 7
                                days guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Why Choose Our Admissions Program
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    We provide end-to-end guidance from college selection to placements
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">100+ Partner Colleges</h3>
                    <p class="text-slate-600 dark:text-slate-400">Access to premium colleges across India with
                        scholarship options</p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">100% Placement Rate</h3>
                    <p class="text-slate-600 dark:text-slate-400">Guaranteed placements in top companies with average
                        package ₹15+ LPA</p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Expert Counselors</h3>
                    <p class="text-slate-600 dark:text-slate-400">1-on-1 guidance from experienced education counselors
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Skill Development</h3>
                    <p class="text-slate-600 dark:text-slate-400">Free coding, communication & personality development
                        training</p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Scholarship Support</h3>
                    <p class="text-slate-600 dark:text-slate-400">50-100% scholarships available for deserving students
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div
                        class="w-14 h-14 rounded-full bg-pink-100 dark:bg-pink-900/30 text-pink-600 flex items-center justify-center mb-4 text-2xl">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Fast Track Admission</h3>
                    <p class="text-slate-600 dark:text-slate-400">Admission process completed within 7-15 days</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Popular Courses</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Choose from India's most demanded programs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-6 border border-blue-200 dark:border-blue-800 hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <span
                            class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-xs font-bold">
                            Scholarship ✓
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">BBA</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Bachelor of Business Administration</p>
                    <div class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <i class="fas fa-briefcase text-emerald-500"></i>
                        <span>Avg. Package: ₹8-12 LPA</span>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-6 border border-purple-200 dark:border-purple-800 hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <span
                            class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-xs font-bold">
                            Scholarship ✓
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">BCA</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Bachelor of Computer Applications</p>
                    <div class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <i class="fas fa-briefcase text-emerald-500"></i>
                        <span>Avg. Package: ₹12-18 LPA</span>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-6 border border-green-200 dark:border-green-800 hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-green-600 text-white flex items-center justify-center">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <span
                            class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-xs font-bold">
                            Scholarship ✓
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">B.Tech</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Bachelor of Technology</p>
                    <div class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <i class="fas fa-briefcase text-emerald-500"></i>
                        <span>Avg. Package: ₹15-25 LPA</span>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-6 border border-red-200 dark:border-red-800 hover:shadow-xl transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-red-600 text-white flex items-center justify-center">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <span
                            class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-xs font-bold">
                            Scholarship ✓
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">MBA</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Master of Business Administration</p>
                    <div class="flex items-center gap-2 text-sm text-slate-700 dark:text-slate-300">
                        <i class="fas fa-briefcase text-emerald-500"></i>
                        <span>Avg. Package: ₹18-30 LPA</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Modal Component -->
    <x-ui.admission-form-modal />

    <!-- Success Stories -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Success Stories</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">From students to successful professionals</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Rahul+Kumar&background=0f172a&color=fff&bold=true"
                            alt="Rahul Kumar" class="w-16 h-16 rounded-full">
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
                    <p class="text-slate-600 dark:text-slate-400 mb-4">
                        "Got 100% scholarship + admission to IIT Delhi! Their counseling was exceptional. Now at Google
                        earning ₹45 LPA!"
                    </p>
                    <p class="text-sm text-emerald-600 font-bold"><i class="fas fa-medal mr-1"></i>100% Scholarship
                        Winner</p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Priya+Sharma&background=0f172a&color=fff&bold=true"
                            alt="Priya Sharma" class="w-16 h-16 rounded-full">
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
                    <p class="text-slate-600 dark:text-slate-400 mb-4">
                        "Got 75% scholarship and free coding training. Placed in Amazon as SDE with ₹28 LPA!"
                    </p>
                    <p class="text-sm text-cyan-600 font-bold"><i class="fas fa-medal mr-1"></i>75% Scholarship Winner
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all">
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Arjun+Singh&background=0f172a&color=fff&bold=true"
                            alt="Arjun Singh" class="w-16 h-16 rounded-full">
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
                    <p class="text-slate-600 dark:text-slate-400 mb-4">
                        "Received 50% scholarship to XLRI. Mentorship was game-changing. Now at McKinsey earning ₹35
                        LPA!"
                    </p>
                    <p class="text-sm text-blue-600 font-bold"><i class="fas fa-medal mr-1"></i>50% Scholarship Winner
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-gradient-to-r from-primary-600 to-primary-800 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 right-10 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-primary-400/10 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 border border-white/30 mb-6">
                <i class="fas fa-lightning-bolt text-yellow-300"></i>
                <span class="text-white font-semibold">Limited Time Offer</span>
            </div>
            <h2 class="text-4xl font-black text-white mb-4">Get Your Scholarship Today!</h2>
            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Don't let finances limit your dreams. Apply for scholarship and get admission within 7 days guaranteed.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center flex-wrap">
                <button onclick="openAdmissionModal()"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-600 font-bold rounded-xl hover:bg-slate-100 hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <i class="fas fa-pen-to-square text-lg"></i>
                    Apply for Scholarship
                </button>
                <a href="https://wa.me/917619876249" target="_blank"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/20 hover:bg-white/30 text-white font-bold rounded-xl border-2 border-white/50 transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Chat on WhatsApp
                </a>
            </div>

            <!-- Trust Badges -->
            <div class="mt-12 flex flex-wrap justify-center gap-8 text-white/80 text-sm font-semibold">
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-emerald-300"></i>
                    <span>500+ Scholarships Awarded</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-emerald-300"></i>
                    <span>95% Approval Rate</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-check-circle text-emerald-300"></i>
                    <span>7 Days Approval Guarantee</span>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main.base>
