<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Course Approvals - TeachMe Admin</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

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
                fontFamily: { "display": ["Lexend"] },
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
    body { font-family: 'Lexend', sans-serif; }
    .sidebar-gradient { background: linear-gradient(180deg, #ffffff 0%, #f0f4ff 100%); }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 sidebar-gradient border-r border-slate-200/60 hidden md:flex flex-col justify-between p-6">
        <div class="flex flex-col gap-8">
            <x-teachme-logo size="sm" />

            <nav class="flex flex-col gap-1">
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider px-3 mb-2">Management</span>

                <a href="{{ route('admin.index') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-100 font-medium text-sm transition-all">
                    <span class="material-symbols-outlined text-[20px]">verified_user</span>
                    Mentor Approvals
                </a>

                <a href="{{ route('admin.courses') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary font-semibold text-sm transition-all">
                    <span class="material-symbols-outlined text-[20px]">menu_book</span>
                    Course Approvals
                </a>
                <a href="{{ route('admin.feedbacks') }}"
   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-100 font-medium text-sm transition-all">
    <span class="material-symbols-outlined text-[20px]">rate_review</span>
    Feedbacks
</a>
            </nav>
        </div>

        <div class="border-t border-slate-200/60 pt-4">
            <a href="{{ url('/logout') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-rose-600 hover:bg-rose-50 font-semibold text-sm transition-all group">
                <span class="material-symbols-outlined text-[20px] group-hover:translate-x-0.5 transition-transform">logout</span>
                Sign Out
            </a>
        </div>
    </aside>

    {{-- Main --}}
    <main class="flex-1 flex flex-col min-w-0">

        <header class="h-16 border-b border-slate-200/60 bg-white/80 backdrop-blur-md px-6 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="text-sm font-semibold text-slate-400">Admin Portal</span>
                <span class="text-slate-300">/</span>
                <span class="text-sm font-bold text-slate-800">Courses</span>
            </div>

            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-slate-900">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] font-semibold text-primary uppercase tracking-wide">System Administrator</p>
                </div>
                <div class="w-9 h-9 rounded-full bg-slate-200 font-bold text-slate-700 flex items-center justify-center border-2 border-white shadow-sm">A</div>
            </div>
        </header>

        <div class="p-6 sm:p-8 flex-1 overflow-y-auto max-w-6xl w-full mx-auto">

            {{-- Page heading --}}
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Course Verification Requests</h1>
                <p class="text-xs text-slate-500 mt-1">Review submitted courses and approve or reject them before they become visible to students.</p>
            </div>

            {{-- Status counts --}}
            <div class="grid grid-cols-3 gap-4 mb-6">
                @php
                    $pending  = $courses->where('status', 'pending')->count();
                    $approved = $courses->where('status', 'approved')->count();
                    $rejected = $courses->where('status', 'rejected')->count();
                @endphp

                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-amber-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px] text-amber-500">pending</span>
                    </div>
                    <div>
                        <p class="text-xl font-extrabold text-slate-900">{{ $pending }}</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Pending</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-emerald-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px] text-emerald-500">check_circle</span>
                    </div>
                    <div>
                        <p class="text-xl font-extrabold text-slate-900">{{ $approved }}</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Approved</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-rose-50 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px] text-rose-500">cancel</span>
                    </div>
                    <div>
                        <p class="text-xl font-extrabold text-slate-900">{{ $rejected }}</p>
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide">Rejected</p>
                    </div>
                </div>
            </div>

            {{-- Toast --}}
            @if(session('success'))
                <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold rounded-2xl flex items-center gap-2.5 shadow-sm">
                    <span class="material-symbols-outlined text-[20px] text-emerald-600">check_circle</span>
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table --}}
            <div class="bg-white rounded-3xl border border-slate-200/70 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/70 border-b border-slate-200/70 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                <th class="py-4 px-6">Course</th>
                                <th class="py-4 px-6">Mentor</th>
                                <th class="py-4 px-6">Details</th>
                                <th class="py-4 px-6 text-center">Status</th>
                                <th class="py-4 px-6 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-xs font-medium text-slate-700">

                            {{-- Pending courses first, then the rest --}}
                            @forelse($courses->sortBy(fn($c) => match($c->status) { 'pending' => 0, 'approved' => 1, 'rejected' => 2 }) as $course)
                                <tr class="hover:bg-slate-50/30 transition-colors">

                                    {{-- Course Info --}}
                                    <td class="py-4 px-6">
                                        <div class="flex items-center gap-3">
                                            @if($course->thumbnail)
                                                <img src="{{ asset('storage/' . $course->thumbnail) }}"
                                                     class="w-12 h-12 rounded-xl object-cover shrink-0 bg-slate-100"
                                                     alt="thumbnail">
                                            @else
                                                <div class="w-12 h-12 rounded-xl bg-slate-100 flex items-center justify-center shrink-0">
                                                    <span class="material-symbols-outlined text-[20px] text-slate-300">image</span>
                                                </div>
                                            @endif
                                            <div>
                                                <p class="text-sm font-bold text-slate-900 leading-snug">{{ $course->title }}</p>
                                                <p class="text-[10px] text-slate-400 font-normal mt-0.5">{{ $course->id }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- Mentor --}}
                                    <td class="py-4 px-6">
                                        <span class="font-semibold text-slate-800">{{ $course->mentor->user->name ?? '—' }}</span>
                                    </td>

                                    {{-- Course Details --}}
                                    <td class="py-4 px-6">
                                        <div class="flex flex-col gap-1">
                                            <span class="inline-flex items-center gap-1 text-slate-500 font-normal">
                                                <span class="material-symbols-outlined text-[13px]">category</span>
                                                {{ $course->category->name ?? '—' }}
                                            </span>
                                            <span class="inline-flex items-center gap-1 text-slate-500 font-normal">
                                                <span class="material-symbols-outlined text-[13px]">payments</span>
                                                ${{ number_format($course->price, 2) }}
                                            </span>
                                            <span class="inline-flex items-center gap-1 text-slate-500 font-normal capitalize">
                                                <span class="material-symbols-outlined text-[13px]">cast_for_education</span>
                                                {{ $course->type }}
                                            </span>
                                        </div>
                                    </td>

                                    {{-- Status Badge --}}
                                    <td class="py-4 px-6 text-center">
                                        @if($course->status === 'approved')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-xl text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200/50">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                Approved
                                            </span>
                                        @elseif($course->status === 'rejected')
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-xl text-[10px] font-bold bg-rose-50 text-rose-700 border border-rose-200/50">
                                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                                Rejected
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-xl text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200/50">
                                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                                Pending
                                            </span>
                                        @endif
                                    </td>

                                    {{-- Actions --}}
                                    <td class="py-4 px-6 text-right">
                                        <div class="flex items-center justify-end gap-2">

                                            {{-- Approve button (shown when not approved) --}}
                                            @if($course->status !== 'approved')
                                                <form action="{{ route('admin.courses.update-status', $course->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="approved">
                                                    <button type="submit"
                                                            class="px-4 py-1.5 bg-primary text-white hover:bg-primary/90 text-[11px] font-bold rounded-xl shadow-sm shadow-primary/10 transition-all">
                                                        Approve
                                                    </button>
                                                </form>
                                            @endif

                                            {{-- Reject button (shown when not rejected) --}}
                                            @if($course->status !== 'rejected')
                                                <form action="{{ route('admin.courses.update-status', $course->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit"
                                                            onclick="return confirm('Reject this course? The mentor will need to resubmit.')"
                                                            class="px-3 py-1.5 bg-white border border-slate-200 text-slate-600 hover:bg-rose-50 hover:text-rose-600 hover:border-rose-200 text-[11px] font-bold rounded-xl transition-all shadow-sm">
                                                        Reject
                                                    </button>
                                                </form>
                                            @endif

                                            {{-- Reset to pending (shown when approved or rejected) --}}
                                            @if($course->status !== 'pending')
                                                <form action="{{ route('admin.courses.update-status', $course->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="status" value="pending">
                                                    <button type="submit"
                                                            class="px-3 py-1.5 bg-white border border-slate-200 text-slate-500 hover:bg-slate-50 text-[11px] font-bold rounded-xl transition-all shadow-sm">
                                                        Reset
                                                    </button>
                                                </form>
                                            @endif

                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-16 text-center text-slate-400 font-normal">
                                        <span class="material-symbols-outlined text-4xl block mb-2 text-slate-300">menu_book</span>
                                        No courses submitted yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</div>
</body>
</html>