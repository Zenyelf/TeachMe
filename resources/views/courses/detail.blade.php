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

    {{-- ===================== ENROLLMENT CONFIRMATION MODAL ===================== --}}
    <div id="enrollModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 hidden" aria-modal="true"
        role="dialog">

        {{-- Backdrop --}}
        <div id="modalBackdrop"
            class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-300"></div>

        {{-- Panel --}}
        <div id="modalPanel"
            class="relative w-full max-w-md bg-white dark:bg-slate-900 rounded-2xl shadow-2xl border border-slate-200 dark:border-slate-800 scale-95 opacity-0 transition-all duration-300">

            {{-- Header --}}
            <div class="flex items-center justify-between p-6 border-b border-slate-100 dark:border-slate-800">
                <div class="flex items-center gap-3">
                    <div class="size-10 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary">receipt_long</span>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold">Confirm Enrollment</h2>
                        <p class="text-xs text-slate-500">Review your order before proceeding</p>
                    </div>
                </div>
                <button id="closeModal"
                    class="size-8 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-slate-400 text-lg">close</span>
                </button>
            </div>

            {{-- Course Info --}}
            <div class="px-6 pt-5">
                <p class="text-xs uppercase font-bold text-slate-400 tracking-wider mb-1">Course</p>
                <p class="font-bold text-base">{{ $course->title }}</p>
                <p class="text-xs text-slate-500 mt-0.5">{{ $course->category->name }} · {{ ucfirst($course->type) }}
                    Class</p>
            </div>

            {{-- Selected Batches --}}
            <div class="px-6 pt-4">
                <p class="text-xs uppercase font-bold text-slate-400 tracking-wider mb-2">Selected Batch(es)</p>
                <div id="modalBatchList" class="space-y-2">
                    {{-- Filled by JS --}}
                </div>
                <p id="noBatchWarning" class="hidden text-sm text-red-500 font-medium py-2">
                    <span class="material-symbols-outlined text-sm align-middle">warning</span>
                    Please select at least one batch.
                </p>
            </div>

            {{-- Price per batch note --}}
            <div class="px-6 pt-4">
                <div class="flex items-center justify-between text-sm text-slate-500 mb-1">
                    <span>Price per batch</span>
                    <span>Rp{{ number_format($course->price, 0, ',', '.') }},00</span>
                </div>
                <div class="flex items-center justify-between text-sm text-slate-500 mb-1">
                    <span>Batches selected</span>
                    <span id="modalBatchCount">0</span>
                </div>
                <div class="h-px bg-slate-100 dark:bg-slate-800 my-3"></div>
                <div class="flex items-center justify-between">
                    <span class="font-bold text-base">Total</span>
                    <span id="modalTotal" class="text-2xl font-bold text-primary">Rp0</span>
                </div>
            </div>

            {{-- Payment method reminder --}}
            <div
                class="mx-6 mt-4 p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl border border-blue-100 dark:border-blue-800 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">credit_card</span>
                <p class="text-xs text-blue-900 dark:text-blue-200">Payment via <span class="font-bold">Credit / Debit
                        Card</span></p>
            </div>

            {{-- Actions --}}
            <div class="p-6 flex gap-3 mt-2">
                <button id="cancelBtn"
                    class="flex-1 py-3 rounded-xl border border-slate-200 dark:border-slate-700 text-sm font-bold hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    Cancel
                </button>
                <button id="confirmBtn"
                    class="flex-1 py-3 rounded-xl bg-primary hover:bg-primary/90 text-white text-sm font-bold shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">shopping_cart_checkout</span>
                    Confirm & Enroll
                </button>
            </div>
        </div>
    </div>
    {{-- ===================== END MODAL ===================== --}}

    <div class="layout-container flex h-full grow flex-col">
        <!-- Top Navigation -->
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-4 sticky top-0 z-50">
            <x-teachme-logo size="sm" />
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
    <span class="material-symbols-outlined text-sm text-yellow-400" style="font-variation-settings: 'FILL' 1;">star</span>
    <span class="text-sm font-semibold">{{ number_format($course->rating, 1) }} ({{ $course->reviews()->count() }} Reviews)</span>
</div>
                        </div>
                    </div>
                </div>
                <!-- Stats Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div
                        class="bg-white dark:bg-slate-900 p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <p class="text-slate-500 dark:text-slate-400 text-xs uppercase font-bold">Students</p>
                        <p class="text-xl font-bold mt-1">{{ number_format($totalStudents) }}</p>
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
                        <p class="text-primary text-xs uppercase font-bold"> Total Slots</p>
                        <p class="text-xl font-bold mt-1 text-primary">{{ $course->slots }}</p>
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
                    @php $session = $course->sessions->first(); @endphp

                    @if($course->type === 'online')
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">videocam</span>
                        Online Class
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">This course is held online. You will receive
                        the meeting link after enrolling.</p>
                    @if($session?->meeting_link)
                    <a href="{{ $session->meeting_link }}"
                        class="inline-flex items-center gap-2 mt-3 text-primary font-medium text-sm hover:underline">
                        <span class="material-symbols-outlined text-sm">link</span>
                        {{ $session->meeting_link }}
                    </a>
                    @endif

                    @elseif($course->type === 'offline')
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        Venue &amp; Location
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium">
                        {{ $session?->location ?? 'Location TBA' }}</p>

                    @elseif($course->type === 'live')
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        Live Cohort Details
                    </h3>
                    @if($session?->meeting_link)
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined text-primary text-sm">videocam</span>
                        <a href="{{ $session->meeting_link }}"
                            class="text-primary font-medium text-sm hover:underline">{{ $session->meeting_link }}</a>
                    </div>
                    @endif
                    @if($session?->location)
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-sm">location_on</span>
                        <p class="text-slate-600 dark:text-slate-400 text-sm">{{ $session->location }}</p>
                    </div>
                    @endif
                    @endif
                </section>
                <!-- Mentor Profile -->
                <section class="bg-white dark:bg-slate-900 p-8 rounded-xl border border-slate-200 dark:border-slate-800">
                    <h3 class="text-xl font-bold mb-6">Your Mentor</h3>
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                        <div class="relative">
                            
                            @if($course->mentor->user->avatar)
                                <img class="size-24 rounded-full object-cover border-4 border-white dark:border-slate-800 shadow-lg"
                                    src="{{ asset('storage/avatars/' . $course->mentor->user->avatar) }}"
                                    alt="{{ $course->mentor->user->name }}" />
                            @else
                                <div class="size-24 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold border-4 border-white dark:border-slate-800 shadow-lg">
                                    {{ strtoupper(substr($course->mentor->user->name, 0, 1)) }}
                                </div>
                            @endif
                
                        </div>
                        <div class="text-center sm:text-left">
                            <h4 class="text-xl font-bold">{{ $course->mentor->user->name }}</h4>
                            <p class="text-primary font-medium">{{ $course->mentor->title }}</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">{{ $course->mentor->academic_degree }}</p>
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
                                    <span class="font-bold">{{ ($course->slots)-(number_format($totalStudents)) }} slots remaining</span> at this
                                    location. <br />
                                    Capacity is strictly limited for quality.
                                </div>
                            </div>
                            <form id="enrollForm" action="{{ route('courses.enroll', $course->id) }}" method="POST">
                                @csrf

                                {{-- Batch Selection --}}
                                <div class="mb-5">
                                    <h4 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-3">Select
                                        Batch(es)</h4>
                                    <div class="space-y-2">
                                        @forelse($course->sessions as $session)
                                        <label
                                            class="flex items-start gap-3 p-3 border border-slate-200 dark:border-slate-700 rounded-xl cursor-pointer hover:border-primary/50 transition-colors has-[:checked]:border-primary has-[:checked]:bg-primary/5"
                                            data-batch-number="{{ $session->batch_number }}"
                                            data-start="{{ \Carbon\Carbon::parse($session->start_date)->format('d M Y') }}"
                                            data-end="{{ \Carbon\Carbon::parse($session->end_date)->format('d M Y') }}">

                                            <input type="checkbox" name="batch_ids[]" value="{{ $session->id }}"
                                                class="batch-checkbox mt-1 w-4 h-4 text-primary focus:ring-primary border-slate-300 rounded" />
                                            <div>
                                                <p class="text-sm font-bold">Batch {{ $session->batch_number }}</p>
                                                <p class="text-xs text-slate-500">
                                                    {{ \Carbon\Carbon::parse($session->start_date)->format('d M Y') }} →
                                                    {{ \Carbon\Carbon::parse($session->end_date)->format('d M Y') }}
                                                </p>

                                                @if($session->schedule_days)
                                                <div class="flex flex-col text-xs text-slate-500 mt-0.5">
                                                    <!-- Row 1: Days -->
                                                    <span>
                                                        {{ str_replace(',', ' · ', $session->schedule_days) }}
                                                    </span>

                                                    <!-- Row 2: Times -->
                                                    @if($session->start_time)
                                                    <span>
                                                        {{ \Carbon\Carbon::parse($session->start_time)->format('H:i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($session->end_time)->format('H:i') }}
                                                    </span>
                                                    @endif
                                                </div>
                                                @endif

                                                <p class="text-xs text-primary font-medium mt-0.5">{{ ($session->slots)-(number_format($totalStudents)) }}
                                                    slots available</p>
                                            </div>
                                        </label>
                                        @empty
                                        <p class="text-sm text-slate-400">No batches available yet.</p>
                                        @endforelse
                                    </div>
                                </div>

                                <button type="button" id="openModalBtn"
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
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer class="mt-auto border-t border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 py-8">
            <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
                <x-teachme-logo size="sm" />
                <p class="text-slate-500 text-sm">©2026 TeachMe Learning Platform. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="text-sm text-slate-500 hover:text-primary" href="{{ route('feedback.index') }}">Support</a>
                    <a class="text-sm text-slate-500 hover:text-primary" href="{{ url('/') }}">Privacy</a>
                    <a class="text-sm text-slate-500 hover:text-primary" href="{{ url('/') }}">Terms</a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const pricePerBatch = {{ $course->price }};
        const modal = document.getElementById('enrollModal');
        const backdrop = document.getElementById('modalBackdrop');
        const panel = document.getElementById('modalPanel');
        const batchList = document.getElementById('modalBatchList');
        const batchCount = document.getElementById('modalBatchCount');
        const totalEl = document.getElementById('modalTotal');
        const warning = document.getElementById('noBatchWarning');

        function formatRupiah(amount) {
            return 'Rp' + amount.toLocaleString('id-ID') + ',00';
        }

        function openModal() {
            const checked = document.querySelectorAll('.batch-checkbox:checked');

            if (checked.length === 0) {
                warning.classList.remove('hidden');
                batchList.innerHTML = '';
                batchCount.textContent = '0';
                totalEl.textContent = formatRupiah(0);
            } else {
                warning.classList.add('hidden');
                batchList.innerHTML = '';
                checked.forEach(cb => {
                    const label = cb.closest('label');
                    batchList.innerHTML += `
                        <div class="flex items-center justify-between p-3 bg-slate-50 dark:bg-slate-800 rounded-xl">
                            <div>
                                <p class="text-sm font-bold">Batch ${label.dataset.batchNumber}</p>
                                <p class="text-xs text-slate-500">${label.dataset.start} → ${label.dataset.end}</p>
                            </div>
                            <span class="text-sm font-semibold text-primary">${formatRupiah(pricePerBatch)}</span>
                        </div>`;
                });
                batchCount.textContent = checked.length;
                totalEl.textContent = formatRupiah(checked.length * pricePerBatch);
            }

            modal.classList.remove('hidden');
            requestAnimationFrame(() => {
                backdrop.classList.add('opacity-100');
                panel.classList.remove('scale-95', 'opacity-0');
                panel.classList.add('scale-100', 'opacity-100');
            });
        }

        function closeModal() {
            backdrop.classList.remove('opacity-100');
            panel.classList.add('scale-95', 'opacity-0');
            panel.classList.remove('scale-100', 'opacity-100');
            setTimeout(() => modal.classList.add('hidden'), 300);
        }

        document.getElementById('openModalBtn').addEventListener('click', openModal);
        document.getElementById('closeModal').addEventListener('click', closeModal);
        document.getElementById('cancelBtn').addEventListener('click', closeModal);
        document.getElementById('modalBackdrop').addEventListener('click', closeModal);
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModal();
        });

        document.getElementById('confirmBtn').addEventListener('click', function() {
            const checked = document.querySelectorAll('.batch-checkbox:checked');
            if (checked.length === 0) return;
            document.getElementById('enrollForm').submit();
        });
    </script>

</body>
</html>
