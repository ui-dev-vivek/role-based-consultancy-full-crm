<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Terms of" highlightText="Service"
            description="Read the terms and conditions that govern your use of the AcadNext website and consulting services."
            badge="AcadNext Policies" breadcrumbText="Terms of Service" primaryBtnText="Back to Home"
            primaryBtnUrl="/" height="300px" :stats="[
                ['icon' => 'fas fa-file-contract', 'color' => 'emerald-400', 'text' => 'Clear Terms of Use'],
                ['icon' => 'fas fa-user-check', 'color' => 'blue-400', 'text' => 'User Responsibilities'],
            ]" />
    @endsection

    <!-- Terms Content Section -->
    <section class="py-20 bg-white dark:bg-slate-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-slate dark:prose-invert max-w-none space-y-8 text-slate-700 dark:text-slate-300">
                
                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">1. Acceptance of Terms</h2>
                    <p class="leading-relaxed">
                        By accessing or using the <strong>AcadNext</strong> website, our services, or scheduling counseling sessions, you agree to comply with and be bound by these Terms of Service. If you do not agree with any part of these terms, you must refrain from using our services.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">2. Services Offered</h2>
                    <p class="leading-relaxed">
                        AcadNext is a comprehensive advisory ecosystem. We provide counseling, skill-based training recommendations, admissions facilitation, placements guidance, research support (thesis, dissertations, statistical analysis, and publications advice), and startup consultancy (patents, trademarking, copyrights, MSME, and ISO certifications).
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">3. User Responsibilities</h2>
                    <p class="leading-relaxed mb-4">
                        As a user, student, or scholar accessing our services, you agree to:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Provide accurate, current, and complete details when submitting forms or inquiries.</li>
                        <li>Maintain academic integrity in all research, documentation, and thesis guidance programs. We offer consultancy and formatting help; we do not engage in academic dishonesty or ghostwriting.</li>
                        <li>Refrain from using our portal or resources for any unlawful, fraudulent, or malicious purposes.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">4. Intellectual Property</h2>
                    <p class="leading-relaxed">
                        All materials, content, designs, logos, software workflows, and resources available on the AcadNext platform are protected by intellectual property laws. Users may not copy, distribute, modify, or resell any part of our site or proprietary material without explicit written permission from our management.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">5. Disclaimer of Warranties</h2>
                    <p class="leading-relaxed">
                        While we offer expert guidance and achieve high placement rates, admissions, and publication acceptances, AcadNext cannot guarantee admission to specific colleges, placement at specific salary packages, or acceptance in SCI/Scopus journals, as final decisions rest with the respective institutions, companies, or journal publishers.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">6. Limitation of Liability</h2>
                    <p class="leading-relaxed">
                        AcadNext and its representatives shall not be liable for any direct, indirect, incidental, or consequential damages resulting from your use of, or inability to use, our portal, services, or suggested educational programs.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">7. Contact Information</h2>
                    <p class="leading-relaxed">
                        For questions or clarifications regarding these terms, please contact us:
                    </p>
                    <div class="mt-4 p-5 bg-slate-50 dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 space-y-2">
                        <p><strong>Email:</strong> <a href="mailto:{{ config('app.email', 'info@acadnext.com') }}" class="text-primary-600 dark:text-primary-400 font-bold">{{ config('app.email', 'info@acadnext.com') }}</a></p>
                        <p><strong>WhatsApp Support:</strong> <a href="https://wa.me/{{ config('app.wa_number', '917619876249') }}" target="_blank" class="text-primary-600 dark:text-primary-400 font-bold">+{{ config('app.wa_number', '917619876249') }}</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.main.base>
