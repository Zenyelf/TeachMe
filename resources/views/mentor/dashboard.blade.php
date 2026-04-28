<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Lexend', sans-serif; }
        .sidebar-gradient { background: linear-gradient(180deg, #ffffff 0%, #f0f4ff 100%); }
        .card-gradient { background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%); }
        .accent-gradient { background: linear-gradient(135deg, #135bec 0%, #4785ff 100%); }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="flex min-h-screen">
<!-- Side Navigation -->
<aside class="w-64 sidebar-gradient border-r border-slate-200 dark:border-slate-800 flex flex-col fixed h-full">
<div class="p-6 flex items-center gap-3">
<div class="size-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">auto_stories</span>
</div>
<h2 class="text-xl font-bold tracking-tight text-primary">TeachMe</h2>
</div>
<nav class="flex-1 px-4 space-y-2 mt-4">
<a href="{{ route('mentor.dashboard') }}" class="flex items-center gap-3 px-4 py-3 bg-primary/10 text-primary rounded-xl font-medium">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a href="{{ url('/chat') }}" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl font-medium transition-colors">
<span class="material-symbols-outlined">chat_bubble</span>
<span>Chat</span>
</a>
<a href="{{ route('mentor.profile') }}" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl font-medium transition-colors">
<span class="material-symbols-outlined">person</span>
<span>Profile</span>
</a>
<a href="{{ route('mentor.earnings') }}" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl font-medium transition-colors">
<span class="material-symbols-outlined">payments</span>
<span>Earnings</span>
</a>
<a href="{{ route('mentor.schedule') }}" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl font-medium transition-colors">
<span class="material-symbols-outlined">calendar_month</span>
<span>Schedule</span>
</a>
</nav>
<div class="p-4 mt-auto">
<div class="bg-primary/5 rounded-2xl p-4 border border-primary/10">
<div class="flex items-center gap-3 mb-3">
<div class="size-10 rounded-full bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Profile picture of a male mentor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTBj7VHLXQXX0PNYL2Lbpsx-4jfpZ8qtVZusoiR6NUD1J2W_pntz4e9wNKQHVPqH-LPj5b9qtvURCsNGXZAKnMapcTjuMD2Tu8ci3MdUt8gVPDgGpWm7KhN_kCb4Az0Obg7JYtiVqR9xJi6uXAhslVM8El39RApC9dEt_YOkiAd0k7MDS6Xk8gXayPLaVeBp_uXxxBVNHjTuV3OQ_tHHmNg3kadMmAQhY8s6qFHIMwghZvf-e7-AO79lLU7ogMx1tIAHm9SynXagQ"/>
</div>
<div>
<p class="text-sm font-bold">{{ Auth::user()->name }}</p>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[12px] text-primary fill-1">verified</span>
<span class="text-[10px] uppercase font-bold text-primary">Verified Mentor</span>
</div>
</div>
</div>
<a href="{{ url('/logout') }}" class="block w-full py-2 text-center text-xs font-bold text-slate-500 hover:text-primary transition-colors">Logout</a>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-64 p-8">
<!-- Header -->
<header class="flex justify-between items-center mb-8">
<div>
<h1 class="text-3xl font-extrabold tracking-tight">Mentor Dashboard</h1>
<p class="text-slate-500">Welcome back, {{ Str::before(Auth::user()->name, ' ') }}! Your courses are performing 12% better this week.</p>
</div>
<div class="flex gap-4">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-xl focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none w-64" placeholder="Search students, courses..." type="text"/>
</div>
<a href="{{ route('mentor.newcourse') }}" class="accent-gradient text-white px-6 py-2 rounded-xl font-bold flex items-center gap-2 shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">add</span>
                        Create New Course
                    </a>
</div>
</header>
<!-- Stats Grid -->
<div class="grid grid-cols-4 gap-6 mb-8">
<div class="card-gradient p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-blue-50 text-primary rounded-lg">
<span class="material-symbols-outlined">group</span>
</div>
<span class="text-emerald-500 text-sm font-bold flex items-center">+12%</span>
</div>
<p class="text-slate-500 text-sm font-medium">Total Students</p>
<h3 class="text-2xl font-bold">1,250</h3>
</div>
<div class="card-gradient p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
<span class="material-symbols-outlined">menu_book</span>
</div>
<span class="text-slate-400 text-sm font-bold">Stable</span>
</div>
<p class="text-slate-500 text-sm font-medium">Active Courses</p>
<h3 class="text-2xl font-bold">8</h3>
</div>
<div class="card-gradient p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
<span class="material-symbols-outlined">monetization_on</span>
</div>
<span class="text-emerald-500 text-sm font-bold">+18%</span>
</div>
<p class="text-slate-500 text-sm font-medium">Monthly Earnings</p>
<h3 class="text-2xl font-bold">$4,200</h3>
</div>
<div class="card-gradient p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-amber-50 text-amber-600 rounded-lg">
<span class="material-symbols-outlined">verified_user</span>
</div>
<span class="bg-amber-100 text-amber-700 text-[10px] px-2 py-1 rounded-full font-bold uppercase">Pending Review</span>
</div>
<p class="text-slate-500 text-sm font-medium">Verification Status</p>
<h3 class="text-2xl font-bold text-amber-600 italic">Advanced Tier</h3>
</div>
</div>
<!-- Content Grid -->
<div class="grid grid-cols-3 gap-8">
<!-- My Courses List -->
<div class="col-span-2 space-y-6">
<div class="flex justify-between items-center">
<h2 class="text-xl font-bold">My Courses</h2>
<button class="text-primary font-bold text-sm">View All</button>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm hover:border-primary/30 transition-all group">
<div class="h-32 rounded-xl mb-4 overflow-hidden bg-slate-100">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Web development course thumbnail with code" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs-p76gPIIL-Wof3jfu6jakz6hFc0sT_8sN-9W5OCFPDGfzznDeyKLBelqM5Ooj5j3rll5bPW4ZqXxAmWnH8L2CFAjqOfJ4YlAZ3hPs4qd9zo9C88-V_EFuVak4MEMbpwIPhDdAOXsdYdEpmJpcVWLyuu0DxtR8B7-J7GXkhNTnnl8EUwjW61wuWXKQmBEe6flTO2EU_LMxplla-Kxa9e4hMkGHdMMF9xHWIwjniXfRotiTptG21Qb0Z5bLxBYdv_ImvQb1Y_ZX-Q"/>
</div>
<h4 class="font-bold text-lg mb-1">Advanced React Patterns</h4>
<div class="flex justify-between items-center text-sm text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">person</span> 450 Students</span>
<span class="bg-blue-50 text-primary px-2 py-0.5 rounded font-bold">$89.00</span>
</div>
</div>
<div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm hover:border-primary/30 transition-all group">
<div class="h-32 rounded-xl mb-4 overflow-hidden bg-slate-100">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Data science chart dashboard visual" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPe5U9GVrxAbB9VGanEtgRuUgsurqbwM8pJAKuu4lDCnTr9RZ7yclQXkZ5G2WPmeN5Bz7FxoVQSOSXpMCt6_d0xlcKYcpdCYjR3BRNI-TjVeDHLpTOGIAY0cX7JB8IFlwsAvRNdmWznWn25Bt7slbpZsRfKzTZM1WuuPA9cJ-unpMMVSnFX0I2z33E-1cAiRpLfj14Sd8UQHBsLJ57XILuwMa0LLLdm4-_qHvQR6JwC_Av-HMNi7D-uhcPh7cqYvZR0Ihhyr-Isa0"/>
</div>
<h4 class="font-bold text-lg mb-1">Data Visualization Mastery</h4>
<div class="flex justify-between items-center text-sm text-slate-500">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">person</span> 820 Students</span>
<span class="bg-blue-50 text-primary px-2 py-0.5 rounded font-bold">$120.00</span>
</div>
</div>
</div>
<!-- Upcoming Schedule -->
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-center mb-6">
<h2 class="text-xl font-bold">Upcoming Live Sessions</h2>
<span class="material-symbols-outlined text-slate-400">more_horiz</span>
</div>
<div class="space-y-4">
<div class="flex items-center gap-4 p-4 rounded-xl border border-slate-50 hover:bg-slate-50 transition-colors cursor-pointer">
<div class="w-12 h-12 rounded-xl accent-gradient text-white flex flex-col items-center justify-center font-bold">
<span class="text-xs uppercase">Oct</span>
<span class="text-lg leading-none">24</span>
</div>
<div class="flex-1">
<p class="font-bold text-slate-900">Q&amp;A Session: React Performance</p>
<p class="text-xs text-slate-500">Starts in 45 minutes • 120 enrolled</p>
</div>
<a href="{{ route('mentor.live') }}" class="px-4 py-2 border-2 border-primary text-primary text-xs font-bold rounded-lg hover:bg-primary hover:text-white transition-colors">Join Class</a>
</div>
<div class="flex items-center gap-4 p-4 rounded-xl border border-slate-50 hover:bg-slate-50 transition-colors cursor-pointer">
<div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-400 flex flex-col items-center justify-center font-bold">
<span class="text-xs uppercase">Oct</span>
<span class="text-lg leading-none">26</span>
</div>
<div class="flex-1">
<p class="font-bold text-slate-900">Python for Data Scientists Intro</p>
<p class="text-xs text-slate-500">Scheduled 10:00 AM • 45 enrolled</p>
</div>
<button class="px-4 py-2 border-2 border-slate-200 text-slate-400 text-xs font-bold rounded-lg cursor-not-allowed">Waitlist</button>
</div>
</div>
</div>
</div>
<!-- Right Sidebar / Calendar Mini -->
<div class="space-y-8">
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
<div class="flex justify-between items-center mb-6">
<h3 class="font-bold">October 2023</h3>
<div class="flex gap-2">
<span class="material-symbols-outlined text-slate-400 cursor-pointer">chevron_left</span>
<span class="material-symbols-outlined text-slate-400 cursor-pointer">chevron_right</span>
</div>
</div>
<div class="grid grid-cols-7 gap-2 text-center text-[10px] font-bold text-slate-400 mb-2">
<span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span><span>S</span>
</div>
<div class="grid grid-cols-7 gap-2 text-center text-xs font-medium">
<span class="p-2 text-slate-300">25</span><span class="p-2 text-slate-300">26</span><span class="p-2">1</span><span class="p-2">2</span><span class="p-2">3</span><span class="p-2">4</span><span class="p-2">5</span>
<span class="p-2">6</span><span class="p-2">7</span><span class="p-2">8</span><span class="p-2">9</span><span class="p-2">10</span><span class="p-2">11</span><span class="p-2">12</span>
<span class="p-2">13</span><span class="p-2">14</span><span class="p-2">15</span><span class="p-2">16</span><span class="p-2">17</span><span class="p-2">18</span><span class="p-2">19</span>
<span class="p-2">20</span><span class="p-2">21</span><span class="p-2">22</span><span class="p-2">23</span><span class="p-2 bg-primary text-white rounded-lg">24</span><span class="p-2">25</span><span class="p-2 border border-primary/20 rounded-lg">26</span>
</div>
</div>
<div class="card-gradient p-6 rounded-2xl border border-slate-100 shadow-sm">
<h3 class="font-bold mb-4">Enrollment Pulse</h3>
<div class="flex items-end gap-2 h-32 mb-4">
<div class="flex-1 bg-primary/10 rounded-t-lg h-2/3"></div>
<div class="flex-1 bg-primary/20 rounded-t-lg h-1/2"></div>
<div class="flex-1 bg-primary/30 rounded-t-lg h-3/4"></div>
<div class="flex-1 bg-primary/40 rounded-t-lg h-2/5"></div>
<div class="flex-1 bg-primary/50 rounded-t-lg h-4/5"></div>
<div class="flex-1 bg-primary rounded-t-lg h-full"></div>
</div>
<div class="flex justify-between text-[10px] text-slate-400 font-bold">
<span>MON</span><span>TUE</span><span>WED</span><span>THU</span><span>FRI</span><span>SAT</span>
</div>
</div>
<!-- Recent Messages -->
<div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
<h3 class="font-bold mb-4">Messages</h3>
<div class="space-y-4">
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-blue-100">
<img class="w-full h-full object-cover" data-alt="Student profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXbAIDA-Joc3GvMy30D9OuDLGYYekkhzpQpGkEtHi6i-gWJdLoB64sfKnSv7mfNmNObaG_STBuFZXnblZK_xUWzMZg8Ev_cfhqX1q6XIheTyEK_ufGHNrj_160N529ReYEISqlzsgheRAhibsJJWPeuFHYjqW-GK2g0r9x5RmHqlunVbLbVuP2yp4eTFHEBS1RPkUhhZzKEPjX82JNoVjnzSmqYLz4uhY0-JU2T5JwDcpauE5kzqZ5-B3hpqT_Pj9Kq02aFJa-A0k"/>
</div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate">Sarah Jenkins</p>
<p class="text-[10px] text-slate-500 truncate">Thanks for the feedback on my React project!</p>
</div>
<span class="size-2 rounded-full bg-primary"></span>
</div>
<div class="flex items-center gap-3">
<div class="size-8 rounded-full bg-blue-100">
<img class="w-full h-full object-cover" data-alt="Student profile avatar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcuOQauGUuUnH7ItqqebaE__JNxNocxVcmlUkbD6y9oUfZ3v1qaCbiT5a1EoMsO56JYLp18vhkZkvN2qWduS_qr44KAAkbDqmgMtJI-oc3JwA34p7IwVcbjhNC8PhAuGChORMVYz7nR60pBnZAsEfV1ODEN9wj8eL3Yg5APfjypPk6kGFt7rdClXLg9CkJe3VdrpIJmEaBQ3zkF63TlM91JEAHP4IsMC1zYcSe1iJVJO_PGEbeMF1bJ2nFVcJZPCybntDF-5JAA3c"/>
</div>
<div class="flex-1 overflow-hidden">
<p class="text-xs font-bold truncate">Mike Peters</p>
<p class="text-[10px] text-slate-500 truncate">When is the next live session link?</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>