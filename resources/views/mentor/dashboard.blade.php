<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
    <div class="flex min-h-screen">
        <!-- Side Navigation -->
        <aside class="hidden lg:flex w-64 bg-gradient-to-b from-white to-blue-50 dark:from-slate-950 dark:to-slate-900 border-r border-slate-200 dark:border-slate-800 flex-col fixed h-full">
            <div class="p-6">
                <x-teachme-logo />
            </div>
            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="{{ route('mentor.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-semibold shadow-sm shadow-primary/5 transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Dashboard</span>
                </a>
                <a href="{{ url('/chat') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 hover:text-slate-950 dark:hover:bg-slate-800 dark:hover:text-white rounded-xl font-medium active:scale-[0.99] transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">chat_bubble</span>
                    <span>Chat</span>
                </a>
                <a href="{{ route('mentor.profile') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 hover:text-slate-950 dark:hover:bg-slate-800 dark:hover:text-white rounded-xl font-medium active:scale-[0.99] transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">person</span>
                    <span>Profile</span>
                </a>
                <a href="{{ route('mentor.earnings') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 hover:text-slate-950 dark:hover:bg-slate-800 dark:hover:text-white rounded-xl font-medium active:scale-[0.99] transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">payments</span>
                    <span>Earnings</span>
                </a>
                <a href="{{ route('mentor.schedule') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 hover:text-slate-950 dark:hover:bg-slate-800 dark:hover:text-white rounded-xl font-medium active:scale-[0.99] transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <span>Schedule</span>
                </a>
                <a href="{{ route('feedback.index') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-100 hover:text-slate-950 dark:hover:bg-slate-800 dark:hover:text-white rounded-xl font-medium active:scale-[0.99] transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-900">
                    <span class="material-symbols-outlined">rate_review</span>
                    <span>Feedback</span>
                </a>
            </nav>
            <div class="p-4 mt-auto">
                <div class="bg-primary/5 rounded-2xl p-4 border border-primary/10">
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="size-10 rounded-full overflow-hidden bg-slate-200 border border-slate-200 dark:border-slate-700 shadow-sm">
                            <img class="w-full h-full object-cover"
                                src="{{ Auth::user()->avatar ? asset('storage/avatars/' . Auth::user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                alt="{{ Auth::user()->name }}" />
                        </div>
                        <div>
                            <p class="text-sm font-bold">{{ Auth::user()->name }}</p>
                            @if($mentor->verify === '1')
                            {{-- Display Verified Badge --}}
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[12px] text-primary fill-1">verified</span>
                                <span class="text-[10px] uppercase font-bold text-primary">Verified Mentor</span>
                            </div>
                            @else
                            {{-- Display Pending Badge --}}
                            <div class="flex items-center gap-1">
                                <span
                                    class="material-symbols-outlined text-[12px] text-amber-600 animate-pulse">pending</span>
                                <span class="text-[10px] uppercase font-bold text-amber-600">Pending Review</span>
                            </div>
                            @endif
                        </div>
                    </div>
                    <a href="{{ url('/logout') }}"
                        class="block w-full py-2 text-center text-xs font-bold text-slate-500 hover:text-primary rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary transition-colors">Logout</a>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 min-w-0 lg:ml-64 p-4 sm:p-6 lg:p-8">
            <!-- Header -->
            <header class="flex flex-col gap-5 lg:flex-row lg:justify-between lg:items-center mb-8">
                <div>
                    <div class="mb-5 lg:hidden">
                        <x-teachme-logo size="sm" />
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight">Mentor Dashboard</h1>
                    <p class="text-slate-500">Welcome back, {{ Str::before(Auth::user()->name, ' ') }}!</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <div class="relative">
                        <form action="{{ route('courses.index') }}" method="GET"
                            class="relative max-w-xs w-full">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                            <input name="search" value="{{ request('search') }}"
                                class="pl-10 pr-4 py-2.5 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none w-full sm:w-64 transition-all"
                                placeholder="Search courses" type="text" />
                        </form>
                    </div>
                    <a href="{{ route('mentor.newcourse') }}"
                        class="bg-gradient-to-br from-primary to-blue-500 text-white px-5 sm:px-6 py-2.5 rounded-xl font-bold flex items-center justify-center gap-2 shadow-lg shadow-primary/20 hover:shadow-primary/30 hover:-translate-y-0.5 active:translate-y-0 transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-950">
                        <span class="material-symbols-outlined">add</span>
                        Create New Course
                    </a>
                </div>
            </header>
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 lg:gap-6 mb-8">
                <div class="bg-gradient-to-br from-white to-blue-50/60 dark:from-slate-900 dark:to-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-blue-50 text-primary rounded-lg">
                            <span class="material-symbols-outlined">group</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">Total Students</p>
                    <h3 class="text-2xl font-bold">{{ number_format($totalStudents) }}</h3>
                </div>
                <div class="bg-gradient-to-br from-white to-blue-50/60 dark:from-slate-900 dark:to-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                            <span class="material-symbols-outlined">menu_book</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">Active Courses</p>
                    <h3 class="text-2xl font-bold">{{ number_format($activeCoursesCount) }}</h3>
                </div>
                <div class="bg-gradient-to-br from-white to-blue-50/60 dark:from-slate-900 dark:to-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
                            <span class="material-symbols-outlined">monetization_on</span>
                        </div>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">Total Earnings</p>
                    <h3 class="text-2xl font-bold">Rp{{ number_format($mentor->revenue, 2) }}</h3>
                </div>
                @if(auth()->user()->mentor && auth()->user()->mentor->verify === '1')
                {{-- VERIFIED STATE --}}
                <div class="bg-gradient-to-br from-white to-blue-50/60 dark:from-slate-900 dark:to-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
                            <span class="material-symbols-outlined">verified_user</span>
                        </div>
                        <span
                            class="bg-emerald-100 text-emerald-700 text-[10px] px-2 py-1 rounded-full font-bold uppercase tracking-wider">
                            Active
                        </span>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">Verification Status</p>
                    <h3 class="text-2xl font-bold text-emerald-600">Verified</h3>
                </div>
                @else
                {{-- PENDING STATE ('0') --}}
                <div class="bg-gradient-to-br from-white to-blue-50/60 dark:from-slate-900 dark:to-slate-800 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                    <div class="flex justify-between items-start mb-4">
                        <div class="p-2 bg-amber-50 text-amber-600 rounded-lg">
                            <span class="material-symbols-outlined">pending_actions</span>
                        </div>
                        <span
                            class="bg-amber-100 text-amber-700 text-[10px] px-2 py-1 rounded-full font-bold uppercase tracking-wider">
                            Pending Review
                        </span>
                    </div>
                    <p class="text-slate-500 text-sm font-medium">Verification Status</p>
                    <h3 class="text-2xl font-bold text-amber-600 italic">Pending</h3>
                </div>
                @endif
            </div>
            <!-- Content Grid -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8">
                <!-- My Courses List -->
                <!-- Left Column: Courses & Schedule -->
                <div class="xl:col-span-2 space-y-6">

                    <!-- My Courses Header -->
                    <!-- Wrap the section in an Alpine component -->
                    <div class="space-y-6" x-data="{ expanded: false }">
                        <div class="flex justify-between items-center">
                            <h2 class="text-xl font-bold">My Courses</h2>
                            <!-- The Toggle Button -->
                            <button type="button" @click="expanded = !expanded"
                                class="text-primary font-bold text-sm hover:underline"
                                x-text="expanded ? 'Show Less' : 'View All'">
                                View All
                            </button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @forelse($myCourses as $index => $course)
                            <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm hover:border-primary/30 hover:-translate-y-0.5 transition-all group"
                                {{-- Hide items after index 1 (the first 2) if not expanded --}}
                                x-show="expanded || {{ $index }} < 2"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100">
                                <div
                                    class="h-32 rounded-xl mb-4 overflow-hidden bg-slate-100 flex items-center justify-center">
                                    {{-- Logic: Check if path exists in DB and if the file exists in public storage --}}
                                    @if($course->thumbnail && Storage::disk('public')->exists($course->thumbnail))
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform"
                                        alt="{{ $course->title }}" src="{{ asset('storage/' . $course->thumbnail) }}" />
                                    @else
                                    {{-- Fallback: Use your default Pixabay image if the file is missing --}}
                                    <span class="material-symbols-outlined text-5xl text-slate-400">image</span>
                                    @endif
                                </div>

                                <h4 class="font-bold text-lg mb-1 truncate">{{ $course->title }}</h4>
                                
                                @if($course->status === 'pending')
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-amber-600 bg-amber-50 border border-amber-200/60 px-2 py-0.5 rounded-lg w-max mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                        Pending Review
                                    </span>
                                @elseif($course->status === 'rejected')
                                    <span class="inline-flex items-center gap-1 text-[10px] font-bold text-rose-600 bg-rose-50 border border-rose-200/60 px-2 py-0.5 rounded-lg w-max mb-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                        Rejected
                                    </span>
                                @endif

                                <div class="flex justify-between items-center text-sm text-slate-500">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">person</span>
                                        {{ number_format($course->enrollments_count ?? 0) }} Students
                                    </span>
                                    <span class="bg-blue-50 text-primary px-2 py-0.5 rounded font-bold">
                                        Rp{{ number_format($course->price, 2) }}
                                    </span>
                                </div>
                            </div>
                            @empty
                            <div
                                class="sm:col-span-2 bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl text-center border border-dashed border-slate-200 dark:border-slate-700">
                                <p class="text-slate-500 mb-2">You haven't created any courses yet.</p>
                                <a href="{{ route('mentor.newcourse') }}"
                                    class="text-primary font-bold hover:underline">Create your first course</a>
                            </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Upcoming Schedule (Restored & Untouched) -->
                    <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-xl font-bold">Upcoming Live Sessions</h2>
                            <span class="material-symbols-outlined text-slate-400">more_horiz</span>
                        </div>

                        <div class="space-y-4">
                            @forelse($upcomingSessions as $session)
                            @php
                            $isToday = $session->next_class_date->isToday();
                            $enrollCount = $session->enrollments->count();
                            $startTime = $session->start_time
                            ? \Carbon\Carbon::parse($session->start_time)->format('H:i')
                            : null;

                            // "Starts in X minutes" if today and start_time is set
                            $startsIn = null;
                            if ($isToday && $session->start_time) {
                            $minutesLeft = (int) now()->diffInMinutes(
                            \Carbon\Carbon::parse($session->start_time), false
                            );
                            if ($minutesLeft > 0) {
                            $startsIn = $minutesLeft < 60 ? "Starts in {$minutesLeft} minutes" : 'Starts at ' .
                                $startTime; } elseif ($minutesLeft>= -60) {
                                $startsIn = 'Live now';
                                }
                                }
                                @endphp

                                <div
                                    class="flex flex-col sm:flex-row sm:items-center gap-4 p-4 rounded-xl border border-slate-100 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                    {{-- Date Box --}}
                                    <div class="w-12 h-12 rounded-xl flex flex-col items-center justify-center font-bold shrink-0
                {{ $isToday ? 'bg-gradient-to-br from-primary to-blue-500 text-white' : 'bg-slate-100 text-slate-500' }}">
                                        <span
                                            class="text-[10px] uppercase">{{ $session->next_class_date->format('M') }}</span>
                                        <span
                                            class="text-lg leading-none">{{ $session->next_class_date->format('d') }}</span>
                                    </div>

                                    {{-- Info --}}
                                    <div class="flex-1 min-w-0">
                                        <p class="font-bold text-slate-900 truncate">{{ $session->course->title }}</p>
                                        <p class="text-xs text-slate-500">
                                            @if($startsIn)
                                            <span
                                                class="{{ $startsIn === 'Live now' ? 'text-green-500 font-semibold' : '' }}">
                                                {{ $startsIn }}
                                            </span>
                                            •
                                            @elseif($startTime)
                                            {{ $startTime }} •
                                            @endif
                                            {{ $enrollCount }} enrolled
                                            • Batch {{ $session->batch_number }}
                                        </p>
                                    </div>

                                    {{-- Action Button --}}
                                    @if($session->meeting_link)
                                    <a href="{{ $session->meeting_link }}" target="_blank" class="px-4 py-2 text-xs font-bold rounded-lg shrink-0
                        {{ $isToday
                            ? 'border-2 border-primary text-primary hover:bg-primary hover:text-white transition-colors'
                            : 'border-2 border-slate-200 text-slate-400 hover:border-slate-300 transition-colors' }}">
                                        {{ $isToday ? 'Join Class' : 'View Link' }}
                                    </a>
                                    @else
                                    <span
                                        class="px-4 py-2 border-2 border-slate-200 text-slate-300 text-xs font-bold rounded-lg cursor-not-allowed">
                                        No Link
                                    </span>
                                    @endif
                                </div>

                                @empty
                                <div class="text-center py-8">
                                    <span class="material-symbols-outlined text-4xl text-slate-300">event_busy</span>
                                    <p class="text-slate-400 text-sm mt-2">No upcoming sessions</p>
                                </div>
                                @endforelse
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar / Calendar Mini -->
                <div class="bg-white dark:bg-slate-900 px-6 pt-6 pb-5 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm" x-data='{
        current: new Date(),
        month: new Date().getMonth(),
        year: new Date().getFullYear(),
        
        // Ensure your dates come from Laravel in YYYY-MM-DD format
        classDates: @json($classDates ?? []),

        get yearOptions() {
            const currentYear = new Date().getFullYear();
            return Array.from({length: 8}, (_, i) => currentYear - 2 + i); 
        },
        updateDate() {
            this.current = new Date(this.year, parseInt(this.month), 1);
        },
        syncSelects() {
            this.month = this.current.getMonth();
            this.year = this.current.getFullYear();
        },
        prev() {
            this.current = new Date(this.current.getFullYear(), this.current.getMonth() - 1, 1);
            this.syncSelects();
        },
        next() {
            this.current = new Date(this.current.getFullYear(), this.current.getMonth() + 1, 1);
            this.syncSelects();
        },
        get days() {
            const y = this.current.getFullYear(), m = this.current.getMonth();
            const firstDay = new Date(y, m, 1);
            const lastDay  = new Date(y, m + 1, 0);

            let startDow = firstDay.getDay();
            startDow = startDow === 0 ? 6 : startDow - 1; 

            const all = [];

            for (let i = startDow; i > 0; i--) {
                all.push({ d: new Date(y, m, 1 - i), cur: false });
            }
            for (let i = 1; i <= lastDay.getDate(); i++) {
                all.push({ d: new Date(y, m, i), cur: true });
            }
            const total = all.length <= 35 ? 35 : 42;
            let nx = 1;
            while (all.length < total) {
                all.push({ d: new Date(y, m + 1, nx++), cur: false });
            }
            return all;
        },
        isToday(d) {
            const t = new Date();
            return d.getDate()   === t.getDate()
                && d.getMonth()  === t.getMonth()
                && d.getFullYear() === t.getFullYear();
        },
        isClass(d) {
            const s = d.getFullYear() + "-"
                + String(d.getMonth() + 1).padStart(2, "0") + "-"
                + String(d.getDate()).padStart(2, "0");
            return this.classDates.includes(s);
        }
    }'>

                    {{-- Header with Custom Dropdowns --}}
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex items-center gap-4">

                            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                                <button @click="open = !open" type="button"
                                    class="flex items-center gap-1 font-bold text-lg text-slate-950 hover:text-primary transition-colors focus:outline-none group">
                                    <span
                                        x-text="['January','February','March','April','May','June','July','August','September','October','November','December'][month]"></span>
                                    <span
                                        class="material-symbols-outlined text-slate-400 text-[20px] transition-transform duration-200 group-hover:text-primary"
                                        :class="open ? 'rotate-180 text-primary' : ''">expand_more</span>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute left-0 mt-1 w-40 bg-white border border-slate-100 rounded-xl shadow-xl z-50 max-h-60 overflow-y-auto p-1 text-sm font-medium text-slate-600"
                                    style="display: none;">
                                    <template
                                        x-for="(m, idx) in ['January','February','March','April','May','June','July','August','September','October','November','December']"
                                        :key="idx">
                                        <button @click="month = idx; updateDate(); open = false" type="button"
                                            class="w-full text-left px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-primary transition-colors"
                                            :class="month == idx ? 'bg-primary/5 text-primary font-semibold' : ''"
                                            x-text="m">
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <div x-data="{ open: false }" @click.away="open = false" class="relative">
                                <button @click="open = !open" type="button"
                                    class="flex items-center gap-1 font-bold text-lg text-slate-950 hover:text-primary transition-colors focus:outline-none group">
                                    <span x-text="year"></span>
                                    <span
                                        class="material-symbols-outlined text-slate-400 text-[20px] transition-transform duration-200 group-hover:text-primary"
                                        :class="open ? 'rotate-180 text-primary' : ''">expand_more</span>
                                </button>

                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="absolute left-0 mt-1 w-28 bg-white border border-slate-100 rounded-xl shadow-xl z-50 max-h-60 overflow-y-auto p-1 text-sm font-medium text-slate-600"
                                    style="display: none;">
                                    <template x-for="y in yearOptions" :key="y">
                                        <button @click="year = y; updateDate(); open = false" type="button"
                                            class="w-full text-left px-3 py-2 rounded-lg hover:bg-slate-50 hover:text-primary transition-colors"
                                            :class="year == y ? 'bg-primary/5 text-primary font-semibold' : ''"
                                            x-text="y">
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        {{-- Navigation Arrows --}}
                        <div class="flex gap-1">
                            <button @click="prev()" type="button"
                                class="p-1 rounded-lg hover:bg-slate-100 transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </button>
                            <button @click="next()" type="button"
                                class="p-1 rounded-lg hover:bg-slate-100 transition-colors text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </button>
                        </div>
                    </div>

                    {{-- Day headers --}}
                    <div class="grid grid-cols-7 text-center text-[10px] font-bold text-slate-400 mb-2">
                        <span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span><span>S</span>
                    </div>

                    {{-- Day cells --}}
                    <div class="grid grid-cols-7 gap-y-1 text-center text-xs font-medium">
                        <template x-for="day in days" :key="day.d.getTime()">
                            <div class="relative flex flex-col items-center justify-center p-1.5 rounded-lg cursor-pointer hover:bg-slate-50 transition-colors"
                                :class="{
                    'bg-primary text-white font-bold hover:bg-primary/90': isToday(day.d),
                    'bg-primary/10 text-primary font-semibold hover:bg-primary/20': isClass(day.d) && !isToday(day.d) && day.cur,
                    'text-slate-300': !day.cur && !isToday(day.d),
                    'text-slate-700': day.cur && !isToday(day.d) && !isClass(day.d),
                }">
                                <span x-text="day.d.getDate()"></span>

                                {{-- Dot Indicator --}}
                                <span x-show="isClass(day.d)" class="absolute bottom-0.5 w-1 h-1 rounded-full"
                                    :class="isToday(day.d) ? 'bg-white' : 'bg-primary'">
                                </span>
                            </div>
                        </template>
                    </div>

                    {{-- Legend --}}
                    <div
                        class="flex items-center gap-4 mt-3 pt-3 border-t border-slate-100 text-[11px] text-slate-400 font-medium">
                        <div class="flex items-center gap-1.5">
                            <div class="w-2.5 h-2.5 rounded bg-primary"></div>
                            <span>Today</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <div class="w-2.5 h-2.5 rounded bg-primary/10 border border-primary/20"></div>
                            <span>Class day</span>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>

</html>
