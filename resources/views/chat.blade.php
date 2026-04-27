<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Messages</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex h-screen w-full flex-col overflow-hidden">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 z-10">
<div class="flex items-center gap-8">
<div class="flex items-center gap-2 text-primary">
<div class="size-8 bg-primary rounded-lg flex items-center justify-center text-white">
<span class="material-symbols-outlined">school</span>
</div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
</div>
<div class="hidden md:flex relative w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-slate-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/50" placeholder="Search courses..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<nav class="hidden lg:flex items-center gap-6">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Mentors</a>
<a class="text-primary text-sm font-semibold border-b-2 border-primary pb-1" href="#">Messages</a>
</nav>
<div class="flex items-center gap-3">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-primary/10 hover:text-primary transition-all">
<span class="material-symbols-outlined">settings</span>
</button>
<div class="h-10 w-10 rounded-full bg-gradient-to-tr from-primary to-blue-400 border-2 border-white dark:border-slate-700 shadow-sm" data-alt="User profile circular avatar with blue gradient"></div>
</div>
</div>
</header>
<main class="flex flex-1 overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-20 lg:w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col py-6">
<div class="flex flex-col gap-2 px-4">
<a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">grid_view</span>
<span class="hidden lg:block font-medium">Overview</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl bg-primary/10 text-primary transition-colors" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="hidden lg:block font-medium">Messages</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span class="hidden lg:block font-medium">Community</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">auto_stories</span>
<span class="hidden lg:block font-medium">Resources</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined">calendar_today</span>
<span class="hidden lg:block font-medium">Schedule</span>
</a>
</div>
<div class="mt-auto px-4">
<div class="hidden lg:block p-4 rounded-2xl bg-gradient-to-br from-primary to-blue-600 text-white">
<p class="text-xs opacity-80 mb-2">Pro Plan</p>
<h4 class="font-bold mb-3 leading-tight">Unlock all course materials</h4>
<button class="w-full py-2 bg-white text-primary text-xs font-bold rounded-lg hover:bg-slate-100 transition-colors">Upgrade Now</button>
</div>
</div>
</aside>
<!-- Chat Interface Split View -->
<div class="flex flex-1 overflow-hidden bg-white dark:bg-slate-900">
<!-- Conversation List -->
<div class="w-full md:w-80 lg:w-96 flex flex-col border-r border-slate-200 dark:border-slate-800 h-full">
<div class="p-4 space-y-4">
<div class="flex items-center justify-between">
<h2 class="text-xl font-bold">Chats</h2>
<button class="p-1.5 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined text-xl">edit_square</span>
</button>
</div>
<div class="flex p-1 bg-slate-100 dark:bg-slate-800 rounded-lg">
<button class="flex-1 py-1.5 text-sm font-semibold rounded-md bg-white dark:bg-slate-700 shadow-sm">All</button>
<button class="flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400">Mentors</button>
<button class="flex-1 py-1.5 text-sm font-medium text-slate-500 dark:text-slate-400">Groups</button>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-base">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-sm" placeholder="Search conversations..." type="text"/>
</div>
</div>
<div class="flex-1 overflow-y-auto custom-scrollbar">
<!-- Chat Item Active -->
<div class="flex items-center gap-4 px-4 py-4 bg-primary/5 border-r-4 border-primary cursor-pointer transition-colors">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-full bg-slate-200" data-alt="Portrait photo of Dr. Alex Rivera" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBsjVd398uD3ga_8H1Pky6rksbfpORFHwEUGZcu9FsN0Xk1WYRcLmZ4URCQz624krJ2t-FQsnFWHVSTbTDDYte3ewbJAVAEic4qA-WaSD9r9VsqdvgYT5sS7IHeKhBLbOzzmcnFXk4Jr9Kp7cAF0tAAtd8TqeYhKa77C8lzayOyZc520-XfSueb2QtEjwRwwxBSK0YK7FOrvobjDnVIcQkyW0lnGQtQSDn9pFtNsYl8SyRAWemCwMCL7IJvJfTZeLo3V1_vEMRWkws');"></div>
<div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-slate-900 rounded-full"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h4 class="text-sm font-bold truncate">Dr. Alex Rivera</h4>
<span class="text-[10px] text-primary font-bold">Just now</span>
</div>
<p class="text-xs text-slate-600 dark:text-slate-400 truncate font-semibold">The project looks great, keep it up!</p>
</div>
</div>
<!-- Chat Items -->
<div class="flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-full bg-slate-200" data-alt="Portrait photo of Sarah Thompson" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuQigPjVvuAGplUpE-c6vHrQ0MfG9cY3ZTOlrLJOdyjeE15SS0JAjBy5zPQkL_Tx5gaFSuW_fveojKgmWNnhsemqgO99h9Ii3EDOrTXcymOWc6pGgZvmukVpH2T6Y_xhstbvljHFPA1Q2TKt9hrUGQ8g41kOGKoxyUN8uIX76Cg2A-Ram33Wv5pHOqMiS1Ur13dv6VRiVIpNxWB-BIWWQBhu7VjETrRG6cR4ITvSoxYQVLqMDm6Z53TyK0fY0RpVH01iC6Bm1DX0E');"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h4 class="text-sm font-semibold truncate">Sarah Thompson</h4>
<span class="text-[10px] text-slate-400">14:20</span>
</div>
<p class="text-xs text-slate-500 dark:text-slate-500 truncate">Did you see the new reading material?</p>
</div>
</div>
<div class="flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-sm">UX</div>
<div class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-slate-900 rounded-full"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h4 class="text-sm font-semibold truncate">UX Design Group</h4>
<span class="text-[10px] text-slate-400">Yesterday</span>
</div>
<p class="text-xs text-slate-500 dark:text-slate-500 truncate"><span class="font-medium text-slate-700 dark:text-slate-300">Marcus:</span> Hey everyone!</p>
</div>
</div>
<div class="flex items-center gap-4 px-4 py-4 hover:bg-slate-50 dark:hover:bg-slate-800 cursor-pointer transition-colors border-b border-slate-100 dark:border-slate-800/50">
<div class="relative flex-shrink-0">
<div class="w-12 h-12 rounded-full bg-slate-200" data-alt="Portrait photo of Prof. Julian V" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDyg85YLYBSoXVfJVxuAzEzgv2QnWZNIEHq2CUkw_4W3SHHuT-KgOF9uCx8I2oIKOh9d-Y4mO3gNQI44nq-m3zX6X1nd8jR6e9GHAdCuuZNiG3XktA_RMEvPlC0ZhP93c_9q0VPdndAvzhx3i_X2s_ExLEp_mWaBW_aPC7fXzZ6IfocoIO2bpEaot95zJHxm-KcKOMEE5jPwNFdvDErs09LiM0FlQc_q0JmarAS1oIzo1D-x5qco-APnK0fggakRgu6172mA_5o6AY');"></div>
</div>
<div class="flex-1 min-w-0">
<div class="flex justify-between items-baseline mb-0.5">
<h4 class="text-sm font-semibold truncate">Prof. Julian V</h4>
<span class="text-[10px] text-slate-400">Monday</span>
</div>
<p class="text-xs text-slate-500 dark:text-slate-500 truncate">I've reviewed your latest assignment.</p>
</div>
</div>
</div>
</div>
<!-- Active Chat Area -->
<div class="hidden md:flex flex-1 flex-col h-full bg-slate-50 dark:bg-slate-950 relative">
<!-- Chat Header -->
<div class="h-16 flex items-center justify-between px-6 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-slate-200" data-alt="Portrait photo of Dr. Alex Rivera" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDc9QgZ9TJh9sLEgvPmnp_ta4zOKucYOxQ8SVs9bjC1Gvb_7LY9T13d0uH3p116N6xz2EQu6JTOUyss40xyJQMTKnufBDSensaqZ6j-2DoiRCHWm7Pnq-rlqF3j_X1coSjyPOF3KPYtONbg_saVQLu3YcZS_xuzIoQ60PgWsVUZ-Cby0tA7eCOI9FpuTRpB7elysnZ0NUo29P1yCM6gU3Rr6O4_tqaqdsDg35_pIyIGolPDiHTmJGS8gGSDKUTgccHMvytBQCr8KRU');"></div>
<div>
<h3 class="text-sm font-bold leading-none">Dr. Alex Rivera</h3>
<div class="flex items-center gap-1.5 mt-1">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-[10px] font-medium text-slate-500">Online</span>
</div>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">call</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">videocam</span>
</button>
<button class="p-2 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">info</span>
</button>
</div>
</div>
<!-- Message History -->
<div class="flex-1 overflow-y-auto p-6 space-y-6 custom-scrollbar">
<div class="flex justify-center">
<span class="px-3 py-1 bg-slate-200 dark:bg-slate-800 text-[10px] font-bold text-slate-500 rounded-full uppercase tracking-wider">Today</span>
</div>
<!-- Received Message -->
<div class="flex items-end gap-3 max-w-[80%]">
<div class="w-8 h-8 rounded-full flex-shrink-0" data-alt="Avatar of Dr. Alex Rivera" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDrVaXAvBJtJJ6q62Yy8c25o9AWBrmySRq5wM5KvlSIkTc5gDi9mJUYnJx5uEAmJLjEiIR4l06_dHPoTptKG1BYvSmpoUMPkJGHHwbkjGQhPa_gCPTmABBHRYcMWcTtNtwtR32gCNv6w1LpjqCx6_EmTPmlLdrDFtIEdqwUhjwyzRHGApSHIadq1YPwHRDqBgtS45ESPWtY4gYysnN7XQwp8TVaHUacVusIT4Sxe01zoG9K--FDvKqryDiHyVxGRpPMLURgdKzuYdY');"></div>
<div class="space-y-1">
<div class="bg-white dark:bg-slate-800 p-4 rounded-2xl rounded-bl-none shadow-sm text-sm border border-slate-100 dark:border-slate-700/50">
                                    Hello! How are you getting on with the final project components? I've just uploaded some new design guidelines.
                                </div>
<span class="text-[10px] text-slate-400 ml-1">10:45 AM</span>
</div>
</div>
<!-- Sent Message -->
<div class="flex flex-row-reverse items-end gap-3 max-w-[80%] ml-auto">
<div class="space-y-1 text-right">
<div class="bg-primary text-white p-4 rounded-2xl rounded-br-none shadow-md shadow-primary/20 text-sm">
                                    Hi Dr. Rivera! I'm making good progress. I've finished the main UI layout and I'm currently working on the responsive states.
                                </div>
<div class="flex items-center justify-end gap-1">
<span class="text-[10px] text-slate-400">10:48 AM</span>
<span class="material-symbols-outlined text-primary text-[14px]">done_all</span>
</div>
</div>
</div>
<!-- Received Message with attachment -->
<div class="flex items-end gap-3 max-w-[80%]">
<div class="w-8 h-8 rounded-full flex-shrink-0" data-alt="Avatar of Dr. Alex Rivera" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCJAstT9BEf5oNgtCQFiyxXu6t_EUjGUmab7dHL2-e1-Hk8LMWFm5cUXjojvO68RhMyvk_X419v8CxHIq6tj5kclAmAj4S784_I7zAs9G-vd6EvdiHn5MMXYkyudNtcKHLD_gHqls4y9SVT9eICd13Z0cWQyAuUNLE3u2MR72kgOBz5enUsis1_7hUQvQT_2Mqa0VihmCtr5qTvHIF7E4pVHwSYnprjKVhSEa0W4fGfhwlee4Lk0Eqye9f81SSlouQM0Vpq9NfWKk0');"></div>
<div class="space-y-1">
<div class="bg-white dark:bg-slate-800 p-4 rounded-2xl rounded-bl-none shadow-sm text-sm border border-slate-100 dark:border-slate-700/50">
                                    That sounds excellent. Here is the reference document for the color palette we discussed.
                                    <div class="mt-3 p-3 bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl flex items-center gap-3">
<div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined">description</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-bold truncate">Style_Guide_v2.pdf</p>
<p class="text-[10px] text-slate-500">2.4 MB • PDF Document</p>
</div>
<button class="p-1.5 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-lg">
<span class="material-symbols-outlined text-lg">download</span>
</button>
</div>
</div>
<span class="text-[10px] text-slate-400 ml-1">10:52 AM</span>
</div>
</div>
<!-- Sent Message -->
<div class="flex flex-row-reverse items-end gap-3 max-w-[80%] ml-auto">
<div class="space-y-1 text-right">
<div class="bg-primary text-white p-4 rounded-2xl rounded-br-none shadow-md shadow-primary/20 text-sm">
                                    The project looks great, keep it up! I'll check the guide right now.
                                </div>
<div class="flex items-center justify-end gap-1">
<span class="text-[10px] text-slate-400">Just now</span>
<span class="material-symbols-outlined text-primary text-[14px]">done_all</span>
</div>
</div>
</div>
</div>
<!-- Message Input -->
<div class="p-6 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
<div class="flex items-end gap-3">
<button class="p-2.5 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">add_circle</span>
</button>
<button class="p-2.5 text-slate-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">mood</span>
</button>
<div class="flex-1 relative">
<textarea class="w-full pl-4 pr-12 py-3 bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-2xl text-sm focus:ring-primary focus:border-primary resize-none h-[48px] max-h-32" placeholder="Type your message..."></textarea>
<button class="absolute right-2 bottom-1.5 p-2 bg-primary text-white rounded-xl hover:bg-blue-700 transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>