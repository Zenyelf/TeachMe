<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Lexend", "sans-serif"]
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
<title>TeachMe - Join Our Community</title>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<div class="relative min-h-screen flex flex-col">
<!-- Background Gradient Decor -->
<div class="absolute inset-0 z-0 bg-gradient-to-br from-primary/10 via-white to-primary/5 dark:from-primary/20 dark:via-background-dark dark:to-background-dark pointer-events-none"></div>
<!-- Top Navigation -->
<header class="relative z-10 flex items-center justify-between px-6 lg:px-20 py-4 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl font-bold">school</span>
<h2 class="text-slate-900 dark:text-slate-100 text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
</div>
<a class="text-sm font-semibold text-primary hover:text-primary/80 transition-colors" href="#">
                Support
            </a>
</header>
<!-- Main Content -->
<main class="relative z-10 flex-1 flex items-center justify-center p-6 lg:p-12">
<div class="w-full max-w-[520px]">
<!-- Registration Card -->
<div class="bg-white dark:bg-slate-900 shadow-xl shadow-primary/10 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800">
<div class="p-8 lg:p-10">
<div class="mb-8">
<h1 class="text-3xl font-black text-slate-900 dark:text-white mb-2">Create Account</h1>
<p class="text-slate-500 dark:text-slate-400">Join the TeachMe learning community today.</p>
</div>


<form action="/register" method="POST" class="space-y-5">
<!-- Role Selector -->
    <div class="flex p-1 bg-slate-100 dark:bg-slate-800 rounded-lg mb-8">
        <label class="flex-1 cursor-pointer">
        <input checked="" class="peer hidden" id="role" name="role" type="radio" value="Student" {{ request('role') !== 'Mentor' ? 'checked' : '' }}/>
        <div class="text-center py-2.5 rounded-lg text-sm font-semibold transition-all peer-checked:bg-white dark:peer-checked:bg-slate-700 peer-checked:text-primary peer-checked:shadow-sm text-slate-500 dark:text-slate-400">
                                    I am a Student
        </div>
        </label>
        <label class="flex-1 cursor-pointer">
        <input class="peer hidden" id="role" name="role" type="radio" value="Mentor" {{ request('role') === 'Mentor' ? 'checked' : '' }}/>
        <div class="text-center py-2.5 rounded-lg text-sm font-semibold transition-all peer-checked:bg-white dark:peer-checked:bg-slate-700 peer-checked:text-primary peer-checked:shadow-sm text-slate-500 dark:text-slate-400">
                                    I am a Mentor
        </div>
        </label>
    </div>
<!-- Form Fields -->

    @csrf
    <div class="space-y-2">
        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Full Name</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">person</span>
            <input type="text" name="name" class="w-full pl-12 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900 dark:text-white placeholder:text-slate-400" placeholder="Ronaldo Messi" type="text"/>
        </div>
    </div>

    <div class="space-y-2">
        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Email Address</label>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
            <input type="email" name="email" class="w-full pl-12 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900 dark:text-white placeholder:text-slate-400" placeholder="john@example.com" type="email"/>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="space-y-2">
            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Password</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
                <input type="password" name="password" class="w-full pl-12 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900 dark:text-white placeholder:text-slate-400" placeholder="••••••••" type="password"/>
            </div>
        </div>

        <div class="space-y-2">
            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Confirm Password</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">lock_reset</span>
                <input type="password" name="password" class="w-full pl-12 pr-4 py-3.5 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all text-slate-900 dark:text-white placeholder:text-slate-400" placeholder="••••••••" type="password"/>
            </div>
        </div>
    </div>

    <div class="pt-4">
        <button type="submit" class="w-full py-4 bg-gradient-to-r from-primary to-[#3b82f6] hover:from-primary/90 hover:to-[#3b82f6]/90 text-white font-bold rounded-lg shadow-lg shadow-primary/25 transition-all transform hover:scale-[1.01] active:scale-[0.99]" type="submit">
                                        Register Account
        </button>
    </div>
</form>

        @if (session('error'))
        <script>
            alert("⚠️ Register Failed!\n\nUsed email or password must longer than 6 character!");
        </script>
        @endif



<div class="mt-8 text-center">
<p class="text-slate-500 dark:text-slate-400 text-sm">
                                Already have an account? 
                                <a href="/login" class="text-primary font-bold hover:underline ml-1" href="#">Log in</a>
</p>
</div>
</div>
<!-- Footer Info -->
<div class="bg-slate-50 dark:bg-slate-800/30 px-8 py-4 border-t border-slate-100 dark:border-slate-800 text-center">
<p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Secure Registration • 256-bit Encryption</p>
</div>
</div>
<!-- Features/Social Proof -->
<div class="mt-8 grid grid-cols-3 gap-4">
<div class="flex flex-col items-center text-center">
<div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-xl">verified</span>
</div>
<span class="text-[11px] font-semibold text-slate-500 dark:text-slate-400">Certified Mentors</span>
</div>
<div class="flex flex-col items-center text-center">
<div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-xl">auto_stories</span>
</div>
<span class="text-[11px] font-semibold text-slate-500 dark:text-slate-400">1000+ Courses</span>
</div>
<div class="flex flex-col items-center text-center">
<div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined text-xl">groups</span>
</div>
<span class="text-[11px] font-semibold text-slate-500 dark:text-slate-400">Global Community</span>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="relative z-10 p-6 text-center">
<p class="text-slate-400 dark:text-slate-600 text-xs">
                © 2024 TeachMe Inc. All rights reserved. <br class="md:hidden"/>
<a class="hover:text-primary mx-2" href="#">Privacy Policy</a> · 
                <a class="hover:text-primary mx-2" href="#">Terms of Service</a>
</p>
</footer>
</div>
</body></html>