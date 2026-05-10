{{-- ========================= --}}
{{-- CONTACT US PAGE --}}
{{-- ========================= --}}

<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Let’s" highlightText="Connect"
            description="Get in touch with us for admissions, internships, placements, research consultancy, startup guidance, or IP & legal services."
            badge="We’re Here to Help" breadcrumbText="Contact Us" primaryBtnText="Chat on WhatsApp"
            primaryBtnUrl="https://wa.me/{{ env('WA_NUMBER') }}" secondaryBtnText="Call Now" secondaryBtnUrl="tel:+{{ env('WA_NUMBER') }}"
            height="400px" :stats="[
                ['icon' => 'fas fa-headset', 'color' => 'cyan-400', 'text' => 'Quick Support Available'],
                ['icon' => 'fas fa-comments', 'color' => 'emerald-400', 'text' => 'Free Consultation'],
            ]" />
    @endsection


    <!-- Contact Section -->
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14">

                <!-- Left -->
                <div>

                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-sm font-bold mb-5">
                        Contact Information
                    </span>

                    <h2 class="text-4xl font-black text-slate-900 dark:text-white mb-6">
                        Talk to Our Experts
                    </h2>

                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-10">
                        Reach out for career guidance, research support,
                        startup consultancy, training programs, or legal services.
                    </p>

                    <div class="space-y-5">

                        <!-- Phone -->
                        <div
                            class="flex items-start gap-5 bg-slate-50 dark:bg-slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Phone Support
                                </h4>

                                <a href="tel:+{{ env('WA_NUMBER') }}"
                                    class="text-slate-600 dark:text-slate-400 hover:text-cyan-600">
                                    +91 76198 76249
                                </a>
                            </div>

                        </div>

                        <!-- WhatsApp -->
                        <div
                            class="flex items-start gap-5 bg-slate-50 dark:bg-slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-green-100 dark:bg-green-900/30 text-green-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fab fa-whatsapp"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    WhatsApp
                                </h4>

                                <a href="https://wa.me/{{ env('WA_NUMBER') }}" target="_blank"
                                    class="text-slate-600 dark:text-slate-400 hover:text-cyan-600">
                                    Chat With Us
                                </a>
                            </div>

                        </div>

                        <!-- Email -->
                        <div
                            class="flex items-start gap-5 bg-slate-50 dark:bg-slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-cyan-100 dark:bg-cyan-900/30 text-cyan-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Email Address
                                </h4>

                                <p class="text-slate-600 dark:text-slate-400">
                                    support@example.com
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Right -->
                <div
                    class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8">

                    <h3 class="text-3xl font-black text-slate-900 dark:text-white mb-6">
                        Send a Message
                    </h3>

                    <form class="space-y-5">

                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                                Full Name
                            </label>

                            <input type="text"
                                class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                                Email Address
                            </label>

                            <input type="email"
                                class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                                Message
                            </label>

                            <textarea rows="5"
                                class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-6 py-4 rounded-xl bg-cyan-600 hover:bg-cyan-500 text-white font-bold transition-all">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>

</x-layouts.main.base>
