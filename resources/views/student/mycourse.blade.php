    <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>My Courses | TeachMe</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet" />
        <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
        </script>
    </head>

    <body
        class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased">
        <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
            <!-- Header / Nav -->
            <header
                class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 md:px-20 py-3">
                <div class="max-w-[1200px] mx-auto flex items-center justify-between">
                    <div class="flex items-center gap-3 text-primary">
                        <div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h2 class="text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
                    </div>
                    <nav class="hidden md:flex items-center gap-8">
                        <a class="text-slate-600 dark:text-slate-400 hover:text-primary transition-colors text-sm font-medium"
                            href="{{ url('/student/dashboard') }}">Dashboard</a>
                        <a class="text-primary border-b-2 border-primary pb-1 text-sm font-semibold" href="#">My
                            Courses</a>
                        <a class="text-slate-600 dark:text-slate-400 hover:text-primary transition-colors text-sm font-medium"
                            href="{{ url('/feedback') }}">Feedback</a>
                        <a class="text-slate-600 dark:text-slate-400 hover:text-primary transition-colors text-sm font-medium"
                            href="#">Settings</a>
                    </nav>
                    <div class="flex items-center gap-4">
                        <button
                            class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-full transition-colors">
                            <span class="material-symbols-outlined">notifications</span>
                        </button>
                        <div class="h-10 w-10 rounded-full border-2 border-primary/20 p-0.5">
                            <img alt="User Profile" class="h-full w-full rounded-full object-cover"
                                data-alt="Close up portrait of a smiling student"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRxj_sLsHJPAue71Q6YDPr3GWAemyAbAUodJtCcqvBG-8ihcfFD_Oj7l-rXIbPbaSimlLJZgX0_bx5XOfaDx-XT0d7MXkkZK9l-egiSS1Fp2rQnNxRejlZ2bRldqXnSlXB57ZJag4WEI3CpHAVuW9M9uoBLHGC6-jDseij4p1AVHMQp38jCQqSDu-YHDj7lWz6a98-esHb1GlEzJHpC1_29GjyGlNEwbQANNj8JESA4UJO8_no78TIrNfOr0xYZRSTR8IS9dPtfP8" />
                        </div>
                    </div>
                </div>
            </header>
            <main class="flex-1 w-full max-w-[1200px] mx-auto px-6 md:px-20 py-10">
                <!-- Title and Stats -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-4xl font-black text-slate-900 dark:text-white tracking-tight">My Courses</h1>
                        <p class="text-slate-500 dark:text-slate-400">You have
                            <span class="text-primary font-semibold">{{ $enrolledCourses->count() }} active</span>
                            courses and
                            <span class="text-primary font-semibold">{{ $completedCourses->count() }} completed</span>.
                        </p>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="window.location.href='/courses'"
                            class="flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-xl font-medium hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Browse New Courses
                        </button>
                    </div>
                </div>
                <!-- Search & Filters -->
                <div class="flex flex-col lg:flex-row gap-4 mb-8">
                    <div class="relative flex-1">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input id="course-search"
                            class="w-full pl-12 pr-4 py-3 bg-white dark:bg-slate-800 border-none rounded-xl focus:ring-2 focus:ring-primary text-slate-900 dark:text-white placeholder:text-slate-400 shadow-sm"
                            placeholder="Search your courses by title or mentor..." type="text" />
                    </div>
                    <div class="flex gap-3 overflow-x-auto pb-2 lg:pb-0">
                        <button
                            class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-slate-800 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 border border-slate-100 dark:border-slate-700 hover:bg-slate-50 transition-colors whitespace-nowrap">
                            <span class="material-symbols-outlined text-[18px]">filter_list</span>
                            All Topics
                            <span class="material-symbols-outlined text-[18px]">expand_more</span>
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-slate-800 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 border border-slate-100 dark:border-slate-700 hover:bg-slate-50 transition-colors whitespace-nowrap">
                            Design
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-slate-800 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 border border-slate-100 dark:border-slate-700 hover:bg-slate-50 transition-colors whitespace-nowrap">
                            Development
                        </button>
                        <button
                            class="flex items-center gap-2 px-4 py-3 bg-white dark:bg-slate-800 rounded-xl text-sm font-medium text-slate-600 dark:text-slate-300 border border-slate-100 dark:border-slate-700 hover:bg-slate-50 transition-colors whitespace-nowrap">
                            Business
                        </button>
                    </div>
                </div>
                <!-- Tabs -->
                <div class="border-b border-slate-200 dark:border-slate-800 mb-8 flex gap-8">
                    <button class="pb-4 border-b-2 border-primary text-primary font-bold text-sm tracking-wide">ONGOING
                        COURSES</button>
                    <button
                        class="pb-4 border-b-2 border-transparent text-slate-400 dark:text-slate-500 hover:text-slate-600 dark:hover:text-slate-300 font-bold text-sm tracking-wide transition-all">PAST
                        COURSES</button>
                </div>
                <!-- Course Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($enrolledCourses as $course)
                    @php
                    $progress = $course->pivot->progress_percent ?? 0;
                    $status = $course->pivot->status ?? 'active';
                    $batch = \App\Models\CourseSession::find($course->pivot->session_id);

                    $thumbUrl = ($course->thumbnail && Storage::disk('public')->exists($course->thumbnail))
                    ? asset('storage/' . $course->thumbnail)
                    : null;

                    $mentorAvatar = ($course->mentor->user->avatar && Storage::disk('public')->exists('avatars/' .
                    $course->mentor->user->avatar))
                    ? asset('storage/avatars/' . $course->mentor->user->avatar)
                    : 'https://ui-avatars.com/api/?name=' . urlencode($course->mentor->user->name);
                    @endphp

                    <div class="course-card group bg-white dark:bg-slate-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 dark:border-slate-700"
                        data-title="{{ strtolower($course->title) }}"
                        data-mentor="{{ strtolower($course->mentor->user->name) }}">
                        <div class="relative h-48 overflow-hidden bg-slate-200 flex items-center justify-center">
                            @if($thumbUrl)
                            <img src="{{ $thumbUrl }}" alt="{{ $course->title }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                            @else
                            <span class="material-symbols-outlined text-5xl text-slate-400">image</span>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-primary/90 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest backdrop-blur-sm">
                                    {{ $course->category->name ?? 'Course' }}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <img src="{{ $mentorAvatar }}" alt="{{ $course->mentor->user->name }}"
                                    class="size-6 rounded-full object-cover" />
                                <span
                                    class="text-xs text-slate-500 dark:text-slate-400">{{ $course->mentor->user->name }}</span>
                            </div>

                            @if($batch)
                            <div class="flex items-center gap-1 mb-3 -mt-1">
                                <span class="material-symbols-outlined text-[14px] text-primary">calendar_month</span>
                                <span class="text-xs font-semibold text-primary">Batch {{ $batch->batch_number }}</span>
                                <span class="text-xs text-slate-400">
                                    · {{ \Carbon\Carbon::parse($batch->start_date)->format('d M') }} -
                                    {{ \Carbon\Carbon::parse($batch->end_date)->format('d M Y') }}
                                </span>
                            </div>

                            @if($batch->schedule_days)
                            <div class="flex items-center gap-1 mb-3 -mt-1">
                                <span class="material-symbols-outlined text-[14px] text-slate-400">schedule</span>
                                <div class="flex flex-col">
                                    <!-- Days Row -->
                                    <span class="text-xs text-slate-400 font-medium">
                                        {{ str_replace(',', ' · ', $batch->schedule_days) }}
                                    </span>

                                    <!-- Time Row -->
                                    @if($batch->start_time)
                                    <span class="text-xs text-slate-400">
                                        {{ \Carbon\Carbon::parse($batch->start_time)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($batch->end_time)->format('H:i') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @endif
                            @endif
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 line-clamp-1"
                                title="{{ $course->title }}">
                                {{ $course->title }}
                            </h3>
                            <div class="mb-6">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-xs font-medium text-slate-500">
                                        {{ $progress == 100 ? 'Completed' : 'Learning' }}
                                    </span>
                                    <span class="text-xs font-bold text-primary">{{ $progress }}%</span>
                                </div>
                                <div class="w-full bg-slate-100 dark:bg-slate-700 h-2 rounded-full overflow-hidden">
                                    <div class="bg-primary h-full rounded-full transition-all duration-700"
                                        style="width: {{ $progress }}%"></div>
                                </div>
                            </div>
                            <a href="{{ route('courses.show', $course->id) }}"
                                class="w-full py-3 bg-primary text-white rounded-xl font-semibold hover:bg-primary/90 transition-colors flex items-center justify-center gap-2">
                                {{ $progress == 100 ? 'Review Course' : 'Continue Learning' }}
                                <span class="material-symbols-outlined text-[18px]">
                                    {{ $progress == 100 ? 'verified' : 'play_circle' }}
                                </span>
                            </a>
                        </div>
                    </div>

                    @empty
                    <div class="col-span-full py-20 text-center">
                        <span class="material-symbols-outlined text-6xl text-slate-300 mb-4">school</span>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">No courses found</h3>
                        <p class="text-slate-500 mb-6">You haven't enrolled in any courses yet.</p>
                        <a href="{{ route('courses.index') }}"
                            class="px-6 py-3 bg-primary text-white rounded-xl font-bold">
                            Browse Courses
                        </a>
                    </div>
                    @endforelse
                    <!-- Section for Past Courses Mockup (Visible for user to see the style) -->
                    @if($completedCourses->isNotEmpty())
                    <div class="md:col-span-2 lg:col-span-3 mt-12 mb-4">
                        <h2 class="text-2xl font-bold text-slate-800 dark:text-slate-200">Completed Courses</h2>
                    </div>

                    @foreach($completedCourses as $enrollment)
                    @php
                    $completedBatch = \App\Models\CourseSession::find($enrollment->pivot->session_id);
                    @endphp
                    <div
                        class="group bg-white dark:bg-slate-800/50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 border border-slate-100 dark:border-slate-800 opacity-90 hover:opacity-100">
                        <div class="relative h-40 overflow-hidden grayscale group-hover:grayscale-0 transition-all">
                            <img alt="{{ $enrollment->title }}" class="w-full h-full object-cover"
                                src="{{ $enrollment->thumbnail ? asset('storage/' . $enrollment->thumbnail) : 'https://placehold.co/400x160' }}" />
                            <div class="absolute inset-0 bg-slate-900/40 flex items-center justify-center">
                                <span
                                    class="bg-white/20 backdrop-blur-md text-white border border-white/30 text-[10px] font-bold px-4 py-2 rounded-full flex items-center gap-2 uppercase tracking-widest">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    Completed
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-bold text-slate-800 dark:text-white line-clamp-1">
                                        {{ $enrollment->title }}</h3>
                                    <p class="text-xs text-slate-500 mt-1">Completed:
                                        {{ \Carbon\Carbon::parse($enrollment->pivot->enrolled_at)->format('M d, Y') }}
                                    </p>

                                    @if($completedBatch)
                                    <p class="text-xs font-semibold text-primary mt-1">
                                        Batch {{ $completedBatch->batch_number }} ·
                                        {{ \Carbon\Carbon::parse($completedBatch->start_date)->format('d M Y') }} -
                                        {{ \Carbon\Carbon::parse($completedBatch->end_date)->format('d M Y') }}
                                    </p>
                                    @endif

                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <button
                                    class="py-2.5 bg-primary/10 text-primary rounded-xl font-bold text-xs hover:bg-primary/20 transition-colors flex items-center justify-center gap-1">
                                    <span class="material-symbols-outlined text-[16px]">workspace_premium</span>
                                    Certificate
                                </button>

                                @php
    $hasReviewed = \App\Models\Review::where('user_id', Auth::id())
                                     ->where('course_id', $enrollment->id)
                                     ->exists();
@endphp

@if(!$hasReviewed)
                                <a href="{{ route('reviews.create', $enrollment->id) }}"
    class="py-2.5 bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 rounded-xl font-bold text-xs hover:bg-slate-200 transition-colors flex items-center justify-center gap-1">
    <span class="material-symbols-outlined text-[16px]">rate_review</span>
    Review
</a>
@else
<button disabled class="py-2.5 bg-slate-50 dark:bg-slate-800 text-slate-400 rounded-xl font-bold text-xs flex items-center justify-center gap-1 cursor-not-allowed">
        <span class="material-symbols-outlined text-[16px]">check_circle</span>
        Reviewed
    </button>
@endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </main>
            <!-- Footer Stats (Floating style) -->
            <footer class="mt-12 py-10 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
                <div class="max-w-[1200px] mx-auto px-6 md:px-20">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center md:text-left">
                            <p class="text-primary text-3xl font-black">16</p>
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-widest">Total Courses</p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-primary text-3xl font-black">124h</p>
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-widest">Learning Time</p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-primary text-3xl font-black">12</p>
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-widest">Certificates
                                Earned
                            </p>
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-primary text-3xl font-black">4.8</p>
                            <p class="text-slate-500 text-xs font-semibold uppercase tracking-widest">Average Score</p>
                        </div>
                    </div>
                    <div
                        class="mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
                        <p class="text-slate-400 text-sm">©2026 TeachMe Learning Platform. All rights reserved.</p>
                        <div class="flex gap-6">
                            <a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Help
                                Center</a>
                            <a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Privacy
                                Policy</a>
                            <a class="text-slate-400 hover:text-primary transition-colors text-sm" href="#">Terms of
                                Use</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script>
        document.getElementById('course-search').addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const cards = document.querySelectorAll('.course-card');

            cards.forEach(card => {
                const title = card.dataset.title || '';
                const mentor = card.dataset.mentor || '';
                const matches = title.includes(query) || mentor.includes(query);
                card.style.display = matches ? '' : 'none';
            });
        });
        </script>

    </body>

    </html>