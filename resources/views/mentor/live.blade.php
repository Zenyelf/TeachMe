<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Live Classroom</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Lexend', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .fill-icon { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 shrink-0">
<div class="flex items-center gap-3">
<div class="bg-primary p-1.5 rounded-lg text-white">
<span class="material-symbols-outlined text-2xl">school</span>
</div>
<div class="flex flex-col">
<h2 class="text-primary text-xl font-bold leading-none tracking-tight">TeachMe</h2>
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Live Classroom</span>
</div>
</div>
<div class="hidden md:flex items-center gap-6">
<div class="flex items-center gap-2 px-3 py-1 bg-red-50 dark:bg-red-900/20 text-red-600 rounded-full border border-red-100 dark:border-red-800/30">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
</span>
<span class="text-xs font-bold uppercase">Live</span>
</div>
<div class="h-4 w-px bg-slate-200 dark:bg-slate-700"></div>
<div class="flex flex-col">
<h1 class="text-sm font-semibold">Advanced React Patterns</h1>
<p class="text-[11px] text-slate-500">Mentor: Sarah Drasner</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-2 text-slate-500 bg-slate-100 dark:bg-slate-800 px-3 py-1.5 rounded-lg">
<span class="material-symbols-outlined text-sm">group</span>
<span class="text-xs font-medium">1,248 Viewers</span>
</div>
<div class="size-10 rounded-full bg-slate-200 dark:bg-slate-700 border-2 border-primary/20 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="User profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDz5RfYfFEWSHH5s4IC8GxBOM1ivxLdftiSORrQiLUXy2Xfv2YvULaMVp7SUavvE59tmb3-ehSaTa5ZkJQPlN255AnwF-6o6sNqUqFdAvoaXzE_luA1TWPDSIkz1ZBld86JgSXSAMdnVzu4ibK1Atmo-pJDhI8cnvrYsW1n7nN12vmBVlD7dlBqH1dj1iPbQSF4xnuGADjVAXIKdh_m8wqmGL7cd-GHHTh3a4MF3urRrpKAqrZHCbA81-bbshbj89JCjlO_-ZZnSkE"/>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 flex overflow-hidden">
<!-- Center Stage: Video Area -->
<div class="flex-1 flex flex-col p-4 gap-4 overflow-y-auto">
<!-- Mentor Stream -->
<div class="relative flex-1 bg-slate-900 rounded-xl overflow-hidden shadow-2xl min-h-[400px] border border-slate-800">
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent z-10"></div>
<!-- Main Stream Video Container -->
<div class="w-full h-full bg-slate-800 flex items-center justify-center relative">
<img class="w-full h-full object-cover opacity-90" data-alt="Professional mentor teaching code on screen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkLqtb35JoeP_TNA8DmFgdcFoqf6ZZ-Pq_0KZiaalJcrhHxZCmJNbgzXC42UqVJmgF7jIFK-5q7SgqoLkSNiRxpfN6PqzlvY92gk_iuipAxe8jKdOgHvxgIytRJNCy4YBoVaJovQo8VffJfuQ46ELMAFFeufhCWaDc33EjtTSCbGwdJbtES0M4nQ0W_5PAe_InMJNmJfQxqyFs7_Vb6rRMwtqHZ9HDFM1skTjLeEFqn2e850cKfSg7NYqWl4ThXOnNPtk9wwAA8Tw"/>
<!-- Picture in Picture (Mentor Face) -->
<div class="absolute top-4 right-4 w-48 aspect-video bg-slate-900 rounded-lg border-2 border-white/20 shadow-xl overflow-hidden z-20">
<img class="w-full h-full object-cover" data-alt="Mentor speaking to camera" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDPECnjLzgnvpg_elIg1FOjx94aQjHNBT7YYvw-rwhaXiGu04HH8-_DaRouHaHvzSmtGMDk_YIDxZTQvMduKbfI65kzma6-4P1ZZTFFukFqKpsv7nIL0OJdVkogdtMv5NkBi02Ykwddi2UUgCvOnoAnPd3zGo0-N3vFC8atCJUKXtRQfW9tNCtT-YFvIroIHUrEkReTkitivE-tC-oqZLZ3WH63HfAfcGeeqc2q7Z4ss-w1z2YKEkeTsd90eDq8uv_nfWc-gYa9VQ"/>
<div class="absolute bottom-1 left-1 bg-black/50 backdrop-blur px-1.5 py-0.5 rounded text-[10px] text-white">Sarah (Host)</div>
</div>
<!-- Recording Status -->
<div class="absolute top-4 left-4 z-20 flex items-center gap-2 bg-black/40 backdrop-blur-md px-3 py-1.5 rounded-lg text-white text-xs border border-white/10">
<span class="material-symbols-outlined text-red-500 text-sm fill-icon">fiber_manual_record</span>
                        REC: 00:45:12
                    </div>
</div>
<!-- Bottom Controls Overlay -->
<div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex items-center gap-4 bg-slate-900/80 backdrop-blur-xl p-3 rounded-2xl border border-white/10 shadow-2xl">
<button class="p-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white transition-colors">
<span class="material-symbols-outlined">mic</span>
</button>
<button class="p-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white transition-colors">
<span class="material-symbols-outlined">videocam</span>
</button>
<button class="p-3 rounded-xl bg-primary hover:bg-primary/80 text-white transition-colors flex items-center gap-2 px-5">
<span class="material-symbols-outlined">present_to_all</span>
<span class="text-sm font-semibold">Share Screen</span>
</button>
<button class="p-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="w-px h-8 bg-slate-700 mx-1"></div>
<button class="p-3 rounded-xl bg-red-500 hover:bg-red-600 text-white transition-colors flex items-center gap-2 px-5">
<span class="material-symbols-outlined text-sm">logout</span>
<span class="text-sm font-semibold">Leave Class</span>
</button>
</div>
</div>
<!-- Handouts & Materials Bar -->
<div class="bg-white dark:bg-slate-900 rounded-xl p-4 border border-slate-200 dark:border-slate-800 flex flex-wrap items-center gap-4">
<h3 class="text-sm font-bold flex items-center gap-2 text-slate-400 uppercase tracking-wider mr-2">
<span class="material-symbols-outlined text-lg">folder_open</span>
                    Class Materials
                </h3>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 bg-primary/5 hover:bg-primary/10 text-primary border border-primary/20 px-4 py-2 rounded-lg transition-all group">
<span class="material-symbols-outlined text-lg">description</span>
<span class="text-sm font-medium">React_Patterns.pdf</span>
<span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100">download</span>
</button>
<button class="flex items-center gap-2 bg-primary/5 hover:bg-primary/10 text-primary border border-primary/20 px-4 py-2 rounded-lg transition-all group">
<span class="material-symbols-outlined text-lg">code</span>
<span class="text-sm font-medium">Starter_Code.zip</span>
<span class="material-symbols-outlined text-sm opacity-0 group-hover:opacity-100">download</span>
</button>
<button class="flex items-center gap-2 bg-slate-100 dark:bg-slate-800 text-slate-500 border border-slate-200 dark:border-slate-700 px-4 py-2 rounded-lg hover:bg-slate-200 transition-all">
<span class="material-symbols-outlined text-lg">add_circle</span>
<span class="text-sm font-medium">Request File</span>
</button>
</div>
</div>
</div>
<!-- Right Sidebar: Interaction Panel -->
<aside class="w-80 lg:w-96 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col shrink-0">
<!-- Tabs -->
<div class="flex border-b border-slate-200 dark:border-slate-800">
<button class="flex-1 py-4 text-sm font-bold border-b-2 border-primary text-primary flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg">chat</span>
                    Live Chat
                </button>
<button class="flex-1 py-4 text-sm font-bold border-b-2 border-transparent text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 flex items-center justify-center gap-2 transition-colors">
<span class="material-symbols-outlined text-lg">group</span>
                    Participants
                </button>
</div>
<!-- Chat Messages Container -->
<div class="flex-1 overflow-y-auto p-4 flex flex-col gap-6">
<!-- Message 1 -->
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="text-xs font-bold text-slate-900 dark:text-slate-100">Alex Johnson</span>
<span class="text-[10px] text-slate-400">10:42 AM</span>
</div>
<div class="bg-slate-100 dark:bg-slate-800 rounded-xl rounded-tl-none p-3 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                        Can you explain the difference between useMemo and useCallback again? The transition was a bit fast!
                    </div>
</div>
<!-- Message 2 -->
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="text-xs font-bold text-primary">Sarah Drasner</span>
<span class="bg-primary/10 text-primary text-[9px] font-bold uppercase px-1 rounded">Mentor</span>
<span class="text-[10px] text-slate-400">10:43 AM</span>
</div>
<div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl rounded-tl-none p-3 text-sm leading-relaxed text-slate-800 dark:text-slate-200">
                        Sure Alex! useMemo returns a memoized value, while useCallback returns a memoized function. Let me show another example.
                    </div>
</div>
<!-- Message 3 -->
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="text-xs font-bold text-slate-900 dark:text-slate-100">Maria Garcia</span>
<span class="text-[10px] text-slate-400">10:44 AM</span>
</div>
<div class="bg-slate-100 dark:bg-slate-800 rounded-xl rounded-tl-none p-3 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                        The material zip file link seems to be working now. Thanks!
                    </div>
</div>
<!-- System Message -->
<div class="flex justify-center my-2">
<span class="text-[10px] font-medium text-slate-400 bg-slate-50 dark:bg-slate-800/50 px-3 py-1 rounded-full uppercase tracking-widest">Mark entered the classroom</span>
</div>
<!-- Message 4 -->
<div class="flex flex-col gap-1.5">
<div class="flex items-center gap-2">
<span class="text-xs font-bold text-slate-900 dark:text-slate-100">Jordan Smith</span>
<span class="text-[10px] text-slate-400">10:45 AM</span>
</div>
<div class="bg-slate-100 dark:bg-slate-800 rounded-xl rounded-tl-none p-3 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                        Is this pattern applicable to React Native as well?
                    </div>
</div>
</div>
<!-- Chat Input Area -->
<div class="p-4 border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50">
<div class="relative">
<textarea class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-primary focus:border-transparent resize-none h-24 placeholder:text-slate-400" placeholder="Type your message..."></textarea>
<div class="absolute bottom-3 right-3 flex items-center gap-2">
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">sentiment_satisfied</span>
</button>
<button class="p-1.5 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">attach_file</span>
</button>
<button class="bg-primary text-white p-2 rounded-lg hover:bg-primary/90 transition-all flex items-center justify-center">
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
<div class="mt-3 flex items-center justify-between">
<div class="flex gap-2">
<button class="size-6 rounded-full bg-slate-200 dark:bg-slate-700 text-[10px] flex items-center justify-center font-bold text-slate-600 dark:text-slate-300 hover:bg-primary/10 transition-all">✋</button>
<button class="size-6 rounded-full bg-slate-200 dark:bg-slate-700 text-[10px] flex items-center justify-center font-bold text-slate-600 dark:text-slate-300 hover:bg-primary/10 transition-all">🔥</button>
<button class="size-6 rounded-full bg-slate-200 dark:bg-slate-700 text-[10px] flex items-center justify-center font-bold text-slate-600 dark:text-slate-300 hover:bg-primary/10 transition-all">💯</button>
</div>
<p class="text-[10px] text-slate-400">Keep discussions professional.</p>
</div>
</div>
</aside>
</main>
</body></html>