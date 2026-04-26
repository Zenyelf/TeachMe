<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
            vertical-align: middle;
        }
        .featured-gradient {
            background: linear-gradient(135deg, rgba(0, 69, 189, 0.9) 0%, rgba(19, 91, 236, 0.4) 100%);
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface">
<!-- Top Navigation -->
<nav class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-100 dark:border-gray-800 shadow-sm docked full-width top-0 sticky z-50">
<div class="flex justify-between items-center h-20 px-8 max-w-[1280px] mx-auto">
<div class="text-2xl font-black tracking-tighter text-blue-600 dark:text-white font-headline-lg">TeachMe</div>
<div class="hidden md:flex items-center gap-8 font-lexend text-sm font-medium">
<a class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Courses</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Mentors</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Pricing</a>
<a class="text-blue-600 dark:text-blue-400 font-bold border-b-2 border-blue-600 transition-all duration-200 hover:scale-105" href="#">Blog</a>
</div>
<div class="flex items-center gap-4">
<button class="hidden lg:block text-gray-600 dark:text-gray-400 font-label-bold transition-all duration-200 hover:scale-105">Log In</button>
<button class="bg-primary text-white px-6 py-2.5 rounded-lg font-label-bold shadow-[0_10px_20px_-10px_rgba(0,69,189,0.5)] transition-all duration-200 hover:scale-105 active:opacity-80 active:scale-95">Get Started</button>
</div>
</div>
</nav>
<main class="max-w-[1280px] mx-auto px-8 py-12">
<!-- Blog Header & Featured Post -->
<header class="mb-16">
<div class="flex flex-col gap-4 mb-12">
<span class="text-primary font-caption-xs uppercase tracking-widest">Knowledge Hub</span>
<h1 class="font-display text-display text-on-surface">The TeachMe <span class="text-primary">Blog</span></h1>
<p class="text-on-surface-variant font-body-lg max-w-2xl">Insights, stories, and expert advice to help you master new skills and accelerate your career growth.</p>
</div>
<!-- Featured Post (Bento Large) -->
<div class="relative group overflow-hidden rounded-3xl bg-surface-container-high h-[600px] flex items-end shadow-xl border border-outline-variant">
<img alt="" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Group of diverse students working together on laptops in a bright modern co-working space with large windows and plants" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbI90H5Ph6mg-42RgZEN7EMKJRK7azCn2npQ8FUEez-5KN0rqM58qkbL7Hh5_gFzy5MNk3E9UpiLZU1LoyuqA6FkQ9lEeQD5mFyhB645uPtkwEgeovM_oBkgG_i8vE3haBKnW1Pll-0XFRhHDYoY1FIG9gzITdrqKYc2MfI6mBI-_MeIRf4DkwnE6KfZvxxt-Om2ZZMxj5kBgPidSeg1BlgTx6kMEXxfTgEH0ZZQAzcGSn7Vp4NMC884AaMFanvLNS2JmtUPVr7AY"/>
<div class="absolute inset-0 featured-gradient"></div>
<div class="relative p-12 w-full lg:w-2/3 flex flex-col gap-6">
<div class="flex gap-3">
<span class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full font-caption-xs uppercase">Success Stories</span>
<span class="bg-white/20 backdrop-blur-md text-white px-3 py-1 rounded-full font-caption-xs uppercase text-opacity-80">12 min read</span>
</div>
<h2 class="font-headline-xl text-white">How TechMentors are Shaping the Next Generation of AI Engineers</h2>
<p class="text-white/90 font-body-lg">Dive deep into our latest collaboration with industry leaders to provide exclusive mentorship paths for emerging AI talent.</p>
<div class="flex items-center gap-4 mt-4">
<div class="w-12 h-12 rounded-full border-2 border-white overflow-hidden">
<img alt="" class="w-full h-full object-cover" data-alt="Professional headshot of a middle-aged man with short hair and a confident smile wearing a tailored suit" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD11sNg7bjyhMc6CqQKp3Y7MuCnASBvcLNten7dWETYuwbEsOg7JrkQJXsUL64FlsklQ0YPW3Jzy1MjNBPFS7EGzDUq6Q5rRxysNezslBSMF7LJqE1ueGG4LXLEtmK1XAISOzAbxPtiYQ6roZPqGsuPm86ds7u_PN-b6fY0FdI37q7h0hWt4wZeg85Oiwo2Nay-WgY81qU2ZG5whu7_OUtcrRX_cY-y2FRqkb6vAplJ-k24m2MbQX5uUvo05-JCCmkRXWhZXaQuLBk"/>
</div>
<div class="text-white">
<p class="font-label-bold">Marcus Sterling</p>
<p class="text-sm text-white/70">Chief Learning Officer</p>
</div>
</div>
</div>
</div>
</header>
<!-- Categories and Filter -->
<section class="mb-12">
<div class="flex flex-wrap items-center gap-4">
<button class="bg-primary text-white px-6 py-2 rounded-full font-label-bold shadow-lg transition-all hover:scale-105">All Articles</button>
<button class="bg-surface-container text-on-surface-variant px-6 py-2 rounded-full font-label-bold hover:bg-primary-container hover:text-on-primary-container transition-all">Success Stories</button>
<button class="bg-surface-container text-on-surface-variant px-6 py-2 rounded-full font-label-bold hover:bg-primary-container hover:text-on-primary-container transition-all">Study Tips</button>
<button class="bg-surface-container text-on-surface-variant px-6 py-2 rounded-full font-label-bold hover:bg-primary-container hover:text-on-primary-container transition-all">New Courses</button>
<button class="bg-surface-container text-on-surface-variant px-6 py-2 rounded-full font-label-bold hover:bg-primary-container hover:text-on-primary-container transition-all">Mentor Spotlights</button>
<button class="bg-surface-container text-on-surface-variant px-6 py-2 rounded-full font-label-bold hover:bg-primary-container hover:text-on-primary-container transition-all">Platform Updates</button>
</div>
</section>
<!-- Latest Articles Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Article 1: Study Tips -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Overhead view of a clean workspace with an open notebook, a cup of coffee, and a laptop on a white desk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJBkDRZ_JXLAxOaePZtgzq3xBnsP0_2nioiZ9125gjrAfDdNmPBkWaAk1jCI0BbMFcPGgwyn2ZS_nBemXcpnzPPs4bUwS3BdPc5e5vheE3kws6jQZjCTRI9hVay9wlNsY1fgd4Ub-yO7X_QEhtY5Ua0s0uKaq1apl5HQumaGKOijUS5Yhkc5Q9giFDd2QtBsuj5kVBQYZcpEQG62Tt1y2efwXDc4P6veBV8yujrJilCAElbhzGlP-Sav4NJAsE1rV1j9W9ipQ30VM"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">Study Tips</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">Mastering Deep Focus: The 2024 Guide for Online Learners</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">Discover the psychological triggers of focus and how to design a study environment that minimizes distraction and maximizes retention.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 24, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 2: Platform Updates -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Digital dashboard interface showing colorful data visualizations and analytics on a sleek tablet screen" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0gbg9z4lAleD3bLKCUCjn5-9dp0VzZPYyqCS-YFBa96KYuk1kmuiH7avgKdNWwqZ46eANJcl79PZfcCOGl6o84RhqtrGXMieuYH42Rq49k7zism3R16TPE5tIMbp7Pn0CLn7_Jd_pNxmYxKaxsWCXvCiYbCP_Cdq_a9WfVFKxcoV9MaFC9Ow4b4frX6usyHeUskKGiNc0EXrP_EXkb3BumJluJqiNEyime5_GDvMc_4J6wLQiUIXk5tLTD1dgnpp5Prb1Q2fU5h0"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">Platform Updates</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">Announcing: Personalized Learning Paths v2.0</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">Our engine just got smarter. Learn how the new AI-driven curriculum adapts to your pace and suggests mentors based on your specific gaps.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 21, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 3: Mentor Spotlight -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Smiling professional woman in a business meeting setting with soft office lighting and a collaborative atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJ4Gy8cvKtMK3k7BZB7Hkmb1e3NEsmwJGHhpjD8dvP9JUy01o2cofNLs6ilg1Va_x-FuVbqBxfCo6CZ-TRGUJ-6T1BwGcYfYMwFzojJAyPJZSvp1YnpMWD-ewAen-mTRXxv4mjWqlQNWsF5rJKb_3uZ8cA6KqL8uX6wE3ycUKQNliEv_VaYGYUP2ycDjhOaE4c29ketBKYoUAe0wq6zs2cQR3k1odP1Iwc9BqaVRUUt-XgPXiNU91FjGV_5Ygf7I3WnrxyoWvig34"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">Mentor Spotlight</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">Sarah Chen: From Junior Dev to Tech Lead in 3 Years</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">One of our most requested mentors shares her journey and the specific learning frameworks she uses with her mentees to fast-track success.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 18, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 4: New Courses -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Abstract 3D visualization of blockchain data nodes connected by glowing blue lines in a dark digital space" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-SBs7GWwSnmCWf4HZLPL7sVdlPjUlUR9vAQMfQug60dfXtquudqWJHZrWUnjP-bg065KYP0J6uWoDK39S9NCw-UKBL_Yk8Z2znIbtDTRYKH6_SvcnUWuIuzzVkmcQrzq0XT96R7hiaDJfXRu-zamnpjOV0qGYjBlN38Yu57ZshdReyv3KcDgqDsg_kAOALGE9AXK483uhPZqU-MFFE122oq0KLMsW4fTqkhxoXvoqOqhU3YNK4FHBu-YMus2sJyf2gAW-OTWsV20"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">New Courses</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">Exploring Web3: Our New Blockchain Fundamentals Track</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">Get ahead of the curve with our comprehensive guide to decentralized technologies, smart contracts, and the future of the internet.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 15, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 5: Success Stories -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Man in a sharp business suit walking confidently down a city street with modern glass buildings reflecting the morning sun" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_irfXg_74pYSVYpi4YPJlPExc6pq22WFvHRTYegfLKO5hm1EFzFMrDQNs32ZH2nHCk30aV43NVhI4uU3fvJfr9bMTh_pHprepGSXUUnBe3zKJYabb9MbaJIH9mr37Lp5qS1-sm75sy2Cdo2fifL8u2lq_otnWGy3AagUXKt2EzI2P7ccVKa5dIUPLG5z7plW18HyHKNkVZk7erBsQUG9NbA0vzy93Dw7kU7o9bHXq5HqU_3m6Nit468v0PG4EZtnarg5DfES2UKQ"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">Success Stories</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">How Leo Transitioned from Sales to Product Management</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">A step-by-step breakdown of how one student leveraged TeachMe's career services and mentorship to land a role at a Fortune 500 company.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 12, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
<!-- Article 6: Study Tips -->
<article class="bg-surface-container-lowest rounded-2xl border border-outline-variant overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl hover:scale-[1.02]">
<div class="h-56 overflow-hidden relative">
<img alt="" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Open laptop on a wooden desk with a notebook, pen, and glasses, suggesting a quiet focused study session" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFTSpW1A1YZyHd9gsHnEMOGiJ16WLyhLIUE3QZpPboiTlsO1J_V_FY5_nXhnrzmId5h-MkpQRKiAeKmITww2rdusWjvzpkfrqLMktFjVpCUVjdVuYj8HWpaWEdtIAmOvkxYTQ50i_-kyKEJvWgE_Q8N9gnBI6CANNEbZeGBsRM4i61jmIvEX1NRlM-37be2Y1GWU5mXu_0o3JQzG4EaJatoNY_ZpsSFA2aQ-8pXR8GhE8D5zSJM60qiDvJHjeH7AbSSfqE9qMZdHs"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-primary px-3 py-1 rounded-lg font-caption-xs uppercase">Study Tips</div>
</div>
<div class="p-8 flex flex-col flex-grow gap-4">
<h3 class="font-headline-lg text-on-surface leading-tight">The Science of Active Recall and Spaced Repetition</h3>
<p class="text-on-surface-variant font-body-md line-clamp-3">Stop re-reading and start remembering. We explore the two most effective evidence-based study techniques used by top performers globally.</p>
<div class="mt-auto pt-4 flex items-center justify-between border-t border-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-outline text-sm">calendar_today</span>
<span class="text-caption-xs text-outline">Oct 09, 2023</span>
</div>
<a class="text-primary font-label-bold flex items-center gap-1 group/link" href="#">
                            Read More <span class="material-symbols-outlined text-sm transition-transform group-hover/link:translate-x-1">arrow_forward</span>
</a>
</div>
</div>
</article>
</section>
<!-- Newsletter Subscription -->
<section class="mt-24 bg-primary rounded-[3rem] p-12 md:p-20 relative overflow-hidden text-center flex flex-col items-center gap-8 shadow-2xl">
<div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>
<div class="relative flex flex-col items-center gap-4 max-w-3xl">
<span class="bg-white/20 backdrop-blur-md text-white px-4 py-1 rounded-full font-caption-xs uppercase tracking-widest">Newsletter</span>
<h2 class="font-headline-xl text-white">Join 50,000+ Lifelong Learners</h2>
<p class="text-white/80 font-body-lg">Get our weekly roundup of the best learning resources, success stories, and platform updates delivered straight to your inbox.</p>
</div>
<form class="relative flex flex-col md:flex-row gap-4 w-full max-w-xl mt-4">
<input class="flex-grow px-8 py-5 rounded-2xl bg-white border-none focus:ring-4 focus:ring-blue-300 font-body-md text-on-surface" placeholder="Enter your email" type="email"/>
<button class="bg-inverse-surface text-white px-10 py-5 rounded-2xl font-label-bold shadow-lg hover:scale-105 active:scale-95 transition-all" type="submit">Subscribe</button>
</form>
<p class="relative text-white/60 text-sm italic">No spam, just inspiration. Unsubscribe anytime.</p>
</section>
</main>
<!-- Footer -->
<footer class="bg-gray-50 dark:bg-gray-950 border-t border-gray-200 dark:border-gray-800 full-width py-24 mt-24">
<div class="max-w-[1280px] mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-12 font-lexend text-sm">
<div class="flex flex-col gap-6">
<div class="text-xl font-black text-blue-600 dark:text-white">TeachMe</div>
<p class="text-gray-500 dark:text-gray-400">Revolutionizing education through expert-led mentorship and adaptive learning technology.</p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">share</span>
</a>
<a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">mail</span>
</a>
<a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined">public</span>
</a>
</div>
</div>
<div class="flex flex-col gap-6">
<h4 class="font-label-bold text-on-surface uppercase tracking-wider">Quick Links</h4>
<ul class="flex flex-col gap-3">
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Courses</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Mentors</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Pricing</a></li>
<li><a class="text-blue-600 dark:text-blue-400 font-bold" href="#">Blog</a></li>
</ul>
</div>
<div class="flex flex-col gap-6">
<h4 class="font-label-bold text-on-surface uppercase tracking-wider">Support</h4>
<ul class="flex flex-col gap-3">
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Help Center</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Contact Us</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Privacy Policy</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400" href="#">Terms of Service</a></li>
</ul>
</div>
<div class="flex flex-col gap-6">
<h4 class="font-label-bold text-on-surface uppercase tracking-wider">Contact</h4>
<p class="text-gray-500 dark:text-gray-400">123 Learning Lane,<br/>San Francisco, CA 94107</p>
<p class="text-gray-500 dark:text-gray-400 font-bold">hello@teachme.com</p>
</div>
</div>
<div class="max-w-[1280px] mx-auto px-8 mt-16 pt-8 border-t border-gray-200 dark:border-gray-800 text-center text-gray-400 text-xs font-lexend">
            © 2024 TeachMe Mastery. All rights reserved.
        </div>
</footer>
</body></html>