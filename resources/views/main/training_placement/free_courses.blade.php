<x-layouts.main.base title="Free Courses"
    description="Explore a curated list of free courses from Udemy and other platforms, complete with pricing, discounts, and quick access links.">
    <style>
        /* Link */
        .space-y-6 .space-y-4 a {
            background-color: #097db8;
        }

        /* Flex col */
        main .p-0 .flex-col {
            background-color: #ffffff;
        }

        /* Heading */
        main .p-0 h3 {
            text-align: justify;
        }

        /* Dark */
        main .p-0 .dark\:text-primary-light {
            text-align: left;
        }

        /* Grid */
        main .mx-auto .grid {
            transform: translatex(0px) translatey(0px);
        }

        /* Image */
        main .p-0 img {
            background-color: rgba(158, 45, 45, 0.82);
            background-blend-mode: overlay;
        }

        /* Overflow hidden */
        main .p-0 .overflow-hidden {
            background-color: rgba(202, 195, 195, 0.47);
        }
    </style>

    @section('page-hero')
        <x-ui.hero title="Free Learning" highlightText="Courses"
            description="Explore a curated list of free courses from Udemy and other platforms, complete with pricing, discounts, and quick access links."
            badge="Free Courses" breadcrumbText="Free Courses" primaryBtnText="Explore Courses" primaryBtnUrl="#free-courses" />
    @endsection

    <!-- Free Courses Grid -->
    <section id="free-courses" class="py-12 bg-gray-50 dark:bg-slate-900">
        <div x-data="{ selected: null, courses: {{ json_encode($freeCourses['data']['items'] ?? []) }} }" class="container mx-auto px-4">
            <h2 class="text-3xl font-extrabold mb-8 text-center text-gray-800 dark:text-gray-100 tracking-tight">
                Free Learning Courses
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($freeCourses['data']['items'] ?? [] as $index => $course)
                    @if (!empty($course['language']) && !in_array($course['language'], ['English', 'Hindi']))
                        @continue
                    @endif

                    <x-ui.card padding="p-0"
                        class="transition-all duration-300 hover:shadow-xl hover:-translate-y-1 cursor-pointer flex flex-col h-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 overflow-hidden"
                        x-on:click="selected = courses[{{ $index }}]; $dispatch('open-modal', 'course-modal')">
                        <div class="relative overflow-hidden">
                            @if (!empty($course['image']))
                                <img src="{{ $course['image'] }}" alt="{{ $course['name'] }}"
                                    class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                            @else
                                <div
                                    class="w-full h-48 bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400">
                                    <i class="fas fa-graduation-cap text-4xl"></i>
                                </div>
                            @endif
                            <span
                                class="absolute top-3 left-3 bg-rose-600 text-white text-xs font-bold px-2.5 py-1 rounded-full shadow-md">FREE</span>
                        </div>
                        <div class="p-5 flex flex-col flex-grow text-center">
                            <span
                                class="text-xs font-semibold tracking-wider text-primary dark:text-primary-light uppercase mb-2">
                                {{ $course['category'] ?? 'Course' }}{{ isset($course['subcategory']) && $course['subcategory'] ? ' • ' . $course['subcategory'] : '' }}
                            </span>
                            <h3
                                class="text-lg font-bold text-gray-800 dark:text-gray-100 line-clamp-2 leading-snug mb-4 flex-grow">
                                {{ $course['name'] }}
                            </h3>
                            <div
                                class="flex items-center justify-center gap-4 text-xs text-gray-500 dark:text-gray-400 border-t border-slate-100 dark:border-slate-700/60 pt-3 mt-auto">
                                <span class="flex items-center gap-1.5">
                                    <i class="far fa-eye text-slate-400"></i>
                                    {{ $course['views'] ?? 0 }} Views
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-globe text-slate-400"></i>
                                    {{ $course['language'] ?? 'N/A' }}
                                </span>
                            </div>
                        </div>
                    </x-ui.card>
                @endforeach

            </div>

            <!-- Dynamic Course Modal (Placed OUTSIDE the grid container to fix blur/stacking) -->
            <x-ui.modal name="course-modal" title="Course Overview" maxWidth="3xl">
                <div x-show="selected" class="p-2 space-y-6">
                    <div class="relative rounded-xl overflow-hidden max-h-80 shadow-md">
                        <template x-if="selected?.image">
                            <img :src="selected.image" :alt="selected.name" class="w-full h-64 object-cover">
                        </template>
                        <template x-if="!selected?.image">
                            <div
                                class="w-full h-64 bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400">
                                <i class="fas fa-graduation-cap text-6xl"></i>
                            </div>
                        </template>
                        <span
                            class="absolute top-4 left-4 bg-rose-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">FREE
                            COURSE</span>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <span
                                class="text-xs font-bold text-primary dark:text-primary-light tracking-wider uppercase"
                                x-text="(selected?.category || 'General') + (selected?.subcategory ? ' • ' + selected?.subcategory : '')"></span>
                            <h2 class="text-2xl font-extrabold text-slate-900 dark:text-white mt-1 leading-tight"
                                x-text="selected?.name"></h2>
                        </div>

                        <div
                            class="flex flex-wrap gap-6 text-sm text-slate-600 dark:text-slate-300 bg-slate-50 dark:bg-slate-800/40 p-4 rounded-xl border border-slate-100 dark:border-slate-700/50">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-globe text-primary"></i>
                                <span><strong>Language:</strong> <span
                                        x-text="selected?.language || 'N/A'"></span></span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i class="far fa-eye text-primary"></i>
                                <span><strong>Views:</strong> <span x-text="selected?.views || 0"></span></span>
                            </div>
                            <template x-if="selected?.lectures">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-play-circle text-primary"></i>
                                    <span><strong>Lectures:</strong> <span x-text="selected?.lectures"></span>
                                        Hours</span>
                                </div>
                            </template>
                        </div>

                        <div>
                            <h4
                                class="text-sm font-bold text-slate-800 dark:text-slate-200 mb-2 uppercase tracking-wide">
                                Course Description</h4>
                            <div class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed prose dark:prose-invert max-w-none"
                                x-html="selected?.description"></div>
                        </div>

                        <div class="pt-6 border-t border-slate-100 dark:border-slate-700 flex justify-end gap-3">
                            <button @click="$dispatch('close-modal')"
                                class="px-5 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-medium hover:bg-slate-50 dark:hover:bg-slate-800 transition">
                                Close
                            </button>
                            <a :href="selected?.url" target="_blank"
                                class="px-6 py-2.5 rounded-xl bg-primary hover:bg-primary-dark text-white font-bold shadow-lg shadow-primary/20 transition flex items-center gap-2">
                                <i class="fas fa-graduation-cap"></i>
                                Enroll Now
                            </a>
                        </div>
                    </div>
                </div>
            </x-ui.modal>

        </div>
    </section>
</x-layouts.main.base>
