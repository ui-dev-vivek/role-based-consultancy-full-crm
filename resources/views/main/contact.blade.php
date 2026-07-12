{{-- ========================= --}}
{{-- CONTACT US PAGE --}}
{{-- ========================= --}}

<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Let’s" highlightText="Connect"
            description="Get in touch with us for admissions, internships, placements, research consultancy, startup guidance, or IP & legal services."
            badge="We’re Here to Help" breadcrumbText="Contact Us" primaryBtnText="Chat on WhatsApp"
            primaryBtnUrl="https://wa.me/{{ config('app.wa_number', '0000000000') }}" secondaryBtnText="Call Now"
            secondaryBtnUrl="tel:+{{ config('app.wa_number', '0000000000') }}" height="400px" :stats="[
                ['icon' => 'fas fa-headset', 'color' => 'cyan-400', 'text' => 'Quick Support Available'],
                ['icon' => 'fas fa-comments', 'color' => 'emerald-400', 'text' => 'Free Consultation'],
            ]" />
    @endsection


    <!-- Contact Section -->
    <section class="py-20 bg-white -slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-14">

                <!-- Left -->
                <div>

                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full bg-blue-100 -blue-900/30 text-blue-700 dark:text-blue-300 text-sm font-bold mb-5">
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
                            class="flex items-start gap-5 bg-slate-50 -slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-emerald-100 -emerald-900/30 text-emerald-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Phone Support
                                </h4>

                                <a href="tel:+{{ config('app.wa_number', '0000000000') }}"
                                    class="text-slate-600 dark:text-slate-400 hover:text-cyan-600">
                                    +{{ config('app.wa_number', '0000000000') }}
                                </a>
                            </div>

                        </div>

                        <!-- WhatsApp -->
                        <div
                            class="flex items-start gap-5 bg-slate-50 -slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-green-100 -green-900/30 text-green-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fab fa-whatsapp"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    WhatsApp
                                </h4>

                                <a href="https://wa.me/{{ config('app.wa_number', '0000000000') }}" target="_blank"
                                    class="text-slate-600 dark:text-slate-400 hover:text-cyan-600">
                                    Chat With Us
                                </a>
                            </div>

                        </div>

                        <!-- Email -->
                        <div
                            class="flex items-start gap-5 bg-slate-50 -slate-900 rounded-2xl p-5 border border-slate-200 dark:border-slate-800">

                            <div
                                class="w-14 h-14 rounded-2xl bg-cyan-100 -cyan-900/30 text-cyan-600 flex items-center justify-center text-xl shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div>
                                <h4 class="font-bold text-slate-900 dark:text-white mb-1">
                                    Email Address
                                </h4>

                                <p class="text-slate-600 dark:text-slate-400">
                                    <a
                                        href="mailto:{{ config('app.email', 'info@acadnext.com') }}">{{ config('app.email', 'info@acadnext.com') }}</a>
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- Right -->
                @livewire('main.contact-us')

            </div>

        </div>
    </section>

</x-layouts.main.base>
