<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard - TeachMe</title>
    
    {{-- Tailwind CSS CDN & Plugins --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    {{-- Fonts & Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    
    {{-- Alpine.js --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Custom Tailwind Variables Configuration --}}
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
    
    {{-- Global Dashboard Component Styles --}}
    <style>
    body {
        font-family: 'Lexend', sans-serif;
    }

    .sidebar-gradient {
        background: linear-gradient(180deg, #ffffff 0%, #f0f4ff 100%);
    }

    .card-gradient {
        background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
    }

    .accent-gradient {
        background: linear-gradient(135deg, #135bec 0%, #4785ff 100%);
    }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
    <div class="flex min-h-screen">
        
        {{-- Sidebar Panel Layout --}}
        <aside class="w-64 sidebar-gradient border-r border-slate-200/60 hidden md:flex flex-col justify-between p-6">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-2.5 px-2">
                    <div class="w-9 h-9 rounded-xl accent-gradient flex items-center justify-center text-white shadow-md shadow-primary/20">
                        <span class="material-symbols-outlined text-[20px] font-bold">school</span>
                    </div>
                    <span class="text-xl font-extrabold text-slate-900 tracking-tight">Teach<span class="text-primary">Me</span></span>
                </div>

                <nav class="flex flex-col gap-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider px-3 mb-2">Management</span>
                    <a href="{{ route('admin.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary font-semibold text-sm transition-all">
                        <span class="material-symbols-outlined text-[20px]">verified_user</span>
                        Mentor Approvals
                    </a>
                </nav>
            </div>

            <div class="border-t border-slate-200/60 pt-4">
                <a href="{{ url('/logout') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-rose-600 hover:bg-rose-50 font-semibold text-sm transition-all group">
                    <span class="material-symbols-outlined text-[20px] group-hover:translate-x-0.5 transition-transform">logout</span>
                    Sign Out
                </a>
            </div>
        </aside>

        {{-- Main System Stage Area --}}
        <main class="flex-1 flex flex-col min-w-0">
            
            {{-- Global Section Navigation --}}
            <header class="h-16 border-b border-slate-200/60 bg-white/80 backdrop-blur-md px-6 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="text-sm font-semibold text-slate-400">Admin Portal</span>
                    <span class="text-slate-300">/</span>
                    <span class="text-sm font-bold text-slate-800">Mentors</span>
                </div>
                
                {{-- Account Metadata Badge --}}
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-slate-900">{{ auth()->user()->name }}</p>
                        <p class="text-[10px] font-semibold text-primary uppercase tracking-wide">System Administrator</p>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-slate-200 font-bold text-slate-700 flex items-center justify-center border-2 border-white shadow-sm">
                        A
                    </div>
                </div>
            </header>

            {{-- Main Dashboard Layout Workspace Content --}}
            <div class="p-6 sm:p-8 flex-1 overflow-y-auto max-w-6xl w-full mx-auto">
                
                {{-- Informational Text Overview Block --}}
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-slate-900 tracking-tight">Mentor Verification Requests</h1>
                    <p class="text-xs text-slate-500 mt-1">Review applicant profiles, evaluate credentials, and authorize platform access properties.</p>
                </div>

                {{-- Toast Framework Messaging Notifications --}}
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold rounded-2xl flex items-center gap-2.5 shadow-sm shadow-emerald-100/50">
                        <span class="material-symbols-outlined text-[20px] text-emerald-600">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Main Data Presentation Architecture --}}
                <div class="bg-white rounded-3xl border border-slate-200/70 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/70 border-b border-slate-200/70 text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                    <th class="py-4 px-6">Profile Information</th>
                                    <th class="py-4 px-6">Subject Preference</th>
                                    <th class="py-4 px-6">Background Links</th>
                                    <th class="py-4 px-6 text-center">Status</th>
                                    <th class="py-4 px-6 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-xs font-medium text-slate-700">
                                @forelse($mentors as $mentor)
                                    <tr class="hover:bg-slate-50/30 transition-colors">
                                        
                                        {{-- Mentor Identification Details --}}
                                        <td class="py-4 px-6">
                                            <div class="flex flex-col">
                                                <span class="text-sm font-bold text-slate-900">{{ $mentor->user->name ?? 'Dangling Reference' }}</span>
                                                <span class="text-xs text-slate-400 font-normal mt-0.5">{{ $mentor->title ?? 'No operational title specified' }}</span>
                                                @if($mentor->academic_degree)
                                                    <span class="text-[10px] text-primary bg-primary/5 border border-primary/10 px-2 py-0.5 rounded-lg w-max mt-2 font-bold">
                                                        {{ $mentor->academic_degree }}
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        
                                        {{-- Focus Core Discipline Field --}}
                                        <td class="py-4 px-6 text-slate-600 font-normal">
                                            {{ $mentor->preferred_learning ?? '-' }}
                                        </td>

                                        {{-- Verification External Links Structure --}}
                                        <td class="py-4 px-6">
                                            <div class="flex flex-col gap-1.5">
                                                @if($mentor->portfolio_url)
                                                    <a href="{{ $mentor->portfolio_url }}" target="_blank" class="text-primary hover:underline font-bold flex items-center gap-1">
                                                        <span class="material-symbols-outlined text-[13px]">language</span>
                                                        Portfolio
                                                    </a>
                                                @endif
                                                @if($mentor->linkedin_url)
                                                    <a href="{{ $mentor->linkedin_url }}" target="_blank" class="text-sky-600 hover:underline font-bold flex items-center gap-1">
                                                        <span class="material-symbols-outlined text-[13px]">link</span>
                                                        LinkedIn
                                                    </a>
                                                @endif
                                                @if(!$mentor->portfolio_url && !$mentor->linkedin_url)
                                                    <span class="text-slate-300 font-normal italic">No connections provided</span>
                                                @endif
                                            </div>
                                        </td>

                                        {{-- Reactive Verification Status State Flag --}}
                                        <td class="py-4 px-6 text-center">
                                            @if($mentor->verify === '1')
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-xl text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200/50">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                    Verified
                                                </span>
                                            @else
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-xl text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200/50">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                                                    Pending
                                                </span>
                                            @endif
                                        </td>

                                        {{-- Toggle Event Routing Controls --}}
                                        <td class="py-4 px-6 text-right">
                                            <form action="{{ route('admin.toggle-verify', $mentor->id) }}" method="POST">
                                                @csrf
                                                @if($mentor->verify === '1')
                                                    <button type="submit" onclick="return confirm('Revoke this mentor\'s verified standing status?')" class="px-3 py-1.5 bg-white border border-slate-200 text-slate-600 hover:bg-rose-50 hover:text-rose-600 hover:border-rose-200 text-[11px] font-bold rounded-xl transition-all shadow-sm">
                                                        Cancel Verify
                                                    </button>
                                                @else
                                                    <button type="submit" class="px-4 py-1.5 bg-primary text-white hover:bg-primary/90 text-[11px] font-bold rounded-xl shadow-sm shadow-primary/10 transition-all">
                                                        Approve
                                                    </button>
                                                @endif
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-16 text-center text-slate-400 font-normal">
                                            <span class="material-symbols-outlined text-4xl block mb-2 text-slate-300">group_off</span>
                                            No mentor applications registered inside the directory.
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