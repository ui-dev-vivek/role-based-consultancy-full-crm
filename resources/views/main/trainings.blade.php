<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Internships," highlightText="Training & PPO Support"
            description="Start with free learning, gain practical experience through internships, and prepare for Pre-Placement Opportunities with industry-focused guidance."
            badge="Internship to Career Growth" breadcrumbText="Training & Placements" primaryBtnText="Explore Opportunities"
            primaryBtnUrl="#career-support" height="320px" :stats="[
                ['icon' => 'fas fa-user-graduate', 'color' => 'emerald-400', 'text' => 'Student Focused Learning'],
                ['icon' => 'fas fa-briefcase', 'color' => 'blue-400', 'text' => 'Internship & PPO Guidance'],
            ]" />
    @endsection


    <!-- Main Section -->
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Content -->
                <div>

                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-sm font-bold mb-5">
                        Career Growth Ecosystem
                    </span>

                    <h2 class="text-4xl font-black text-slate-900 dark:text-white leading-tight mb-6">
                        From Free Learning to Internship & PPO Opportunities
                    </h2>

                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                        We help students build practical skills through curated free courses,
                        hands-on training, internship guidance, and career support that improves
                        real placement opportunities.
                    </p>

                    <div class="space-y-5">

                        <!-- Free Courses -->
                        <div class="flex items-start gap-4">

                            <div
                                class="w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center shrink-0">
                                <i class="fas fa-book-open"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Free Skill-Based Courses
                                </h4>

                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    Access curated learning resources for coding, marketing,
                                    communication, AI, and professional development.
                                </p>
                            </div>

                        </div>

                        <!-- Internship -->
                        <div class="flex items-start gap-4">

                            <div
                                class="w-14 h-14 rounded-2xl bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 flex items-center justify-center shrink-0">
                                <i class="fas fa-briefcase"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Internship Opportunities
                                </h4>

                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    Gain practical exposure through internships, live projects,
                                    and industry-oriented work experience.
                                </p>
                            </div>

                        </div>

                        <!-- PPO -->
                        <div class="flex items-start gap-4">

                            <div
                                class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center shrink-0">
                                <i class="fas fa-award"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    PPO & Placement Preparation
                                </h4>

                                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                    Resume building, interview preparation, communication training,
                                    and guidance for Pre-Placement Offers.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>


                <!-- Right Card -->
                <div class="relative" id="career-support">

                    <div class="absolute -top-10 -right-10 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl">
                    </div>

                    <div
                        class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 rounded-3xl p-8 border border-slate-700 shadow-2xl overflow-hidden">

                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 text-cyan-300 text-xs font-bold uppercase tracking-wider mb-5">
                            Student Support
                        </span>

                        <h3 class="text-3xl font-black text-white mb-4">
                            Need Internship or Career Guidance?
                        </h3>

                        <p class="text-slate-300 leading-relaxed mb-8">
                            Connect with us for internship opportunities, free learning resources,
                            career counseling, training programs, and PPO preparation support.
                        </p>

                        <div class="space-y-4">

                            <!-- Call -->
                            <a href="tel:+{{ config('app.wa_number', '9176198763454') }}"
                                class="flex items-center justify-between gap-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl p-5 transition-all duration-300">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="w-14 h-14 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-white">
                                            Call for Guidance
                                        </h4>

                                        <p class="text-sm text-slate-400">
                                            Speak directly with our support team
                                        </p>
                                    </div>

                                </div>

                                <i class="fas fa-arrow-right text-slate-500"></i>
                            </a>

                            <!-- WhatsApp -->
                            <a href="https://wa.me/9176198763454" target="_blank"
                                class="flex items-center justify-between gap-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl p-5 transition-all duration-300">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="w-14 h-14 rounded-2xl bg-green-500/20 text-green-400 flex items-center justify-center text-xl">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>

                                    <div>
                                        <h4 class="font-bold text-white">
                                            Chat on WhatsApp
                                        </h4>

                                        <p class="text-sm text-slate-400">
                                            Get quick answers and career support
                                        </p>
                                    </div>

                                </div>

                                <i class="fas fa-arrow-right text-slate-500"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

</x-layouts.main.base>
`
