<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Review {{ $course->title }} | TeachMe</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet" />
    
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
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 antialiased flex items-center justify-center min-h-screen p-6">
    
    <div class="w-full max-w-2xl bg-white dark:bg-slate-900 rounded-3xl shadow-xl overflow-hidden border border-slate-200 dark:border-slate-800">
        
        <div class="bg-slate-50 dark:bg-slate-800/50 p-8 border-b border-slate-200 dark:border-slate-800 text-center">
            <div class="size-16 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mx-auto mb-4">
                <span class="material-symbols-outlined text-3xl">rate_review</span>
            </div>
            <h1 class="text-2xl font-black mb-2">How was the course?</h1>
            <p class="text-slate-500 font-medium">You recently completed <span class="text-slate-900 dark:text-white font-bold">{{ $course->title }}</span></p>
        </div>

        <form action="{{ route('reviews.store', $course->id) }}" method="POST" class="p-8">
            @csrf
            
            <input type="hidden" name="rating" id="rating-value" value="{{ $existingReview->rating ?? 0 }}" required>

            <div class="flex flex-col items-center mb-8">
                <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mb-4">Select your rating</p>
                <div class="flex items-center gap-2" id="star-container">
                    @for($i = 1; $i <= 5; $i++)
                        <button type="button" data-rating="{{ $i }}" class="star-btn text-slate-300 transition-all duration-200 hover:scale-110 focus:outline-none">
                            <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">star</span>
                        </button>
                    @endfor
                </div>
            </div>

            <div class="mb-8">
                <label for="comment" class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-3">Written Feedback <span class="text-slate-400 font-normal">(Optional)</span></label>
                <textarea name="comment" id="comment" rows="4" 
                    class="w-full px-5 py-4 bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 rounded-2xl focus:ring-2 focus:ring-primary focus:border-primary text-sm transition-all shadow-sm" 
                    placeholder="What did you like about the instructor? What could be improved?">{{ $existingReview->comment ?? '' }}</textarea>
            </div>

            <div class="flex gap-4">
                <a href="{{ route('student.mycourse') }}" class="flex-1 py-4 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded-2xl font-bold text-center flex items-center justify-center hover:bg-slate-200 transition-colors">Cancel</a>
                
                <button type="submit" class="flex-1 py-4 bg-primary text-white rounded-2xl font-bold hover:bg-primary/90 transition-all shadow-lg shadow-primary/30 flex items-center justify-center gap-2">
                    Submit Review <span class="material-symbols-outlined text-[20px]">send</span>
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-btn');
            const ratingInput = document.getElementById('rating-value');
            let selectedRating = parseInt(ratingInput.value) || 0;

            // Initialize stars if editing an existing review
            if(selectedRating > 0) highlightStars(selectedRating);

            stars.forEach(star => {
                // Hover effect
                star.addEventListener('mouseenter', function() {
                    highlightStars(this.getAttribute('data-rating'));
                });

                // Mouse leave (reset to selected)
                star.addEventListener('mouseleave', function() {
                    highlightStars(selectedRating);
                });

                // Click (lock in rating)
                star.addEventListener('click', function() {
                    selectedRating = this.getAttribute('data-rating');
                    ratingInput.value = selectedRating;
                    highlightStars(selectedRating);
                });
            });

            function highlightStars(count) {
                stars.forEach(star => {
                    const starValue = parseInt(star.getAttribute('data-rating'));
                    if (starValue <= count) {
                        star.classList.remove('text-slate-300');
                        star.classList.add('text-amber-400');
                    } else {
                        star.classList.remove('text-amber-400');
                        star.classList.add('text-slate-300');
                    }
                });
            }
        });
    </script>
</body>
</html>