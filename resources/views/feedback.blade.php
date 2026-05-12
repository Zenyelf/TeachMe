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
@auth
    @php
        // Cek apakah user punya mentor_id atau student_id (sesuaikan logic role kamu)
        $isMentor = auth()->user()->mentor !== null; 
    @endphp

    @if($isMentor)
        <a class="{{ request()->routeIs('mentor.dashboard') ? 'text-primary font-bold' : 'text-slate-600 dark:text-slate-300' }} text-sm font-medium hover:text-primary transition-colors" 
           href="{{ route('mentor.dashboard') }}">Dashboard</a>
    @else
        <a class="{{ request()->routeIs('student.dashboard') ? 'text-primary font-bold' : 'text-slate-600 dark:text-slate-300' }} text-sm font-medium hover:text-primary transition-colors" 
           href="{{ route('student.dashboard') }}">Dashboard</a>
    @endif
@endauth
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ route('courses.index') }}">Courses</a>
<a class="text-primary text-sm font-semibold" href="{{ route('feedback.index') }}">Feedback</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="{{ url('/settings') }}">Settings</a>
</div>
<a href="{{ route('student.profile') }}">
    <div class="bg-primary/20 border-2 border-primary/10 rounded-full size-10 flex items-center justify-center overflow-hidden">
        <span class="material-symbols-outlined text-primary">person</span>
    </div>
</a>
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
    <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data" id="feedbackForm">
        @csrf   
<div class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
<!-- Rating Experience -->
<div class="mb-8">
<p class="text-slate-900 dark:text-white text-base font-semibold mb-3">Your insights help us shape the future of TeachMe. Report bugs, suggest features, or just tell us how we're doing.</p>
<input type="hidden" name="rating" id="selected_rating" value="5"> <div class="flex gap-4" id="emoji-container">
    <button type="button" onclick="setRating(1)" class="rating-btn flex flex-col items-center gap-1 group" data-rating="1">
        <span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_very_dissatisfied</span>
        <span class="text-xs text-slate-500">Poor</span>
    </button>

    <button type="button" onclick="setRating(2)" class="rating-btn flex flex-col items-center gap-1 group" data-rating="2">
        <span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_dissatisfied</span>
        <span class="text-xs text-slate-500">Bad</span>
    </button>

    <button type="button" onclick="setRating(3)" class="rating-btn flex flex-col items-center gap-1 group" data-rating="3">
        <span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_satisfied</span>
        <span class="text-xs text-slate-500">Average</span>
    </button>

    <button type="button" onclick="setRating(4)" class="rating-btn flex flex-col items-center gap-1 group" data-rating="4">
        <span class="material-symbols-outlined text-3xl text-slate-300 group-hover:text-primary transition-colors">sentiment_satisfied_alt</span>
        <span class="text-xs text-slate-500">Good</span>
    </button>

    <button type="button" onclick="setRating(5)" class="rating-btn flex flex-col items-center gap-1 group active-rating" data-rating="5">
        <span class="material-symbols-outlined text-3xl text-primary">sentiment_very_satisfied</span>
        <span class="text-xs text-primary font-bold">Excellent</span>
    </button>
</div>
</div>
<!-- Category Dropdown -->
<div class="mb-6">
    <label class="block text-slate-700 dark:text-white text-base font-semibold mb-3">Feedback Category</label>
    <select name="category" required 
            class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-slate-600 dark:text-slate-300">
        <option value="" disabled selected>Choose a category...</option>
        <option value="Bug Report">Bug Report</option>
        <option value="Feature Request">Feature Request</option>
        <option value="User Interface">User Interface</option>
        <option value="Performance">Performance</option>
        <option value="Other">Other</option>
    </select>
</div>
<!-- Detailed Comments -->
<div class="mb-6">
    <label class="block text-slate-700 dark:text-white text-base font-semibold mb-3">Detailed Comments</label>
    <textarea name="comments" required rows="5" 
              class="w-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all text-slate-600 dark:text-slate-300"
              placeholder="Please describe your experience or the issue in detail..."></textarea>
    @error('comments')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
<!-- File Upload -->
<div class="mb-8 relative"> <label class="relative flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-slate-200 dark:border-slate-700 rounded-xl cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all overflow-hidden">
        
        <div id="placeholder-content" class="flex flex-col items-center justify-center pt-5 pb-6">
            <span class="material-symbols-outlined text-slate-400 mb-2 text-4xl">cloud_upload</span>
            <p class="text-sm text-slate-500">Click to upload screenshot (Optional)</p>
        </div>

        <img id="image-preview" src="" alt="Preview" class="hidden absolute inset-0 w-full h-full object-contain bg-white dark:bg-slate-900 p-2" />

        <input type="file" id="attachment-input" name="attachment" class="hidden" accept="image/*" onchange="showPreview(event)" />
    </label>

    <button type="button" id="remove-btn" onclick="clearImage()" class="hidden absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 shadow-lg hover:bg-red-600 transition-all z-10">
        <span class="material-symbols-outlined text-sm">close</span>
    </button>
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
<p>©2026 TeachMe Platform. All rights reserved. Version 2.4.0-alpha</p>
</footer>
</div>
<script>
    // 1. Fungsi untuk Rating Emoji
    function setRating(val) {
        document.getElementById('selected_rating').value = val;

        document.querySelectorAll('.rating-btn').forEach(btn => {
            const icon = btn.querySelector('.material-symbols-outlined');
            const label = btn.querySelector('span:last-child');
            
            icon.classList.remove('text-primary');
            icon.classList.add('text-slate-300');
            label.classList.remove('text-primary', 'font-bold');
            label.classList.add('text-slate-500');
        });

        const activeBtn = document.querySelector(`[data-rating="${val}"]`);
        const activeIcon = activeBtn.querySelector('.material-symbols-outlined');
        const activeLabel = activeBtn.querySelector('span:last-child');

        activeIcon.classList.remove('text-slate-300');
        activeIcon.classList.add('text-primary');
        activeLabel.classList.remove('text-slate-500');
        activeLabel.classList.add('text-primary', 'font-bold');
    }

    // 2. Fungsi untuk Preview Gambar
    function showPreview(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('placeholder-content');
        const removeBtn = document.getElementById('remove-btn');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
                if(removeBtn) removeBtn.classList.remove('hidden'); // Munculkan tombol X
                console.log("Preview berhasil dimuat!");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // 3. Fungsi untuk Menghapus Gambar (Clear Image)
    function clearImage() {
        const input = document.getElementById('attachment-input');
        const preview = document.getElementById('image-preview');
        const placeholder = document.getElementById('placeholder-content');
        const removeBtn = document.getElementById('remove-btn');

        // Reset input file
        if(input) input.value = "";
        
        // Sembunyikan preview dan tombol remove
        if(preview) {
            preview.src = "";
            preview.classList.add('hidden');
        }
        if(removeBtn) removeBtn.classList.add('hidden');
        
        // Tampilkan kembali placeholder awan
        if(placeholder) placeholder.classList.remove('hidden');
    }

    // 4. Fungsi untuk Loading saat Submit
    document.getElementById('feedbackForm').onsubmit = function() {
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.innerHTML = 'Sending... <span class="material-symbols-outlined animate-spin text-sm">sync</span>';
    };
</script>
</body></html>