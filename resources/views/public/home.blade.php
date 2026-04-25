<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Learn Everything, Anywhere</title>
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
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 w-full border-b border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex h-16 items-center justify-between gap-8">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined text-3xl font-bold">school</span>
<h2 class="text-xl font-extrabold tracking-tight">TeachMe</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Mentors</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Pricing</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Blog</a>
</nav>
<div class="flex flex-1 justify-end items-center gap-4">
<div class="hidden lg:flex relative max-w-xs w-full">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
<span class="material-symbols-outlined text-xl">search</span>
</span>
<input class="w-full bg-slate-100 dark:bg-slate-800 border-none rounded-lg py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary focus:outline-none" placeholder="Search courses..." type="text"/>
</div>

<div class="flex items-center gap-3">    
    <button onclick="window.location.href='/login'" class="hidden sm:block text-sm font-bold px-4 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Login</button>
    <button onclick="window.location.href='/register'" class="bg-primary text-white text-sm font-bold px-5 py-2 rounded-lg hover:bg-blue-700 transition-all shadow-md shadow-primary/20">Sign Up</button>
</div>

</div>
</div>
</div>
</header>
<main>
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-b from-blue-50 to-white dark:from-slate-900 dark:to-background-dark py-20 lg:py-32">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid lg:grid-cols-2 gap-12 items-center">
<div class="flex flex-col gap-8">
<div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
<span class="material-symbols-outlined text-sm">stars</span>
                            The Global Learning Marketplace
                        </div>
<h1 class="text-5xl lg:text-7xl font-black leading-[1.1] tracking-tight text-slate-900 dark:text-white">
                            Learn Everything, <span class="text-primary">Anywhere</span>
</h1>
<p class="text-lg text-slate-600 dark:text-slate-400 max-w-xl leading-relaxed">
                            Empowering learners and mentors across Academics, Martial Arts, and Sports. Join the premier dual-sided marketplace for knowledge exchange.
                        </p>
<div class="flex flex-wrap gap-4">
    <button onclick="window.location.href='/register'" class="bg-primary text-white px-8 py-4 rounded-xl font-bold text-lg hover:scale-105 transition-transform shadow-xl shadow-primary/25">Get Started</button>
    <button onclick="window.location.href='/register?role=Mentor'" class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 px-8 py-4 rounded-xl font-bold text-lg hover:bg-slate-50 transition-colors shadow-sm">Become a Mentor</button>
</div>
<div class="flex items-center gap-4 pt-4">
<div class="flex -space-x-2">
<div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200" data-alt="Student profile avatar 1"></div>
<div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300" data-alt="Student profile avatar 2"></div>
<div class="w-10 h-10 rounded-full border-2 border-white bg-slate-400" data-alt="Student profile avatar 3"></div>
</div>
<p class="text-sm font-medium text-slate-500">Joined by 20,000+ students worldwide</p>
</div>
</div>
<div class="relative group">
<div class="absolute -inset-4 bg-primary/20 rounded-3xl blur-3xl group-hover:bg-primary/30 transition-colors"></div>
<div class="relative aspect-video lg:aspect-square bg-slate-200 dark:bg-slate-800 rounded-3xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-700" data-alt="Diverse students studying together on campus" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAXho5Ry_DGJ04eAx6r3REMcQzPp2D1uJXjC1zW0gCbUCWZkuwVXTh4vYCs0Qbu8wdZ5PeR_MQFX7z_l3OSOvRVi5LhO3H8VvqtPUbPUuTjw6HNkTlhU3USgVpe6T4ZoG2SRQmGqI6fOzIt1n1pno75pLJHU5aTC-J8u17oO8Ar_Wq4TDo7puqdjLUdAxR_DBJQ4ouqUWMhkjuoJQiwJY5g2lSnKE4KoQ9H-sU0zYgR9Ghv3YXxw7EeBFuKCjHrXhcJg9AA8w-21-Y'); background-size: cover; background-position: center;">
<div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent flex flex-col justify-end p-8">
<div class="flex gap-2">
<span class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-semibold">Academics</span>
<span class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-semibold">Martial Arts</span>
<span class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-semibold">Sports</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- For Students Section -->
<section class="py-24 bg-white dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<h2 class="text-primary font-bold text-sm tracking-widest uppercase mb-3">For Students</h2>
<h3 class="text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white mb-4">Start Your Learning Journey</h3>
<p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Unlock your potential with our easy-to-use platform designed for modern learners seeking mastery in any field.</p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<div class="p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">travel_explore</span>
</div>
<h4 class="text-xl font-bold mb-3">Discover</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">Find thousands of courses tailored to your goals in academics, competitive sports, and traditional arts.</p>
</div>
<div class="p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">event_available</span>
</div>
<h4 class="text-xl font-bold mb-3">Book</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">Instantly schedule sessions that fit your busy lifestyle. Manage all your learning in one integrated dashboard.</p>
</div>
<div class="p-8 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-100 dark:border-slate-800 hover:border-primary/50 transition-all group">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">model_training</span>
</div>
<h4 class="text-xl font-bold mb-3">Learn</h4>
<p class="text-slate-600 dark:text-slate-400 leading-relaxed">Connect with vetted experts and master new skills through high-quality 1-on-1 or group interactions.</p>
</div>
</div>
</div>
</section>
<!-- For Mentors Section -->
<section class="py-24 bg-slate-50 dark:bg-slate-900/20">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-2 gap-16 items-center">
<div class="order-2 lg:order-1">
<div class="grid grid-cols-2 gap-4">
<div class="space-y-4">
<div class="aspect-square rounded-2xl bg-slate-200 dark:bg-slate-800" data-alt="Martial arts instructor teaching a student" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBi1ER_0QV5ZZaVUW2IvyAtmf3UPXSGOnrlUtp5CxgMQkr-7srAkKrvMlRZa-3Cebm6ZMGzxjaNEeeTbzM4Achivy2EToLtMszHwx66ZeJWO6mGS6MCLLlY1dtRIoTkU4s4FK2K879TEfC1u77f0Y2yMZQFM1KOBbbQbz_aETPA2viz1CeW8CM_f6fz6dUpk2KKxdcOguxZwRKKINMW_oFfv5ORwTJFrONCFCXRDCVLvToMaoADkhu6lxecjUUzZ1POjNDl85uk5nU'); background-size: cover;"></div>
<div class="aspect-[3/4] rounded-2xl bg-primary/20 flex flex-col items-center justify-center text-center p-6 border border-primary/10">
<span class="material-symbols-outlined text-primary text-5xl mb-4">verified</span>
<p class="font-bold text-slate-900 dark:text-white">Join 500+ Top Mentors</p>
</div>
</div>
<div class="space-y-4 pt-8">
<div class="aspect-[3/4] rounded-2xl bg-slate-200 dark:bg-slate-800" data-alt="Math tutor explaining a concept on a tablet" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBL0UOqFYAovvOiFewS9aTiTLnE2Ly97W72fyjuqo1JKvn9lxwBTSj-zUiLgxCTxhBLBYZQibTRy49qdpstLRAtyGomV4YQvWY-AOBJEFUqndSgJ-oqvycmNx7tLRpADtlAU-w_-64rswm07bHreE5zaY8SB_2mMOfgGWF2iRYxd_gYEKVROItE0N9-R7esyHLBRDgy22YH_lwDGlMvdy_E8c46f9mOT3lGQPHKFNRhsDg6P4w6GQpxv-H1x4nBqvHCSv3BJiGL-_U'); background-size: cover;"></div>
<div class="aspect-square rounded-2xl bg-slate-200 dark:bg-slate-800" data-alt="A sports coach mentoring athletes" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDEXvoeQjr_hCr78oajFmjxYThOhHC546l8vV5zyotZPxvYsPc9MqL4ZsEwrtzXzKNw_xe3oJBgz76-A8B1Dr6dqTq2AREyWQ1UzcvDyE6x407O5Efv2TmnmTq6g1gdiZ937B6ei4tw-j_k-Qh3P5_2qmRFs1WK1vnbyA-0O0KzlMzCzMlkSoQ9TlqyZiDQ1X5oHvniNqZr9lso8NdHjIQ_lFBhK0GC-a5QbRbcVo2jYVV9tLDHL0NdoRIENzu7dGei_bdHihxAxq4'); background-size: cover;"></div>
</div>
</div>
</div>
<div class="order-1 lg:order-2">
<h2 class="text-primary font-bold text-sm tracking-widest uppercase mb-3">For Mentors</h2>
<h3 class="text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white mb-6">Monetize Your Expertise</h3>
<div class="space-y-8">
<div class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 bg-white dark:bg-slate-800 shadow-sm rounded-lg flex items-center justify-center text-primary border border-slate-100 dark:border-slate-700">
<span class="material-symbols-outlined font-bold">draw</span>
</div>
<div>
<h4 class="text-lg font-bold mb-1">Teach</h4>
<p class="text-slate-600 dark:text-slate-400">Reach a global audience of students eager to learn what you know. Flexible tools for any curriculum.</p>
</div>
</div>
<div class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 bg-white dark:bg-slate-800 shadow-sm rounded-lg flex items-center justify-center text-primary border border-slate-100 dark:border-slate-700">
<span class="material-symbols-outlined font-bold">payments</span>
</div>
<div>
<h4 class="text-lg font-bold mb-1">Earn</h4>
<p class="text-slate-600 dark:text-slate-400">Set your own rates and get paid instantly. Our platform handles the billing and payouts securely.</p>
</div>
</div>
<div class="flex gap-4">
<div class="flex-shrink-0 w-10 h-10 bg-white dark:bg-slate-800 shadow-sm rounded-lg flex items-center justify-center text-primary border border-slate-100 dark:border-slate-700">
<span class="material-symbols-outlined font-bold">verified_user</span>
</div>
<div>
<h4 class="text-lg font-bold mb-1">Verify</h4>
<p class="text-slate-600 dark:text-slate-400">Build trust with our comprehensive verification system and display your credentials proudly.</p>
</div>
</div>
</div>
<button class="mt-10 bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition-all flex items-center gap-2">
                            Apply to Mentor
                            <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-20">
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="relative overflow-hidden rounded-[2.5rem] bg-primary px-8 py-16 text-center text-white shadow-2xl shadow-primary/30">
<div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
<div class="relative z-10">
<h2 class="text-3xl lg:text-5xl font-black mb-6">Ready to expand your horizons?</h2>
<p class="text-lg text-blue-100 mb-10 max-w-2xl mx-auto">Join thousands of others on the world's most versatile learning platform. Whether you want to teach or learn, your journey starts here.</p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<button onclick="window.location.href='{{ url('/register') }}'" class="bg-white text-primary px-8 py-4 rounded-xl font-extrabold text-lg hover:bg-blue-50 transition-colors">
    Join as Student
</button>
<button class="bg-blue-600 text-white border border-blue-400/50 px-8 py-4 rounded-xl font-extrabold text-lg hover:bg-blue-700 transition-colors">Join as Mentor</button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-slate-800 pt-16 pb-8">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-12 mb-16">
<div class="col-span-2">
<div class="flex items-center gap-2 text-primary mb-6">
<span class="material-symbols-outlined text-3xl font-bold">school</span>
<h2 class="text-xl font-extrabold tracking-tight">TeachMe</h2>
</div>
<p class="text-slate-500 max-w-xs mb-6">The world's leading marketplace for skills and knowledge. Empowering learners and mentors since 2024.</p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-xl">public</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-xl">camera</span>
</a>
<a class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all" href="#">
<span class="material-symbols-outlined text-xl">share</span>
</a>
</div>
</div>
<div>
<h5 class="font-bold mb-4">Platform</h5>
<ul class="space-y-3 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Courses</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Mentors</a></li>
<li><a class="hover:text-primary transition-colors" href="#">How it works</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Enterprise</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-4">Company</h5>
<ul class="space-y-3 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Press</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Blog</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-4">Support</h5>
<ul class="space-y-3 text-sm text-slate-500">
<li><a class="hover:text-primary transition-colors" href="#">Help Center</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Contact</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Privacy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Terms</a></li>
</ul>
</div>
</div>
<div class="pt-8 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-400">
<p>© 2024 TeachMe Technologies Inc. All rights reserved.</p>
<div class="flex items-center gap-4">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm">language</span>
                        English (US)
                    </span>
</div>
</div>
</div>
</footer>
</body></html>