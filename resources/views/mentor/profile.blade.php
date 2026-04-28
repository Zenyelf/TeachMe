<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EduFlex - Mentor Profile Settings</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
        body {
            font-family: 'Lexend', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-6 md:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-4 text-primary">
<div class="size-8 flex items-center justify-center bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-primary">school</span>
</div>
<h2 class="text-slate-900 dark:text-slate-100 text-xl font-bold leading-tight tracking-tight">EduFlex</h2>
</div>
<div class="flex flex-1 justify-end gap-6 items-center">
<nav class="hidden md:flex items-center gap-8">
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors" href="#">Mentors</a>
<a class="text-primary text-sm font-semibold border-b-2 border-primary py-1" href="#">Settings</a>
</nav>
<div class="flex items-center gap-4">
<button class="flex items-center justify-center rounded-full size-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="Professional mentor headshot smiling at camera" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBamyv33tQH3N3XcYMpbneJdyCPDRyikNKJIyW_DnuZghKKrzMnnp0_kzCIZ9Oo5S4_nbnwgLByIlNaRdZQ8iAdbMV8h8ICRU8uEXueQFGnvruvm7bowD7b168IK8z1nfi_DljZxe88SJSUeEdLjsHkz58-Q1QfcQSKWsO-aajBzj0cKg-ut2_WnD-Evx4leJu9c-9bHzL6Gzm5_vCtrNUEvskAo6L1pFexF6yn4VXVsadpPa_GnPSl8gGlSvcc9KcRle0_TXmO9Hg");'></div>
</div>
</div>
</header>
<main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8 grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Sidebar Navigation -->
<aside class="lg:col-span-3 flex flex-col gap-2">
<div class="p-4 mb-4 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex items-center gap-3 mb-6">
<div class="bg-primary/10 p-2 rounded-lg">
<span class="material-symbols-outlined text-primary">account_circle</span>
</div>
<div>
<p class="font-bold text-slate-900 dark:text-slate-100">Mentor Portal</p>
<p class="text-xs text-slate-500">ID: EF-8829</p>
</div>
</div>
<nav class="space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary text-white font-medium" href="#">
<span class="material-symbols-outlined text-[20px]">person</span>
<span class="text-sm">Profile Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="{{ route('mentor.schedule') }}">
<span class="material-symbols-outlined text-[20px]">calendar_today</span>
<span class="text-sm">Availability</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="{{ route('mentor.earnings') }}">
<span class="material-symbols-outlined text-[20px]">payments</span>
<span class="text-sm">Payouts</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">verified_user</span>
<span class="text-sm">Security</span>
</a>
</nav>
</div>
</aside>
<!-- Main Content Area -->
<div class="lg:col-span-9 space-y-8">
<!-- Header Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
<div>
<h1 class="text-3xl font-black text-slate-900 dark:text-slate-100 tracking-tight">Public Profile</h1>
<p class="text-slate-500 mt-1 font-medium">Customize how students and partners see your professional profile.</p>
</div>
<div class="flex gap-3 w-full md:w-auto">
<button class="flex-1 md:flex-none px-6 py-2.5 rounded-lg border border-slate-200 dark:border-slate-800 font-bold text-sm hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">Discard</button>
<button class="flex-1 md:flex-none px-6 py-2.5 rounded-lg bg-primary text-white font-bold text-sm shadow-lg shadow-primary/20 hover:bg-primary/90 transition-colors">Save Changes</button>
</div>
</div>
<!-- Profile Header Card -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col md:flex-row items-center gap-8">
<div class="relative">
<div class="size-32 rounded-full overflow-hidden border-4 border-slate-50 dark:border-slate-800 shadow-md">
<img class="w-full h-full object-cover" data-alt="Modern profile photo of a male professional mentor" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAer-4Ul2yorN-nlZEkD6F_gc3Gd57PxYEap9_IXltErAAnC3ov2CmQ2fTQ4di0ay3EIlDC4SyLUhnxXD9ChNGiy9EsjAp2Kl5n97RYyqXDVq6R89GBLj3C8slb8xljwHjFjVynSanhbycfIp2Tffi8YQKiRogBcKq_v7OlERv_2nHAi8Xqcs4KnvZDqWQWzl65Hnn2SykIs3q57uBPH6RwRUm3J0CiZFWlPmCiy9sucJqGNZ4dg0fvtH8vDP_5PQmX2EmyzlATVjw"/>
</div>
<button class="absolute bottom-0 right-0 size-10 bg-primary text-white rounded-full flex items-center justify-center border-4 border-white dark:border-slate-900 shadow-lg">
<span class="material-symbols-outlined text-sm">photo_camera</span>
</button>
</div>
<div class="flex-1 text-center md:text-left">
<div class="flex items-center justify-center md:justify-start gap-2 mb-1">
<h2 class="text-2xl font-bold text-slate-900 dark:text-slate-100">Alex Johnson</h2>
<span class="flex items-center gap-1 px-2 py-0.5 rounded bg-blue-100 dark:bg-blue-900/30 text-primary text-[10px] font-bold uppercase tracking-wider border border-primary/20">
<span class="material-symbols-outlined text-sm">verified</span>
                            Verified
                        </span>
</div>
<p class="text-slate-500 font-medium mb-4">Lead Product Designer at TechFlow</p>
<div class="flex flex-wrap justify-center md:justify-start gap-3">
<span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">school</span>
                            Master of Fine Arts
                        </span>
<span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 text-xs font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">location_on</span>
                            San Francisco, CA
                        </span>
</div>
</div>
<button class="px-4 py-2 bg-primary/10 text-primary rounded-lg font-bold text-sm hover:bg-primary/20 transition-all">
                    Upload New Photo
                </button>
</div>
<!-- Profile Details Form -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Basic Info -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
<h3 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">info</span>
                        Professional Details
                    </h3>
<div class="space-y-3">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Full Name</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary" type="text" value="Alex Johnson"/>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Professional Title</label>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary" type="text" value="Senior UX Design Mentor"/>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Academic Degree</label>
<select class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary">
<option>Bachelor's Degree</option>
<option selected="">Master's Degree</option>
<option>PhD / Doctorate</option>
<option>Professional Certification</option>
</select>
</div>
</div>
</div>
<!-- Teaching Preferences -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
<h3 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">menu_book</span>
                        Teaching Preferences
                    </h3>
<div class="space-y-4">
<p class="text-sm text-slate-500">Select how you prefer to deliver your mentoring sessions.</p>
<div class="space-y-2">
<label class="flex items-center justify-between p-3 border border-slate-200 dark:border-slate-700 rounded-lg cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">videocam</span>
<span class="font-medium">Live Online</span>
</div>
<input checked="" class="rounded text-primary focus:ring-primary size-5" type="checkbox"/>
</label>
<label class="flex items-center justify-between p-3 border border-slate-200 dark:border-slate-700 rounded-lg cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-slate-400">groups</span>
<span class="font-medium">Offline Classroom</span>
</div>
<input class="rounded text-primary focus:ring-primary size-5" type="checkbox"/>
</label>
</div>
</div>
</div>
<!-- Bio & Specialty -->
<div class="md:col-span-2 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
<h3 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">history_edu</span>
                        Bio &amp; Expertise
                    </h3>
<div class="space-y-4">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Short Biography</label>
<textarea class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 focus:ring-primary focus:border-primary" rows="4">Passionate UX designer with over 10 years of experience in leading design teams at Fortune 500 companies. I specialize in design systems, user research, and accessibility. My goal is to help aspiring designers bridge the gap between theory and industry practice.</textarea>
<p class="text-xs text-right text-slate-400 mt-1">245 / 500 characters</p>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">Specialties &amp; Skills</label>
<div class="flex flex-wrap gap-2 mb-3">
<span class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-semibold rounded-lg flex items-center gap-1">User Research <span class="material-symbols-outlined text-xs cursor-pointer">close</span></span>
<span class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-semibold rounded-lg flex items-center gap-1">Design Systems <span class="material-symbols-outlined text-xs cursor-pointer">close</span></span>
<span class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-semibold rounded-lg flex items-center gap-1">Figma <span class="material-symbols-outlined text-xs cursor-pointer">close</span></span>
<span class="px-3 py-1.5 bg-primary/10 text-primary text-sm font-semibold rounded-lg flex items-center gap-1">Accessibility <span class="material-symbols-outlined text-xs cursor-pointer">close</span></span>
<button class="px-3 py-1.5 border border-dashed border-primary text-primary text-sm font-semibold rounded-lg hover:bg-primary/5 transition-colors">+ Add Skill</button>
</div>
</div>
</div>
</div>
<!-- Contact & Social -->
<div class="md:col-span-2 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
<h3 class="text-lg font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">link</span>
                        Contact &amp; Social Presence
                    </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400">mail</span>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg pl-10 pr-4 py-2.5 focus:ring-primary focus:border-primary" type="email" value="alex.johnson@example.com"/>
</div>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">LinkedIn Profile</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400">share</span>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg pl-10 pr-4 py-2.5 focus:ring-primary focus:border-primary" type="text" value="linkedin.com/in/alexjohnson"/>
</div>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Portfolio URL</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400">language</span>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg pl-10 pr-4 py-2.5 focus:ring-primary focus:border-primary" type="text" value="https://alexj.design"/>
</div>
</div>
<div>
<label class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-1">Twitter (Optional)</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-slate-400">alternate_email</span>
<input class="w-full bg-slate-50 dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg pl-10 pr-4 py-2.5 focus:ring-primary focus:border-primary" placeholder="@username" type="text"/>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer for quick access -->
<footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-8 px-6 mt-12">
<div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-2 opacity-60">
<span class="material-symbols-outlined text-primary">school</span>
<span class="font-bold">EduFlex Mentor Network</span>
</div>
<p class="text-sm text-slate-500">© 2024 EduFlex Technologies Inc. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="text-sm text-slate-500 hover:text-primary transition-colors" href="#">Help Center</a>
</div>
</div>
</footer>
</div>
</body></html>