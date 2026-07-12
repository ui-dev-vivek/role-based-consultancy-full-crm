<x-layouts.main.base>

    @section('page-hero')
        <x-ui.hero title="Privacy" highlightText="Policy"
            description="Understand how we collect, use, and safeguard your personal information when using our platform."
            badge="AcadNext Policies" breadcrumbText="Privacy Policy" primaryBtnText="Back to Home"
            primaryBtnUrl="/" height="300px" :stats="[
                ['icon' => 'fas fa-shield-alt', 'color' => 'emerald-400', 'text' => 'Secure Data Handling'],
                ['icon' => 'fas fa-user-lock', 'color' => 'blue-400', 'text' => '100% Confidentiality'],
            ]" />
    @endsection

    <!-- Policy Content Section -->
    <section class="py-20 bg-white -slate-950">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-slate dark:prose-invert max-w-none space-y-8 text-slate-700 dark:text-slate-300">
                
                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">1. Introduction</h2>
                    <p class="leading-relaxed">
                        Welcome to <strong>AcadNext</strong>. We value your trust and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your data when you visit our website or use our services, including career counseling, admissions, training, placements, research support, and intellectual property consulting.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">2. Information We Collect</h2>
                    <p class="leading-relaxed mb-4">
                        We collect information that you directly provide to us when submitting inquiries, registering on our portal, or scheduling consultations. This may include:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li><strong>Personal Identity Data:</strong> Full name, date of birth, education qualifications, and professional background.</li>
                        <li><strong>Contact Coordinates:</strong> Email address, mobile phone number, guardian contact details, and postal address.</li>
                        <li><strong>Preferences & Inquiries:</strong> Selected courses, partner colleges of interest, budget details, and specific support requirements.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">3. How We Use Your Information</h2>
                    <p class="leading-relaxed mb-4">
                        We use the collected information for various purposes to deliver professional consultancy services:
                    </p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>To provide personalized admission guidance, career counseling, and training programs.</li>
                        <li>To process scholarship inquiries and facilitate interactions with partner colleges.</li>
                        <li>To manage research publications, patent applications, and legal registrations.</li>
                        <li>To communicate details of events, updates, or notifications related to your application.</li>
                        <li>To comply with regulatory obligations and maintain security protocols.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">4. Sharing and Disclosure</h2>
                    <p class="leading-relaxed">
                        Your privacy is our utmost priority. We do not sell or lease your personal information to third parties. We may share necessary details with verified partner institutions or service providers exclusively to facilitate your admissions, placements, or legal registrations under strict confidentiality conditions.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">5. Security of Your Data</h2>
                    <p class="leading-relaxed">
                        We implement industry-standard administrative, physical, and technological security controls to guard your personal data against unauthorized access, loss, alteration, or disclosure. However, no internet transmission method is entirely secure, and we cannot guarantee absolute data security.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">6. Your Rights</h2>
                    <p class="leading-relaxed">
                        You have the right to request access to the personal data we hold about you, request corrections to inaccurate information, or request deletion under certain circumstances. To exercise these rights, please contact our support team.
                    </p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-4">7. Contact Us</h2>
                    <p class="leading-relaxed">
                        For any queries, feedback, or concerns regarding this policy, you can reach our data compliance team at:
                    </p>
                    <div class="mt-4 p-5 bg-slate-50 -slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 space-y-2">
                        <p><strong>Email:</strong> <a href="mailto:{{ config('app.email', 'info@acadnext.com') }}" class="text-primary-600 dark:text-primary-400 font-bold">{{ config('app.email', 'info@acadnext.com') }}</a></p>
                        <p><strong>WhatsApp Support:</strong> <a href="https://wa.me/{{ config('app.wa_number', '917619876249') }}" target="_blank" class="text-primary-600 dark:text-primary-400 font-bold">+{{ config('app.wa_number', '917619876249') }}</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layouts.main.base>
