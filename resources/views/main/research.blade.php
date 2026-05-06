<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Excellence in" highlightText="Research & Academia"
            description="Professional support for thesis, research papers, journal publications, and data analysis across all disciplines."
            badge="Academic Support" breadcrumbText="Research" primaryBtnText="Get In Touch"
            primaryBtnUrl="https://wa.me/917619876249" height="400px" />
    @endsection

    <!-- SERVICES GRID -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Comprehensive Research Services</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    From thesis writing to journal publication — we support your academic journey
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Thesis/Dissertation -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-blue-400 dark:hover:border-blue-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Thesis & Dissertation Help</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Complete support from topic selection, literature review, methodology, writing to final
                        submission. Expert guidance for Bachelor's, Master's, and PhD theses.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Topic Selection & Proposal</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Research Design Consultation</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-blue-600 mt-1"></i>
                            <span>Editing & Formatting</span>
                        </li>
                    </ul>
                </div>

                <!-- Research Papers -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-purple-400 dark:hover:border-purple-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Research Papers & Articles</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Write, edit, and publish high-quality research papers. From conference papers to academic
                        journals with proper citations and formatting.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Original Research Writing</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Citation Management (APA, MLA, Chicago)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-purple-600 mt-1"></i>
                            <span>Conference Paper Preparation</span>
                        </li>
                    </ul>
                </div>

                <!-- Journal Publication -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-emerald-400 dark:hover:border-emerald-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Journal Publication (SCI, Scopus)
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Publish your research in reputed SCI, Scopus indexed, and UGC approved journals. Complete
                        support from submission to publication.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Journal Selection & Guidance</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Manuscript Submission Support</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span>Review & Revision Handling</span>
                        </li>
                    </ul>
                </div>

                <!-- Data Analysis -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-cyan-400 dark:hover:border-cyan-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Data Analysis & Statistics</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Expert data analysis using SPSS, Python, R, STATA and more. Statistical interpretation and
                        visualization of complex research data.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>SPSS, Python, R Analysis</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>Qualitative & Quantitative Methods</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-cyan-600 mt-1"></i>
                            <span>Data Visualization & Interpretation</span>
                        </li>
                    </ul>
                </div>

                <!-- Literature Review -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-orange-400 dark:hover:border-orange-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-orange-100 dark:bg-orange-900/30 text-orange-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Literature Review</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Comprehensive literature reviews covering systematic review, scoping review, and meta-analysis
                        with proper gap identification.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-600 mt-1"></i>
                            <span>Systematic Literature Search</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-600 mt-1"></i>
                            <span>Thematic Analysis & Synthesis</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-orange-600 mt-1"></i>
                            <span>Research Gap Identification</span>
                        </li>
                    </ul>
                </div>

                <!-- Synopsis & Proposals -->
                <div
                    class="group bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-md hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-pink-400 dark:hover:border-pink-600">
                    <div
                        class="w-14 h-14 rounded-xl bg-pink-100 dark:bg-pink-900/30 text-pink-600 flex items-center justify-center text-3xl mb-4 group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Synopsis & Proposal Writing</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-6">
                        Professional synopsis and research proposal writing for university approvals, grants, and
                        fellowship applications.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>PhD Synopsis Writing</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>Research Grant Proposals</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-pink-600 mt-1"></i>
                            <span>Fellowship Applications</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Why Choose Us for Research Support
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Trusted by 1000+ researchers and students</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Expert Team</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">PhDs and experienced researchers from top
                        universities</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Quality Assured</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Plagiarism-free work with strict quality
                        control</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">100% Confidential</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Your research privacy is our top priority</p>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 flex items-center justify-center text-2xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">24/7 Support</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Always available for your queries and
                        revisions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS TIMELINE -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Our Research Process</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Transparent, collaborative, and results-driven
                    approach</p>
            </div>

            <div class="space-y-8">
                <div class="flex gap-6 items-start">
                    <div
                        class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg font-black shrink-0">
                        1</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Initial Consultation</h3>
                        <p class="text-slate-600 dark:text-slate-400">Free 30-minute call to understand your research
                            requirements, timeline, and budget</p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-12 h-12 rounded-full bg-purple-600 text-white flex items-center justify-center text-lg font-black shrink-0">
                        2</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Customized Plan</h3>
                        <p class="text-slate-600 dark:text-slate-400">We create a detailed project plan with
                            milestones, deliverables, and revision rounds</p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center text-lg font-black shrink-0">
                        3</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Expert Execution</h3>
                        <p class="text-slate-600 dark:text-slate-400">Our specialists work on your project with regular
                            progress updates and feedback sessions</p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-12 h-12 rounded-full bg-orange-600 text-white flex items-center justify-center text-lg font-black shrink-0">
                        4</div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Quality Review & Delivery
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400">Final quality check, plagiarism verification, and
                            delivery of polished work</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING/PACKAGES -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Flexible Service Packages</h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">Affordable pricing for all academic levels</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-300 dark:border-slate-700 hover:shadow-xl transition-all">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Basic Package</h3>
                    <div class="text-3xl font-black text-blue-600 mb-6">₹5,000<span
                            class="text-sm text-slate-600 dark:text-slate-400">/month</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Literature review
                                assistance</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Editing & formatting
                                support</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Citation management</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Email support</span>
                        </li>
                    </ul>
                    <button onclick="window.location.href='https://wa.me/917619876249'"
                        class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors">
                        Get Started
                    </button>
                </div>

                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-emerald-400 to-cyan-400 rounded-2xl blur-lg opacity-0 group-hover:opacity-75 transition-opacity">
                    </div>
                    <div
                        class="relative bg-white dark:bg-slate-900 rounded-2xl p-8 border-2 border-emerald-400 dark:border-emerald-600">
                        <div
                            class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-4 py-1 bg-emerald-600 text-white rounded-full text-sm font-bold">
                            Most Popular</div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Professional Package</h3>
                        <div class="text-3xl font-black text-emerald-600 mb-6">₹15,000<span
                                class="text-sm text-slate-600 dark:text-slate-400">/month</span></div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-emerald-600 mt-1"></i>
                                <span class="text-sm text-slate-700 dark:text-slate-300">Complete thesis/dissertation
                                    writing</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-emerald-600 mt-1"></i>
                                <span class="text-sm text-slate-700 dark:text-slate-300">Data analysis (SPSS, Python,
                                    R)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-emerald-600 mt-1"></i>
                                <span class="text-sm text-slate-700 dark:text-slate-300">Journal publication
                                    guidance</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-check text-emerald-600 mt-1"></i>
                                <span class="text-sm text-slate-700 dark:text-slate-300">Priority support</span>
                            </li>
                        </ul>
                        <button onclick="window.location.href='https://wa.me/917619876249'"
                            class="w-full py-2 px-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-bold transition-colors">
                            Get Started
                        </button>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 border border-slate-300 dark:border-slate-700 hover:shadow-xl transition-all">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Enterprise Package</h3>
                    <div class="text-3xl font-black text-purple-600 mb-6">Custom<span
                            class="text-sm text-slate-600 dark:text-slate-400"> pricing</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">End-to-end research project</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Multiple publications</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">Dedicated research
                                consultant</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fas fa-check text-emerald-600 mt-1"></i>
                            <span class="text-sm text-slate-700 dark:text-slate-300">24/7 priority support</span>
                        </li>
                    </ul>
                    <button onclick="window.location.href='https://wa.me/917619876249'"
                        class="w-full py-2 px-4 bg-purple-600 hover:bg-purple-700 text-white rounded-lg font-bold transition-colors">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- GET IN TOUCH CTA -->
    <section
        class="py-20 bg-gradient-to-br from-orange-50 to-red-50 dark:from-orange-950/20 dark:to-red-950/20 relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-40 -right-40 w-80 h-80 bg-orange-200/30 dark:bg-orange-600/10 rounded-full blur-3xl">
            </div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-red-200/30 dark:bg-red-600/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-4">Ready to Advance Your Research?
                </h2>
                <p class="text-lg text-slate-700 dark:text-slate-300 max-w-2xl mx-auto">
                    Get expert guidance on your research journey. Connect with our team via WhatsApp for a quick
                    consultation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 text-center border border-slate-200 dark:border-slate-700">
                    <div
                        class="w-14 h-14 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 dark:text-white mb-2">WhatsApp Chat</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Quick response, personalized guidance
                    </p>
                    <a href="https://wa.me/917619876249" target="_blank"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg font-bold transition-colors">
                        <i class="fab fa-whatsapp"></i>
                        +91 7619 876 249
                    </a>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 text-center border border-slate-200 dark:border-slate-700">
                    <div
                        class="w-14 h-14 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 dark:text-white mb-2">Email Support</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">Detailed project inquiries</p>
                    <a href="mailto:research@adacnext.com"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-bold transition-colors">
                        <i class="fas fa-envelope"></i>
                        Email Us
                    </a>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-2xl p-8 text-center border border-slate-200 dark:border-slate-700">
                    <div
                        class="w-14 h-14 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 flex items-center justify-center text-2xl mx-auto mb-4">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="font-bold text-slate-900 dark:text-white mb-2">Free Consultation</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">30-minute expert session</p>
                    <button onclick="window.location.href='https://wa.me/917619876249'"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-lg font-bold transition-colors">
                        <i class="fas fa-clock"></i>
                        Book Now
                    </button>
                </div>
            </div>

            <div class="text-center">
                <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                    <i class="fas fa-check-circle text-emerald-600 mr-2"></i>
                    Response within 2 hours during working hours
                </p>
            </div>
        </div>
    </section>

</x-layouts.main.base>
