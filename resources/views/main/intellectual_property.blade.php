<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Protect Your" highlightText="Ideas, Brand & Innovation"
            description="Professional support for trademarks, patents, copyrights, MSME registration, ISO certifications, and startup legal compliance services."
            badge="IP & Legal Consultancy Services" breadcrumbText="IP & Legal" primaryBtnText="Talk to an Expert"
            primaryBtnUrl="https://wa.me/{{ config('app.wa_number', '0000000000') }}" secondaryBtnText="Call Now"
            secondaryBtnUrl="tel:+{{ config('app.wa_number', '0000000000') }}" height="400px" :stats="[
                ['icon' => 'fas fa-trademark', 'color' => 'blue-400', 'text' => 'Trademark & Brand Protection'],
                ['icon' => 'fas fa-lightbulb', 'color' => 'purple-400', 'text' => 'Patent & Startup Support'],
            ]" />
    @endsection

    <!-- Services Section -->
    <!-- IP SERVICES -->
    <section class="py-20 bg-slate-50 -slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Heading -->
            <div class="text-center mb-16">

                <span
                    class="inline-flex items-center px-4 py-1.5 rounded-full bg-purple-100 -purple-900/30 text-purple-700 dark:text-purple-300 text-sm font-bold mb-4">
                    Intellectual Property & Legal Consultancy
                </span>

                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">
                    Protect Your Ideas, Brand & Business
                </h2>

                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">
                    End-to-end intellectual property, startup registration, and legal
                    compliance services for students, startups, creators, innovators,
                    and businesses.
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Design Patent -->
                <div id="design-patents"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-cyan-400 dark:hover:border-cyan-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-cyan-100 -cyan-900/30 text-cyan-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-drafting-compass"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        Design Patent Services
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Protect the visual appearance, product design, structure,
                        packaging, and industrial creativity of your innovation.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>Industrial Design Protection</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>Design Filing Assistance</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>Documentation & Consultation</span>
                        </li>
                    </ul>
                </div>

                <!-- Utility Patent -->
                <div id="utility-patents"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-purple-400 dark:hover:border-purple-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-purple-100 -purple-900/30 text-purple-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-lightbulb"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        Utility Patent Filing
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Secure legal protection for technical inventions, innovative
                        systems, processes, products, and technologies.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Prior Art & Patent Search</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Technical Drafting Support</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Patent Filing Guidance</span>
                        </li>
                    </ul>
                </div>

                <!-- Copyright -->
                <div id="copyrights"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-pink-400 dark:hover:border-pink-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-pink-100 -pink-900/30 text-pink-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-copyright"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        Copyright Registration
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Protect original creative works including software, content,
                        books, research, music, videos, and digital assets.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>Content & Software Protection</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>Creative Work Registration</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>Legal Ownership Documentation</span>
                        </li>
                    </ul>
                </div>

                <!-- Trademark -->
                <div id="trademark"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-blue-100 -blue-900/30 text-blue-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-trademark"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        Trademark Registration
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Secure your business identity, logo, brand name, and product
                        identity with professional trademark filing support.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Brand Name Protection</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Logo & Identity Registration</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Filing & Objection Support</span>
                        </li>
                    </ul>
                </div>

                <!-- MSME -->
                <div id="msme-registration"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-emerald-400 dark:hover:border-emerald-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-emerald-100 -emerald-900/30 text-emerald-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-building"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        MSME Registration
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Register your business under MSME/Udyam to access government
                        schemes, subsidies, financial support, and credibility benefits.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Udyam Registration Support</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Government Scheme Eligibility</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Business Documentation Guidance</span>
                        </li>
                    </ul>
                </div>

                <!-- ISO -->
                <div id="iso-registration"
                    class="ip-card group bg-white -slate-800 rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-200 dark:border-slate-700 hover:border-red-400 dark:hover:border-red-600">

                    <div
                        class="w-14 h-14 rounded-xl bg-red-100 -red-900/30 text-red-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">

                        <i class="fas fa-certificate"></i>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        ISO Certification
                    </h3>

                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Improve trust, quality standards, and professional credibility
                        through internationally recognized ISO certifications.
                    </p>

                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-red-600 mt-1"></i>
                            <span>ISO 9001 & Business Standards</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-red-600 mt-1"></i>
                            <span>Documentation & Compliance Support</span>
                        </li>

                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-red-600 mt-1"></i>
                            <span>Certification Assistance</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Active Hash Highlight -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const currentHash = window.location.hash;

            if (currentHash) {

                const activeCard = document.querySelector(currentHash);

                if (activeCard) {

                    activeCard.classList.add(
                        'ring-2',
                        'ring-cyan-500',
                        'border-cyan-500',
                        'shadow-2xl',
                        'scale-[1.02]'
                    );

                    setTimeout(() => {
                        activeCard.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 200);
                }
            }
        });
    </script>

    <!-- Why Choose Us -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Why Choose Our IP Services</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Expert guidance with proven track record in intellectual property protection
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-users-tie text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Expert Team</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Experienced IP lawyers & consultants with 15+ years in patent & trademark law.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Fast Processing</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Quick filing with 7-10 days processing time for most registrations.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">100% Success Rate</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Proven track record with 500+ successful registrations & approvals.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-indian-rupee-sign text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Affordable Pricing</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Transparent pricing with no hidden charges. Flexible payment plans available.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-globe text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">International Support</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            International trademark & patent filing in 150+ countries.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="flex-shrink-0">
                        <div
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 -primary-900/30 text-primary-600">
                            <i class="fas fa-headset text-xl"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">24/7 Support</h3>
                        <p class="text-slate-600 dark:text-slate-400">
                            Dedicated support team available round the clock for your queries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-0 bg-slate-50 -slate-900">
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Our Simple Process</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Easy steps to protect your intellectual property
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="relative">
                    <div class="absolute top-12 left-16 right-0 h-0.5 bg-primary-300 hidden md:block"></div>
                    <div class="bg-white -slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 -primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            1
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Free Consultation</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Discuss your IP needs with our expert team
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-12 left-16 right-0 h-0.5 bg-primary-300 hidden md:block"></div>
                    <div class="bg-white -slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 -primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            2
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Documentation</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Prepare all required documents & applications
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute top-12 left-16 right-0 h-0.5 bg-primary-300 hidden md:block"></div>
                    <div class="bg-white -slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 -primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">File & Track</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            File with authorities & track status online
                        </p>
                    </div>
                </div>

                <div class="bg-white -slate-800 rounded-2xl p-6 text-center relative z-10">
                    <div
                        class="w-16 h-16 rounded-full bg-primary-100 -primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Approval & Certificate</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">
                        Receive your certificate & documentation
                    </p>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- Pricing Section -->
    <section class="" id="consultation">
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Simple & Transparent Pricing</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    All-inclusive packages with no hidden fees
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="border border-slate-200 dark:border-slate-700 rounded-2xl p-8 hover:border-primary-500 hover:shadow-xl transition-all">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Trademark</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-primary-600">₹5,999</span>
                        <p class="text-sm text-slate-600 dark:text-slate-400">For one class</p>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Govt. Fees Included
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 10 Days Filing
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Expert Drafting
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 5 Year Validity
                        </li>
                    </ul>
                    <button
                        class="w-full mt-6 bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 rounded-lg transition-colors">
                        Apply Now
                    </button>
                </div>

                <div class="border-2 border-primary-600 rounded-2xl p-8 shadow-xl relative">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary-600 text-white px-4 py-1 rounded-full text-sm font-bold">
                        Popular
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Patent Filing</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-primary-600">₹12,999</span>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Starting from</p>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Prior Art Search
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Professional Drafting
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 20 Days Filing
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Government Support
                        </li>
                    </ul>
                    <button
                        class="w-full mt-6 bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 rounded-lg transition-colors">
                        Apply Now
                    </button>
                </div>

                <div
                    class="border border-slate-200 dark:border-slate-700 rounded-2xl p-8 hover:border-primary-500 hover:shadow-xl transition-all">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">MSME Registration</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-primary-600">₹2,499</span>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Udyam Registration</p>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Free Government Filing
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 5 Days Processing
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Tax Benefits Guidance
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Certificate Delivery
                        </li>
                    </ul>
                    <button
                        class="w-full mt-6 bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 rounded-lg transition-colors">
                        Apply Now
                    </button>
                </div>

                <div
                    class="border border-slate-200 dark:border-slate-700 rounded-2xl p-8 hover:border-primary-500 hover:shadow-xl transition-all">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">ISO Certification</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-primary-600">₹7,999</span>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Starting from</p>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Audit & Assessment
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Documentation Support
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 30 Days Certification
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Annual Audit Included
                        </li>
                    </ul>
                    <button
                        class="w-full mt-6 bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 rounded-lg transition-colors">
                        Apply Now
                    </button>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-slate-50 -slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Common questions about IP & Legal services
                </p>
            </div>

            <div class="space-y-4">
                <div x-data="{ open: false }" class="bg-white -slate-800 rounded-xl overflow-hidden">
                    <button @click="open = !open"
                        class="w-full px-6 py-4 flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <h3 class="font-bold text-slate-900 dark:text-white text-left">
                            How long does trademark registration take?
                        </h3>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open"
                        class="px-6 py-4 border-t border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400">
                        Typically, trademark registration takes 4-6 months from filing. However, we ensure the
                        application is filed within 7-10 days. The remaining time is processing by the government
                        office.
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white -slate-800 rounded-xl overflow-hidden">
                    <button @click="open = !open"
                        class="w-full px-6 py-4 flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <h3 class="font-bold text-slate-900 dark:text-white text-left">
                            What documents are needed for patent filing?
                        </h3>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open"
                        class="px-6 py-4 border-t border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400">
                        You need: invention details, technical drawings, claims, abstract, and background information.
                        Our team will guide you through document preparation.
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white -slate-800 rounded-xl overflow-hidden">
                    <button @click="open = !open"
                        class="w-full px-6 py-4 flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <h3 class="font-bold text-slate-900 dark:text-white text-left">
                            What are the benefits of MSME registration?
                        </h3>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open"
                        class="px-6 py-4 border-t border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400">
                        MSME registration provides: subsidies, tax benefits, priority lending, government contracts
                        access, and reduced compliance burden.
                    </div>
                </div>

                <div x-data="{ open: false }" class="bg-white -slate-800 rounded-xl overflow-hidden">
                    <button @click="open = !open"
                        class="w-full px-6 py-4 flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                        <h3 class="font-bold text-slate-900 dark:text-white text-left">
                            Can I file trademark for multiple classes?
                        </h3>
                        <i class="fas fa-chevron-down transition-transform" :class="{ 'rotate-180': open }"></i>
                    </button>
                    <div x-show="open"
                        class="px-6 py-4 border-t border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-400">
                        Yes, you can file for multiple classes. Each class has a separate fee. Our consultants will
                        advise you on which classes are relevant for your business.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary-600 to-primary-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-black text-white mb-4">Ready to Protect Your IP?</h2>
            <p class="text-xl text-white/80 mb-8">
                Get expert consultation from our experienced team. 100% confidential, 100% free.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/{{ config('app.wa_number', '0000000000') }}" target="_blank"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-primary-600 font-bold rounded-xl hover:bg-slate-100 transition-colors">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    Chat with Expert
                </a>
                <a href="#consultation"
                    class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/20 hover:bg-white/30 text-white font-bold rounded-xl border border-white/50 transition-colors">
                    Schedule Call
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

</x-layouts.main.base>
