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
            <x-teachme-logo size="sm" class="hidden md:inline-flex" />
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

                <!-- Meeting Details (shared across all batches) -->
                <div
                    class="flex flex-col gap-4 p-6 bg-surface-container-lowest rounded-xl border border-surface-variant shadow-sm">
                    <label class="font-bold text-sm">Meeting Details</label>

                    <div id="field-meeting-link" class="relative hidden">
                        <span
                            class="material-symbols-outlined absolute left-3 top-3.5 text-outline-variant">videocam</span>
                        <input type="text" name="meeting_link" placeholder="e.g. https://zoom.us/j/123456"
                            class="w-full bg-surface-container-low border-none rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-primary" />
                    </div>

                    <div id="field-location" class="relative hidden">
                        <span
                            class="material-symbols-outlined absolute left-3 top-3.5 text-outline-variant">location_on</span>
                        <input type="text" name="location" placeholder="e.g. Jl. Sudirman No.1, Jakarta"
                            class="w-full bg-surface-container-low border-none rounded-lg pl-11 pr-4 py-3 focus:ring-2 focus:ring-primary" />
                    </div>
                </div>



                <!-- Batches -->
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl font-bold">Batches</h2>
                            <p class="text-sm text-on-surface-variant">Add one or more batches for this course.</p>
                        </div>
                        <button type="button" onclick="addBatch()"
                            class="flex items-center gap-2 px-4 py-2 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary-fixed/30 transition-all">
                            <span class="material-symbols-outlined text-sm">add</span> Add Batch
                        </button>
                    </div>

                    <div id="batch-container" class="flex flex-col gap-4"></div>
                </div>

                <script>
                const courseType = "{{ $step1Data['course-type'] }}";

                // Show the right global fields based on course type
                if (courseType === 'online' || courseType === 'live') {
                    document.getElementById('field-meeting-link').classList.remove('hidden');
                }
                if (courseType === 'offline' || courseType === 'live') {
                    document.getElementById('field-location').classList.remove('hidden');
                }

                let batchCount = 0;

                function addBatch() {
                    batchCount++;
                    const container = document.getElementById('batch-container');

                    const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                    const dayCheckboxes = days.map(day => `
        <label class="cursor-pointer group">
            <input type="checkbox" class="sr-only peer" name="batches[${batchCount}][days][]" value="${day}">
            <div class="px-3 py-2 rounded-full border-2 border-outline-variant text-xs font-bold
                peer-checked:border-primary peer-checked:bg-primary peer-checked:text-on-primary
                transition-all">
                ${day}
            </div>
        </label>
    `).join('');

                    const card = document.createElement('div');
                    card.className =
                        "bg-surface-container-lowest p-5 rounded-xl border border-surface-variant shadow-sm flex flex-col gap-4";
                    card.id = `batch-${batchCount}`;
                    card.innerHTML = `
        <div class="flex items-center justify-between">
            <span class="font-bold text-sm">Batch ${batchCount}</span>
            <button type="button" onclick="removeBatch(${batchCount})"
                class="text-on-surface-variant hover:text-red-500 transition-colors">
                <span class="material-symbols-outlined">delete</span>
            </button>
        </div>

        <!-- Date Range -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col gap-1">
                <label class="text-xs font-bold uppercase text-on-surface-variant">Start Date</label>
                <input type="date" name="batches[${batchCount}][start_date]" required
                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs font-bold uppercase text-on-surface-variant">End Date</label>
                <input type="date" name="batches[${batchCount}][end_date]" required
                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" />
            </div>
        </div>

        <!-- Days -->
        <div class="flex flex-col gap-2">
            <label class="text-xs font-bold uppercase text-on-surface-variant">Class Days</label>
            <div class="flex flex-wrap gap-2">
                ${dayCheckboxes}
            </div>
        </div>

        <!-- Time -->
        <div class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-1">
                <label class="text-xs font-bold uppercase text-on-surface-variant">Start Time</label>
                <input type="time" name="batches[${batchCount}][start_time]"
                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" />
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-xs font-bold uppercase text-on-surface-variant">End Time</label>
                <input type="time" name="batches[${batchCount}][end_time]"
                    class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary" />
            </div>
        </div>
    `;
                    container.appendChild(card);
                }

                function removeBatch(id) {
                    const card = document.getElementById(`batch-${id}`);
                    if (document.getElementById('batch-container').children.length > 1) {
                        card.remove();
                    }
                }

                addBatch();
                </script>
            </form>
        </div>
    </main>
</body>

</html>
