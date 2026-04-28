<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>TeachMe - Student Profile</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "error": "#ba1a1a",
                      "secondary-fixed-dim": "#c1c6d7",
                      "tertiary": "#902e00",
                      "surface-container-lowest": "#ffffff",
                      "surface-container": "#ededf9",
                      "error-container": "#ffdad6",
                      "on-primary-container": "#e2e6ff",
                      "background": "#faf8ff",
                      "on-secondary": "#ffffff",
                      "on-surface": "#191b24",
                      "on-tertiary-fixed-variant": "#812800",
                      "tertiary-fixed-dim": "#ffb59b",
                      "surface-container-low": "#f3f3ff",
                      "secondary-container": "#dde2f4",
                      "surface-container-highest": "#e1e1ee",
                      "on-tertiary-fixed": "#380d00",
                      "on-primary-fixed": "#00174c",
                      "surface-container-high": "#e7e7f3",
                      "outline": "#737687",
                      "secondary-fixed": "#dde2f4",
                      "on-tertiary-container": "#ffe1d7",
                      "secondary": "#585e6d",
                      "surface-variant": "#e1e1ee",
                      "on-error-container": "#93000a",
                      "tertiary-container": "#b93d00",
                      "inverse-on-surface": "#f0f0fc",
                      "primary-fixed": "#dbe1ff",
                      "surface-tint": "#0052de",
                      "primary-container": "#135bec",
                      "on-tertiary": "#ffffff",
                      "surface-dim": "#d9d9e5",
                      "surface": "#faf8ff",
                      "on-secondary-fixed-variant": "#414755",
                      "outline-variant": "#c3c5d8",
                      "on-secondary-fixed": "#161c28",
                      "tertiary-fixed": "#ffdbcf",
                      "primary": "#0045bd",
                      "on-primary": "#ffffff",
                      "surface-bright": "#faf8ff",
                      "on-primary-fixed-variant": "#003daa",
                      "primary-fixed-dim": "#b4c5ff",
                      "on-secondary-container": "#5e6473",
                      "on-surface-variant": "#434655",
                      "on-error": "#ffffff",
                      "inverse-surface": "#2e3039",
                      "on-background": "#191b24",
                      "inverse-primary": "#b4c5ff"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "container-max": "80rem",
                      "section-padding-y": "6rem",
                      "stack-gap-sm": "0.5rem",
                      "gutter": "2rem",
                      "stack-gap-md": "1rem",
                      "stack-gap-lg": "2rem"
              },
              "fontFamily": {
                      "body-lg": [
                              "Lexend"
                      ],
                      "headline-lg": [
                              "Lexend"
                      ],
                      "display": [
                              "Lexend"
                      ],
                      "caption-xs": [
                              "Lexend"
                      ],
                      "label-bold": [
                              "Lexend"
                      ],
                      "headline-xl": [
                              "Lexend"
                      ],
                      "body-md": [
                              "Lexend"
                      ]
              },
              "fontSize": {
                      "body-lg": [
                              "1.125rem",
                              {
                                      "lineHeight": "1.75",
                                      "fontWeight": "400"
                              }
                      ],
                      "headline-lg": [
                              "1.875rem",
                              {
                                      "lineHeight": "1.3",
                                      "fontWeight": "700"
                              }
                      ],
                      "display": [
                              "4.5rem",
                              {
                                      "lineHeight": "1.1",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "900"
                              }
                      ],
                      "caption-xs": [
                              "0.75rem",
                              {
                                      "lineHeight": "1",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-bold": [
                              "0.875rem",
                              {
                                      "lineHeight": "1.25",
                                      "fontWeight": "700"
                              }
                      ],
                      "headline-xl": [
                              "3rem",
                              {
                                      "lineHeight": "1.2",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "800"
                              }
                      ],
                      "body-md": [
                              "1rem",
                              {
                                      "lineHeight": "1.5",
                                      "fontWeight": "400"
                              }
                      ]
              }
            },
          }
        }
    </script>
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
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>
<body class="bg-background font-body-md text-on-background antialiased pt-20">
<!-- TopNavBar -->
<nav class="bg-white/80 dark:bg-slate-950/80 backdrop-blur-md text-blue-600 dark:text-blue-400 font-['Lexend'] antialiased docked full-width top-0 z-50 border-b border-slate-200 dark:border-slate-800 shadow-sm fixed top-0 w-full flex justify-between items-center px-8 h-20 max-w-[1280px] mx-auto left-0 right-0">
<div class="text-2xl font-black tracking-tight text-blue-600 dark:text-blue-500">
            TeachMe
        </div>
<div class="hidden md:flex gap-8 items-center">
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-200 active:scale-95 duration-150" href="#">Dasbhoard</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-200 active:scale-95 duration-150" href="#">Courses</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-200 active:scale-95 duration-150" href="#">Mentors</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-blue-700 dark:hover:text-blue-300 transition-colors duration-200 active:scale-95 duration-150" href="#">Settings</a>
<!-- User is viewing a profile, so active state logic is suppressed for generic tabs. Profile itself isn't a top level nav item here, but acts as intent. We leave all inactive as requested in semantic rules when viewing a specific profile entity not in the main nav. -->
</div>
<div class="flex items-center gap-4">
<button aria-label="notifications" class="text-slate-600 hover:text-blue-700 transition-colors duration-200">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button aria-label="chat" class="text-slate-600 hover:text-blue-700 transition-colors duration-200">
<span class="material-symbols-outlined" data-icon="chat">chat</span>
</button>
<div class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden ml-2 cursor-pointer border-2 border-transparent hover:border-blue-600 transition-colors">
<img alt="User Profile Avatar" class="w-full h-full object-cover" data-alt="professional portrait of young man in corporate environment with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7NgHMvPdI7uRokTsSGyzi-RFA2PrVdvK5u7j5cqlzPGX7r4QmjqnKOlaaoxU9FXt8TZMy5643o1akHh1IIPl2zO3zPPEfO43k0sUj4OPiTlZ3rSHG86_ltsIZKT3gK9HiAW2EmV_oF8aPg0i_eyy8sVfpfR81RoX1ix8wfcKMFSlZCoXG69fD4jISonwN6QsE76ntQZgdUxpXrBAhySfR4uRefxexfC2_bUVqWmOK3LSov15XWlFwZC21yXN5Gr-ElKxubVvH9uk"/>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="max-w-[1280px] mx-auto px-8 py-section-padding-y">
<!-- Header / Identity Section -->
<header class="flex flex-col md:flex-row items-start gap-gutter mb-16">
<div class="w-40 h-40 rounded-full border-4 border-white shadow-xl bg-surface-container overflow-hidden shrink-0 relative">
<img alt="Alex Johnson Profile" class="w-full h-full object-cover" data-alt="high quality portrait of a young male professional student looking confident with a slight smile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEOG75YsguKsOPeC7qvcLR8pteUEH7Npe3KouHDh5t6ZwsBNS09WdNv02bIyMU2_QrR3O1RTGv1nyp3mnB820UgGSPbUmIZsD1NCb82PukCTm1qOvFWswl0SoIPYEMmyh_eR4HzDzgjMuQxszTANKSbcm31CW1GElk7csAq6T0szLZOSwE8UbxbYjSogPKADNktGworMhFvp5SiXBdu_W1gMpoDvAyrAYCuPqZqQYYGR7vMPJ5VgbE9PVfdBOJEoQNbYv3rlM6Vqk"/>
</div>
<div class="flex flex-col justify-center flex-grow pt-4">
<div class="flex items-center gap-3 mb-2">
<h1 class="font-headline-xl text-headline-xl text-on-surface">Alex Johnson</h1>
<div class="flex items-center gap-1 bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full font-label-bold text-label-bold">
<span class="material-symbols-outlined text-[18px]" data-icon="verified" data-weight="fill" style="font-variation-settings: 'FILL' 1;">verified</span>
                        Verified Student
                    </div>
</div>
<p class="font-body-lg text-body-lg text-secondary mb-6 max-w-2xl">
                    Passionate about secure systems and clean user interfaces. Currently pursuing a specialization in ethical hacking while building responsive web applications.
                </p>
<div class="flex gap-4">
<button class="bg-primary text-on-primary font-label-bold text-label-bold px-6 py-3 rounded-lg shadow-lg shadow-primary/20 hover:scale-105 transition-transform duration-200">
                        Connect
                    </button>
<button class="bg-surface-container text-on-surface font-label-bold text-label-bold px-6 py-3 rounded-lg border border-outline-variant hover:bg-surface-container-high transition-colors duration-200">
                        Message
                    </button>
</div>
</div>
</header>
<!-- Grid Layout for Dashboard -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Left Column: Overview & Current Focus -->
<div class="lg:col-span-8 flex flex-col gap-gutter">
<!-- Learning Overview -->
<section class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-shadow duration-300">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-stack-gap-md">Learning Overview</h2>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
<!-- Stat Card 1 -->
<div class="bg-surface p-6 rounded-lg border border-surface-variant flex flex-col items-center justify-center text-center">
<span class="material-symbols-outlined text-primary mb-2 text-3xl" data-icon="school">school</span>
<span class="font-display text-[2.5rem] leading-none text-on-surface mb-1">14</span>
<span class="font-label-bold text-label-bold text-secondary">Courses Completed</span>
</div>
<!-- Stat Card 2 -->
<div class="bg-surface p-6 rounded-lg border border-surface-variant flex flex-col items-center justify-center text-center">
<span class="material-symbols-outlined text-primary mb-2 text-3xl" data-icon="workspace_premium">workspace_premium</span>
<span class="font-display text-[2.5rem] leading-none text-on-surface mb-1">6</span>
<span class="font-label-bold text-label-bold text-secondary">Certificates Earned</span>
</div>
<!-- Stat Card 3 -->
<div class="bg-surface p-6 rounded-lg border border-surface-variant flex flex-col items-center justify-center text-center">
<span class="material-symbols-outlined text-primary mb-2 text-3xl" data-icon="schedule">schedule</span>
<span class="font-display text-[2.5rem] leading-none text-on-surface mb-1">284</span>
<span class="font-label-bold text-label-bold text-secondary">Learning Hours</span>
</div>
</div>
</section>
<!-- Current Focus -->
<section class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-shadow duration-300">
<div class="flex justify-between items-center mb-stack-gap-md">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Current Focus</h2>
<button class="text-primary font-label-bold text-label-bold hover:underline">View All</button>
</div>
<div class="flex flex-col gap-4">
<!-- Course 1 -->
<div class="flex items-center gap-6 p-4 rounded-lg bg-surface-container-low border border-transparent hover:border-outline-variant transition-colors group">
<div class="w-16 h-16 rounded-lg bg-gradient-to-br from-slate-800 to-slate-900 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-white" data-icon="security">security</span>
</div>
<div class="flex-grow">
<h3 class="font-label-bold text-[1.125rem] text-on-surface group-hover:text-primary transition-colors">Cyber Security Fundamentals</h3>
<p class="font-body-md text-body-md text-secondary">Module 4: Network Protocols</p>
<div class="w-full bg-surface-variant h-2 rounded-full mt-3 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 65%;"></div>
</div>
</div>
<div class="font-label-bold text-label-bold text-primary shrink-0">
                                65%
                            </div>
</div>
<!-- Course 2 -->
<div class="flex items-center gap-6 p-4 rounded-lg bg-surface-container-low border border-transparent hover:border-outline-variant transition-colors group">
<div class="w-16 h-16 rounded-lg bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-white" data-icon="code">code</span>
</div>
<div class="flex-grow">
<h3 class="font-label-bold text-[1.125rem] text-on-surface group-hover:text-primary transition-colors">Advanced React Patterns</h3>
<p class="font-body-md text-body-md text-secondary">Module 2: Custom Hooks</p>
<div class="w-full bg-surface-variant h-2 rounded-full mt-3 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 32%;"></div>
</div>
</div>
<div class="font-label-bold text-label-bold text-primary shrink-0">
                                32%
                            </div>
</div>
</div>
</section>
</div>
<!-- Right Column: Skills & Achievements -->
<div class="lg:col-span-4 flex flex-col gap-gutter">
<!-- Skills/Interests -->
<section class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-shadow duration-300">
<h2 class="font-headline-lg text-[1.5rem] text-on-surface mb-stack-gap-md">Interests &amp; Skills</h2>
<div class="flex flex-wrap gap-2">
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">UI/UX Design</span>
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">Ethical Hacking</span>
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">Public Speaking</span>
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">Frontend Dev</span>
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">Python</span>
<span class="bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-label-bold text-label-bold border border-outline-variant/50 hover:bg-surface-container-high transition-colors cursor-default">System Admin</span>
</div>
</section>
<!-- Achievements Gallery -->
<section class="bg-surface-container-lowest p-8 rounded-xl border border-surface-variant shadow-sm hover:shadow-xl hover:shadow-primary/5 transition-shadow duration-300 flex-grow">
<h2 class="font-headline-lg text-[1.5rem] text-on-surface mb-stack-gap-md">Badges</h2>
<div class="grid grid-cols-3 gap-4">
<!-- Badge 1 -->
<div class="flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-16 h-16 rounded-full bg-gradient-to-tr from-amber-200 to-amber-400 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-200 border-2 border-white">
<span class="material-symbols-outlined text-amber-900" data-icon="local_fire_department">local_fire_department</span>
</div>
<span class="font-caption-xs text-caption-xs text-center text-secondary">30 Day Streak</span>
</div>
<!-- Badge 2 -->
<div class="flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-16 h-16 rounded-full bg-gradient-to-tr from-emerald-200 to-emerald-400 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-200 border-2 border-white">
<span class="material-symbols-outlined text-emerald-900" data-icon="psychology">psychology</span>
</div>
<span class="font-caption-xs text-caption-xs text-center text-secondary">Top Learner</span>
</div>
<!-- Badge 3 -->
<div class="flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-16 h-16 rounded-full bg-gradient-to-tr from-purple-200 to-purple-400 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-200 border-2 border-white">
<span class="material-symbols-outlined text-purple-900" data-icon="forum">forum</span>
</div>
<span class="font-caption-xs text-caption-xs text-center text-secondary">Mentor</span>
</div>
<!-- Badge 4 -->
<div class="flex flex-col items-center gap-2 group cursor-pointer">
<div class="w-16 h-16 rounded-full bg-gradient-to-tr from-blue-200 to-blue-400 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform duration-200 border-2 border-white">
<span class="material-symbols-outlined text-blue-900" data-icon="bug_report">bug_report</span>
</div>
<span class="font-caption-xs text-caption-xs text-center text-secondary">Bug Hunter</span>
</div>
<!-- Empty Slot -->
<div class="flex flex-col items-center gap-2">
<div class="w-16 h-16 rounded-full bg-surface-container-highest border-2 border-dashed border-outline-variant flex items-center justify-center opacity-50">
<span class="material-symbols-outlined text-outline" data-icon="lock">lock</span>
</div>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-900 text-blue-600 dark:text-blue-400 font-['Lexend'] text-sm full-width bottom-0 border-t border-slate-200 dark:border-slate-800 flat no shadows w-full py-12 px-8 flex flex-col md:flex-row justify-between items-center gap-6 max-w-[1280px] mx-auto mt-20">
<div class="font-bold text-blue-600">
            © 2024 TeachMe. Accelerating Academic Potential.
        </div>
<div class="flex flex-wrap gap-6 justify-center">
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 underline underline-offset-4 transition-all duration-200" href="#">Privacy Policy</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 underline underline-offset-4 transition-all duration-200" href="#">Terms of Service</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 underline underline-offset-4 transition-all duration-200" href="#">Help Center</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-blue-600 dark:hover:text-blue-400 underline underline-offset-4 transition-all duration-200" href="#">Contact Support</a>
</div>
</footer>
</body></html>