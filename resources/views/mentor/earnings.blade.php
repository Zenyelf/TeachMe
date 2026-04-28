<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Earnings Dashboard - TeachMe Mastery</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config from Design System -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#dde2f4",
                        "on-background": "#191b24",
                        "on-tertiary-container": "#ffe1d7",
                        "on-primary-container": "#e2e6ff",
                        "surface": "#faf8ff",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-surface-variant": "#434655",
                        "on-surface": "#191b24",
                        "outline": "#737687",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-primary-fixed": "#00174c",
                        "surface-dim": "#d9d9e5",
                        "secondary-container": "#dde2f4",
                        "surface-container-highest": "#e1e1ee",
                        "tertiary": "#902e00",
                        "inverse-on-surface": "#f0f0fc",
                        "primary-fixed": "#dbe1ff",
                        "primary-container": "#135bec",
                        "on-secondary-fixed": "#161c28",
                        "surface-tint": "#0052de",
                        "secondary": "#585e6d",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#c1c6d7",
                        "surface-container-low": "#f3f3ff",
                        "tertiary-container": "#b93d00",
                        "surface-container": "#ededf9",
                        "on-primary-fixed-variant": "#003daa",
                        "surface-variant": "#e1e1ee",
                        "on-tertiary-fixed": "#380d00",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#b4c5ff",
                        "surface-bright": "#faf8ff",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "inverse-surface": "#2e3039",
                        "primary": "#0045bd",
                        "tertiary-fixed-dim": "#ffb59b",
                        "surface-container-high": "#e7e7f3",
                        "on-tertiary-fixed-variant": "#812800",
                        "outline-variant": "#c3c5d8",
                        "on-secondary": "#ffffff",
                        "error": "#ba1a1a",
                        "background": "#faf8ff",
                        "on-secondary-container": "#5e6473",
                        "tertiary-fixed": "#ffdbcf",
                        "on-secondary-fixed-variant": "#414755"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "80rem",
                        "stack-gap-lg": "2rem",
                        "stack-gap-sm": "0.5rem",
                        "stack-gap-md": "1rem",
                        "gutter": "2rem",
                        "section-padding-y": "6rem"
                    },
                    "fontFamily": {
                        "body-md": ["Lexend"],
                        "caption-xs": ["Lexend"],
                        "headline-xl": ["Lexend"],
                        "label-bold": ["Lexend"],
                        "body-lg": ["Lexend"],
                        "display": ["Lexend"],
                        "headline-lg": ["Lexend"]
                    },
                    "fontSize": {
                        "body-md": ["1rem", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "caption-xs": ["0.75rem", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "700" }],
                        "headline-xl": ["3rem", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "800" }],
                        "label-bold": ["0.875rem", { "lineHeight": "1.25", "fontWeight": "700" }],
                        "body-lg": ["1.125rem", { "lineHeight": "1.75", "fontWeight": "400" }],
                        "display": ["4.5rem", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "900" }],
                        "headline-lg": ["1.875rem", { "lineHeight": "1.3", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">
<!-- TopAppBar -->
<header class="fixed top-0 left-0 w-full flex justify-between items-center px-6 h-16 bg-white/80 dark:bg-slate-900/80 backdrop-blur-md font-['Lexend'] font-medium docked full-width top-0 z-50 border-b border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center gap-4">
<span class="text-xl font-black text-blue-600 dark:text-blue-500 tracking-tighter">TeachMe Mastery</span>
</div>
<!-- Right Actions -->
<div class="flex items-center gap-4">
<!-- Search Bar placeholder (on_right) -->
<div class="hidden md:flex items-center bg-slate-100 rounded-full px-3 py-1.5 focus-within:ring-2 focus-within:ring-primary transition-all">
<span class="material-symbols-outlined text-slate-500 text-sm mr-2">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm text-slate-700 w-32 outline-none" placeholder="Search..." type="text"/>
</div>
<button class="bg-primary text-on-primary font-label-bold text-label-bold rounded-full px-4 py-1.5 shadow-md shadow-primary/20 hover:scale-105 transition-transform">
                Go Live
            </button>
<button class="p-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 duration-200 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="p-2 text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 duration-200 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">help</span>
</button>
<div class="w-8 h-8 rounded-full bg-slate-200 overflow-hidden border-2 border-white cursor-pointer hover:scale-105 transition-transform">
<img alt="Mentor profile photo" class="w-full h-full object-cover" data-alt="close-up portrait of a professional mentor with a warm smile in a well-lit studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn56wCnTNMSZyb1R4mRQEJti8y3PsS1fcQQik-QqLkz0HbtaWJfX-WhlueXSh7EyEW8i9hF2EbLmmQrgz5qluSFVIWuFBGy_0TnMZjYEjHeySW-AxllVKGZyZnIIpm1nhh5NYUB0tRM2a1mcHZJQQEnV1bIUyHttcCN1yuhm5M6FW7lFDt-eAHwkPdKgC3z9hEUgcaalgLewCzgjQZvazfQrusWUtc_MoQZgdivA-tpskVUpOcJqW9U9vfbjuMilFhoSnT53n7J4k"/>
</div>
</div>
</header>
<!-- SideNavBar -->
<nav class="flex flex-col fixed left-0 top-16 h-[calc(100vh-4rem)] p-4 bg-white dark:bg-slate-950 font-['Lexend'] w-64 border-r border-slate-200 dark:border-slate-800 flat no shadows z-40 hidden md:flex">
<!-- Header -->
<div class="mb-8 px-4 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden shrink-0">
<img alt="Mentor profile" class="w-full h-full object-cover" data-alt="close-up portrait of a professional mentor with a warm smile in a well-lit studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvK6YYxh-nCOmFBIhhyq17vJ9I7_JJOKAntozjNRCpqU_h4e0kNtUmkMYpAtAva3v8iNLx1yh7iLBhrVrRHakqXekghr-XFzX4O27-g6gk-ym5bebuWWElEmiD1KdyXczuEovuW3NLaLgOeDcMo5Fx77EF0b3iT68r_jOW5qKD42fR3xopGb75b4v_33NYoDSri9ouNVnzGJNVsRQYkX5RjcyeBwlHAmCmIpwORH-699VQqoYoI5M3WOo9WFgcZUVxF6pWAqQvw1Q"/>
</div>
<div class="flex flex-col">
<span class="font-bold text-slate-900 text-sm">Instructor Portal</span>
<span class="text-xs text-slate-500">TeachMe Mastery</span>
</div>
</div>
<!-- Main Tabs -->
<div class="flex flex-col gap-1 flex-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="{{ route('mentor.dashboard') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="{{ route('mentor.schedule') }}">
<span class="material-symbols-outlined">calendar_today</span>
<span class="text-sm font-medium">Schedule</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined">menu_book</span>
<span class="text-sm font-medium">Courses</span>
</a>
<!-- ACTIVE TAB -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 font-bold border-r-4 border-blue-600 Active: translate-x-1 transition-all" href="#">
<span class="material-symbols-outlined icon-fill">payments</span>
<span class="text-sm">Earnings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Students</span>
</a>
</div>
<!-- Footer Tabs & CTA -->
<div class="mt-auto flex flex-col gap-2 pt-4 border-t border-slate-100">
<a href="{{ route('mentor.newcourse') }}" class="w-full bg-primary-fixed text-on-primary-fixed font-bold py-2.5 rounded-lg hover:bg-primary hover:text-on-primary transition-colors mb-4 shadow-sm text-center">
                Create Course
            </a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 transition-colors" href="#">
<span class="material-symbols-outlined text-sm">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 hover:text-slate-900 transition-colors" href="#">
<span class="material-symbols-outlined text-sm">contact_support</span>
<span class="text-sm font-medium">Support</span>
</a>
</div>
</nav>
<!-- Main Canvas Area -->
<main class="pt-16 md:pl-64 min-h-screen bg-surface w-full">
<div class="max-w-container-max mx-auto p-gutter pb-section-padding-y">
<!-- Page Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-stack-gap-lg gap-4">
<div>
<h1 class="font-headline-xl text-headline-xl text-on-surface mb-2">Earnings Overview</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Track your financial growth and recent transactions.</p>
</div>
<div class="flex items-center gap-2 bg-surface-container-lowest border border-outline-variant rounded-lg px-3 py-2 text-sm text-on-surface-variant shadow-sm">
<span class="material-symbols-outlined text-base">calendar_month</span>
<span class="font-medium">This Month (Oct 2023)</span>
<span class="material-symbols-outlined text-base cursor-pointer hover:text-primary">expand_more</span>
</div>
</div>
<!-- Bento Grid Financial Cards -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-stack-gap-md mb-stack-gap-lg">
<!-- Total Earnings (Hero Card) -->
<div class="md:col-span-8 bg-gradient-to-br from-primary to-primary-container text-on-primary rounded-xl p-6 shadow-xl shadow-primary/20 relative overflow-hidden flex flex-col justify-between min-h-[200px]">
<!-- Decorative background element -->
<div class="absolute -right-10 -top-10 w-64 h-64 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="relative z-10">
<div class="flex items-center gap-2 text-primary-fixed mb-1">
<span class="material-symbols-outlined text-sm">account_balance_wallet</span>
<span class="font-label-bold text-label-bold uppercase tracking-wider">Total Earnings</span>
</div>
<h2 class="font-display text-display tracking-tight leading-none">$12,450.00</h2>
</div>
<div class="relative z-10 flex items-center gap-4 mt-8">
<div class="flex items-center gap-1 bg-white/20 rounded-full px-3 py-1 backdrop-blur-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span class="font-label-bold text-sm">+18% from last month</span>
</div>
</div>
</div>
<!-- Secondary Metric Cards -->
<div class="md:col-span-4 flex flex-col gap-stack-gap-md">
<!-- Pending -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-5 shadow-sm flex-1 flex flex-col justify-center relative overflow-hidden group hover:border-primary-fixed transition-colors">
<div class="flex justify-between items-start mb-2">
<span class="font-label-bold text-label-bold text-on-surface-variant">Pending Clearance</span>
<span class="material-symbols-outlined text-outline p-1.5 bg-surface-container rounded-md">hourglass_empty</span>
</div>
<span class="font-headline-lg text-headline-lg text-on-surface">$1,280.50</span>
<div class="mt-2 text-sm text-secondary">Available in 3-5 days</div>
</div>
<!-- Next Payout -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-5 shadow-sm flex-1 flex flex-col justify-center">
<div class="flex justify-between items-start mb-2">
<span class="font-label-bold text-label-bold text-on-surface-variant">Next Payout</span>
<span class="material-symbols-outlined text-primary p-1.5 bg-primary-fixed rounded-md">credit_score</span>
</div>
<span class="font-headline-lg text-headline-lg text-on-surface">$3,400.00</span>
<div class="mt-3">
<button class="w-full bg-secondary-container text-on-secondary-container hover:bg-primary-fixed hover:text-on-primary-fixed font-label-bold py-2 rounded-lg transition-colors text-sm">
                                Manage Payout Methods
                            </button>
</div>
</div>
</div>
</div>
<!-- Content Grid Row 2: Chart & Transactions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-stack-gap-lg">
<!-- Monthly Breakdown Chart (Faux representation) -->
<div class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm p-6 flex flex-col">
<div class="flex justify-between items-center mb-8">
<h3 class="font-headline-lg text-lg text-on-surface">Revenue Trend</h3>
<div class="flex gap-2">
<span class="w-2 h-2 rounded-full bg-primary mt-2"></span>
<span class="text-sm text-on-surface-variant">Course Sales</span>
</div>
</div>
<!-- Faux Bar Chart -->
<div class="flex-1 flex items-end gap-2 h-48 mt-auto relative">
<!-- Y-axis lines -->
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none border-b border-outline-variant pb-6">
<div class="border-t border-outline-variant/30 w-full"></div>
<div class="border-t border-outline-variant/30 w-full"></div>
<div class="border-t border-outline-variant/30 w-full"></div>
</div>
<!-- Bars -->
<div class="relative w-full flex justify-between items-end h-full pb-6 z-10 px-2">
<div class="w-1/12 bg-primary-fixed hover:bg-primary transition-colors rounded-t-sm h-[30%] group relative">
<span class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition-opacity">$1.2k</span>
</div>
<div class="w-1/12 bg-primary-fixed hover:bg-primary transition-colors rounded-t-sm h-[45%] group relative"></div>
<div class="w-1/12 bg-primary-fixed hover:bg-primary transition-colors rounded-t-sm h-[60%] group relative"></div>
<div class="w-1/12 bg-primary-fixed hover:bg-primary transition-colors rounded-t-sm h-[40%] group relative"></div>
<div class="w-1/12 bg-primary rounded-t-sm h-[80%] group relative shadow-[0_0_15px_rgba(0,69,189,0.3)]">
<span class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-surface text-xs py-1 px-2 rounded">$3.4k</span>
</div>
<div class="w-1/12 bg-primary-fixed hover:bg-primary transition-colors rounded-t-sm h-[55%] group relative"></div>
</div>
<!-- X-axis labels -->
<div class="absolute bottom-0 w-full flex justify-between px-2 text-xs text-on-surface-variant font-medium">
<span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span class="text-primary font-bold">Sep</span><span>Oct</span>
</div>
</div>
</div>
<!-- Recent Transactions List -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm p-6 flex flex-col">
<div class="flex justify-between items-center mb-6">
<h3 class="font-headline-lg text-lg text-on-surface">Recent Enrollments</h3>
<a class="text-sm font-label-bold text-primary hover:text-primary-container transition-colors" href="#">View All</a>
</div>
<div class="flex flex-col gap-4 overflow-y-auto max-h-[300px] pr-2">
<!-- Transaction Item -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden shrink-0">
<img alt="Student avatar" class="w-full h-full object-cover" data-alt="portrait of a young female student looking engaged and motivated" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8AKrW7wSRAtg0MPdBOVn08ikSaaVRPsIam-3jy0tGHckk5VKnsZ1E7TTCVlolwgYyyoYA2gsUo38eegKqUII0W9utMnEue0gcPGg7K8CoAIhFO973RXz1TwE6S8IFduIFRR58LCXl534PvQAilu-rSXW28HZdatd8K0XlRuRqynPAASa0TyNpt0v6JFE3glWy0yyXGUN-777GMiuvpVFzz9YIrdcjelt0G9qqXxc6wS5TcFwQ5GyDZh_uDvBsZEiDye1VF42IwCo"/>
</div>
<div class="flex flex-col">
<span class="font-label-bold text-sm text-on-surface">Sarah Jenkins</span>
<span class="text-xs text-on-surface-variant truncate w-32">Advanced React Patterns</span>
</div>
</div>
<div class="flex flex-col items-end">
<span class="font-bold text-sm text-on-surface">+$89.00</span>
<span class="text-xs text-secondary">Today</span>
</div>
</div>
<!-- Transaction Item -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden shrink-0 text-primary flex items-center justify-center font-bold">
                                    MR
                                </div>
<div class="flex flex-col">
<span class="font-label-bold text-sm text-on-surface">Marcus Reed</span>
<span class="text-xs text-on-surface-variant truncate w-32">UI Design Masterclass</span>
</div>
</div>
<div class="flex flex-col items-end">
<span class="font-bold text-sm text-on-surface">+$149.00</span>
<span class="text-xs text-secondary">Yesterday</span>
</div>
</div>
<!-- Transaction Item -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden shrink-0">
<img alt="Student avatar" class="w-full h-full object-cover" data-alt="portrait of a male student looking thoughtful with a subtle background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-o5xuD0c2SXooAPbobZiZCc104zCvs_q5PzNWMv1LnohEImzOZd6TIRpMn9wJAvL6cWysGNtFn1aqvEGzgBAA6nY1FvKGbg9OvAswIkChZliRSm2BtXHKv1u9oz-7ILqhKd2uXuC3CKPobDaZO5xz-60SH0FvGDXV5L7HVDBNYj37L-GEEGTYREXGV6oHFvxpk70YHpYbSnN8YD2v2Ff3DD6H8pTuC-TgSf87JXptpMP0aWjmambJTJUNDnXoO1issN5TICfXHjY"/>
</div>
<div class="flex flex-col">
<span class="font-label-bold text-sm text-on-surface">David Chen</span>
<span class="text-xs text-on-surface-variant truncate w-32">Advanced React Patterns</span>
</div>
</div>
<div class="flex flex-col items-end">
<span class="font-bold text-sm text-on-surface">+$89.00</span>
<span class="text-xs text-secondary">Oct 12</span>
</div>
</div>
<!-- Transaction Item (Refund/Negative) -->
<div class="flex items-center justify-between p-3 rounded-lg hover:bg-surface-container-low transition-colors group cursor-pointer border border-transparent hover:border-outline-variant">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-error-container text-on-error-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-sm">autorenew</span>
</div>
<div class="flex flex-col">
<span class="font-label-bold text-sm text-on-surface">System Refund</span>
<span class="text-xs text-on-surface-variant truncate w-32">Student Request</span>
</div>
</div>
<div class="flex flex-col items-end">
<span class="font-bold text-sm text-error">-$45.00</span>
<span class="text-xs text-secondary">Oct 10</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>