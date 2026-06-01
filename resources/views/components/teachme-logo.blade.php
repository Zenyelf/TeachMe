@props([
    'subtitle' => null,
    'size' => 'md',
    'contrast' => 'default',
    'class' => '',
])

@php
    $user = auth()->user();
    $href = url('/');

    if ($user) {
        $role = strtolower($user->role);

        if ($role === 'mentor') {
            $href = route('mentor.dashboard');
        } elseif ($role === 'student') {
            $href = route('student.dashboard');
        } elseif ($role === 'admin') {
            $href = route('admin.index');
        }
    }

    $sizes = [
        'sm' => [
            'mark' => 'size-8 rounded-lg text-[11px]',
            'text' => 'text-lg',
            'subtitle' => 'text-[10px]',
            'gap' => 'gap-2',
        ],
        'md' => [
            'mark' => 'size-9 rounded-xl text-xs',
            'text' => 'text-xl',
            'subtitle' => 'text-[10px]',
            'gap' => 'gap-2.5',
        ],
        'lg' => [
            'mark' => 'size-10 rounded-xl text-sm',
            'text' => 'text-2xl',
            'subtitle' => 'text-xs',
            'gap' => 'gap-3',
        ],
    ];

    $activeSize = $sizes[$size] ?? $sizes['md'];
    $textClass = $contrast === 'light'
        ? 'text-white'
        : 'text-slate-950 dark:text-white';
    $subtitleClass = $contrast === 'light'
        ? 'text-white/70'
        : 'text-slate-500 dark:text-slate-400';
@endphp

<a href="{{ $href }}"
    aria-label="Go to TeachMe dashboard"
    {{ $attributes->merge(['class' => 'group inline-flex items-center ' . $activeSize['gap'] . ' rounded-xl focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 dark:focus-visible:ring-offset-slate-950 ' . $class]) }}>
    <span class="{{ $activeSize['mark'] }} inline-flex shrink-0 items-center justify-center bg-primary text-white font-black tracking-tight shadow-sm shadow-primary/20 transition-transform duration-200 group-hover:-translate-y-0.5 group-active:translate-y-0">
        TM
    </span>
    <span class="flex min-w-0 flex-col leading-none">
        <span class="{{ $activeSize['text'] }} font-extrabold tracking-tight {{ $textClass }}">
            Teach<span class="text-primary">Me</span>
        </span>
        @if($subtitle)
            <span class="{{ $activeSize['subtitle'] }} mt-1 font-semibold uppercase tracking-wider {{ $subtitleClass }}">{{ $subtitle }}</span>
        @endif
    </span>
</a>
