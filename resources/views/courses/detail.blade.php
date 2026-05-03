<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
    <title>Courses - TeachMe</title>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="layout-container flex h-full grow flex-col">
        <!-- Top Navigation -->
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-4 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-primary">
                <div class="size-8 bg-primary/10 rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary">auto_stories</span>
                </div>
                <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">TeachMe</h2>
            </div>
            <div class="flex gap-3">
                <button
                    class="flex items-center justify-center rounded-lg h-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 w-10">
                    <span class="material-symbols-outlined">share</span>
                </button>
                <button
                    class="flex items-center justify-center rounded-lg h-10 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 w-10">
                    <span class="material-symbols-outlined">favorite</span>
                </button>
            </div>
        </header>
        <main class="max-w-6xl mx-auto w-full px-4 py-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Course Info -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Hero Section -->
                <div
                    class="relative overflow-hidden rounded-xl h-64 sm:h-80 bg-gradient-to-br from-primary to-blue-400 group">

                    {{-- Check if path exists in DB AND file exists in storage --}}
                    @if($course->thumbnail && Storage::disk('public')->exists($course->thumbnail))
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        style="background-image: url('{{ asset('storage/' . $course->thumbnail) }}');">
                    </div>
                    @else
                    {{-- Fallback to your original Unsplash image or a placeholder if missing --}}
                    <div class="absolute inset-0 opacity-40 bg-[url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&amp;w=1200&amp;auto=format&amp;fit=crop')] bg-cover bg-center"
                        data-alt="Modern professional workspace">
                    </div>
                    @endif

                    {{-- The rest of your overlays and content remain the same --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>

                    <div class="absolute bottom-0 left-0 p-8">
                        <span
                            class="bg-primary px-3 py-1 rounded-full text-xs font-bold text-white uppercase tracking-wider mb-3 inline-block">
                            {{ $course->category->name }}
                        </span>
                        <span
                            class="bg-blue-500/20 border border-blue-400 px-3 py-1 rounded-full text-xs font-bold text-white uppercase tracking-wider mb-3 ml-2 inline-block">
                            {{ $course->type }} Class
                        </span>
                        <h1 class="text-white text-3xl sm:text-4xl font-bold leading-tight">{{ $course->title }}</h1>
                        <div class="flex items-center gap-4 mt-4 text-white/90">
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">schedule</span>
                                <span class="text-sm">{{ $course->lessons }} Day </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm text-yellow-400">star</span>
                                <span class="text-sm font-semibold">4.9 (1.2k Reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div
                        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <p class="text-slate-500 dark:text-slate-400 text-xs uppercase font-bold">Students</p>
                        <p class="text-xl font-bold mt-1">15,400+</p>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <p class="text-slate-500 dark:text-slate-400 text-xs uppercase font-bold">Modules</p>
                        <p class="text-xl font-bold mt-1">{{ $course->lessons }} Lessons</p>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <p class="text-slate-500 dark:text-slate-400 text-xs uppercase font-bold">Language</p>
                        <p class="text-xl font-bold mt-1">{{ $course->language }}</p>
                    </div>
                    <div
                        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800 ring-2 ring-primary/20">
                        <p class="text-primary text-xs uppercase font-bold"> Slots</p>
                        <p class="text-xl font-bold mt-1 text-primary">{{ $course->lessons }} Left</p>
                    </div>
                </div>
                <!-- Description -->
                <section
                    class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800">
                    <h3 class="text-xl font-bold mb-4">Course Description</h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ $course->description }}
                    </p>
                </section>
                <section
                    class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800 mt-8">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        Venue &amp; Location
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                        <div class="space-y-4">
                            <div>
                                <p class="font-bold text-slate-900 dark:text-white">Innovation Hub SF</p>
                                <p class="text-slate-600 dark:text-slate-400 text-sm mt-1">123 Tech Plaza, Suite
                                    400<br />San Francisco, CA 94105</p>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-primary font-medium">
                                <span class="material-symbols-outlined text-sm">directions</span>
                                <a href="#">Get Directions</a>
                            </div>
                        </div>
                        <div
                            class="h-40 bg-slate-100 dark:bg-slate-800 rounded-lg overflow-hidden relative border border-slate-200 dark:border-slate-700">
                            <div class="absolute inset-0 flex items-center justify-center opacity-30">
                                <span class="material-symbols-outlined text-6xl">map</span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-tr from-primary/5 to-transparent"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                <span class="material-symbols-outlined text-primary fill-1">location_on</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Mentor Profile -->
                <section
                    class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800">
                    <h3 class="text-xl font-bold mb-6">Your Mentor</h3>
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                        <div class="relative">
                            @if($course->mentor->profile_photo)
                            <img class="size-24 rounded-full object-cover border-4 border-white dark:border-slate-800 shadow-lg"
                                src="{{ asset('storage/' . $course->mentor->profile_photo) }}"
                                alt="{{ $course->mentor->user->name }}" />
                            @else
                            <!-- Fallback Initials Avatar -->
                            <div
                                class="size-24 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold border-4 border-white dark:border-slate-800 shadow-lg">
                                {{ strtoupper(substr($course->mentor->user->name, 0, 1)) }}
                            </div>
                            @endif
                        </div>
                        <div class="text-center sm:text-left">
                            <h4 class="text-xl font-bold">{{ $course->mentor->user->name }}</h4>
                            <p class="text-primary font-medium">Senior Product Lead at TechGiant</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Ph.D. in Human-Computer
                                Interaction, Stanford</p>
                            <div class="mt-4 flex flex-wrap gap-2 justify-center sm:justify-start">
                                <span
                                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-medium">Product
                                    Strategy</span>
                                <span
                                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-medium">UX
                                    Research</span>
                                <span
                                    class="px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-full text-xs font-medium">Leadership</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Column: Checkout -->
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div
                        class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden">
                        <div class="p-6 border-b border-slate-100 dark:border-slate-800">
                            <div class="flex justify-between items-center">
                                <span class="text-slate-500 font-medium">Price</span>
                                <div class="text-right">
                                    <span
                                        class="text-3xl font-bold">Rp{{ number_format($course->price, 0, ',', '.') }},00</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-6">
                            <div>
                                <h4 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Select
                                    Payment Method</h4>
                                <div class="space-y-3">
                                    <!-- Credit Card Option -->
                                    <label
                                        class="relative flex items-center p-4 border border-primary bg-primary/5 rounded-xl cursor-pointer">
                                        <input checked=""
                                            class="w-4 h-4 text-primary focus:ring-primary border-slate-300"
                                            name="payment" type="radio" />
                                        <div class="ml-4 flex items-center gap-3">
                                            <span class="material-symbols-outlined text-primary">credit_card</span>
                                            <div>
                                                <p class="text-sm font-bold">Credit / Debit Card</p>
                                                <p class="text-xs text-slate-500">Visa, Mastercard, Amex</p>
                                            </div>
                                        </div>
                                    </label>
                                    <!-- Digital Wallet Option -->
                                    <label
                                        class="relative flex items-center p-4 border border-slate-200 dark:border-slate-800 rounded-xl cursor-pointer hover:border-primary/50 transition-colors">
                                        <input class="w-4 h-4 text-primary focus:ring-primary border-slate-300"
                                            name="payment" type="radio" />
                                        <div class="ml-4 flex items-center gap-3">
                                            <span
                                                class="material-symbols-outlined text-slate-500">account_balance_wallet</span>
                                            <div>
                                                <p class="text-sm font-bold">Digital Wallet</p>
                                                <p class="text-xs text-slate-500">PayPal, Apple Pay, Google Pay</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div
                                class="mb-4 p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-100 dark:border-blue-800 flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">event_seat</span>
                                <div class="text-xs text-blue-900 dark:text-blue-200">
                                    <span class="font-bold">{{ $course->slots }} slots remaining</span> at this
                                    location. <br />
                                    Capacity is strictly limited for quality.
                                </div>
                            </div>
                            <form action="{{ route('courses.enroll', $course->id) }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                                    <span class="material-symbols-outlined">shopping_cart_checkout</span>
                                    Enroll Now
                                </button>
                            </form>
                            <p class="text-center text-xs text-slate-400">
                                30-Day Money-Back Guarantee. Secure Checkout.
                            </p>
                        </div>
                    </div>
                    <!-- Additional Info -->
                    <div class="bg-gradient-to-br from-primary to-blue-600 rounded-xl p-6 text-white">
                        <h4 class="font-bold flex items-center gap-2 mb-3">
                            <span class="material-symbols-outlined">verified_user</span>
                            Lifetime Access
                        </h4>
                        <p class="text-sm text-white/80">
                            Buy once and get unlimited access to all future course updates and our private student
                            community.
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="mt-auto border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 py-8">
            <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">auto_stories</span>
                    <span class="font-bold">TeachMe</span>
                </div>
                <p class="text-slate-500 text-sm">© 2024 TeachMe Learning Platform. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="text-sm text-slate-500 hover:text-primary" href="#">Support</a>
                    <a class="text-sm text-slate-500 hover:text-primary" href="#">Privacy</a>
                    <a class="text-sm text-slate-500 hover:text-primary" href="#">Terms</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>