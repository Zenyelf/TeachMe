<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Mentor Schedule</title>
<!-- Google Fonts: Lexend -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700;800;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
        }
    </style>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
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
</head>
<body class="bg-background text-on-background font-body-md text-body-md antialiased min-h-screen">
<!-- TopAppBar -->
<header class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md shadow-sm fixed top-0 left-0 w-full flex justify-between items-center px-6 h-16 z-50">
<div class="flex items-center gap-stack-gap-md">
<span class="text-xl font-black text-blue-600 dark:text-blue-500 tracking-tighter">TeachMe Mastery</span>
</div>
<div class="flex items-center gap-stack-gap-md">
<!-- Search Bar on_right logic (placeholder for spacing) -->
<div class="hidden md:flex items-center bg-surface-variant rounded-full px-4 py-2">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="search">search</span>
<span class="text-on-surface-variant ml-2 font-body-md text-body-md opacity-70">Search...</span>
</div>
<!-- Trailing Icon Actions -->
<button class="text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 duration-200 p-2 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors active:scale-95 duration-200 p-2 rounded-full flex items-center justify-center">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<!-- Trailing Primary Action -->
<button class="ml-4 bg-primary text-on-primary font-label-bold text-label-bold px-4 py-2 rounded-lg shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-transform duration-200">
                Go Live
            </button>
<!-- Profile Image -->
<div class="ml-4 w-10 h-10 rounded-full border-2 border-surface-container-lowest overflow-hidden shadow-sm">
<img alt="Mentor profile photo" class="w-full h-full object-cover" data-alt="close up portrait of a smiling male professional wearing a dark blazer against a soft neutral background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDduIm-hLgIt2mX0WJiNKm5vn1eZTWZAQ3Sxl4VUmP4ZABlfkAxWN316tRv4RXEsmjnd2S-1cniPen97u3DOjmrD2yIlynqTzbdj7v-E7nVg4C0eNxa7wBPji5ZRcqiQu43_p60lk1OMec4f49E3lLTVLRXUeBe4O3FILsL8QwWKBesWfvFjXV7SaRMIphAD1nOKK7izdGAX1zWRMV8OWBVWFZ5zMc4-4wLdgTR67UkgGS7YD_B6K6x-L1k2wtGv8HnjBuJ28EhT94"/>
</div>
</div>
</header>
<!-- SideNavBar (Desktop Only) -->
<nav class="hidden md:flex flex-col fixed left-0 top-16 h-[calc(100vh-4rem)] p-4 w-64 bg-white dark:bg-slate-950 z-40">
<!-- Header Subtext -->
<div class="mb-8 px-4">
<h2 class="font-label-bold text-label-bold text-on-surface">Instructor Portal</h2>
<p class="font-caption-xs text-caption-xs text-on-surface-variant mt-1">TeachMe Mastery</p>
</div>
<!-- Main Navigation -->
<ul class="flex flex-col gap-2 flex-grow font-['Lexend']">
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span>Dashboard</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 font-bold border-r-4 border-blue-600 active:translate-x-1 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="calendar_today" data-weight="fill" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
<span>Schedule</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="menu_book">menu_book</span>
<span>Courses</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<span>Earnings</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span>Students</span>
</a>
</li>
</ul>
<!-- CTA -->
<button class="w-full mt-4 mb-8 bg-secondary-container text-on-secondary-container font-label-bold text-label-bold py-3 rounded-lg shadow-sm hover:scale-105 transition-transform duration-200">
            Create Course
        </button>
<!-- Footer Navigation -->
<ul class="flex flex-col gap-2 font-['Lexend'] border-t border-outline-variant/30 pt-4">
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span>Settings</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-900 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="contact_support">contact_support</span>
<span>Support</span>
</a>
</li>
</ul>
</nav>
<!-- Main Content Canvas -->
<main class="md:ml-64 pt-24 px-gutter pb-section-padding-y max-w-container-max mx-auto">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-stack-gap-lg gap-stack-gap-md">
<div>
<h1 class="font-headline-xl text-headline-xl text-on-background tracking-tight">Mentor Schedule</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2 max-w-2xl">Manage your upcoming live classes, 1-on-1 sessions, and availability blocks.</p>
</div>
<div class="flex items-center gap-stack-gap-md">
<div class="bg-surface-container-high rounded-full p-1 flex">
<button class="px-4 py-1.5 rounded-full bg-surface-container-lowest text-on-surface font-label-bold text-label-bold shadow-sm">Week</button>
<button class="px-4 py-1.5 rounded-full text-on-surface-variant font-label-bold text-label-bold hover:text-on-surface transition-colors">Month</button>
</div>
<button class="bg-primary text-on-primary font-label-bold text-label-bold px-6 py-3 rounded-xl shadow-xl shadow-primary/20 hover:scale-105 active:scale-95 transition-all duration-200 flex items-center gap-2">
<span class="material-symbols-outlined text-[20px]" data-icon="edit_calendar">edit_calendar</span>
                    Adjust Availability
                </button>
</div>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-stack-gap-lg">
<!-- Left Column: Calendar View -->
<section class="lg:col-span-8 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 p-stack-gap-lg flex flex-col h-full">
<!-- Calendar Header controls -->
<div class="flex justify-between items-center mb-stack-gap-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface">October 2023</h2>
<div class="flex gap-2">
<button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
<!-- Calendar Grid -->
<div class="grid grid-cols-7 gap-4 flex-grow">
<!-- Day Labels -->
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Sun</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Mon</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Tue</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Wed</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Thu</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Fri</div>
<div class="text-center font-caption-xs text-caption-xs text-on-surface-variant uppercase py-2">Sat</div>
<!-- Days (Mockup for a week view to show detail) -->
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent">
<span class="font-label-bold text-label-bold text-on-surface-variant self-end opacity-50">15</span>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-primary/20 bg-primary/5">
<span class="font-label-bold text-label-bold text-primary self-end">16</span>
<div class="mt-2 bg-primary-container text-on-primary-container text-xs font-bold px-2 py-1 rounded truncate shadow-sm">
                            10:00 AM - Live
                        </div>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent">
<span class="font-label-bold text-label-bold text-on-surface self-end">17</span>
<div class="mt-2 bg-tertiary-container text-on-tertiary-container text-xs font-bold px-2 py-1 rounded truncate shadow-sm">
                            2:30 PM - 1:1
                        </div>
<div class="mt-1 bg-tertiary-container text-on-tertiary-container text-xs font-bold px-2 py-1 rounded truncate shadow-sm opacity-80">
                            4:00 PM - 1:1
                        </div>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent relative overflow-hidden">
<span class="font-label-bold text-label-bold text-on-surface self-end relative z-10">18</span>
<!-- Visual flare for an important day -->
<div class="absolute inset-0 bg-gradient-to-br from-primary-fixed to-transparent opacity-30 z-0"></div>
<div class="mt-2 bg-primary text-on-primary text-xs font-bold px-2 py-1 rounded shadow-sm relative z-10 truncate">
                            6:00 PM - Bootcamp
                        </div>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent">
<span class="font-label-bold text-label-bold text-on-surface self-end">19</span>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent">
<span class="font-label-bold text-label-bold text-on-surface self-end">20</span>
<div class="mt-2 bg-tertiary-container text-on-tertiary-container text-xs font-bold px-2 py-1 rounded truncate shadow-sm">
                            11:00 AM - 1:1
                        </div>
</div>
<div class="bg-surface rounded-lg p-2 min-h-[120px] flex flex-col border border-transparent">
<span class="font-label-bold text-label-bold text-on-surface-variant self-end opacity-50">21</span>
</div>
</div>
</section>
<!-- Right Column: Upcoming & Actions -->
<section class="lg:col-span-4 flex flex-col gap-stack-gap-lg">
<!-- Highlight Card -->
<div class="bg-primary rounded-xl p-stack-gap-lg text-on-primary shadow-xl shadow-primary/20 relative overflow-hidden">
<div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
<h3 class="font-label-bold text-label-bold uppercase tracking-wider opacity-80 mb-2 relative z-10">Next Session Starts In</h3>
<div class="font-display text-display font-black leading-none mb-4 relative z-10">45m</div>
<div class="font-body-lg text-body-lg font-medium relative z-10 mb-6">Advanced UI Architecture</div>
<button class="w-full bg-white text-primary font-label-bold text-label-bold py-3 rounded-lg shadow-sm hover:scale-105 active:scale-95 transition-transform duration-200 relative z-10">
                        Join Classroom
                    </button>
</div>
<!-- Upcoming Sessions List -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 p-stack-gap-lg flex-grow">
<div class="flex justify-between items-center mb-stack-gap-md">
<h3 class="font-headline-lg text-headline-lg text-on-surface">Upcoming</h3>
<button class="text-primary font-label-bold text-label-bold hover:underline">View All</button>
</div>
<div class="flex flex-col gap-stack-gap-sm">
<!-- Session Item 1 -->
<div class="bg-surface rounded-lg p-4 border border-outline-variant/20 flex gap-4 items-center group hover:border-primary/40 transition-colors">
<div class="w-12 h-12 rounded-full bg-primary-container text-primary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined" data-icon="school" data-weight="fill" style="font-variation-settings: 'FILL' 1;">school</span>
</div>
<div class="flex-grow min-w-0">
<div class="font-caption-xs text-caption-xs text-on-surface-variant mb-1">Today, 10:00 AM</div>
<h4 class="font-label-bold text-label-bold text-on-surface truncate">Advanced UI Architecture</h4>
<div class="font-caption-xs text-caption-xs text-primary mt-1">Live Class • 24 Students</div>
</div>
<button class="text-on-surface-variant hover:text-primary p-2 opacity-0 group-hover:opacity-100 transition-opacity" title="Edit Scheduling">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
</div>
<!-- Session Item 2 -->
<div class="bg-surface rounded-lg p-4 border border-outline-variant/20 flex gap-4 items-center group hover:border-tertiary/40 transition-colors">
<div class="w-12 h-12 rounded-full bg-tertiary-container text-tertiary flex items-center justify-center flex-shrink-0">
<img alt="Student avatar" class="w-full h-full object-cover rounded-full" data-alt="close up portrait of a young professional woman smiling warmly against an office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2NCfbULx6q7swtg8Xryew4_kt6UmVauIYdPrlInifyxXFMyK2CrxSZU6bBB88RosQ6Unsc3oyRAX6BsPhvnlw6sZWd1gx75nO2umbq95Vl6W9BaiIE7UC0K6HnBrVRYTq8l81KVVetNpUzMTuoSOgE2wKTwlffXgBmbGfecbVfPL6odSfpOc8OixbG8auzScOrb2BSt032wXfI_p1cOmElXn7xVifPpnDpJTzIvqTg2x7s-qyP_lEZBd2s92KNkHiEArUn7dsOAw"/>
</div>
<div class="flex-grow min-w-0">
<div class="font-caption-xs text-caption-xs text-on-surface-variant mb-1">Tomorrow, 2:30 PM</div>
<h4 class="font-label-bold text-label-bold text-on-surface truncate">Portfolio Review</h4>
<div class="font-caption-xs text-caption-xs text-tertiary mt-1">1-on-1 • Sarah J.</div>
</div>
<button class="text-on-surface-variant hover:text-tertiary p-2 opacity-0 group-hover:opacity-100 transition-opacity" title="Edit Scheduling">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
</div>
<!-- Session Item 3 -->
<div class="bg-surface rounded-lg p-4 border border-outline-variant/20 flex gap-4 items-center group hover:border-tertiary/40 transition-colors">
<div class="w-12 h-12 rounded-full bg-tertiary-container text-tertiary flex items-center justify-center flex-shrink-0">
<img alt="Student avatar" class="w-full h-full object-cover rounded-full" data-alt="close up portrait of a young male professional smiling against an urban backdrop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJa96FRFiPeqX9geuAOhNUHWy3LByjCAi-uImA7G52c6vri11THNxNutouy5qzVNhRODLceaXQMpjVAKIw91AlVFbayP5fv7qlU4d_3Bs7ECX98yhZ4zv3T7-WnCHZ4USJadXMSH4jVYLIbogn1vuNEVPFcuM7d_jm8hRs-0fbQABoPr7p9VKwGw_VfnGS8hINySys7oNMC-yYHHa6BgKOJoXTrEpa71j4pGi7zGuwyiLwIgDQ9Xw2cWLonTd4OLjHDDfr87oZc48"/>
</div>
<div class="flex-grow min-w-0">
<div class="font-caption-xs text-caption-xs text-on-surface-variant mb-1">Tomorrow, 4:00 PM</div>
<h4 class="font-label-bold text-label-bold text-on-surface truncate">Career Coaching</h4>
<div class="font-caption-xs text-caption-xs text-tertiary mt-1">1-on-1 • Marcus T.</div>
</div>
<button class="text-on-surface-variant hover:text-tertiary p-2 opacity-0 group-hover:opacity-100 transition-opacity" title="Edit Scheduling">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
</div>
</div>
</div>
</section>
</div>
</main>
</body></html>