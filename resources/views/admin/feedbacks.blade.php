<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Feedback - TeachMe Admin</title>

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
                    "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"
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

<body class="bg-background-light text-slate-900 font-display">
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
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-600 hover:bg-slate-100 font-medium text-sm transition-all">
                    <span class="material-symbols-outlined text-[20px]">menu_book</span>
                    Course Approvals
                </a>

                <a href="{{ route('admin.feedbacks') }}"
                   class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary font-semibold text-sm transition-all">
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
                <span class="text-sm font-bold text-slate-800">Feedbacks</span>
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
                <h1 class="text-2xl font-bold text-slate-900 tracking-tight">User Feedbacks</h1>
                <p class="text-xs text-slate-500 mt-1">All feedback submitted by users and mentors on the platform.</p>
            </div>

            {{-- Summary cards --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Total</p>
                    <p class="text-2xl font-extrabold text-slate-900">{{ $feedbacks->total() }}</p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Avg Rating</p>
                    <p class="text-2xl font-extrabold text-slate-900">
                        {{ $feedbacks->avg('rating') ? number_format($feedbacks->avg('rating'), 1) : '—' }}
                    </p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Bug Reports</p>
                    <p class="text-2xl font-extrabold text-rose-600">
                        {{ $feedbacks->where('category', 'Bug Report')->count() }}
                    </p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-4">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1">Feature Requests</p>
                    <p class="text-2xl font-extrabold text-primary">
                        {{ $feedbacks->where('category', 'Feature Request')->count() }}
                    </p>
                </div>
            </div>

            {{-- Feedback list --}}
            <div class="flex flex-col gap-3">
                @forelse($feedbacks as $fb)
                @php
                    $ratingColors = [
                        1 => 'text-rose-500',
                        2 => 'text-orange-500',
                        3 => 'text-amber-500',
                        4 => 'text-blue-500',
                        5 => 'text-emerald-500',
                    ];
                    $ratingIcons = [
                        1 => 'sentiment_very_dissatisfied',
                        2 => 'sentiment_dissatisfied',
                        3 => 'sentiment_satisfied',
                        4 => 'sentiment_satisfied_alt',
                        5 => 'sentiment_very_satisfied',
                    ];
                    $ratingLabels = [
                        1 => 'Poor', 2 => 'Bad', 3 => 'Average', 4 => 'Good', 5 => 'Excellent',
                    ];
                    $categoryColors = [
                        'Bug Report'      => 'bg-rose-50 text-rose-700 border-rose-200/60',
                        'Feature Request' => 'bg-primary/5 text-primary border-primary/20',
                        'User Interface'  => 'bg-violet-50 text-violet-700 border-violet-200/60',
                        'Performance'     => 'bg-amber-50 text-amber-700 border-amber-200/60',
                        'Other'           => 'bg-slate-50 text-slate-600 border-slate-200/60',
                    ];
                    // Use your existing 'status' column for the badge
                    $statusColors = [
                        'pending'  => 'bg-amber-50 text-amber-700 border-amber-200/60',
                        'reviewed' => 'bg-emerald-50 text-emerald-700 border-emerald-200/60',
                    ];
                    $catClass    = $categoryColors[$fb->category] ?? 'bg-slate-50 text-slate-600 border-slate-200/60';
                    $statusClass = $statusColors[$fb->status] ?? 'bg-slate-50 text-slate-500 border-slate-200/60';
                @endphp

                <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm p-5 flex flex-col gap-3"
                     x-data="{ expanded: false }">

                    {{-- Top row --}}
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex items-center gap-3">
                            {{-- Avatar --}}
                            <div class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center shrink-0 overflow-hidden">
                                @if($fb->user?->avatar)
                                    <img src="{{ asset('storage/avatars/' . $fb->user->avatar) }}"
                                         class="w-full h-full object-cover" alt="">
                                @else
                                    <span class="material-symbols-outlined text-[18px] text-slate-400">person</span>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm font-bold text-slate-900">{{ $fb->user?->name ?? 'Unknown User' }}</p>
                                <p class="text-[10px] text-slate-400">{{ $fb->created_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2 shrink-0 flex-wrap justify-end">
                            {{-- Status badge (from your 'status' column) --}}
                            <span class="text-[10px] font-bold px-2.5 py-1 rounded-xl border capitalize {{ $statusClass }}">
                                {{ $fb->status }}
                            </span>
                            {{-- Category badge --}}
                            <span class="text-[10px] font-bold px-2.5 py-1 rounded-xl border {{ $catClass }}">
                                {{ $fb->category }}
                            </span>
                            {{-- Rating emoji --}}
                            <span class="flex items-center gap-1 {{ $ratingColors[$fb->rating] ?? 'text-slate-400' }}">
                                <span class="material-symbols-outlined text-[20px]"
                                      style="font-variation-settings: 'FILL' 1">
                                    {{ $ratingIcons[$fb->rating] ?? 'sentiment_satisfied' }}
                                </span>
                                <span class="text-[10px] font-bold">
                                    {{ $ratingLabels[$fb->rating] ?? $fb->rating }}
                                </span>
                            </span>
                        </div>
                    </div>

                    {{-- Comment (truncated by default) --}}
                    <div>
                        <p class="text-xs text-slate-600 leading-relaxed" x-show="!expanded" x-cloak>
                            {{ Str::limit($fb->comments, 180) }}
                        </p>
                        <p class="text-xs text-slate-600 leading-relaxed" x-show="expanded" x-cloak>
                            {{ $fb->comments }}
                        </p>
                        @if(strlen($fb->comments) > 180)
                            <button @click="expanded = !expanded"
                                    class="text-[10px] font-bold text-primary hover:underline mt-1"
                                    x-text="expanded ? 'Show less' : 'Read more'">
                                Read more
                            </button>
                        @endif
                    </div>

                    {{-- Screenshot (stored in public/uploads/feedbacks/) --}}
                    @if($fb->attachment)
                        <div x-data="{ open: false }">
                            <button @click="open = !open"
                                    class="flex items-center gap-1.5 text-[10px] font-bold text-slate-500 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[15px]">image</span>
                                <span x-text="open ? 'Hide screenshot' : 'View screenshot'">View screenshot</span>
                            </button>
                            <div x-show="open" x-transition class="mt-2">
                                <img src="{{ asset('uploads/feedbacks/' . $fb->attachment) }}"
                                     class="max-h-64 rounded-xl border border-slate-200 object-contain"
                                     alt="Feedback screenshot">
                            </div>
                        </div>
                    @endif

                </div>
                @empty
                    <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm py-16 text-center text-slate-400">
                        <span class="material-symbols-outlined text-4xl block mb-2 text-slate-300">rate_review</span>
                        No feedback submitted yet.
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $feedbacks->links() }}
            </div>

        </div>
    </main>
</div>
</body>
</html>