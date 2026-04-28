<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-lowest": "#ffffff",
                    "on-secondary": "#ffffff",
                    "tertiary": "#902e00",
                    "secondary-fixed-dim": "#c1c6d7",
                    "on-primary-fixed-variant": "#003daa",
                    "on-tertiary-container": "#ffe1d7",
                    "surface-container-highest": "#e1e1ee",
                    "primary-container": "#135bec",
                    "on-primary": "#ffffff",
                    "on-error": "#ffffff",
                    "on-surface-variant": "#434655",
                    "tertiary-container": "#b93d00",
                    "surface": "#faf8ff",
                    "secondary": "#585e6d",
                    "background": "#faf8ff",
                    "on-secondary-container": "#5e6473",
                    "surface-container": "#ededf9",
                    "on-tertiary-fixed-variant": "#812800",
                    "surface-variant": "#e1e1ee",
                    "on-tertiary-fixed": "#380d00",
                    "on-surface": "#191b24",
                    "surface-bright": "#faf8ff",
                    "tertiary-fixed": "#ffdbcf",
                    "primary-fixed": "#dbe1ff",
                    "outline": "#737687",
                    "surface-dim": "#d9d9e5",
                    "surface-container-high": "#e7e7f3",
                    "secondary-fixed": "#dde2f4",
                    "on-secondary-fixed-variant": "#414755",
                    "surface-container-low": "#f3f3ff",
                    "surface-tint": "#0052de",
                    "on-background": "#191b24",
                    "on-secondary-fixed": "#161c28",
                    "inverse-surface": "#2e3039",
                    "inverse-primary": "#b4c5ff",
                    "on-primary-fixed": "#00174c",
                    "error": "#ba1a1a",
                    "on-tertiary": "#ffffff",
                    "inverse-on-surface": "#f0f0fc",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#ffb59b",
                    "outline-variant": "#c3c5d8",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-primary-container": "#e2e6ff",
                    "error-container": "#ffdad6",
                    "secondary-container": "#dde2f4",
                    "primary": "#0045bd"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "section-padding-y": "6rem",
                    "stack-gap-sm": "0.5rem",
                    "stack-gap-lg": "2rem",
                    "gutter": "2rem",
                    "container-max": "80rem",
                    "stack-gap-md": "1rem"
            },
            "fontFamily": {
                    "headline-xl": ["Lexend"],
                    "display": ["Lexend"],
                    "headline-lg": ["Lexend"],
                    "body-lg": ["Lexend"],
                    "body-md": ["Lexend"],
                    "label-bold": ["Lexend"],
                    "caption-xs": ["Lexend"]
            },
            "fontSize": {
                    "headline-xl": ["3rem", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "800"}],
                    "display": ["4.5rem", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "900"}],
                    "headline-lg": ["1.875rem", {"lineHeight": "1.3", "fontWeight": "700"}],
                    "body-lg": ["1.125rem", {"lineHeight": "1.75", "fontWeight": "400"}],
                    "body-md": ["1rem", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "label-bold": ["0.875rem", {"lineHeight": "1.25", "fontWeight": "700"}],
                    "caption-xs": ["0.75rem", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .backdrop-blur-md {
            backdrop-filter: blur(12px);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- TopAppBar -->
<header class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 shadow-sm docked full-width top-0 sticky z-50">
<div class="flex justify-between items-center h-20 px-8 max-w-[1280px] mx-auto">
<div class="text-2xl font-black tracking-tighter text-blue-600 dark:text-white">TeachMe</div>
<nav class="hidden md:flex items-center gap-8">
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Courses</a>
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Mentors</a>
<a class="font-lexend text-sm font-medium text-blue-600 dark:text-blue-400 font-bold border-b-2 border-blue-600 transition-all duration-200 hover:scale-105" href="#">Pricing</a>
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Blog</a>
</nav>
<div class="flex items-center gap-4">
<button class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500">Log In</button>
<button class="bg-primary text-white font-lexend text-sm font-bold py-2.5 px-6 rounded-lg shadow-lg shadow-primary/20 transition-all duration-200 hover:scale-105 active:opacity-80 active:scale-95">Get Started</button>
</div>
</div>
</header>
<main>
<!-- Hero Section -->
<section class="py-section-padding-y px-gutter">
<div class="max-w-[1280px] mx-auto text-center">
<span class="inline-block px-4 py-1.5 mb-stack-gap-md rounded-full bg-primary-container text-on-primary-container font-caption-xs uppercase tracking-widest">Pricing Plans</span>
<h1 class="font-display text-display text-on-surface mb-stack-gap-lg">Invest in your <span class="text-primary">mastery.</span></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto mb-16">
                    Choose the plan that fits your learning journey. From hobbyists to high-performance teams, we have the tools you need to excel.
                </p>
<!-- Pricing Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
<!-- Free Tier -->
<div class="bg-white p-10 rounded-xl border border-outline-variant flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-surface-container-high">
<div class="mb-8">
<h3 class="font-headline-lg text-headline-lg mb-2">Free</h3>
<p class="text-on-surface-variant font-lexend text-sm">Kickstart your learning path.</p>
</div>
<div class="mb-10 flex items-baseline gap-1">
<span class="font-display text-4xl font-black">$0</span>
<span class="text-on-surface-variant font-lexend text-sm">/month</span>
</div>
<ul class="space-y-6 flex-grow mb-10">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
<span class="font-lexend text-sm font-medium">10 Course Previews</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Community Forum Access</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Public Study Groups</span>
</li>
<li class="flex items-center gap-3 opacity-30">
<span class="material-symbols-outlined text-xl">cancel</span>
<span class="font-lexend text-sm font-medium line-through">Direct Mentor Chat</span>
</li>
</ul>
<button class="w-full py-4 rounded-lg font-label-bold text-on-surface border border-outline hover:bg-surface-container transition-all">Start Free</button>
</div>
<!-- Pro Tier -->
<div class="bg-white p-10 rounded-xl border-2 border-primary relative flex flex-col transition-all duration-300 shadow-2xl shadow-primary/10 scale-105 z-10">
<div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-xs font-bold tracking-widest uppercase">Most Popular</div>
<div class="mb-8">
<h3 class="font-headline-lg text-headline-lg mb-2 text-primary">Pro</h3>
<p class="text-on-surface-variant font-lexend text-sm">Accelerate your professional growth.</p>
</div>
<div class="mb-10 flex items-baseline gap-1">
<span class="font-display text-4xl font-black">$29</span>
<span class="text-on-surface-variant font-lexend text-sm">/month</span>
</div>
<ul class="space-y-6 flex-grow mb-10">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">stars</span>
<span class="font-lexend text-sm font-bold">Unlimited Course Access</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">stars</span>
<span class="font-lexend text-sm font-bold">Direct Mentor Chat</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">stars</span>
<span class="font-lexend text-sm font-bold">Certificate of Completion</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Offline Video Mode</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">check_circle</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Personalized Study Plan</span>
</li>
</ul>
<button class="w-full py-4 rounded-lg font-label-bold text-white bg-primary shadow-lg shadow-primary/30 transition-all hover:scale-105 active:scale-95">Go Pro Now</button>
</div>
<!-- Enterprise Tier -->
<div class="bg-white p-10 rounded-xl border border-outline-variant flex flex-col transition-all duration-300 hover:shadow-xl hover:shadow-surface-container-high">
<div class="mb-8">
<h3 class="font-headline-lg text-headline-lg mb-2">Classroom</h3>
<p class="text-on-surface-variant font-lexend text-sm">For teams and educational institutions.</p>
</div>
<div class="mb-10 flex items-baseline gap-1">
<span class="font-display text-4xl font-black">$99</span>
<span class="text-on-surface-variant font-lexend text-sm">/month</span>
</div>
<ul class="space-y-6 flex-grow mb-10">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">group</span>
<span class="font-lexend text-sm font-medium">Up to 30 Seats</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">analytics</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Detailed Learning Analytics</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">admin_panel_settings</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">Admin Dashboard &amp; Reports</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-xl">integration_instructions</span>
<span class="font-lexend text-sm font-medium text-on-surface-variant">LMS Integration API</span>
</li>
</ul>
<button class="w-full py-4 rounded-lg font-label-bold text-on-surface border border-outline hover:bg-surface-container transition-all">Contact Sales</button>
</div>
</div>
</div>
</section>
<!-- Feature Comparison Section (Bento Style) -->
<section class="bg-surface-container-low py-section-padding-y px-gutter">
<div class="max-w-[1280px] mx-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter">
<div class="md:col-span-2 flex flex-col justify-center">
<h2 class="font-headline-xl text-headline-xl mb-stack-gap-md">Compare all <span class="text-primary">benefits.</span></h2>
<p class="font-body-md text-on-surface-variant mb-stack-gap-lg">We believe education should be transparent. See exactly what you get at every level of your Mastery journey.</p>
</div>
<div class="bg-white p-8 rounded-xl shadow-sm border border-outline-variant md:row-span-2">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">verified</span>
</div>
<h4 class="font-label-bold text-lg mb-4">Unlimited Course Access</h4>
<p class="text-on-surface-variant text-sm font-lexend leading-relaxed">Pro and Classroom members get instant access to our library of 500+ premium courses, with new masterclasses added weekly.</p>
</div>
<div class="bg-white p-8 rounded-xl shadow-sm border border-outline-variant">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">chat_bubble</span>
</div>
<h4 class="font-label-bold text-lg mb-4">Direct Mentor Chat</h4>
<p class="text-on-surface-variant text-sm font-lexend leading-relaxed">Get 1-on-1 guidance from industry experts whenever you're stuck on a project.</p>
</div>
<div class="bg-white p-8 rounded-xl shadow-sm border border-outline-variant">
<div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">workspace_premium</span>
</div>
<h4 class="font-label-bold text-lg mb-4">Certificate of Completion</h4>
<p class="text-on-surface-variant text-sm font-lexend leading-relaxed">Blockchain-verified credentials to showcase your expertise to employers worldwide.</p>
</div>
<div class="md:col-span-2 relative overflow-hidden rounded-xl h-64 bg-primary p-12 text-white">
<div class="relative z-10 flex flex-col justify-center h-full">
<h3 class="font-headline-lg text-headline-lg mb-4">Need a custom plan?</h3>
<p class="font-body-md opacity-90 max-w-md">For large scale enterprises with over 500 employees, we offer bespoke solutions.</p>
</div>
<div class="absolute inset-0 opacity-20 pointer-events-none">
<img class="w-full h-full object-cover" data-alt="professional modern office space with minimalist furniture and collaborative atmosphere, soft morning sunlight through windows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHQpGgYXqOhKE0___pMXcZ1xmz-Vsfhe1jVE1vjKRoj8Zz1pDSVoC1FFQczn0W47P6iyWFB15FiJtiEvYSs96DpNfiaZc0_KcOgYFLfVTPy_7CW2IX56pEjrwVEekC9KoG1yOrCu-L1xQAdc1xX6WjavOZQy2p0Tt7BIMAFT2u2U3tcHOvAo1sFaFpI8c2vww_jV-TDAjpZPrj2N0AWHqBoYzP3Yyr8gZKkLNUjoVD3_tj86HNHc8fgIhzQMOT8b9faJQEd2W1bfg"/>
</div>
</div>
</div>
</div>
</section>
<!-- Social Proof Section -->
<section class="py-section-padding-y px-gutter bg-white">
<div class="max-w-[1280px] mx-auto text-center">
<h2 class="font-headline-lg text-headline-lg mb-12">Trusted by 10,000+ Students &amp; Teams</h2>
<div class="flex flex-wrap justify-center items-center gap-16 grayscale opacity-50">
<div class="font-black text-2xl tracking-tighter">SKILLSHARE</div>
<div class="font-black text-2xl tracking-tighter">COURSERA</div>
<div class="font-black text-2xl tracking-tighter">UDEMY</div>
<div class="font-black text-2xl tracking-tighter">MASTERCLASS</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-gray-50 dark:bg-gray-950 border-t border-gray-200 dark:border-gray-800 py-24">
<div class="max-w-[1280px] mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
<div>
<div class="text-xl font-black text-blue-600 dark:text-white mb-6">TeachMe</div>
<p class="font-lexend text-sm text-gray-500 dark:text-gray-400">Empowering the next generation of digital masters through high-impact education.</p>
</div>
<div>
<h4 class="font-label-bold text-sm text-on-surface mb-6">Resources</h4>
<ul class="space-y-4">
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Courses</a></li>
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Pricing</a></li>
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Help Center</a></li>
</ul>
</div>
<div>
<h4 class="font-label-bold text-sm text-on-surface mb-6">Company</h4>
<ul class="space-y-4">
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Terms of Service</a></li>
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Privacy Policy</a></li>
<li><a class="font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" href="#">Contact Us</a></li>
</ul>
</div>
<div>
<h4 class="font-label-bold text-sm text-on-surface mb-6">Join the newsletter</h4>
<div class="flex gap-2">
<input class="bg-surface-container border-none rounded-lg font-lexend text-sm px-4 py-2 w-full focus:ring-2 focus:ring-primary" placeholder="Email address" type="email"/>
<button class="bg-primary text-white p-2 rounded-lg hover:scale-105 transition-all">
<span class="material-symbols-outlined">send</span>
</button>
</div>
</div>
<div class="md:col-span-4 border-t border-gray-200 dark:border-gray-800 pt-12 flex justify-between items-center">
<span class="font-lexend text-sm text-gray-500 dark:text-gray-400">© 2024 TeachMe. All rights reserved.</span>
<div class="flex gap-6">
<span class="material-symbols-outlined text-gray-400 cursor-pointer hover:text-primary transition-colors">public</span>
<span class="material-symbols-outlined text-gray-400 cursor-pointer hover:text-primary transition-colors">rss_feed</span>
</div>
</div>
</div>
</footer>
</body></html>