{{-- ========================= --}}
{{-- ABOUT US PAGE --}}
{{-- ========================= --}}

<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Building Careers," highlightText="Research & Innovation"
            description="We help students, researchers, startups, and professionals through admissions, training, placements, research consultancy, and intellectual property services."
            badge="About Our Organization" breadcrumbText="About Us" primaryBtnText="Talk to Our Team"
            primaryBtnUrl="https://wa.me/{{ env('WA_NUMBER') }}" secondaryBtnText="Call Now" secondaryBtnUrl="tel:+{{ env('WA_NUMBER') }}"
            height="400px" :stats="[
                ['icon' => 'fas fa-user-graduate', 'color' => 'emerald-400', 'text' => '1000+ Students Guided'],
                ['icon' => 'fas fa-briefcase', 'color' => 'blue-400', 'text' => 'Career & Research Support'],
            ]" />
    @endsection


    <!-- About Intro -->
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left -->
                <div>

                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 text-sm font-bold mb-5">
                        Who We Are
                    </span>

                    <h2 class="text-4xl font-black text-slate-900 dark:text-white leading-tight mb-6">
                        A Modern Consultancy Ecosystem for Students & Startups
                    </h2>

                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        We provide complete support for admissions, skill development,
                        placements, research consultancy, startup growth, and
                        intellectual property services.
                    </p>

                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        Our goal is to bridge the gap between education,
                        industry, innovation, and legal protection by creating
                        a single platform for professional growth and support.
                    </p>

                </div>

                <!-- Right -->
                <div class="grid grid-cols-2 gap-5">

                    <div
                        class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6">

                        <i class="fas fa-graduation-cap text-4xl text-emerald-500 mb-4"></i>

                        <h3 class="font-black text-xl text-slate-900 dark:text-white mb-2">
                            Admissions
                        </h3>

                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Career counseling and admission guidance for professional courses.
                        </p>
                    </div>

                    <div
                        class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6">

                        <i class="fas fa-briefcase text-4xl text-blue-500 mb-4"></i>

                        <h3 class="font-black text-xl text-slate-900 dark:text-white mb-2">
                            Placements
                        </h3>

                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Internship, training, and PPO-focused career support.
                        </p>
                    </div>

                    <div
                        class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6">

                        <i class="fas fa-flask text-4xl text-orange-500 mb-4"></i>

                        <h3 class="font-black text-xl text-slate-900 dark:text-white mb-2">
                            Research
                        </h3>

                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Thesis, publications, data analysis, and academic support.
                        </p>
                    </div>

                    <div
                        class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6">

                        <i class="fas fa-balance-scale text-4xl text-purple-500 mb-4"></i>

                        <h3 class="font-black text-xl text-slate-900 dark:text-white mb-2">
                            IP & Legal
                        </h3>

                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Trademark, patents, copyrights, MSME & startup support.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Vision -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <span
                class="inline-flex items-center px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-sm font-bold mb-5">
                Our Vision
            </span>

            <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-6">
                Empowering Growth Through Guidance & Innovation
            </h2>

            <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                We aim to create an ecosystem where students, researchers,
                startups, and professionals can access the right guidance,
                practical opportunities, research support, and legal protection
                under one trusted platform.
            </p>

        </div>
    </section>

</x-layouts.main.base>
