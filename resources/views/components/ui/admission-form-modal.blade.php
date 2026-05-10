@props([
    'title' => 'Start Your Admission Journey',
    'subtitle' => 'Fill in your details and get personalized college recommendations',
])

<div x-data="admissionForm()" x-cloak @open-admission-modal.window="open = true" :class="{ 'overflow-hidden': open }"
    class="relative">
    <!-- Modal Backdrop -->
    <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="open = false"
        class="fixed inset-0 bg-slate-900/70 backdrop-blur-sm z-[999]"></div>

    <!-- Modal Dialog -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 scale-95 translate-y-4"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-4"
        class="fixed inset-0 z-[1000] flex items-center justify-center p-4 overflow-hidden" @click.self="open = false">

        <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-2xl w-full max-w-2xl max-h-[90vh] flex flex-col">
            <!-- Modal Header with Gradient - Sticky -->
            <div
                class="sticky top-0 z-10 bg-gradient-to-r from-primary-600 to-primary-800 p-6 flex items-center justify-between border-b border-primary-700/30 flex-shrink-0">
                <div class="flex-1">
                    <h2 class="text-2xl font-black text-white mb-1">{{ $title }}</h2>
                    <p class="text-primary-100 text-sm">{{ $subtitle }}</p>
                </div>
                <button @click="open = false"
                    class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 hover:bg-white/30 text-white flex items-center justify-center transition-colors ml-4">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <!-- Form Content - Scrollable Body -->
            <div class="flex-1 overflow-y-auto overscroll-contain">
                <div class="p-8">
                    <!-- Form Container -->
                    <div id="formContent">
                        <form id="admissionForm" @submit.prevent="submitForm" class="space-y-5">
                        @csrf

                        <!-- Progress Bar -->
                        <div class="mb-8">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Progress</span>
                                <span class="text-sm font-bold text-primary-600"
                                    x-text="Math.round(progress) + '%'"></span>
                            </div>
                            <div class="w-full h-2 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-primary-500 to-primary-600 transition-all duration-300"
                                    :style="`width: ${progress}%`"></div>
                            </div>
                        </div>

                        <!-- Row 1: Name & Mobile -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="group">
                                <label for="name"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> Full Name
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-user absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors"></i>
                                    <input type="text" id="name" name="name" x-model="formData.name"
                                        @input="updateProgress" required
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition"
                                        placeholder="Your full name">
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.name"
                                    x-text="errors.name"></span>
                            </div>

                            <div class="group">
                                <label for="mobile_number"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> Mobile Number
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors"></i>
                                    <input type="tel" id="mobile_number" name="mobile_number"
                                        x-model="formData.mobile_number" @input="updateProgress" required
                                        pattern="[0-9]{10}"
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition"
                                        placeholder="10-digit number">
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.mobile_number"
                                    x-text="errors.mobile_number"></span>
                            </div>
                        </div>

                        <!-- Row 2: Guardian Mobile & Course -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="group">
                                <label for="guardian_mobile_number"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> Guardian Mobile
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-phone-alt absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors"></i>
                                    <input type="tel" id="guardian_mobile_number" name="guardian_mobile_number"
                                        x-model="formData.guardian_mobile_number" @input="updateProgress" required
                                        pattern="[0-9]{10}"
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition"
                                        placeholder="Father/Guardian number">
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.guardian_mobile_number"
                                    x-text="errors.guardian_mobile_number"></span>
                            </div>

                            <div class="group">
                                <label for="interested_course"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> Interested Course
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-book absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors pointer-events-none"></i>
                                    <select id="interested_course" name="interested_course"
                                        x-model="formData.interested_course" @input="updateProgress" required
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition appearance-none">
                                        <option value="">-- Select Course --</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BCA">BCA</option>
                                        <option value="B.Tech">B.Tech</option>
                                        <option value="MBA">MBA</option>
                                        <option value="M.Tech">M.Tech</option>
                                        <option value="BA">BA</option>
                                        <option value="B.Sc">B.Sc</option>
                                    </select>
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.interested_course"
                                    x-text="errors.interested_course"></span>
                            </div>
                        </div>

                        <!-- Row 3: City & State -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="group">
                                <label for="city"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> City
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-map-marker-alt absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors"></i>
                                    <input type="text" id="city" name="city" x-model="formData.city"
                                        @input="updateProgress" required
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition"
                                        placeholder="Your city">
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.city"
                                    x-text="errors.city"></span>
                            </div>

                            <div class="group">
                                <label for="state"
                                    class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                    <span class="text-red-500">*</span> State
                                </label>
                                <div class="relative">
                                    <i
                                        class="fas fa-map absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors pointer-events-none"></i>
                                    <select id="state" name="state" x-model="formData.state"
                                        @input="updateProgress" required
                                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition appearance-none">
                                        <option value="">-- Select State --</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <span class="text-red-500 text-xs mt-1 block" x-show="errors.state"
                                    x-text="errors.state"></span>
                            </div>
                        </div>

                        <!-- Scholarship Status -->
                        <div>
                            <label class="block text-sm font-bold text-slate-900 dark:text-white mb-3">
                                <span class="text-red-500">*</span> Scholarship Status
                            </label>
                            <div class="space-y-2">
                                <label
                                    class="relative flex items-center p-4 border-2 border-slate-300 dark:border-slate-600 rounded-xl cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all"
                                    :class="formData.scholarship_status === 'scholarship' ?
                                        'border-primary-500 bg-primary-50 dark:bg-primary-900/10' : ''">
                                    <input type="radio" name="scholarship_status" value="scholarship"
                                        x-model="formData.scholarship_status" @input="updateProgress"
                                        class="w-4 h-4 text-primary-600 accent-primary-600">
                                    <span class="ml-3 flex-1">
                                        <span class="font-semibold text-slate-900 dark:text-white">Need
                                            Scholarship</span>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">Get up to 100%
                                            scholarship
                                            options</p>
                                    </span>
                                    <i class="fas fa-check-circle text-primary-600 ml-auto"
                                        x-show="formData.scholarship_status === 'scholarship'"></i>
                                </label>

                                <label
                                    class="relative flex items-center p-4 border-2 border-slate-300 dark:border-slate-600 rounded-xl cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all"
                                    :class="formData.scholarship_status === 'non-scholarship' ?
                                        'border-primary-500 bg-primary-50 dark:bg-primary-900/10' : ''">
                                    <input type="radio" name="scholarship_status" value="non-scholarship"
                                        x-model="formData.scholarship_status" @input="updateProgress" required>
                                    <span class="ml-3 flex-1">
                                        <span class="font-semibold text-slate-900 dark:text-white">Self-Funded</span>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">Full fee payment from
                                            your
                                            side</p>
                                    </span>
                                    <i class="fas fa-check-circle text-primary-600 ml-auto"
                                        x-show="formData.scholarship_status === 'non-scholarship'"></i>
                                </label>
                            </div>
                        </div>

                        <!-- Budget -->
                        {{-- <div class="group">
                            <label for="admission_budget"
                                class="block text-sm font-bold text-slate-900 dark:text-white mb-2">
                                <span class="text-red-500">*</span> Admission Budget (₹)
                            </label>
                            <div class="relative">
                                <i
                                    class="fas fa-rupiah-sign absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary-600 transition-colors"></i>
                                <input type="number" id="admission_budget" name="admission_budget"
                                    x-model="formData.admission_budget" @input="updateProgress" required
                                    min="0" step="10000"
                                    class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-900 dark:text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition"
                                    placeholder="e.g., 500000">
                                <span
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-xs text-slate-600 dark:text-slate-400"
                                    x-show="formData.admission_budget"
                                    x-text="`₹${parseInt(formData.admission_budget).toLocaleString('en-IN')}`"></span>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-2">
                                This helps us match you with suitable colleges
                            </p>
                            <span class="text-red-500 text-xs mt-1 block" x-show="errors.admission_budget"
                                x-text="errors.admission_budget"></span>
                        </div> --}}

                        <!-- Submit Button -->
                        <div class="pt-4 space-y-3">
                            <button type="submit" :disabled="isSubmitting"
                                class="w-full px-6 py-4 bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-700 hover:to-primary-800 disabled:from-slate-400 disabled:to-slate-500 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2 text-lg"
                                :class="isSubmitting ? 'opacity-75 cursor-not-allowed' : ''">
                                <i class="fas"
                                    :class="isSubmitting ? 'fa-spinner animate-spin' : 'fa-paper-plane'"></i>
                                <span x-text="isSubmitting ? 'Submitting...' : 'Submit Application'"></span>
                            </button>

                            <p class="text-xs text-slate-600 dark:text-slate-400 text-center">
                                <i class="fas fa-shield-alt text-green-500 mr-1"></i>
                                Your data is secure. We'll contact you within 24 hours.
                            </p>
                        </div>
                    </form>
                    </div>

                    <!-- Success Container -->
                    <div id="successContent" class="hidden text-center">
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <div class="bg-green-100 dark:bg-green-900 rounded-full p-4">
                                    <i class="fas fa-check text-3xl text-green-600 dark:text-green-400"></i>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Thank You!</h3>
                            <p class="text-slate-600 dark:text-slate-400 mb-2" id="successMessage"></p>
                            <p class="text-sm text-slate-500 dark:text-slate-500">Our team will reach out to you shortly with more information.</p>
                        </div>

                        <!-- WhatsApp Button -->
                        <div class="mt-8">
                            <a href="https://chat.whatsapp.com/{{ env('WHATSAPP_GROUP_LINK') }}" target="_blank"
                                class="inline-flex items-center gap-2 px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                                <i class="fab fa-whatsapp text-xl"></i>
                                Join Our WhatsApp Group
                            </a>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-3">
                                Get instant updates about admissions and events
                            </p>
                        </div>

                        <!-- Close Button -->
                        <div class="mt-6">
                            <button @click="open = false"
                                class="inline-block px-6 py-2 border-2 border-primary-600 text-primary-600 dark:text-primary-400 font-bold rounded-xl hover:bg-primary-600 hover:text-white transition-all duration-300">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Global Script for Modal Management -->
<script>
    function admissionForm() {
        return {
            open: false,
            isSubmitting: false,
            progress: 0,
            errors: {},
            formData: {
                name: '',
                mobile_number: '',
                guardian_mobile_number: '',
                interested_course: '',
                city: '',
                state: '',
                scholarship_status: 'non-scholarship',
                admission_budget: '',
            },
            updateProgress() {
                let filled = 0;
                const total = Object.keys(this.formData).length;

                for (let key in this.formData) {
                    if (this.formData[key]) {
                        filled++;
                    }
                }

                this.progress = (filled / total) * 100;
            },
            async submitForm() {
                this.isSubmitting = true;
                this.errors = {};

                try {
                    const response = await fetch('/api/admission/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify(this.formData),
                    });

                    const data = await response.json();

                    if (response.ok) {
                        // Hide form and show success message
                        document.getElementById('formContent').classList.add('hidden');
                        document.getElementById('successMessage').textContent = data.message;
                        document.getElementById('successContent').classList.remove('hidden');
                        
                        // Reset form
                        this.formData = {
                            name: '',
                            mobile_number: '',
                            guardian_mobile_number: '',
                            interested_course: '',
                            city: '',
                            state: '',
                            scholarship_status: 'non-scholarship',
                            admission_budget: '',
                        };
                        this.progress = 0;
                    } else {
                        if (data.errors) {
                            this.errors = data.errors;
                        }
                        // Show error message without alert
                        const errorMsg = data.message || 'An error occurred while submitting your application.';
                        const errorDiv = document.createElement('div');
                        errorDiv.className = 'bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-200 px-4 py-3 rounded-xl mb-4';
                        errorDiv.innerHTML = `<i class="fas fa-exclamation-circle mr-2"></i>${errorMsg}`;
                        document.getElementById('formContent').insertBefore(errorDiv, document.getElementById('admissionForm'));
                        setTimeout(() => errorDiv.remove(), 5000);
                    }
                } catch (error) {
                    console.error('Error:', error);
                    const errorDiv = document.createElement('div');
                    errorDiv.className = 'bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-200 px-4 py-3 rounded-xl mb-4';
                    errorDiv.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i>Network error. Please check your connection and try again.';
                    document.getElementById('formContent').insertBefore(errorDiv, document.getElementById('admissionForm'));
                    setTimeout(() => errorDiv.remove(), 5000);
                } finally {
                    this.isSubmitting = false;
                }
            }
        }
    }

    // Global function to open modal
    function openAdmissionModal() {
        window.dispatchEvent(new CustomEvent('open-admission-modal'));
    }
</script>
</div>
