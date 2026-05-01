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
                    <form action="{{ route('courses.index') }}" method="GET" id="searchForm">
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-slate-400">search</span>
                            </div>

                            {{-- Added id="searchInput" --}}
                            <input id="searchInput" name="search"
                                class="block w-full pl-10 pr-12 py-2 border-none bg-slate-100 dark:bg-slate-800 rounded-xl focus:ring-2 focus:ring-primary text-slate-900 dark:text-slate-100 transition-all"
                                placeholder="Search courses, mentors..." type="text" value="{{ request('search') }}" />

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                {{-- If there is a search term, show the X button --}}
                                @if(request('search'))
                                <button type="button" onclick="clearSearch()"
                                    class="text-slate-400 hover:text-primary flex items-center">
                                    <span class="material-symbols-outlined text-lg font-bold">close</span>
                                </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <script>
                function clearSearch() {
                    // 1. Find the input field
                    const input = document.getElementById('searchInput');

                    // 2. Clear the text
                    input.value = '';

                    // 3. Submit the form to reload all courses
                    document.getElementById('searchForm').submit();
                }
                </script>
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
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white">
                        @if(request('search'))
                        Results for "{{ request('search') }}"
                        @elseif(request('category'))
                        {{ $courses->first()?->category?->name ?? 'Category' }} Courses
                        @else
                        All Available Courses
                        @endif
                    </h2>
                    <p class="text-slate-500 mt-1">
                        {{ $courses->total() }} courses found
                        @if(request('search'))
                        for your search
                        @endif
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm text-slate-500">Sort by:</span>
                    <select id="sortSelect" onchange="applyFilters()"
                        class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-lg text-sm focus:ring-primary cursor-pointer">
                        <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Most Relevant</option>
                        <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                        <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to
                            High</option>
                        <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High
                            to Low</option>
                    </select>
                </div>

                <script>
                function applyFilters() {
                    // 1. Get the current sort value
                    const sortValue = document.getElementById('sortSelect').value;

                    // 2. Get the current search value (if it exists in your search input)
                    const searchInput = document.getElementById('searchInput');
                    const searchValue = searchInput ? searchInput.value : '';

                    // 3. Create a URL search params object
                    const params = new URLSearchParams(window.location.search);

                    // 4. Update the params
                    if (sortValue) {
                        params.set('sort', sortValue);
                    } else {
                        params.delete('sort');
                    }

                    if (searchValue) {
                        params.set('search', searchValue);
                    }

                    // 5. Reload the page with the combined filters
                    window.location.href = window.location.pathname + '?' + params.toString();
                }
                </script>
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
                <div class="mb-6 text-sm text-slate-500">
                    Showing {{ $courses->firstItem() }} to {{ $courses->lastItem() }} of {{ $courses->total() }} courses
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    @forelse($courses as $course)
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 hover:shadow-xl transition-shadow group flex flex-col h-full">
                        <div
                            class="aspect-video relative overflow-hidden bg-slate-200 dark:bg-slate-800 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-slate-400">image</span>
                        </div>

                        <div class="p-5 flex flex-col flex-1">
                            <h3
                                class="font-bold text-lg text-slate-900 dark:text-white line-clamp-2 mb-2 group-hover:text-primary transition-colors">
                                {{ $course->title }}
                            </h3>

                            <p class="text-sm text-slate-500 mb-3">
                                By {{ $course->mentor->user->name ?? 'Unknown Mentor' }}
                            </p>

                            <div class="flex items-center gap-2 mb-4 mt-auto">
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm fill-1">star</span>
                                    <span class="text-sm font-bold ml-1">0.0</span>
                                </div>
                                <span class="text-xs text-slate-400">(0 reviews)</span>
                            </div>

                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-slate-900 dark:text-white">
                                    Rp {{ number_format($course->price, 0, ',', '.') }}
                                </span>

                                <button
                                    class="flex items-center justify-center p-2 rounded-lg bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div
                        class="col-span-full py-12 text-center text-slate-500 bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                        <span class="material-symbols-outlined text-4xl mb-3">search_off</span>
                        <p>No courses found. Try adjusting your filters!</p>
                    </div>
                    @endforelse
                </div>

                <div class="mt-12 flex justify-center">
                    {{ $courses->links() }}
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