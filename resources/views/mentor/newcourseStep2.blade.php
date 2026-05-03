<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Advance Settings - TeachMe</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#0045bd",
                    "on-primary": "#ffffff",
                    "primary-fixed": "#dbe1ff",
                    "on-primary-fixed": "#00174c",
                    "surface": "#faf8ff",
                    "surface-variant": "#e1e1ee",
                    "on-surface": "#191b24",
                    "on-surface-variant": "#434655",
                    "background": "#faf8ff",
                    "outline-variant": "#c3c5d8",
                    "surface-container-low": "#f3f3ff",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-high": "#e7e7f3",
                },
                fontFamily: {
                    "body-md": ["Lexend"],
                    "headline-xl": ["Lexend"],
                    "headline-lg": ["Lexend"],
                    "label-bold": ["Lexend"],
                }
            }
        }
    }
    </script>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen flex flex-col">
    <!-- Header -->
    <header
        class="sticky top-0 z-50 bg-surface/90 backdrop-blur-md border-b border-surface-variant px-6 h-16 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="javascript:history.back()"
                class="w-10 h-10 rounded-full hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <div class="h-6 w-px bg-outline-variant hidden md:block"></div>
            <div class="text-xl font-bold text-primary tracking-tighter hidden md:block">TeachMe</div>
        </div>
        <div class="flex items-center gap-3">
            <!-- Submit button linked to form ID -->
            <button type="submit" form="advanceForm"
                class="px-6 py-2.5 rounded-lg bg-primary text-on-primary font-bold shadow-lg hover:scale-[1.02] active:scale-95 transition-all">
                Publish Course
            </button>
        </div>
    </header>

    <main class="flex-1 w-full max-w-5xl mx-auto px-6 py-8 md:py-12 flex flex-col md:flex-row gap-8 lg:gap-16">
        <!-- Sidebar -->
        <aside class="w-full md:w-64 shrink-0">
            <nav>
                <ul class="flex md:flex-col gap-2">
                    <li class="flex items-center gap-3 p-3 rounded-xl text-on-surface-variant opacity-60">
                        <div
                            class="w-8 h-8 rounded-full border-2 border-outline-variant flex items-center justify-center text-sm font-bold">
                            1</div>
                        <span class="font-medium">General Info</span>
                    </li>
                    <li class="flex items-center gap-3 p-3 rounded-xl bg-primary-fixed text-on-primary-fixed">
                        <div
                            class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center text-sm font-bold">
                            2</div>
                        <span class="font-bold">Advance Details</span>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Form Section -->
        <div class="flex-1 max-w-3xl">
            <div class="mb-10">
                <h1 class="text-4xl font-extrabold text-on-surface mb-2">Final Logistics</h1>
                <p class="text-lg text-on-surface-variant">Set your pricing, availability, and scheduling.</p>
            </div>

            <!-- ADDED ACTION AND METHOD -->
            <form id="advanceForm" action="{{ route('courses.store') }}" method="POST" class="flex flex-col gap-8"
                enctype="multipart/form-data">
                @csrf

                <!-- HIDDEN INPUTS: Carrying Step 1 data through -->
                <input type="hidden" name="title" value="{{ $step1Data['title'] }}">
                <input type="hidden" name="description" value="{{ $step1Data['description'] }}">
                <input type="hidden" name="course-type" value="{{ $step1Data['course-type'] }}">
                <input type="hidden" name="cover_image_path" value="{{ $step1Data['cover_image_path'] ?? '' }}">


                <!-- Row 1: Category & Language -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="font-bold text-sm" for="category">Category</label>
                        <select id="category" name="category_id"
                            class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary">
                            <option value="1">Design</option>
                            <option value="2">Development</option>
                            <option value="3">Business</option>
                            <option value="4">Marketing</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="font-bold text-sm" for="language">Instruction Language</label>
                        <select id="language" name="language"
                            class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary">
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                            <option value="Indonesian">Indonesian</option>
                        </select>
                    </div>
                </div>

                <!-- Row 2: Slots, Lessons, Price -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-surface-container-lowest p-5 rounded-xl border border-surface-variant shadow-sm">
                        <label class="font-bold text-sm block mb-2">Student Slots</label>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">person_add</span>
                            <input type="number" name="slots" placeholder="20"
                                class="w-full bg-transparent border-none p-0 focus:ring-0 text-lg font-bold" required />
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-5 rounded-xl border border-surface-variant shadow-sm">
                        <label class="font-bold text-sm block mb-2">Total Lessons</label>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">menu_book</span>
                            <input type="number" name="lessons" placeholder="12"
                                class="w-full bg-transparent border-none p-0 focus:ring-0 text-lg font-bold" required />
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-5 rounded-xl border border-surface-variant shadow-sm">
                        <label class="font-bold text-sm block mb-2">Price ($)</label>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">payments</span>
                            <input type="number" name="price" step="0.01" placeholder="99.00"
                                class="w-full bg-transparent border-none p-0 focus:ring-0 text-lg font-bold" required />
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div
                    class="flex flex-col gap-2 p-6 bg-surface-container-lowest rounded-xl border border-surface-variant shadow-sm">
                    <label class="font-bold text-sm">Meeting Location / Link</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-3.5 text-outline-variant">location_on</span>
                        <input type="text" name="location" placeholder="e.g. Zoom Link or Physical Address"
                            class="w-full bg-surface-container-low border-none rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-primary" />
                    </div>
                </div>

                <!-- Schedule -->
                <div class="bg-surface-container-lowest p-5 rounded-xl border border-surface-variant shadow-sm">
                    <label class="font-bold text-sm block mb-3 text-on-surface-variant">Class Schedule</label>

                    <!-- The Hidden/Readonly Input that Flatpickr uses -->
                    <div class="flex items-center gap-3 mb-4 p-3 bg-surface-container-low rounded-lg">
                        <span class="material-symbols-outlined text-primary">calendar_month</span>
                        <input type="text" id="date-picker" name="selected_sessions"
                            placeholder="Click to pick dates..."
                            class="w-full bg-transparent border-none p-0 focus:ring-0 text-lg font-bold cursor-pointer"
                            readonly />
                    </div>

                    <!-- The "Row" Display Area -->
                    <div id="session-preview" class="hidden">
                        <p class="text-xs font-bold uppercase tracking-wider text-primary mb-2">Confirmed Sessions:</p>
                        <div id="session-rows" class="flex flex-col gap-2">
                            <!-- JavaScript will inject rows here -->
                        </div>
                    </div>
                </div>

                <script>
                const fp = flatpickr("#date-picker", {
                    mode: "multiple",
                    dateFormat: "Y-m-d H:i",
                    enableTime: true,
                    time_24hr: true,
                    minDate: "today",
                    onChange: function(selectedDates, dateStr, instance) {
                        renderRows(selectedDates, instance);
                    }
                });

                function renderRows(selectedDates, instance) {
                    const previewContainer = document.getElementById('session-preview');
                    const rowsContainer = document.getElementById('session-rows');

                    rowsContainer.innerHTML = '';

                    if (selectedDates.length > 0) {
                        previewContainer.classList.remove('hidden');

                        // Sort dates chronologically before displaying
                        selectedDates.sort((a, b) => a - b);

                        selectedDates.forEach((dateObj) => {
                            // Format the date to match your input style
                            const dateString = instance.formatDate(dateObj, "Y-m-d H:i");

                            const row = document.createElement('div');
                            row.className =
                                "flex items-center justify-between bg-surface-container-high px-4 py-3 rounded-lg border border-surface-variant group hover:border-error/50 transition-colors";

                            row.innerHTML = `
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-on-surface-variant text-sm">schedule</span>
                    <span class="font-mono text-sm font-bold text-on-surface">${dateString}</span>
                </div>
                <button type="button" class="delete-session text-on-surface-variant hover:text-error transition-colors flex items-center">
                    <span class="material-symbols-outlined text-xl">close</span>
                </button>
            `;

                            // Handle the Delete Click
                            row.querySelector('.delete-session').addEventListener('click', () => {
                                // Filter out this specific date from the calendar
                                const updatedDates = instance.selectedDates.filter(d => d.getTime() !==
                                    dateObj.getTime());
                                instance.setDate(updatedDates,
                                    true); // Update calendar and trigger onChange
                            });

                            rowsContainer.appendChild(row);
                        });
                    } else {
                        previewContainer.classList.add('hidden');
                    }
                }
                </script>
                <div class="flex flex-col gap-4">
                    <div>
                        <h2 class="text-xl font-bold">Weekly Schedule</h2>
                        <p class="text-sm text-on-surface-variant">Select the days this course will take place.</p>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] as $day)
                        <label class="cursor-pointer group">
                            <input type="checkbox" class="sr-only peer" name="schedule[]"
                                value="{{ strtolower($day) }}">
                            <div
                                class="px-5 py-3 rounded-full border-2 border-outline-variant peer-checked:border-primary peer-checked:bg-primary-fixed/30 peer-checked:text-primary font-bold transition-all">
                                {{ $day }}
                            </div>
                        </label>
                        @endforeach
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 mt-2">
                        <div class="flex-1">
                            <label class="text-xs font-bold uppercase text-outline-variant">Start Time</label>
                            <input type="time" name="start_time"
                                class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 mt-1" />
                        </div>
                        <div class="flex-1">
                            <label class="text-xs font-bold uppercase text-outline-variant">End Time</label>
                            <input type="time" name="end_time"
                                class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 mt-1" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>