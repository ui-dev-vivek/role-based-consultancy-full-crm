@props([
    'title' => 'Admission Inquiry Form',
    'subtitle' => 'Share your details and we\'ll guide you through the admission process',
])

<div class="bg-white dark:bg-slate-800 rounded-3xl shadow-xl p-8 max-w-3xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h2 class="text-3xl font-black text-slate-900 dark:text-white mb-2">{{ $title }}</h2>
        <p class="text-slate-600 dark:text-slate-400">{{ $subtitle }}</p>
    </div>

    <!-- Form -->
    <form id="admissionForm" class="space-y-6">
        @csrf

        <!-- Name Field -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                    <span class="text-red-500">*</span> Full Name
                </label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 transition"
                    placeholder="Enter your full name">
                <span class="text-red-500 text-sm mt-1 hidden" id="nameError"></span>
            </div>

            <!-- Mobile Number -->
            <div>
                <label for="mobile_number" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                    <span class="text-red-500">*</span> Mobile Number
                </label>
                <input type="tel" id="mobile_number" name="mobile_number" required pattern="[0-9]{10}"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 transition"
                    placeholder="10-digit mobile number">
                <span class="text-red-500 text-sm mt-1 hidden" id="mobile_numberError"></span>
            </div>
        </div>

        <!-- Guardian Mobile Number -->
        <div>
            <label for="guardian_mobile_number" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                <span class="text-red-500">*</span> Father/Guardian Mobile Number
            </label>
            <input type="tel" id="guardian_mobile_number" name="guardian_mobile_number" required pattern="[0-9]{10}"
                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 transition"
                placeholder="10-digit guardian mobile number">
            <span class="text-red-500 text-sm mt-1 hidden" id="guardian_mobile_numberError"></span>
        </div>

        <!-- Interested Course -->
        <div>
            <label for="interested_course" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                <span class="text-red-500">*</span> Interested Course
            </label>
            <select id="interested_course" name="interested_course" required
                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 transition">
                <option value="">-- Select a Course --</option>
                <option value="BBA">BBA (Bachelor of Business Administration)</option>
                <option value="BCA">BCA (Bachelor of Computer Applications)</option>
                <option value="B.Tech">B.Tech (Bachelor of Technology)</option>
                <option value="MBA">MBA (Master of Business Administration)</option>
                <option value="M.Tech">M.Tech (Master of Technology)</option>
                <option value="BA">BA (Bachelor of Arts)</option>
                <option value="B.Sc">B.Sc (Bachelor of Science)</option>
                <option value="B.Com">B.Com (Bachelor of Commerce)</option>
                <option value="Other">Other</option>
            </select>
            <span class="text-red-500 text-sm mt-1 hidden" id="interested_courseError"></span>
        </div>

        <!-- City & State -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="city" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                    <span class="text-red-500">*</span> City
                </label>
                <input type="text" id="city" name="city" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 transition"
                    placeholder="Enter your city">
                <span class="text-red-500 text-sm mt-1 hidden" id="cityError"></span>
            </div>

            <div>
                <label for="state" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                    <span class="text-red-500">*</span> State
                </label>
                <select id="state" name="state" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 transition">
                    <option value="">-- Select State --</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
                <span class="text-red-500 text-sm mt-1 hidden" id="stateError"></span>
            </div>
        </div>

        <!-- Scholarship Status -->
        <div>
            <label class="block text-sm font-bold text-slate-900 dark:text-white mb-4">
                <span class="text-red-500">*</span> Scholarship Status
            </label>
            <div class="space-y-3">
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="scholarship_status" value="scholarship" required
                        class="w-4 h-4 text-primary-600 border-slate-300 focus:ring-primary-500">
                    <span class="text-slate-900 dark:text-white font-medium">Need Scholarship</span>
                </label>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="radio" name="scholarship_status" value="non-scholarship" required checked
                        class="w-4 h-4 text-primary-600 border-slate-300 focus:ring-primary-500">
                    <span class="text-slate-900 dark:text-white font-medium">Non-Scholarship (Self-Funded)</span>
                </label>
            </div>
            <span class="text-red-500 text-sm mt-1 hidden" id="scholarship_statusError"></span>
        </div>

        <!-- Admission Budget -->
        {{-- <div>
            <label for="admission_budget" class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                <span class="text-red-500">*</span> Admission Budget (₹)
            </label>
            <input type="number" id="admission_budget" name="admission_budget" required min="0"
                step="1000"
                class="w-full px-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 transition"
                placeholder="Enter your budget (e.g., 500000)">
            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2">This helps us suggest suitable colleges &
                courses</p>
            <span class="text-red-500 text-sm mt-1 hidden" id="admission_budgetError"></span>
        </div> --}}

        <!-- Submit Button -->
        <div class="pt-4">
            <button type="submit"
                class="w-full px-6 py-3 bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2"
                id="submitBtn">
                <i class="fas fa-paper-plane"></i>
                Submit Application
            </button>
            <p class="text-xs text-slate-600 dark:text-slate-400 text-center mt-3">
                We'll contact you within 24 hours
            </p>
        </div>
    </form>
</div>

<script>
    document.getElementById('admissionForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const submitBtn = document.getElementById('submitBtn');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner animate-spin"></i> Submitting...';

        const formData = new FormData(this);

        try {
            const response = await fetch('/api/admission/submit', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('[name="_token"]').value,
                    'Accept': 'application/json',
                },
                body: formData,
            });

            const data = await response.json();

            // Clear all error messages
            document.querySelectorAll('[id$="Error"]').forEach(el => {
                el.classList.add('hidden');
                el.textContent = '';
            });

            if (response.ok) {
                // Show success message
                alert('✅ ' + data.message);
                document.getElementById('admissionForm').reset();

                // Redirect after 2 seconds
                setTimeout(() => {
                    window.location.href = '/admissions';
                }, 2000);
            } else {
                // Show validation errors
                if (data.errors) {
                    for (const [field, messages] of Object.entries(data.errors)) {
                        const errorElement = document.getElementById(field + 'Error');
                        if (errorElement) {
                            errorElement.textContent = messages[0];
                            errorElement.classList.remove('hidden');
                        }
                    }
                }
                alert('❌ ' + (data.message || 'An error occurred'));
            }
        } catch (error) {
            console.error('Error:', error);
            alert('❌ Network error. Please try again.');
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
</script>
