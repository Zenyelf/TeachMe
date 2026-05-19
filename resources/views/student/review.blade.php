<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Review {{ $course->title }} | TeachMe</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: { "primary": "#135bec", "background-light": "#f6f6f8", "background-dark": "#101622" },
                    fontFamily: { "display": ["Lexend", "sans-serif"] },
                },
            },
        }
    </script>

    <style>
        .star-btn svg {
            transition: transform 0.15s ease, filter 0.15s ease;
        }
        .star-btn:hover svg {
            transform: scale(1.15);
        }
        .star-btn.active svg, .star-btn.hovered svg {
            filter: drop-shadow(0 2px 6px rgba(251, 191, 36, 0.5));
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased flex items-center justify-center min-h-screen p-6">
    
    <div class="w-full max-w-2xl bg-white dark:bg-slate-900 rounded-3xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-800">
        
        {{-- Header --}}
        <div class="bg-slate-50 dark:bg-slate-800/50 p-8 border-b border-slate-200 dark:border-slate-800 text-center">
            <div class="size-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mx-auto mb-4">
                {{-- Rate Review Icon (inline SVG, no font dependency) --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H6l-2 2V4h16v12zM7 9h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-black mb-2">How was the course?</h1>
            <p class="text-slate-500 font-medium">You recently completed <span class="text-slate-900 dark:text-white font-bold">{{ $course->title }}</span></p>
        </div>

        <form action="{{ route('reviews.store', $course->id) }}" method="POST" class="p-8">
            @csrf
            
            <input type="hidden" name="rating" id="rating-value" value="{{ $existingReview->rating ?? 0 }}" required>

            {{-- Star Rating --}}
            <div class="flex flex-col items-center mb-8">
                <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-5">Select your rating</p>
                <div class="flex items-center gap-3" id="star-container">
                    @for($i = 1; $i <= 5; $i++)
                        <button type="button" data-rating="{{ $i }}" class="star-btn focus:outline-none" aria-label="Rate {{ $i }} out of 5">
                            {{-- Inline SVG star - always renders regardless of font loading --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" class="star-icon text-slate-300 transition-colors duration-200" fill="currentColor">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                            </svg>
                        </button>
                    @endfor
                </div>
                <p class="text-sm font-semibold text-slate-400 mt-3 h-5" id="rating-label"></p>
            </div>

            {{-- Written Feedback --}}
            <div class="mb-8">
                <label for="comment" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-3">
                    Written Feedback <span class="text-slate-400 font-normal">(Optional)</span>
                </label>
                <textarea name="comment" id="comment" rows="4" 
                    class="w-full px-5 py-4 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-2xl focus:ring-2 focus:ring-primary focus:border-primary text-sm transition-all shadow-sm resize-none" 
                    placeholder="What did you like about the instructor? What could be improved?">{{ $existingReview->comment ?? '' }}</textarea>
            </div>

            {{-- Actions --}}
            <div class="flex gap-4">
                <a href="{{ route('student.mycourse') }}" 
                   class="flex-1 py-4 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-2xl font-bold text-center flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                    Cancel
                </a>
                
                <button type="submit" 
                        class="flex-1 py-4 bg-primary text-white rounded-2xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/30 flex items-center justify-center gap-2">
                    Submit Review
                    {{-- Send icon inline SVG --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-btn');
            const ratingInput = document.getElementById('rating-value');
            const ratingLabel = document.getElementById('rating-label');
            const labels = ['', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];
            let selectedRating = parseInt(ratingInput.value) || 0;

            if (selectedRating > 0) highlightStars(selectedRating);

            stars.forEach(star => {
                star.addEventListener('mouseenter', function () {
                    highlightStars(this.getAttribute('data-rating'));
                });

                star.addEventListener('mouseleave', function () {
                    highlightStars(selectedRating);
                    ratingLabel.textContent = selectedRating > 0 ? labels[selectedRating] : '';
                });

                star.addEventListener('click', function () {
                    selectedRating = parseInt(this.getAttribute('data-rating'));
                    ratingInput.value = selectedRating;
                    highlightStars(selectedRating);
                    ratingLabel.textContent = labels[selectedRating];
                });
            });

            function highlightStars(count) {
                count = parseInt(count);
                stars.forEach(star => {
                    const starValue = parseInt(star.getAttribute('data-rating'));
                    const icon = star.querySelector('svg');
                    if (starValue <= count) {
                        icon.classList.remove('text-slate-300');
                        icon.classList.add('text-amber-400');
                    } else {
                        icon.classList.remove('text-amber-400');
                        icon.classList.add('text-slate-300');
                    }
                });
                ratingLabel.textContent = count > 0 ? labels[count] : '';
            }
        });
    </script>
</body>
</html>