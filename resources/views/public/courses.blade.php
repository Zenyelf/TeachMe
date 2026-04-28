<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
    .custom-scrollbar::-webkit-scrollbar {
      width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
      background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #c3c5d8;
      border-radius: 10px;
    }
  </style>
</head>
<body class="bg-background text-on-background font-body-md">
<!-- TopNavBar (Shared Component) -->
<nav class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md docked full-width top-0 sticky z-50 border-b border-gray-100 dark:border-gray-800 shadow-sm">
<div class="flex justify-between items-center h-20 px-8 max-w-[1280px] mx-auto">
<div class="text-2xl font-black tracking-tighter text-blue-600 dark:text-white">TeachMe</div>
<div class="hidden md:flex items-center gap-8">
<a class="font-lexend text-sm font-bold border-b-2 border-blue-600 text-blue-600 dark:text-blue-400 transition-all duration-200 hover:scale-105" href="#">Courses</a>
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Mentors</a>
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Pricing</a>
<a class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105" href="#">Blog</a>
</div>
<div class="flex items-center gap-4">
<button class="font-lexend text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-blue-500 transition-all duration-200 hover:scale-105">Log In</button>
<button class="bg-primary text-white px-6 py-2.5 rounded-full font-lexend text-sm font-bold shadow-xl shadow-primary/20 transition-all duration-200 hover:scale-105 active:opacity-80 active:scale-95">Get Started</button>
</div>
</div>
</nav>
<main class="max-w-[1280px] mx-auto px-8 py-12">
<!-- Header Section -->
<header class="mb-12">
<h1 class="font-headline-xl text-headline-xl text-on-surface mb-4">Explore Our Courses</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">From professional sports training to academic excellence, find the world's best mentors here.</p>
</header>
<div class="grid grid-cols-1 lg:grid-cols-[280px_1fr] gap-12">
<!-- Sidebar Filters -->
<aside class="space-y-10">
<!-- Categories -->
<div>
<h3 class="font-label-bold text-label-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="category">category</span>
            Categories
          </h3>
<div class="space-y-4">
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Academics</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input checked="" class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-body-md text-primary font-bold">Martial Arts</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Sports &amp; Fitness</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Digital Arts</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" type="checkbox"/>
<span class="font-body-md text-on-surface-variant group-hover:text-primary transition-colors">Business</span>
</label>
</div>
</div>
<!-- Format -->
<div>
<h3 class="font-label-bold text-label-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="video_settings">video_settings</span>
            Format
          </h3>
<div class="space-y-3">
<div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-center justify-between hover:border-primary/50 transition-all cursor-pointer">
<span class="font-label-bold text-on-surface-variant">Online</span>
<span class="material-symbols-outlined text-primary" data-icon="cloud">cloud</span>
</div>
<div class="p-4 rounded-xl bg-primary text-white flex items-center justify-between shadow-lg shadow-primary/20 transition-all cursor-pointer">
<span class="font-label-bold">Live Workshop</span>
<span class="material-symbols-outlined" data-icon="podcasts">podcasts</span>
</div>
<div class="p-4 rounded-xl bg-surface-container-low border border-outline-variant/30 flex items-center justify-between hover:border-primary/50 transition-all cursor-pointer">
<span class="font-label-bold text-on-surface-variant">In-Person</span>
<span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
</div>
</div>
</div>
<!-- Ratings -->
<div>
<h3 class="font-label-bold text-label-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="grade">grade</span>
            Minimum Rating
          </h3>
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<span class="text-caption-xs font-caption-xs text-outline">1.0</span>
<span class="text-caption-xs font-caption-xs text-outline">5.0</span>
</div>
<input class="w-full h-2 bg-surface-container-highest rounded-full appearance-none accent-primary cursor-pointer" max="5" min="1" step="0.1" type="range" value="4.5"/>
<div class="text-center font-headline-lg text-headline-lg text-primary">4.5+</div>
</div>
</div>
</aside>
<!-- Main Course Grid -->
<section class="space-y-8">
<!-- Results Info & Sorting -->
<div class="flex flex-col sm:flex-row justify-between items-center bg-white p-4 rounded-2xl border border-outline-variant/20 shadow-sm gap-4">
<p class="font-body-md text-on-surface-variant">Showing <span class="font-bold text-on-surface">124</span> available courses</p>
<div class="flex items-center gap-4">
<span class="text-caption-xs font-caption-xs text-outline uppercase tracking-widest">Sort by</span>
<select class="bg-surface-container-low border-none rounded-lg font-label-bold text-on-surface focus:ring-primary py-2 px-4 cursor-pointer">
<option>Most Popular</option>
<option>Newest First</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- Course Card 1 -->
<div class="group relative bg-white rounded-3xl overflow-hidden border border-outline-variant/30 hover:shadow-2xl transition-all duration-300">
<div class="h-56 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="dynamic close-up of a martial arts professional performing a high kick in a sun-drenched modern studio with lens flare" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4M3mVAHpr3F_pFkEGD9D4rcjqhGWZ-7OGvJaWb4lXNN5MYGga3zxsP9yaNW_4gUBpm9LfiwPHCMv6a_ljvLtLvPLMsbG65JbwpqRBS1wmIKIvu-9jehhYOCHnok7NhmUWoVfGWDWXB0lfCzfB8EW22jKdfW5c00NguwpaOBBaMhltmZz3bNKKAwOFKpkysf8NTHJqTWzbUSKZ_A_M1_dbeRa27YTzRbojdtUjPLIjzqCoEz05rzgt1jQ6rMpmGiYpD7sQYsMYgP8"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-orange-500 text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-caption-xs font-caption-xs">4.9 (1.2k)</span>
</div>
<div class="absolute bottom-4 left-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Martial Arts</span>
</div>
</div>
<div class="p-6">
<h3 class="font-headline-lg text-headline-lg mb-3 group-hover:text-primary transition-colors">Advanced Muay Thai: The Art of Eight Limbs</h3>
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded-full border-2 border-white shadow-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="professional male athletic trainer portrait with confident expression and soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmDT-yC-IoJrPJtXFRczhzwudhvZ3pr9Zd_FOUvAfbs4f36eeDyjG2matCUfknZN4VWGllYDo1EnH7d0QeEYz6WmP7WZZr_Pl5lBPnQweUL0WDsLdayOIrG-B68Js-nQAjFaeoI5k9eiyxznZ7ZqADSEVLVmcFxdkbldO3lH93phQYDo3Ww3mqKmP4o1TEEF8fkjMnHldmkiqWP9_hHCxLvIMAGBI0ddIM3Q0nYn8vSjSLv4KxO797IBRliCpHnll2sOGwBrEIv90"/>
</div>
<div>
<p class="font-label-bold text-on-surface">Kru Somsak P.</p>
<p class="text-caption-xs text-outline">Master Instructor</p>
</div>
</div>
<div class="flex items-center justify-between border-t border-outline-variant/20 pt-6">
<div class="flex items-baseline gap-1">
<span class="text-headline-lg font-headline-lg text-primary">$89.00</span>
<span class="text-caption-xs text-outline line-through">$120</span>
</div>
<button class="bg-surface-container-highest text-primary font-label-bold px-6 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Enroll Now</button>
</div>
</div>
</div>
<!-- Course Card 2 -->
<div class="group relative bg-white rounded-3xl overflow-hidden border border-outline-variant/30 hover:shadow-2xl transition-all duration-300">
<div class="h-56 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="serene woman practicing yoga in a bright minimalist loft with large windows and soft morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkHTY7nUlu_sg0g8vmsbvV3ipeI4ZY6uEaZ2Dx3P5PVPVqP05RaOGSliBCBe3DuQD39tFX6lWr8PvESGpKaQIWVFwTneC62jgRzneb5QhrPKzWbu1jjtMHe5ZoElefd5btknVILKA4LcIdEQtJX2LAA1qyUEEBh7Xzd6StJ35k8maPyDvia-FdHMQyacFauY24KqRanu-gmU39ujB5LhCSxAqLKpY2sj0Crpkihfz7i-ZB_GlszyLjL4z2f4YFk4aDYQMLkBiER-E"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-orange-500 text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-caption-xs font-caption-xs">4.8 (850)</span>
</div>
<div class="absolute bottom-4 left-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Yoga &amp; Wellness</span>
</div>
</div>
<div class="p-6">
<h3 class="font-headline-lg text-headline-lg mb-3 group-hover:text-primary transition-colors">Vinyasa Flow for Peak Performance</h3>
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded-full border-2 border-white shadow-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="friendly female yoga instructor smiling warmly in a natural outdoor setting with soft sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxa_h03eSJYQEBsvza-CL6QnXnfgXDKRIyyla4UW2D4wXpWcmyZqnBQSXfcvGWkPgdu6AsuEZ30lyvwubGBXNSm3UGJ6uRiD6ZptAnWSiLGchIqcgK_mRaxVHK6m9dPVZOn1DxHGnHG63kG-6cIHpaQWeQ1GDbMJZfnQIknkZAaCvFRs2KAUkrIZANXKJJaV0tnyyOcqBm_9thn0T36ilRn4eiNdY3kAF5MDp2gNgIAi78hW7jveRBIYbV_WTq4pzpGxDAjhmayY0"/>
</div>
<div>
<p class="font-label-bold text-on-surface">Elena Rodriguez</p>
<p class="text-caption-xs text-outline">Lead Yogi</p>
</div>
</div>
<div class="flex items-center justify-between border-t border-outline-variant/20 pt-6">
<div class="flex items-baseline gap-1">
<span class="text-headline-lg font-headline-lg text-primary">$55.00</span>
</div>
<button class="bg-surface-container-highest text-primary font-label-bold px-6 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Enroll Now</button>
</div>
</div>
</div>
<!-- Course Card 3 -->
<div class="group relative bg-white rounded-3xl overflow-hidden border border-outline-variant/30 hover:shadow-2xl transition-all duration-300">
<div class="h-56 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="collaborative workspace with young professionals brainstorming around a laptop in a vibrant modern office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6lnFJUwKDkXmU3Dj-hVL9DEnysqhkUZgP12BCzgCLEoe8n4zkGBv245WeYr0ygipsEu-yFp3wzsxRnRWgMFTxLmqpYopwUguz4YoJOutHzB7z19hRSL5kMSzQwiAGKnX3lZgD_IkdkN2HFT04cGxHu8VuwAJt7OqibeyqvGETYqBw9CI5MIBcE9Oev1FUoPdecafC8G7lDTG-A0sPCuErkFzUy2-18acU9ZM_VZS8OfhgU54C_QHCBLFNnQ5Hm2f2Z1wfl5y4W8M"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-orange-500 text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-caption-xs font-caption-xs">4.7 (2.4k)</span>
</div>
<div class="absolute bottom-4 left-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Business</span>
</div>
</div>
<div class="p-6">
<h3 class="font-headline-lg text-headline-lg mb-3 group-hover:text-primary transition-colors">Digital Product Design Mastery</h3>
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded-full border-2 border-white shadow-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="middle-aged male tech executive portrait with glasses and professional blue shirt background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXR6aGJhV1RrERErhvTBJh4b3To1iYCA8HvkPJdgV4MdCw_g088EdKPSWsAq2N30F3Gros-K8m4IUJMM-d-N5DfnDMWvZDD1j4rAfV6iZ089YswJfCIUtquLNYhLMXUVpRdUUQTZoY65RVQV4QNzd18l_dStam4ogkQcH9FkycWJMbpUGIfqO_Qvmw5np-xVD4BlmUNfeJenHNPqS0fU7lBfn0EN4NjuvxcDNmaT31oHuXTv1msb4hvusneqNM1h56anBJrgKOMp8"/>
</div>
<div>
<p class="font-label-bold text-on-surface">James Wilson</p>
<p class="text-caption-xs text-outline">Sr. UX Strategist</p>
</div>
</div>
<div class="flex items-center justify-between border-t border-outline-variant/20 pt-6">
<div class="flex items-baseline gap-1">
<span class="text-headline-lg font-headline-lg text-primary">$129.00</span>
</div>
<button class="bg-surface-container-highest text-primary font-label-bold px-6 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Enroll Now</button>
</div>
</div>
</div>
<!-- Course Card 4 -->
<div class="group relative bg-white rounded-3xl overflow-hidden border border-outline-variant/30 hover:shadow-2xl transition-all duration-300">
<div class="h-56 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="high-intensity training session with athletes in a warehouse gym with dramatic lighting and smoke effects" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6_QeNgH0Yzjjvp4EhTeByPKsOzNTIiQNT_VlQR-rDDdQBD8CDSW3N_VC4fqGzg470cTg7zlCCYXooKJk1i76TnhWLrGnzEP5TdUbj0I890IVLpDe8UY12HfKBAGyMubmYpWR4pU9dmDqXJhiDi-iS8seFyNbQlinnwfWs3ZFOxh4z-IjFivSrekkxw5KfAvtgfvrXpQB9oqi-oM5BFQUyx4RWfwjXjdNJyPKQTLo0yx5KRefEGNbJcOVIwtnKG5FdZ2OEvGz9o8I"/>
<div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-orange-500 text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-caption-xs font-caption-xs">5.0 (520)</span>
</div>
<div class="absolute bottom-4 left-4">
<span class="bg-primary text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-widest">Sports</span>
</div>
</div>
<div class="p-6">
<h3 class="font-headline-lg text-headline-lg mb-3 group-hover:text-primary transition-colors">Elite Performance: Strength &amp; Conditioning</h3>
<div class="flex items-center gap-3 mb-6">
<div class="w-10 h-10 rounded-full border-2 border-white shadow-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="determined female fitness coach looking at the camera with sharp focus in a gym environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqel3bZbujXJPHKkQADQTfF6mKzS4JHg-oznW9RuSKt1C8uNDsPG15tD9qMwCBslxbFOZLs5RAEMTI5DJG3FAHw3Ikqdb88xaqKoVi0taxUtFMvQHxob0og4UDL-4U-HQXQOnk1jG1n4OR6vjNSuCOa50BxZOzEks5JRy1-g-E-OKw9oJ1lwDIIQEnsRUceQDzHh2fY1eSNRzi-GIUvg9zSInJ_f5rRii90vI1u-m9W9R-ZgZH--Q8zLj4Ilet4LyKUgAHtuaK65g"/>
</div>
<div>
<p class="font-label-bold text-on-surface">Coach Sarah Chen</p>
<p class="text-caption-xs text-outline">Olympic Strength Coach</p>
</div>
</div>
<div class="flex items-center justify-between border-t border-outline-variant/20 pt-6">
<div class="flex items-baseline gap-1">
<span class="text-headline-lg font-headline-lg text-primary">$95.00</span>
</div>
<button class="bg-surface-container-highest text-primary font-label-bold px-6 py-2 rounded-full hover:bg-primary hover:text-white transition-all">Enroll Now</button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="flex justify-center pt-12">
<div class="flex items-center gap-2">
<button class="w-10 h-10 rounded-full flex items-center justify-center text-outline hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="w-10 h-10 rounded-full bg-primary text-white font-bold">1</button>
<button class="w-10 h-10 rounded-full text-on-surface-variant font-medium hover:bg-surface-container-high transition-colors">2</button>
<button class="w-10 h-10 rounded-full text-on-surface-variant font-medium hover:bg-surface-container-high transition-colors">3</button>
<span class="text-outline">...</span>
<button class="w-10 h-10 rounded-full text-on-surface-variant font-medium hover:bg-surface-container-high transition-colors">12</button>
<button class="w-10 h-10 rounded-full flex items-center justify-center text-outline hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</section>
</div>
</main>
<!-- Footer (Shared Component) -->
<footer class="bg-gray-50 dark:bg-gray-950 full-width py-24 border-t border-gray-200 dark:border-gray-800">
<div class="max-w-[1280px] mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="col-span-1 md:col-span-1">
<div class="text-xl font-black text-blue-600 dark:text-white mb-6">TeachMe</div>
<p class="font-lexend text-sm text-gray-500 dark:text-gray-400 mb-6">Empowering minds through elite mentorship and results-oriented education across sports and academics.</p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-white dark:bg-gray-900 shadow-sm border border-gray-100 dark:border-gray-800 flex items-center justify-center text-gray-400 hover:text-blue-600 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="public">public</span>
</a>
<a class="w-10 h-10 rounded-full bg-white dark:bg-gray-900 shadow-sm border border-gray-100 dark:border-gray-800 flex items-center justify-center text-gray-400 hover:text-blue-600 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="hub">hub</span>
</a>
</div>
</div>
<div>
<h4 class="font-label-bold text-on-surface mb-6">Quick Links</h4>
<div class="space-y-4">
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all" href="#">Privacy Policy</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all" href="#">Terms of Service</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all" href="#">Help Center</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-all" href="#">Contact Us</a>
</div>
</div>
<div>
<h4 class="font-label-bold text-on-surface mb-6">Course Categories</h4>
<div class="space-y-4">
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 transition-all" href="#">Academics</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 transition-all" href="#">Martial Arts</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 transition-all" href="#">Sports &amp; Athletics</a>
<a class="block font-lexend text-sm text-gray-500 dark:text-gray-400 hover:text-blue-600 transition-all" href="#">Creative Arts</a>
</div>
</div>
<div>
<h4 class="font-label-bold text-on-surface mb-6">Stay Updated</h4>
<p class="font-lexend text-sm text-gray-500 dark:text-gray-400 mb-4">Get the latest course updates and mentor insights directly to your inbox.</p>
<div class="flex gap-2">
<input class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg px-4 py-2 text-sm w-full focus:ring-primary focus:border-primary" placeholder="Email address" type="email"/>
<button class="bg-primary text-white p-2 rounded-lg hover:scale-105 transition-all">
<span class="material-symbols-outlined" data-icon="send">send</span>
</button>
</div>
</div>
</div>
<div class="max-w-[1280px] mx-auto px-8 mt-16 pt-8 border-t border-gray-200 dark:border-gray-800 text-center">
<p class="font-lexend text-sm text-gray-500 dark:text-gray-400">© 2024 TeachMe. All rights reserved.</p>
</div>
</footer>
</body></html>