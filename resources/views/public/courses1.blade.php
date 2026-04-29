<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TeachMe - Cyber Security Courses</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <!-- Navigation Header -->
    <header
        class="sticky top-0 z-50 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 gap-8">
                <!-- Logo -->
                <div class="flex items-center gap-2 shrink-0">
                    <div
                        class="size-8 bg-gradient-to-br from-primary to-blue-400 rounded-lg flex items-center justify-center text-white">
                        <span class="material-symbols-outlined text-xl">school</span>
                    </div>
                    <h1
                        class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600">
                        TeachMe</h1>
                </div>
                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-slate-400">search</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-12 py-2 border-none bg-slate-100 dark:bg-slate-800 rounded-xl focus:ring-2 focus:ring-primary text-slate-900 dark:text-slate-100 transition-all"
                            placeholder="Search courses, mentors..." type="text" value="Cyber Security" />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button class="text-slate-400 hover:text-primary">
                                <span class="material-symbols-outlined text-lg font-bold">close</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Icons & Profile -->
                <div class="flex items-center gap-4">
                    <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <button class="p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </button>
                    <div
                        class="h-8 w-8 rounded-full bg-primary/20 flex items-center justify-center border border-primary/30 overflow-hidden">
                        <img alt="Profile" class="w-full h-full object-cover"
                            data-alt="Portrait of a young male professional"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCT_NNICXgUmFKYfYVq7zrhUfmtrrdpAit5sgrRFJOhpxWGW6pqkeVkCnRhuWKyZvNVGR-0NKyEvd84Qtju_525Jli7slIertOfEE6w77fG2L5X6RhUkCuYRm-gDee4QaFnu1QqKPfhOkgU2m5Kw_33YFmgFDBrqGEUh7UQSO-p5HsuuppD7KQcuqSKugkRHkWmcP-32WnrXDRa7hnaCUmeC1TNyPNNVm_sOVuHe2l3cpu4WqTi_hpLSdGb--vv_qG6ShGto574UEI" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumbs & Stats -->
        <div class="mb-8">
            <nav class="flex text-sm text-slate-500 mb-2 gap-2">
                <a class="hover:text-primary" href="#">Home</a>
                <span>/</span>
                <span class="text-slate-900 dark:text-slate-200 font-medium">Search Results</span>
            </nav>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Cyber Security Courses</h2>
                    <p class="text-slate-500 mt-1">156 high-rated courses found for your search</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm text-slate-500">Sort by:</span>
                    <select
                        class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary">
                        <option>Most Relevant</option>
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Rating: High to Low</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-64 shrink-0 space-y-6">
                <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold text-slate-900 dark:text-white">Filters</h3>
                        <button class="text-xs text-primary font-medium hover:underline">Clear all</button>
                    </div>
                    <!-- Ratings Filter -->
                    <div class="mb-6">
                        <p
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">star</span> Ratings
                        </p>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">4.5
                                    &amp; up</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">4.0
                                    &amp; up</span>
                            </label>
                        </div>
                    </div>
                    <!-- Specialty Filter -->
                    <div class="mb-6">
                        <p
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">verified</span> Specialty
                        </p>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input checked="" class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Network
                                    Security</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Ethical
                                    Hacking</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Cloud
                                    Security</span>
                            </label>
                        </div>
                    </div>
                    <!-- Price Filter -->
                    <div class="mb-6">
                        <p
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">payments</span> Price
                        </p>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Paid</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Free</span>
                            </label>
                        </div>
                    </div>
                    <!-- Duration Filter -->
                    <div>
                        <p
                            class="text-sm font-semibold text-slate-700 dark:text-slate-300 mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">schedule</span> Duration
                        </p>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">0-3
                                    Hours</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">3-10
                                    Hours</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input class="rounded text-primary focus:ring-primary" type="checkbox" />
                                <span
                                    class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">10+
                                    Hours</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Promo Card -->
                <div class="bg-primary rounded-xl p-6 text-white text-center">
                    <h4 class="font-bold mb-2">Go Premium</h4>
                    <p class="text-sm text-white/80 mb-4">Unlimited access to 5,000+ top courses</p>
                    <button class="w-full py-2 bg-white text-primary rounded-lg font-bold text-sm">Upgrade Now</button>
                </div>
            </aside>
            <!-- Course Grid -->
            <div class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="Cyber security background"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Hacker typing on laptop in dark room"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2KHOtmCiulJ2kCiaw1ZDzgV97FdjyMHvMlEN_uGJUUzWPIPT7QzNC848hvhrVZHy9gTnPKOk37hZ4xyRXv9NJDmfaWpp_pcUAzkyu2oO7YZPiZ23cBWLCh4EoFpzxQbj9uGEiwkGpVESpmqSzgSg3-0Y6EW7sD4GbdX46ToP35FpMObMLBtSFcdHL-4JmlEXPEWfGA26VkSwtNHyu9APRvthJrLSdpxniLETy3f3PWqan5rSlUb3FQVtaYe0F7A1xsSfse2esSNs" />
                            <div
                                class="absolute top-2 right-2 bg-primary text-white text-[10px] font-bold px-2 py-1 rounded uppercase">
                                Best Seller</div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Ethical Hacking 101: From Zero to Hero</h3>
                            <p class="text-sm text-slate-500 mb-3">By Dr. Alex Rivera</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.9</span>
                                </div>
                                <span class="text-xs text-slate-400">(12,405 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$89.99</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="Networking concept"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Data server room with blue lights"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuApz-p7LcHochDFADr7chh5qkUiXgGApU644wrVkhdmRoRQjKfaA-1tdk52pq9-81jn3f5GmWKDej_tcVbY7a9Ejzi1MFusaENYgEByiNwBzkJO7i9iaNpohzSyFirsEPMCH20gx3_Lp8y8YWV6i2H6-wEJuLsLMDIhQGbb3w49PkI5BUm5k46Wqo657eScMnUptH0xVhX6gHedvg-3kW6llh81_Abo025jLMjXHpl75FgTP9JYH0v9oy7j7CfrdQSHugd_dnZ8I6s" />
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Network Security Essentials</h3>
                            <p class="text-sm text-slate-500 mb-3">By Sarah Jenkins</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.7</span>
                                </div>
                                <span class="text-xs text-slate-400">(8,920 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$45.00</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="Cloud concept"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Abstract blue digital connection globe"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwXA1r4_Id41uq_dZ3quKJ7FYlXiHV8FnCr0NCOa1rRcaT7hWSseedsKfXLHcGfuW0NaNPcipWR6l_BWj5giHOMcTuG03vCe1ZxjTnfEzn30pHDREU7EHVJ1GWU9TTsfjrDoOl0D_ZvMlIfuZqTBP6bYEzMpKRqnQOSO3zTn3bKE4R4r8estV0Y7Lx9OdJuR1Gw3VwPH3GP5r36fB1cJ3vI7fzQgjpUTMVOROWto4rKxXz1rnwOt5MVu_5Gtvac9fs2ZVT2oempFE" />
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Cloud Security Mastery</h3>
                            <p class="text-sm text-slate-500 mb-3">By Michael Chen</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.8</span>
                                </div>
                                <span class="text-xs text-slate-400">(5,112 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$120.00</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="App interface"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Cyber security shield on smartphone screen"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDR23nc8hXHmHAA5ilx2JCAp9gvLiRB6GeujkmOuIcfnUgORpTwHo0WCjzNFxFlaZwQMY2zMEdx0JzUTylG99Qu6nqWAjnMzI26TsbFsJmkNtjo5ltK92LZB0jicix5NbA6gCWADuyf6o-_FHuSJSU_FHG9ouokrOs6CgmqRzTmQmMmg4JXrVDJ_NxMW4baVH_BHMU48-DqY-otOq9djkAqB0l0ub9b2COK-rvlX_s5e6bRql3o4VUtwhKEmfSsW_sjydl5vU_ADmk" />
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Mobile App Penetration Testing</h3>
                            <p class="text-sm text-slate-500 mb-3">By CyberGuard Academy</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.6</span>
                                </div>
                                <span class="text-xs text-slate-400">(2,140 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$74.99</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="Coding"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Software code on dark screen"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCc7qc9Ym2ZN9I6WiXybAjuu-llu5qzEaD_j15YONZyU133K1yoko5E28wdGa8dr0hpHEOdlL2oHBiIMCUkacwwQwYkJkQbmTbfwFUtBN8m7HEe9i-g0SDWAdVy2KtJurWfTCk-Cw9GxxlEuIJgwB0txsA67RviYLdpX26cHHGiSblaQxXdsCyewaj53uefnIcfE2sgJnB7tLASWf9RQsC51FcCBB8ia7AjdQL3EMflKIDrTcI1LZ4H1nfWiUTXz_9sXfy-eDMv5kM" />
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Web Vulnerabilities &amp; Fixes</h3>
                            <p class="text-sm text-slate-500 mb-3">By Intro to Hacking</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.5</span>
                                </div>
                                <span class="text-xs text-slate-400">(15,800 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$19.99</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group">
                        <div class="aspect-video relative overflow-hidden">
                            <img alt="Compliance"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                data-alt="Blue digital padlock icon"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDszAxRF2oMSIzvjPzsSl92NFN5caSWlDaOWpxQDGuPtvBnTtfqA3YfEHdoHsEVXw4NcNWgZQE3E4NhbWD1_Hvi83rL5l1mGOUqJRcoX83IlbS5RsEbutM-kU-op9LQVjZBR92jZbtcH2W3JUiIljwySgU7WjP4012TwuX2lEON1mlvt2tGpu5gInDDpgySMowbToaecaXthrqrwWZkbammLHXzAfYOcgLJFYzMpUhBml1KXn_KnArFm8A__1T4fEu-mzEbbGNsyyA" />
                            <div
                                class="absolute top-2 left-2 bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded uppercase">
                                New</div>
                        </div>
                        <div class="p-5">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                Intro to Compliance &amp; GDPR</h3>
                            <p class="text-sm text-slate-500 mb-3">By Elena Kostas</p>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">4.3</span>
                                </div>
                                <span class="text-xs text-slate-400">(432 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">$59.99</span>
                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center gap-1">
                        <button
                            class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-400 hover:border-primary hover:text-primary transition-all">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="size-10 rounded-lg bg-primary text-white font-bold text-sm">1</button>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-medium text-sm">2</button>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-medium text-sm">3</button>
                        <span class="px-2 text-slate-400">...</span>
                        <button
                            class="size-10 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-600 dark:text-slate-400 font-medium text-sm">14</button>
                        <button
                            class="p-2 border border-slate-200 dark:border-slate-800 rounded-lg text-slate-400 hover:border-primary hover:text-primary transition-all">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="size-6 bg-primary rounded flex items-center justify-center text-white">
                            <span class="material-symbols-outlined text-xs">school</span>
                        </div>
                        <h2 class="font-bold text-slate-900 dark:text-white">TeachMe</h2>
                    </div>
                    <p class="text-sm text-slate-500 max-w-xs mb-6">Empowering learners worldwide with the best online
                        courses from top mentors. Start your journey today.</p>
                    <div class="flex gap-4">
                        <a class="text-slate-400 hover:text-primary" href="#"><span
                                class="material-symbols-outlined">public</span></a>
                        <a class="text-slate-400 hover:text-primary" href="#"><span
                                class="material-symbols-outlined">alternate_email</span></a>
                        <a class="text-slate-400 hover:text-primary" href="#"><span
                                class="material-symbols-outlined">rss_feed</span></a>
                    </div>
                </div>
                <div>
                    <h5 class="font-bold text-slate-900 dark:text-white mb-4">Explore</h5>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li><a class="hover:text-primary" href="#">Courses</a></li>
                        <li><a class="hover:text-primary" href="#">Mentors</a></li>
                        <li><a class="hover:text-primary" href="#">Blog</a></li>
                        <li><a class="hover:text-primary" href="#">Webinars</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold text-slate-900 dark:text-white mb-4">Support</h5>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li><a class="hover:text-primary" href="#">Help Center</a></li>
                        <li><a class="hover:text-primary" href="#">Contact Us</a></li>
                        <li><a class="hover:text-primary" href="#">Terms of Service</a></li>
                        <li><a class="hover:text-primary" href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-100 dark:border-slate-800 text-center text-xs text-slate-400">
                © 2024 TeachMe Platform. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>