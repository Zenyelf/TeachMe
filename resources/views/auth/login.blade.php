<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | TeachMe</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-x-hidden bg-gradient-to-br from-white via-primary/5 to-primary/10 dark:from-background-dark dark:via-background-dark dark:to-primary/20">
<!-- Navigation Header -->
<header class="absolute top-0 flex w-full items-center justify-between px-6 py-5 md:px-10">
<div class="flex items-center gap-2 text-primary">
<div class="size-8 bg-primary text-white rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined !text-xl">school</span>
</div>
<h2 class="text-slate-900 dark:text-slate-100 text-xl font-bold leading-tight tracking-[-0.015em]">TeachMe</h2>
</div>
<div class="hidden md:flex gap-4">
<button class="text-slate-600 dark:text-slate-400 text-sm font-medium hover:text-primary transition-colors">Help Center</button>
<button class="text-slate-600 dark:text-slate-400 text-sm font-medium hover:text-primary transition-colors">Contact</button>
</div>
</header>
<!-- Main Login Card Container -->
<main class="flex w-full max-w-[1200px] items-center justify-center px-4 py-12">
<div class="grid w-full grid-cols-1 overflow-hidden rounded-xl bg-white shadow-2xl dark:bg-slate-900 md:grid-cols-2">
<!-- Left Side: Form -->
<div class="flex flex-col justify-center p-8 md:p-12 lg:p-16">
<div class="mb-8">
<h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-slate-100 md:text-4xl">Welcome Back</h1>
<p class="mt-2 text-slate-500 dark:text-slate-400">Log in to continue your learning journey with TeachMe</p>
</div>
<form class="space-y-5" action="/login" method="POST">
    @csrf
    <div class="flex flex-col gap-2">
        <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Email Address</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">mail</span>
                <input type="email" name="email" class="w-full rounded-lg border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-slate-900 focus:border-primary focus:ring-1 focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-slate-100" placeholder="name@company.com" type="email"/>
            </div>
    </div>

    <div class="flex flex-col gap-2">
        <div class="flex items-center justify-between">
            <label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Password</label>
            <a class="text-xs font-medium text-primary hover:underline" href="#">Forgot password?</a>
        </div>

        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">lock</span>
            <input type="password" name="password" class="w-full rounded-lg border border-slate-200 bg-slate-50 py-3 pl-11 pr-4 text-slate-900 focus:border-primary focus:ring-1 focus:ring-primary dark:border-slate-700 dark:bg-slate-800 dark:text-slate-100" placeholder="••••••••" type="password"/>
            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600" type="button">
                <span class="material-symbols-outlined">visibility</span>
            </button>
        </div>
    </div>

    <div class="flex items-center gap-2 py-2">
        <input class="h-4 w-4 rounded border-slate-300 text-primary focus:ring-primary" id="remember" type="checkbox"/>
        <label class="text-sm text-slate-600 dark:text-slate-400 font-medium" for="remember">Remember me for 30 days</label>
    </div>

    <button type="submit" class="group relative flex w-full items-center justify-center overflow-hidden rounded-lg bg-gradient-to-r from-primary to-blue-600 px-8 py-4 text-white transition-all hover:shadow-lg hover:shadow-primary/30" type="submit">
        <span class="relative z-10 text-base font-bold tracking-wide">Login to Workspace</span>
        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/10 to-transparent group-hover:translate-x-full transition-transform duration-500"></div>
    </button>

    <div class="relative my-8 flex items-center justify-center">
        <div class="h-[1px] w-full bg-slate-200 dark:bg-slate-700"></div>
        <span class="absolute bg-white px-4 text-sm font-medium text-slate-400 dark:bg-slate-900">Or continue with</span>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <button class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200" type="button">
            <img alt="" class="h-5 w-5" data-alt="Google logo icon" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEMZT1XMwSeGR74DgxqfNwj9nuaqtcuWwnRbJFL3eyefdQOOOG0lTP_fbsCM_TgpgEZ0kQ3JS8LBwjM-iFRN3Sr3EHn-AXemYDmSMjxjOrE1hCDaSldmF4EoP60CQQp5bylaBEYgP6zmL6iweBXlKgGXFntbSV_uPxos0k_i192QoWD5lLFkZmrEd0c_3h--ockXIQUhPYAf5Wyw1x3OYFc4xmEAbOHzXvHCuZVnc13rVmUWVaj4AnW20oz50pOJZSLOTzKFksAWs"/> Google
        </button>

        <button class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200" type="button">
            <span class="material-symbols-outlined text-slate-900 dark:text-white">laptop_mac</span> Apple
        </button>
    </div>
</form>

@if (session('error'))
        <script>
            alert("⚠️ Login Failed!\n\n{{ session('error') }}");
        </script>
@endif

<p class="mt-8 text-center text-sm font-medium text-slate-500 dark:text-slate-400">
                        Don't have an account? 
                        <a class="text-primary hover:underline" href="/registerTemp">Sign up for free</a>
</p>
</div>
<!-- Right Side: Decorative/Branding -->
<div class="relative hidden flex-col items-center justify-center bg-primary p-12 text-white md:flex">
<div class="absolute inset-0 opacity-20" data-alt="Abstract dot pattern background" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 24px 24px;"></div>
<div class="relative z-10 w-full max-w-sm">
<div class="mb-12 inline-flex items-center gap-3 rounded-full bg-white/10 px-4 py-2 backdrop-blur-sm">
<span class="flex h-2 w-2 rounded-full bg-green-400 animate-pulse"></span>
<span class="text-xs font-semibold tracking-wide uppercase">New Course: AI in Design</span>
</div>
<h2 class="mb-6 text-4xl font-bold leading-tight">Master the future of digital skills.</h2>
<p class="mb-8 text-lg text-primary-100 opacity-90 leading-relaxed">Join over 250,000 students learning from top-tier industry professionals daily.</p>
<!-- Testimonial Mini Card -->
<div class="rounded-xl bg-white/10 p-6 backdrop-blur-md border border-white/20">
<p class="italic text-white/90">"TeachMe has completely transformed how our team approaches remote training. The interface is intuitive and the content quality is unmatched."</p>
<div class="mt-4 flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-primary-200 overflow-hidden">
<img alt="" class="h-full w-full object-cover" data-alt="Professional portrait of a male user" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxHqinUjm1PtbEsWFm9jO5VN8XV5vX2v27mHigixzIrIBlnFw6Osf89Rc_VzejLhwuvtMbKlf9hqPOkfIZjvjKS8kCGRI6eTppR5xznxB8f1IHXIagJESzMe4za5tHqMLrORBX4bnoqJ7nCrD62gdOvo4OLmRFeNoCcmEE0joBk6TH1cb5wVWdI0p1t7j56i4wdCxKEEiJhnqB83mZocOd7_KxNgA0rkZ2LFp6QfrR2fqOj93Ibx-OiSlPtQ8-62u8g7xnuiuiWRs"/>
</div>
<div>
<p class="text-sm font-bold">Alex Rivera</p>
<p class="text-xs text-white/70">CTO at TechFlow</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="mt-auto w-full px-6 py-6 text-center text-xs font-medium text-slate-400">
<div class="flex flex-wrap justify-center gap-x-6 gap-y-2 mb-2">
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Terms of Service</a>
<a class="hover:text-primary" href="#">Cookie Policy</a>
</div>
<p>© 2024 TeachMe Inc. All rights reserved.</p>
</footer>
</div>
</body></html>