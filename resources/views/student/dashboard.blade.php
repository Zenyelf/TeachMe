<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Student Dashboard</title>
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
        body {
            font-family: 'Lexend', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 flex flex-col shrink-0">
<div class="p-6 flex items-center gap-3">
<div class="bg-primary p-2 rounded-lg text-white">
<span class="material-symbols-outlined block">school</span>
</div>
<h1 class="text-xl font-bold tracking-tight text-primary">TeachMe</h1>
</div>
<nav class="flex-1 px-4 space-y-2 py-4">
<a href="{{ route('student.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary font-medium">
<span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
<a href="{{ url('/chat') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">chat</span>
                    Chat
                </a>
 <a href="{{ route('student.profile') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">person</span>
                    Profile
                </a>
<a href="{{ url('/feedback') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">feedback</span>
                    Feedbacks
                </a>
<a href="{{ url('/settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
<span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-slate-800">
<a href="{{ route('student.profile') }}" class="flex items-center gap-3 p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl transition-colors">
<div class="size-10 rounded-full bg-primary/20 bg-center bg-cover" data-alt="Student profile picture smiling" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC4PkJXvnSo_C7vJEdHtGkhFOnOF-GbqweQO6v5fUbJgGMsGbUlJpJ8-2FJj2PZKnsUt-GPo9SFiwCmdBEwl836qeG8eKT-wVCKcs2_Ca7UvV6FgPF844iAdeOVgPt0bfDf4qzXv1u-8Yd8pMBvDQ8-k8dxqOap7e9AXp_ESrC-di22zGQ7DWhVrddLV2ittYJ7Lbcpux4ZIj8U34pLZ9g7Vxz9-Yy5CU7LdcjJdM2AplYsZSoE7ZFEZfBduH1wW25vA_5oQLCIc2A')"></div>
<div class="overflow-hidden">
    <p class="text-sm font-semibold truncate">{{ Auth::user()->name }}</p> //cpna hapus ini semua
    <p class="text-xs text-slate-500 truncate">{{ Auth::user()->role }}</p>
</div>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 overflow-y-auto bg-slate-50/50 dark:bg-background-dark/50">
<!-- Header/Top Nav -->
<header class="sticky top-0 z-10 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 px-8 py-4">
<div class="max-w-6xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-4">
<div class="relative flex-1 max-w-xl">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none" placeholder="Search courses, instructors, skills..." type="text"/>
</div>
<div class="flex items-center gap-4">
<button class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-red-500 rounded-full border-2 border-white dark:border-slate-800"></span>
</button>
<button onclick="window.location.href='/courses'" class="bg-primary text-white px-5 py-2.5 rounded-xl font-medium flex items-center gap-2 hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-[20px]">add</span>
                            Explore More
                        </button>
</div>
</div>
<!-- Filters -->
<div class="max-w-6xl mx-auto flex flex-wrap gap-3 mt-4">
<button class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
                        Ratings <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
</button>
<button class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
                        Specialty <span class="material-symbols-outlined text-[18px]">keyboard_arrow_down</span>
</button>
<button class="flex items-center gap-2 px-4 py-1.5 rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-sm font-medium hover:border-primary transition-colors">
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
<section class="mb-10 rounded-2xl bg-gradient-to-r from-primary to-blue-400 p-8 text-white relative overflow-hidden">
<div class="relative z-10 max-w-lg">
<h2 class="text-3xl font-bold mb-2">Welcome back, {{ Str::before(Auth::user()->name, ' ') }}!</h2>
<p class="text-blue-50/80 mb-6">You've completed 75% of your Weekly Calculus goal. Keep up the great work!</p>
<button onclick="window.location.href='/my-course'" class="bg-white text-primary px-6 py-2.5 rounded-xl font-semibold text-sm hover:bg-blue-50 transition-colors">Resume Lesson</button>
</div>
<!-- Abstract Background Pattern -->
<div class="absolute right-0 top-0 h-full w-1/3 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent"></div>
<span class="material-symbols-outlined absolute -right-4 -bottom-4 text-[180px] opacity-10 rotate-12">auto_stories</span>
</section>
<!-- My Enrolled Courses -->
<section class="mb-12">
<div class="flex items-center justify-between mb-6">
<h3 class="text-xl font-bold">My Enrolled Courses</h3>
<a href="{{ url('/my-course') }}" class="text-primary font-semibold text-sm hover:underline" href="#">View All</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Course Card 1 -->
<div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center">
<span class="material-symbols-outlined">calculate</span>
</div>
<span class="px-3 py-1 bg-green-100 text-green-700 text-[10px] font-bold uppercase rounded-full tracking-wider">In Progress</span>
</div>
<h4 class="font-bold text-lg mb-1">Advanced Calculus II</h4>
<p class="text-slate-500 text-sm mb-4">Dr. Sarah Connor</p>
<div class="space-y-2">
<div class="flex justify-between text-xs font-semibold">
<span>Progress</span>
<span>75%</span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[75%] rounded-full"></div>
</div>
</div>
</div>
<!-- Course Card 2 -->
<div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center">
<span class="material-symbols-outlined">sports_martial_arts</span>
</div>
<span class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold uppercase rounded-full tracking-wider">Upcoming</span>
</div>
<h4 class="font-bold text-lg mb-1">Brazilian Jiu Jitsu</h4>
<p class="text-slate-500 text-sm mb-4">Master Helio Gracie</p>
<div class="flex items-center gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-sm">calendar_today</span>
                                Tomorrow, 6:00 PM
                            </div>
</div>
<!-- Course Card 3 -->
<div class="bg-white dark:bg-slate-900 p-5 rounded-2xl border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="size-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center">
<span class="material-symbols-outlined">code</span>
</div>
<span class="px-3 py-1 bg-slate-100 text-slate-700 text-[10px] font-bold uppercase rounded-full tracking-wider">Paused</span>
</div>
<h4 class="font-bold text-lg mb-1">Modern React Patterns</h4>
<p class="text-slate-500 text-sm mb-4">Kent C. Dodds</p>
<div class="space-y-2">
<div class="flex justify-between text-xs font-semibold">
<span>Progress</span>
<span>40%</span>
</div>
<div class="w-full bg-slate-100 dark:bg-slate-800 h-2 rounded-full overflow-hidden">
<div class="bg-purple-500 h-full w-[40%] rounded-full"></div>
</div>
</div>
</div>
</div>
</section>
<!-- Recommended Courses -->
<section>
<div class="flex items-center justify-between mb-6">
<h3 class="text-xl font-bold">Recommended for You</h3>
<div class="flex gap-2">
<button class="p-2 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined block">chevron_left</span>
</button>
<button class="p-2 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined block">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Recommendation 1 -->
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-xl overflow-hidden mb-3 relative">
<div class="absolute inset-0 bg-slate-200 bg-center bg-cover transition-transform group-hover:scale-105" data-alt="Zen yoga studio with mats" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAdqBiqcNp0HQxCaCQYexmYB5MrNwfcx6Eux-p17r6x0uxH_-Ppa7ovu0yUuaSMdlH3SZgN_i0o0X6MWavajg6Kw35N-2dkUqgVu50-l2AyFE8ZpfeLS6rSYmC0p4qohhDdKbEPD2w5cjC2gCoD7BHiNRrhh9eiOwWD9iuwM9DFBqx34dUdz2DgPsSka5wx_cLUOzNh3EbV9yYXTmKhwFJy0BQ6rMLR_u2ooPQFQ0KM15sjq5REHX4Yo_afXkXxpoJBVex_gaGF1eU')"></div>
<div class="absolute top-2 right-2 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded-lg backdrop-blur flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-[1]">star</span>
<span class="text-xs font-bold">4.9</span>
</div>
<div class="absolute bottom-2 left-2 px-2 py-1 bg-primary text-white text-[10px] font-bold uppercase rounded tracking-tighter">Sports</div>
</div>
<h5 class="font-bold text-slate-900 dark:text-slate-100 line-clamp-2 group-hover:text-primary transition-colors">Yoga for Mental Clarity</h5>
<p class="text-slate-500 text-xs mt-1">Elena Brower</p>
<div class="flex items-center justify-between mt-3">
<span class="font-bold text-primary">$49.99</span>
<span class="text-[10px] text-slate-400">12 Lessons</span>
</div>
</div>
<!-- Recommendation 2 -->
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-xl overflow-hidden mb-3 relative">
<div class="absolute inset-0 bg-slate-200 bg-center bg-cover transition-transform group-hover:scale-105" data-alt="Mathematics formulas on chalkboard" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNo9xRmnQVkt6HOYRXBKW07LZrXBIYJ9XqdeqCVRbbtho1O6oXgdkvUiMxcfKuL1LDP0-u07GgZ78cLyPiA1-UID9ryczIT1LajXlYgzwNwfks-rm5bt3QgvTPqk6ZVXbpLYrlrpAv_NajKvNEKFqJZLBa0G3IepEYnz5mJvC2henIIFWhdDdX3rU80HaNQbWQd0996LpfKT55hwBk7zDQzlsBjzau9K1Lm2AZy2UElP8cTvziBkMsAbxu0qCLyvEsJ39i1M9tEuY')"></div>
<div class="absolute top-2 right-2 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded-lg backdrop-blur flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-[1]">star</span>
<span class="text-xs font-bold">4.7</span>
</div>
<div class="absolute bottom-2 left-2 px-2 py-1 bg-orange-500 text-white text-[10px] font-bold uppercase rounded tracking-tighter">Academic</div>
</div>
<h5 class="font-bold text-slate-900 dark:text-slate-100 line-clamp-2 group-hover:text-primary transition-colors">Quantum Physics Foundations</h5>
<p class="text-slate-500 text-xs mt-1">Niels Bohr Jr.</p>
<div class="flex items-center justify-between mt-3">
<span class="font-bold text-primary">$89.00</span>
<span class="text-[10px] text-slate-400">24 Lessons</span>
</div>
</div>
<!-- Recommendation 3 -->
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-xl overflow-hidden mb-3 relative">
<div class="absolute inset-0 bg-slate-200 bg-center bg-cover transition-transform group-hover:scale-105" data-alt="Karate uniform and belt" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC2qVlK0Wbt9gsrQ9KD74SSVr-rlYpoKtL2MaoJWTCm6Z8SCpnn-tmIiWKkMMVI9VLxCcXtX12FQe7IIGyscBn0wF0h4V5r6J00ov0OV89aEoyzDlJ23oMpQpEOP2-TQmGcFtwbjEeIcIo43Kt7nYvL7yAkjXSIimxFZseksgvTYLCMwlM2SYQpWi7_wLKNjSGRgQPzhwDqeACSlxw6ddSR2X8CMXdj_lhcvzg3pcdCJbmMRA8Vpaq5EIsJ3qlQKI4YdTqpf5QwNk8')"></div>
<div class="absolute top-2 right-2 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded-lg backdrop-blur flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-[1]">star</span>
<span class="text-xs font-bold">5.0</span>
</div>
<div class="absolute bottom-2 left-2 px-2 py-1 bg-primary text-white text-[10px] font-bold uppercase rounded tracking-tighter">Martial Arts</div>
</div>
<h5 class="font-bold text-slate-900 dark:text-slate-100 line-clamp-2 group-hover:text-primary transition-colors">Basics of Shotokan Karate</h5>
<p class="text-slate-500 text-xs mt-1">Sensei Hiroshi</p>
<div class="flex items-center justify-between mt-3">
<span class="font-bold text-primary">$35.00</span>
<span class="text-[10px] text-slate-400">18 Lessons</span>
</div>
</div>
<!-- Recommendation 4 -->
<div class="group cursor-pointer">
<div class="aspect-video w-full rounded-xl overflow-hidden mb-3 relative">
<div class="absolute inset-0 bg-slate-200 bg-center bg-cover transition-transform group-hover:scale-105" data-alt="Scientific laboratory research equipment" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAb3yppjxjwaZe6JqkNZ0B94wG4KGRwN0CaoMBZqRFsA8RYMG-vlFhTFpluiDeg_1Isi5bUUqsON0ghuho8uVeqkKufNgy0RCpEG1fE7jeaoMN0NSq58zJTasAxalA0D8PiMCUr-aaqDSV8rFwwpQ7rJk2_gsK4AKTRXMQ2bBitZCM0hAZraFiDE4WMksSO190I0577OzyFvRbAPqrUhu705JtKku2-xhWQM8zCW_Xblyj-wMNdQvd2v1RfE6Sa06-rcHR2xDxfPQo')"></div>
<div class="absolute top-2 right-2 px-2 py-1 bg-white/90 dark:bg-slate-900/90 rounded-lg backdrop-blur flex items-center gap-1">
<span class="material-symbols-outlined text-yellow-500 text-[16px] fill-[1]">star</span>
<span class="text-xs font-bold">4.8</span>
</div>
<div class="absolute bottom-2 left-2 px-2 py-1 bg-orange-500 text-white text-[10px] font-bold uppercase rounded tracking-tighter">Academic</div>
</div>
<h5 class="font-bold text-slate-900 dark:text-slate-100 line-clamp-2 group-hover:text-primary transition-colors">Organic Chemistry Lab Techniques</h5>
<p class="text-slate-500 text-xs mt-1">Prof. Walter White</p>
<div class="flex items-center justify-between mt-3">
<span class="font-bold text-primary">$65.00</span>
<span class="text-[10px] text-slate-400">30 Lessons</span>
</div>
</div>
</div>
</section>
</div>
</main>
</div>
</body></html>