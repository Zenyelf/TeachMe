<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TeachMe - Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
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
                    "display": ["Lexend"]
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
    <style>
    body {
        font-family: 'Lexend', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside
            class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col shrink-0">
            <div class="p-6 flex items-center gap-3">
                <div class="bg-primary p-2 rounded-lg text-white">
                    <span class="material-symbols-outlined block">school</span>
                </div>
                <h1 class="text-xl font-bold tracking-tight text-primary">TeachMe</h1>
            </div>
            <nav class="flex-1 px-4 space-y-2 py-4">
                <a href="{{ route('student.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-medium">
                    <span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
                <a href="{{ url('/chat') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">chat</span>
                    Messages
                </a>
                <a href="{{ route('student.profile') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">person</span>
                    Profile
                </a>
                <a href="{{ url('/feedback') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">feedback</span>
                    Feedbacks
                </a>
                <a href="{{ url('/settings') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200 dark:border-slate-800">
                <a href="{{ route('student.profile') }}"
                    class="flex items-center gap-3 p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors">
                    <div class="size-10 rounded-full bg-primary/20 bg-center bg-cover flex-shrink-0"
                        data-alt="User avatar"
                        style="background-image: url('{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}')">
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-sm font-semibold truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 truncate">{{ Auth::user()->role }}</p>
                    </div>

                </a>
                <a href="{{ url('/logout') }}"
                        class="block w-full py-2 text-center text-xs font-bold text-slate-500 hover:text-primary transition-colors">Logout</a>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto bg-slate-50/50 dark:bg-background-dark/50">
            <!-- Header/Top Nav -->
            <header
                class="sticky top-0 z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 px-8 py-4">
                <div class="max-w-6xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <form action="{{ route('courses.index') }}" method="GET" class="relative flex-1 max-w-xl">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                        <input name="search" value="{{ request('search') }}"
                            class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none"
                            placeholder="Search courses, instructors, skills..." type="text" />
                    </form>
                    <div class="flex items-center gap-4">
                        <button
                            class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 relative">
                            <span class="material-symbols-outlined">notifications</span>
                            <span
                                class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-800"></span>
                        </button>
                        <button onclick="window.location.href='/courses'"
                            class="bg-primary text-white px-5 py-2.5 rounded-xl font-medium flex items-center gap-2 hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            Explore More
                        </button>
                    </div>
                </div>
                <!-- Filters -->
                <div class="max-w-6xl mx-auto flex flex-wrap gap-3 mt-4">
                    <button
                        class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
                        Ratings <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
                        Specialty <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
                        Interest <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
                    </button>
                    <div class="h-8 w-px bg-slate-200 dark:bg-slate-700 mx-2 hidden md:block"></div>
                    <button class="text-sm text-primary font-semibold flex items-center gap-1">
                        Clear all filters
                    </button>
                </div>
            </header>
            <div class="max-w-6xl mx-auto p-8">
                <!-- Welcome Banner -->
                <section
                    class="mb-10 rounded-2xl bg-gradient-to-r from-primary to-blue-400 p-8 text-white relative overflow-hidden">
                    <div class="relative z-10 max-w-lg">
                        <h2 class="text-3xl font-bold mb-2">Welcome back, {{ Str::before(Auth::user()->name, ' ') }}!
                        </h2>
                        <p class="text-blue-50/80 mb-6"> Keep up the
                            great work!</p>
                        <button onclick="window.location.href='{{ route('student.mycourse') }}'"
                            class="bg-white text-primary px-6 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-50 transition-colors">Resume
                            Lesson</button>
                    </div>
                    <!-- Abstract Background Pattern -->
                    <div
                        class="absolute right-0 top-0 h-full w-1/3 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent">
                    </div>
                    <span
                        class="material-symbols-outlined absolute -right-4 -bottom-4 text-[180px] opacity-10 rotate-12">auto_stories</span>
                </section>
                <!-- My Enrolled Courses -->
                <section class="mb-12">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold">My Enrolled Courses</h3>
                        <a href="{{ url('student/my-course') }}"
                            class="text-primary font-semibold text-sm hover:underline">
                            View All
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Loop through max 3 enrolled courses --}}
                        @forelse ($enrolledCourses->sortBy(fn($c) => $c->pivot->progress_percent) as $course)
                        {{-- In a belongsToMany relationship, $course IS the course model --}}
                        @php
                        // Data from the 'enrollments' pivot table is accessed via the 'pivot' property
                        $progress = $course->pivot->progress_percent ?? 0;
                        $status = $course->pivot->status ?? 'active';
                        @endphp

                        <div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-100 shadow-sm">
                            <div class="flex justify-between items-start mb-4">
                                <div
                                    class="size-12 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center">
                                    {{-- Use the category icon or a default --}}
                                    <span class="material-symbols-outlined">
                                        {{ $course->category->icon ?? 'menu_book' }}
                                    </span>
                                </div>

                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-[10px] font-bold uppercase rounded-full">
                                    {{ $status }}
                                </span>
                            </div>

                            {{-- Now $course->title will work perfectly --}}
                            <h4 class="font-bold text-lg mb-1 truncate" title="{{ $course->title }}">
                                {{ $course->title }}
                            </h4>

                            <p class="text-slate-500 text-sm mb-4">
                                {{ $course->mentor->user->name ?? 'Instructor' }}
                            </p>

                            {{-- Add this --}}
                            @php
                            $batch = \App\Models\CourseSession::find($course->pivot->session_id);
                            @endphp
                            @if($batch)
                            <p class="text-xs font-semibold text-primary mb-4">
                                Batch {{ $batch->batch_number }} &nbsp;·&nbsp;
                                {{ \Carbon\Carbon::parse($batch->start_date)->format('d M Y') }} –
                                {{ \Carbon\Carbon::parse($batch->end_date)->format('d M Y') }}
                            </p>
                            @endif

                            <div class="space-y-2">
                                <div class="flex justify-between text-xs font-semibold">
                                    <span>Progress</span>
                                    <span>{{ $progress }}%</span>
                                </div>
                                <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                    <div class="bg-primary h-full transition-all" style="width: {{ $progress }}%"></div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full text-center py-10">
                            <p class="text-slate-500">You haven't enrolled in any courses yet.</p>
                        </div>
                        @endforelse
                    </div>
                </section>
                <!-- Recommended Courses -->
                <section>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold">Recommended for You</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($recommendations as $rec)
                        <div class="group cursor-pointer"
                            onclick="window.location='{{ route('courses.show', $rec->id) }}'">
                            <div class="aspect-video w-full rounded-xl overflow-hidden mb-3 relative bg-slate-100">
                                {{-- Thumbnail Logic --}}
                                @php
                                $thumbUrl = ($rec->thumbnail && Storage::disk('public')->exists($rec->thumbnail))
                                ? asset('storage/' . $rec->thumbnail)
                                : 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800';
                                @endphp

                                <div class="absolute inset-0 bg-center bg-cover transition-transform group-hover:scale-105"
                                    style="background-image: url('{{ $thumbUrl }}')">
                                </div>

                                {{-- Dynamic Rating --}}
<div class="absolute top-2 right-2 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded-lg backdrop-blur flex items-center gap-1">
    <span class="material-symbols-outlined text-yellow-500 text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
    <span class="text-xs font-bold">{{ number_format($rec->rating, 1) }}</span>
</div>

                                {{-- Category Label --}}
                                <div
                                    class="absolute bottom-2 left-2 px-2 py-1 bg-primary text-white text-[10px] font-bold uppercase rounded tracking-tighter">
                                    {{ $rec->category->name ?? 'General' }}
                                </div>
                            </div>

                            <h5
                                class="font-bold text-slate-900 dark:text-slate-100 line-clamp-2 group-hover:text-primary transition-colors">
                                {{ $rec->title }}
                            </h5>

                            <p class="text-slate-500 text-xs mt-1">
                                {{ $rec->mentor->user->name ?? 'Expert Mentor' }}
                            </p>

                            <div class="flex items-center justify-between mt-3">
                                <span class="font-bold text-primary">
                                    {{ $rec->price == 0 ? 'Free' : 'Rp' . number_format($rec->price, 2) }}
                                </span>
                                <span class="text-[10px] text-slate-400">
                                    {{ $rec->lessons }} Lessons
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

</html>