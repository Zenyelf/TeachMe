<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Feedback for Developers</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#135bec",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Lexend"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "0.75rem", "xl": "1rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Lexend', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="layout-container flex h-full grow flex-col">
<!-- Header -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 lg:px-40">
<div class="flex items-center gap-4 text-primary">
<div class="size-8 flex items-center justify-center bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-primary">school</span>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-tight">TeachMe</h2>
</div>
<div class="flex flex-1 justify-end gap-8">
<div class="hidden md:flex items-center gap-9">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Courses</a>
<a class="text-primary text-sm font-semibold" href="#">Feedback</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Settings</a>
</div>
<div class="bg-primary/20 border-2 border-primary/10 rounded-full size-10 flex items-center justify-center overflow-hidden" data-alt="User profile avatar placeholder">
<span class="material-symbols-outlined text-primary">person</span>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 px-4 py-8 lg:px-40">
<div class="max-w-[960px] mx-auto">
<!-- Page Title & Intro -->
<div class="mb-8">
<h1 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-tight mb-2">Feedback for Developers</h1>
<p class="text-slate-600 dark:text-slate-400 text-base font-normal">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Feedback Form Section -->
<div class="lg:col-span-2 space-y-6">
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
<!-- Rating Experience -->
<div class="mb-8">
<p class="text-slate-900 dark:text-white text-base font-semibold mb-3">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
<div class="flex gap-4">
<button class="flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_very_dissatisfied</span>
<span class="text-xs text-slate-500">Poor</span>
</button>
<button class="flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_dissatisfied</span>
<span class="text-xs text-slate-500">Bad</span>
</button>
<button class="flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_satisfied</span>
<span class="text-xs text-slate-500">Average</span>
</button>
<button class="flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_satisfied_alt</span>
<span class="text-xs text-slate-500">Good</span>
</button>
<button class="flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined text-3xl text-primary">sentiment_very_satisfied</span>
<span class="text-xs text-primary font-bold">Excellent</span>
</button>
</div>
</div>
<!-- Category Dropdown -->
<div class="mb-6">
<label class="block text-slate-900 dark:text-white text-sm font-semibold mb-2">Feedback Category</label>
<select class="w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:ring-primary focus:border-primary">
<option disabled="" selected="" value="">Choose a category...</option>
<option value="bug">Bug Report</option>
<option value="feature">Feature Suggestion</option>
<option value="general">General Feedback</option>
<option value="uiux">UI/UX Improvement</option>
<option value="performance">Performance Issue</option>
</select>
</div>
<!-- Detailed Comments -->
<div class="mb-6">
<label class="block text-slate-900 dark:text-white text-sm font-semibold mb-2">Detailed Comments</label>
<textarea class="w-full rounded-xl border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-slate-100 focus:ring-primary focus:border-primary placeholder:text-slate-400" placeholder="Please describe your experience or the issue in detail..." rows="6"></textarea>
</div>
<!-- File Upload -->
<div class="mb-8">
<p class="text-slate-900 dark:text-white text-sm font-semibold mb-2">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
<div class="flex items-center justify-center w-full">
<label class="flex flex-col items-center justify-center w-full h-32 border-2 border-slate-200 dark:border-slate-700 border-dashed rounded-xl cursor-pointer bg-slate-50 dark:bg-slate-800 hover:bg-slate-100 dark:hover:bg-slate-750 transition-colors">
<div class="flex flex-col items-center justify-center pt-5 pb-6">
<span class="material-symbols-outlined text-slate-400 mb-2">cloud_upload</span>
<p class="mb-1 text-sm text-slate-500 dark:text-slate-400">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
<p class="text-xs text-slate-400 uppercase">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
</div>
<input class="hidden" type="file"/>
</label>
</div>
</div>
<!-- Submit Button -->
<div class="flex items-center justify-end gap-4">
<button class="px-6 py-2.5 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">Cancel</button>
<button class="bg-primary hover:bg-primary/90 text-white px-8 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-primary/20 transition-all flex items-center gap-2">
                                    Send Feedback
                                    <span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</div>
<!-- Success Alert (Hidden by default or shown after submit) -->
<div class="bg-emerald-50 dark:bg-emerald-950/30 border border-emerald-200 dark:border-emerald-800 rounded-xl p-5 flex items-start gap-4">
<div class="bg-emerald-100 dark:bg-emerald-900/50 p-2 rounded-lg">
<span class="material-symbols-outlined text-emerald-600 dark:text-emerald-400">check_circle</span>
</div>
<div>
<h4 class="text-emerald-900 dark:text-emerald-100 font-bold text-base">Feedback Received!</h4>
<p class="text-emerald-700 dark:text-emerald-400 text-sm mt-1">Thank you for helping us improve TeachMe. Our development team has been notified and will review your submission shortly.</p>
</div>
</div>
</div>
<!-- Sidebar Info -->
<div class="space-y-6">
<div class="bg-primary/5 dark:bg-primary/10 rounded-xl p-6 border border-primary/20">
<h3 class="text-primary font-bold text-lg mb-4 flex items-center gap-2">
<span class="material-symbols-outlined">lightbulb</span>
                                Tips for Feedback
                            </h3>
<ul class="space-y-4 text-sm text-slate-700 dark:text-slate-300">
<li class="flex gap-3">
<span class="material-symbols-outlined text-primary text-lg">check</span>
<span>For bug reports, include steps to reproduce the issue.</span>
</li>
<li class="flex gap-3">
<span class="material-symbols-outlined text-primary text-lg">check</span>
<span>Screenshots help us identify UI problems 5x faster.</span>
</li>
<li class="flex gap-3">
<span class="material-symbols-outlined text-primary text-lg">check</span>
<span>Tell us which course or module you were using.</span>
</li>
</ul>
</div>
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm">
<h3 class="text-slate-900 dark:text-white font-bold text-lg mb-4">Direct Support</h3>
<p class="text-slate-600 dark:text-slate-400 text-sm mb-4">Need immediate help with your account or billing? Contact our support team directly.</p>
<a class="inline-flex items-center gap-2 text-primary font-bold text-sm hover:underline" href="#">
                                Go to Help Center
                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<div class="relative rounded-xl overflow-hidden h-40 group" data-alt="Abstract blue and white gradient pattern">
<div class="absolute inset-0 bg-gradient-to-br from-primary to-[#5b96f5] opacity-90"></div>
<div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center text-white">
<span class="material-symbols-outlined text-4xl mb-2" style="font-variation-settings: 'FILL' 1">favorite</span>
<p class="font-bold">Made with <span class="text-slate-900">TeachMe</span> Love</p>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800 py-6 text-center text-slate-500 text-xs">
<p>© 2024 TeachMe Platform. All rights reserved. Version 2.4.0-alpha</p>
</footer>
</div>
</body></html>