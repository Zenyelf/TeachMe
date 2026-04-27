<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
<title>TeachMe - Profile Settings</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<header class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-6 md:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-3 text-primary">
<div class="size-8">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
</div>
<div class="flex flex-1 justify-end gap-6 items-center">
<nav class="hidden md:flex items-center gap-8">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
<a class="text-primary text-sm font-bold border-b-2 border-primary pb-1" href="#">Settings</a>
</nav>
<div class="flex items-center gap-4">
<button class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="h-10 w-10 rounded-full bg-cover bg-center border-2 border-primary/20" data-alt="User avatar placeholder circular image" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBohjFi6K-498FIfv35vMz1T_cl2VrP3QZuH8m96YLmvvvkB1BSv6QCjVI7ijpDrJHxF4T7SQBk3XiYkc2sZNpZeyGW_xKxqqD6F7V4-DvC9IGRJmXZQsDTvmNGuElsC0AjHhqjfFDUlN3p5Jf4w6aoya7QyHHnDIKfhEFgb9nysYPKJfxLqrmoSqmMtuYinFBCxNu4VHhlzJdrbG-sn4nw3H4sVdDD8woPT800cD8WHFkWyuPPI5faXkAPLZBG9rSZhHWVpf6MCY8");'>
</div>
</div>
</div>
</header>
<main class="flex-1 flex justify-center py-8 px-4 md:px-10">
<div class="max-w-[1000px] w-full space-y-8">
<div class="flex flex-col gap-2">
<h1 class="text-3xl font-bold text-slate-900 dark:text-white">Profile Settings</h1>
<p class="text-slate-500 dark:text-slate-400">Manage your educational journey and account preferences.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-1 space-y-6">
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800 flex flex-col items-center">
<div class="relative group">
<div class="h-32 w-32 rounded-full bg-cover bg-center border-4 border-white dark:border-slate-800 shadow-lg" data-alt="Large profile picture for profile editing" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBhvODpTPPupe-CCw38b9oFP8uNl2Bw10FuYR0KfGX_abMHr2iciN4PstMuzcfMU13zl3EVMgUZXeHgBgHeGXqdgPqinlQf1Gh6Z4967d-vw2vmcJVKkRQTqCi_4pbJ6mxpZXmFDKXp5NFwMbNGvtwjh_T_z2m26g4jWz6jti12okAiLzKqdTnA6BUph5wKjFQhKe2RKMs6IuZrReKFjxuYO16yOcGsmL-En593ZCxltRSOqBsvw8a1uEh3V9eeGUDzbhMi3xt2Y70");'>
</div>
<button class="absolute bottom-0 right-0 p-2 bg-primary text-white rounded-full shadow-lg hover:bg-blue-700 transition-colors">
<span class="material-symbols-outlined text-sm">photo_camera</span>
</button>
</div>
<div class="mt-4 text-center">
<h3 class="text-lg font-bold">Alex Johnson</h3>
<p class="text-slate-500 text-sm">Student ID: #EF-2024-883</p>
</div>
<button class="mt-6 w-full py-2 bg-primary/10 text-primary font-semibold rounded-lg hover:bg-primary/20 transition-colors">
                                    Upload New Photo
                                </button>
<p class="text-[10px] text-slate-400 mt-3 text-center">JPG, GIF or PNG. Max size 2MB.</p>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-100 dark:border-slate-800 space-y-4">
<h3 class="font-bold text-lg">Notification Preferences</h3>
<div class="space-y-3">
<label class="flex items-center justify-between cursor-pointer">
<span class="text-sm">Course Updates</span>
<input checked="" class="w-10 h-5 rounded-full appearance-none bg-slate-300 checked:bg-primary relative transition-all before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 checked:before:left-5 before:transition-all" type="checkbox"/>
</label>
<label class="flex items-center justify-between cursor-pointer">
<span class="text-sm">New Announcements</span>
<input checked="" class="w-10 h-5 rounded-full appearance-none bg-slate-300 checked:bg-primary relative transition-all before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 checked:before:left-5 before:transition-all" type="checkbox"/>
</label>
<label class="flex items-center justify-between cursor-pointer">
<span class="text-sm">Email Digest</span>
<input class="w-10 h-5 rounded-full appearance-none bg-slate-300 checked:bg-primary relative transition-all before:content-[''] before:absolute before:w-4 before:h-4 before:bg-white before:rounded-full before:top-0.5 before:left-0.5 checked:before:left-5 before:transition-all" type="checkbox"/>
</label>
</div>
</div>
</div>
<div class="lg:col-span-2 space-y-6">
<div class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-slate-100 dark:border-slate-800">
<h3 class="text-xl font-bold mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span> Personal Information
                                </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Full Name</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-3 focus:ring-primary focus:border-primary transition-all" type="text" value="Alex Johnson"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Email Address</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-3 focus:ring-primary focus:border-primary transition-all" type="email" value="alex.j@teachme.edu"/>
</div>
<div class="flex flex-col gap-2 md:col-span-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Current Studies / Major</label>
<select class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-3 focus:ring-primary focus:border-primary transition-all">
<option>Computer Science</option>
<option>Data Science</option>
<option>UX Design</option>
<option>Business Administration</option>
</select>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-slate-100 dark:border-slate-800">
<h3 class="text-xl font-bold mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">auto_stories</span> Learning Preferences
                                </h3>
<div class="space-y-6">
<div>
<p class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3">Preferred Learning Mode</p>
<div class="flex flex-wrap gap-4">
<label class="flex items-center gap-2 cursor-pointer group">
<input checked="" class="w-4 h-4 text-primary focus:ring-primary" name="mode" type="radio"/>
<span class="text-sm group-hover:text-primary">Fully Online</span>
</label>
<label class="flex items-center gap-2 cursor-pointer group">
<input class="w-4 h-4 text-primary focus:ring-primary" name="mode" type="radio"/>
<span class="text-sm group-hover:text-primary">Hybrid / Blended</span>
</label>
<label class="flex items-center gap-2 cursor-pointer group">
<input class="w-4 h-4 text-primary focus:ring-primary" name="mode" type="radio"/>
<span class="text-sm group-hover:text-primary">In-person</span>
</label>
</div>
</div>
<div>
<p class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3">Topics of Interest</p>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-primary text-white rounded-full text-xs font-medium flex items-center gap-1">Artificial Intelligence <span class="material-symbols-outlined text-[14px] cursor-pointer">close</span></span>
<span class="px-3 py-1 bg-primary text-white rounded-full text-xs font-medium flex items-center gap-1">Web Development <span class="material-symbols-outlined text-[14px] cursor-pointer">close</span></span>
<span class="px-3 py-1 bg-primary text-white rounded-full text-xs font-medium flex items-center gap-1">Cloud Computing <span class="material-symbols-outlined text-[14px] cursor-pointer">close</span></span>
<button class="px-3 py-1 border border-primary text-primary rounded-full text-xs font-medium hover:bg-primary/5 transition-all flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">add</span> Add Topic
                                            </button>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl p-8 shadow-sm border border-slate-100 dark:border-slate-800">
<h3 class="text-xl font-bold mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">lock</span> Security
                                </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">New Password</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-3 focus:ring-primary focus:border-primary transition-all" placeholder="••••••••" type="password"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Confirm Password</label>
<input class="w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 p-3 focus:ring-primary focus:border-primary transition-all" placeholder="••••••••" type="password"/>
</div>
</div>
<div class="mt-6 flex justify-end gap-3">
<button class="px-6 py-2 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-600 dark:text-slate-400 font-semibold hover:bg-slate-50 transition-colors">Cancel</button>
<button class="px-6 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-blue-700 shadow-md shadow-primary/20 transition-all">Save Changes</button>
</div>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 py-6 px-10">
<div class="flex flex-col md:flex-row items-center justify-between gap-4 max-w-[1000px] mx-auto">
<div class="flex items-center gap-2 text-primary opacity-60">
<div class="size-6">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill-rule="evenodd"></path>
</svg>
</div>
<span class="text-sm font-bold">TeachMe © 2024</span>
</div>
<div class="flex gap-6">
<a class="text-xs text-slate-500 hover:text-primary" href="#">Help Center</a>
<a class="text-xs text-slate-500 hover:text-primary" href="#">Privacy Policy</a>
<a class="text-xs text-slate-500 hover:text-primary" href="#">Terms of Service</a>
</div>
</div>
</footer>
</div>
</div>
</body></html>