<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create New Course - TeachMe</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
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
                borderRadius: {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                spacing: {
                    "container-max": "80rem",
                    "stack-gap-lg": "2rem",
                    "stack-gap-sm": "0.5rem",
                    "stack-gap-md": "1rem",
                    "gutter": "2rem",
                    "section-padding-y": "6rem"
                },
                fontFamily: {
                    "body-md": ["Lexend"],
                    "caption-xs": ["Lexend"],
                    "headline-xl": ["Lexend"],
                    "label-bold": ["Lexend"],
                    "body-lg": ["Lexend"],
                    "display": ["Lexend"],
                    "headline-lg": ["Lexend"]
                },
                fontSize: {
                    "body-md": ["1rem", {
                        lineHeight: "1.5",
                        fontWeight: "400"
                    }],
                    "caption-xs": ["0.75rem", {
                        lineHeight: "1",
                        letterSpacing: "0.05em",
                        fontWeight: "700"
                    }],
                    "headline-xl": ["3rem", {
                        lineHeight: "1.2",
                        letterSpacing: "-0.01em",
                        fontWeight: "800"
                    }],
                    "label-bold": ["0.875rem", {
                        lineHeight: "1.25",
                        fontWeight: "700"
                    }],
                    "body-lg": ["1.125rem", {
                        lineHeight: "1.75",
                        fontWeight: "400"
                    }],
                    "display": ["4.5rem", {
                        lineHeight: "1.1",
                        letterSpacing: "-0.02em",
                        fontWeight: "900"
                    }],
                    "headline-lg": ["1.875rem", {
                        lineHeight: "1.3",
                        fontWeight: "700"
                    }]
                }
            }
        }
    }
    </script>
    <style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }
    </style>
</head>

<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
    <!-- Focused Task Header (Suppresses Global Nav) -->
    <header
        class="sticky top-0 z-50 bg-surface/90 backdrop-blur-md border-b border-surface-variant px-6 h-16 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <button aria-label="Close and return to dashboard"
                class="w-10 h-10 rounded-full hover:bg-surface-container-high flex items-center justify-center text-on-surface-variant transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
            <div class="h-6 w-px bg-outline-variant hidden md:block"></div>
            <div class="text-headline-lg font-headline-lg text-primary tracking-tighter hidden md:block">
                TeachMe
            </div>
        </div>
        <div class="absolute left-1/2 -translate-x-1/2 flex items-center gap-2">
            <span class="text-label-bold font-label-bold text-on-surface">Draft:</span>
            <span class="text-body-md font-body-md text-on-surface-variant">Untitled Course</span>
        </div>
        <div class="flex items-center gap-3">
            <button
                class="hidden md:block px-4 py-2 rounded-lg text-label-bold font-label-bold text-on-surface hover:bg-surface-container-high transition-colors">
                Save Draft
            </button>
            <button
                type="submit" form="courseForm" class="px-5 py-2.5 rounded-lg bg-primary text-on-primary text-label-bold font-label-bold shadow-[0_4px_14px_0_rgba(0,69,189,0.3)] hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2">
                Continue
                <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
            </button>
        </div>
    </header>
    <main
        class="flex-1 w-full max-w-container-max mx-auto px-gutter py-8 md:py-12 flex flex-col md:flex-row gap-8 lg:gap-16">
        <!-- Left Sidebar: Stepper -->
        <aside class="w-full md:w-64 shrink-0">
            <nav aria-label="Course creation steps">
                <ul class="flex md:flex-col gap-2 overflow-x-auto pb-4 md:pb-0 hide-scrollbar">
                    <!-- Step 1 (Active) -->
                    <li class="relative min-w-max">
                        <a class="flex items-center gap-3 p-3 rounded-xl bg-primary-fixed text-on-primary-fixed"
                            href="#">
                            <div
                                class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center text-label-bold font-label-bold shadow-sm">
                                1
                            </div>
                            <span class="text-label-bold font-label-bold">General Info</span>
                        </a>
                    </li>
                    <!-- Step 2 -->
                    <li class="relative min-w-max">
                        <a class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-high text-on-surface-variant transition-colors group"
                            href="#">
                            <div
                                class="w-8 h-8 rounded-full border-2 border-outline-variant flex items-center justify-center text-label-bold font-label-bold group-hover:border-on-surface-variant transition-colors">
                                2
                            </div>
                            <span class="text-body-md font-body-md font-medium">Curriculum</span>
                        </a>
                    </li>
                    <!-- Step 3 -->
                    <li class="relative min-w-max">
                        <a class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-high text-on-surface-variant transition-colors group"
                            href="#">
                            <div
                                class="w-8 h-8 rounded-full border-2 border-outline-variant flex items-center justify-center text-label-bold font-label-bold group-hover:border-on-surface-variant transition-colors">
                                3
                            </div>
                            <span class="text-body-md font-body-md font-medium">Pricing</span>
                        </a>
                    </li>
                    <!-- Step 4 -->
                    <li class="relative min-w-max">
                        <a class="flex items-center gap-3 p-3 rounded-xl hover:bg-surface-container-high text-on-surface-variant transition-colors group"
                            href="#">
                            <div
                                class="w-8 h-8 rounded-full border-2 border-outline-variant flex items-center justify-center text-label-bold font-label-bold group-hover:border-on-surface-variant transition-colors">
                                4
                            </div>
                            <span class="text-body-md font-body-md font-medium">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- Right Content: Form Canvas -->
        <div class="flex-1 max-w-3xl">
            <div class="mb-stack-gap-lg">
                <h1 class="text-headline-xl font-headline-xl text-on-surface mb-2">Basic Details</h1>
                <p class="text-body-lg font-body-lg text-on-surface-variant">Start by giving your course a strong
                    identity. You can always change this later.</p>
            </div>
            <form id="courseForm" action="{{ route('courses.store') }}" method="POST" class="flex flex-col gap-10">
                @csrf
                <!-- Title & Subtitle Section -->
                <div
                    class="flex flex-col gap-stack-gap-md p-6 bg-surface-container-lowest rounded-xl border border-surface-variant shadow-sm">
                    <div class="flex flex-col gap-2">
                        <label class="text-label-bold font-label-bold text-on-surface" for="title">Course
                            Title</label>
                        <input
                            class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-body-md font-body-md text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all placeholder:text-outline-variant"
                            name="title" id="title" placeholder="e.g., Advanced UI Design Masterclass" type="text"
                            value="{{ old('title') }}" required />
                        <p class="text-caption-xs font-caption-xs text-outline font-normal">Keep it short, clear, and
                            descriptive. Max 60 characters.</p>
                    </div>
                    <div class="flex flex-col gap-2 mt-4">
                        <label class="text-label-bold font-label-bold text-on-surface"
                            for="course-subtitle">Description</label>
                        <textarea id="description" name="description" rows="5"
                            class="w-full bg-surface-container-low border-none rounded-lg px-4 py-3 text-body-md font-body-md text-on-surface focus:ring-2 focus:ring-primary focus:bg-surface-container-lowest transition-all resize-none placeholder:text-outline-variant"
                            placeholder="Briefly describe the course..." required>{{ old('description') }}</textarea>
                    </div>
                </div>
                <!-- Course Type Selection (Bento Grid) -->
                <div class="flex flex-col gap-stack-gap-md">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-headline-lg font-headline-lg text-on-surface text-xl">Delivery Format</h2>
                        <p class="text-body-md font-body-md text-on-surface-variant">How will students consume this
                            content?</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Type: Online (Active) -->
                        <label class="relative cursor-pointer group">
                            <input checked="" class="peer sr-only" name="course-type" type="checkbox" value="online" />
                            <div
                                class="h-full p-5 rounded-xl border-2 border-surface-variant bg-surface-container-lowest peer-checked:border-primary peer-checked:bg-primary-fixed/20 hover:border-primary-fixed transition-all flex flex-col gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">play_circle</span>
                                </div>
                                <div>
                                    <h3 class="text-label-bold font-label-bold text-on-surface mb-1">Online Self-Paced
                                    </h3>
                                    <p
                                        class="text-caption-xs font-caption-xs text-on-surface-variant font-normal leading-snug">
                                        Pre-recorded video lessons students watch anytime.</p>
                                </div>
                                <div
                                    class="absolute top-4 right-4 text-primary opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                </div>
                            </div>
                        </label>
                        <!-- Type: Live -->
                        <label class="relative cursor-pointer group">
                            <input class="peer sr-only" name="course-type" type="checkbox" value="live" />
                            <div
                                class="h-full p-5 rounded-xl border-2 border-surface-variant bg-surface-container-lowest peer-checked:border-primary peer-checked:bg-primary-fixed/20 hover:border-primary-fixed transition-all flex flex-col gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-fixed group-hover:text-primary group-hover:scale-110 transition-all">
                                    <span class="material-symbols-outlined">groups</span>
                                </div>
                                <div>
                                    <h3 class="text-label-bold font-label-bold text-on-surface mb-1">Live Cohort</h3>
                                    <p
                                        class="text-caption-xs font-caption-xs text-on-surface-variant font-normal leading-snug">
                                        Scheduled live sessions via Zoom or integrated classroom.</p>
                                </div>
                                <div
                                    class="absolute top-4 right-4 text-primary opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                </div>
                            </div>
                        </label>
                        <!-- Type: Offline -->
                        <label class="relative cursor-pointer group">
                            <input class="peer sr-only" name="course-type" type="checkbox" value="offline" />
                            <div
                                class="h-full p-5 rounded-xl border-2 border-surface-variant bg-surface-container-lowest peer-checked:border-primary peer-checked:bg-primary-fixed/20 hover:border-primary-fixed transition-all flex flex-col gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-fixed group-hover:text-primary group-hover:scale-110 transition-all">
                                    <span class="material-symbols-outlined">location_on</span>
                                </div>
                                <div>
                                    <h3 class="text-label-bold font-label-bold text-on-surface mb-1">In-Person Class
                                    </h3>
                                    <p
                                        class="text-caption-xs font-caption-xs text-on-surface-variant font-normal leading-snug">
                                        Physical location meetings for local workshops.</p>
                                </div>
                                <div
                                    class="absolute top-4 right-4 text-primary opacity-0 peer-checked:opacity-100 transition-opacity">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- Course Cover Section -->
                <div class="flex flex-col gap-stack-gap-md">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-headline-lg font-headline-lg text-on-surface text-xl">Course Cover</h2>
                        <p class="text-body-md font-body-md text-on-surface-variant">Upload a high-quality image to
                            represent your course in the marketplace.</p>
                    </div>
                    <!-- Upload Area -->
                    <div
                        class="relative w-full h-64 rounded-xl border-2 border-dashed border-outline-variant bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col items-center justify-center cursor-pointer group overflow-hidden">
                        <!-- Simulated Uploaded Image State -->
                        <div
                            class="absolute inset-0 w-full h-full p-2 opacity-50 group-hover:opacity-30 transition-opacity">
                            <div class="w-full h-full rounded-lg bg-cover bg-center"
                                data-alt="abstract flowing gradient background with vibrant blue and purple hues resembling modern tech educational branding"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDzhxSE6xRe3RDExo83t4-7yxD4WtB_9YrQ_PozDYUl_JzmMO9C36jdvk-ESJ505syIK4yRVAX23xpFXy16yZNdoNJoXg4NlRtntNa6WquiwEjh-2BQHe_-4n-1MuzdUcMvPOSyORAyZGevyo2NRY5erw29LiQ_GutDOlhmbbQWdEFvWPQ9HqgG3570mUk-PVOf552c8tfcCIto3mF-yghwBp7x-ZicAgpgYXNOlvhY97_gtyzWjcxY2_f38Ysuw7s6CiVUZ1DB68Q');">
                            </div>
                        </div>
                        <div class="relative z-10 flex flex-col items-center text-center p-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface shadow-sm flex items-center justify-center text-primary mb-3 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined">cloud_upload</span>
                            </div>
                            <span class="text-label-bold font-label-bold text-on-surface mb-1">Click to upload or drag
                                and drop</span>
                            <span class="text-caption-xs font-caption-xs text-on-surface-variant font-normal">SVG, PNG,
                                JPG or GIF (max. 800x400px)</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>