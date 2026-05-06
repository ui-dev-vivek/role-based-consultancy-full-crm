<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Protect Your" highlightText="Intellectual Property"
            description="Expert trademark, patent, MSME & ISO registration services with guaranteed success."
            badge="Legal Experts Available" breadcrumbText="IP & Legal" primaryBtnText="Get Consultation"
            primaryBtnUrl="#consultation" height="400px" />
    @endsection

    <!-- Services Section -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Our IP Services</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Comprehensive intellectual property protection solutions for entrepreneurs, startups, and
                    established businesses.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Trademark -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center mb-4">
                        <i class="fas fa-trademark text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Trademark Registration</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        Protect your brand name, logo & identity with comprehensive trademark registration across India.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Logo & Brand Protection
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> National & International
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> 7-10 Days Filing
                        </li>
                    </ul>
                </div>

                <!-- Patent -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div
                        class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center mb-4">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Patent Filing</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        Secure your innovation with comprehensive patent protection for inventions & technology.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Utility & Design Patents
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Prior Art Search
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Expert Patent Drafting
                        </li>
                    </ul>
                </div>

                <!-- MSME -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div
                        class="w-12 h-12 rounded-xl bg-green-100 dark:bg-green-900/30 text-green-600 flex items-center justify-center mb-4">
                        <i class="fas fa-building text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">MSME Registration</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        Government recognition for micro, small & medium enterprises with benefits & subsidies.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Udyam Registration
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Tax Benefits & Subsidies
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Credit Facility Access
                        </li>
                    </ul>
                </div>

                <!-- ISO -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-md hover:shadow-xl transition-shadow">
                    <div
                        class="w-12 h-12 rounded-xl bg-red-100 dark:bg-red-900/30 text-red-600 flex items-center justify-center mb-4">
                        <i class="fas fa-certificate text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">ISO Certification</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        International quality & management certifications to enhance business credibility globally.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> ISO 9001, 27001, 45001
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Quality Management
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-green-500"></i> Global Recognition
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
                            <i class="fas fa-rupiah-sign text-xl"></i>
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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
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
                            class="flex items-center justify-center h-12 w-12 rounded-xl bg-primary-100 dark:bg-primary-900/30 text-primary-600">
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
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Our Simple Process</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Easy steps to protect your intellectual property
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="relative">
                    <div class="absolute top-12 left-16 right-0 h-0.5 bg-primary-300 hidden md:block"></div>
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
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
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
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
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 text-center relative z-10">
                        <div
                            class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                            3
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">File & Track</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            File with authorities & track status online
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 text-center relative z-10">
                    <div
                        class="w-16 h-16 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-600 flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Approval & Certificate</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">
                        Receive your certificate & documentation
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20" id="consultation">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Frequently Asked Questions</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Common questions about IP & Legal services
                </p>
            </div>

            <div class="space-y-4">
                <div x-data="{ open: false }" class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden">
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

                <div x-data="{ open: false }" class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden">
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

                <div x-data="{ open: false }" class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden">
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

                <div x-data="{ open: false }" class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden">
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
                <a href="https://wa.me/917619876249" target="_blank"
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
