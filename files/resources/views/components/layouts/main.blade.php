@props([
    'title' => 'Theo Brandt — Design engineer',
    'description' => 'Design engineer in Copenhagen. I build interfaces, write about the parts that resist a process, and keep a short list of things I am working on.',
    'wash' => '/images/wash-top.jpg',
    'showWash' => '1',
    'showPreviews' => '1',
])
<!DOCTYPE html>
<html lang="en" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="icon" href="/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400&family=Schibsted+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/site.css'])
</head>
<body class="isolate bg-canvas font-sans text-ink">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:rounded-full focus:bg-ink focus:px-4 focus:py-2 focus:text-sm focus:text-canvas">Skip to content</a>

    @if ($showWash)
        <div class="wash-frame-right grain pointer-events-none absolute top-0 right-0 -z-10 h-[34rem] w-[62%] max-w-3xl overflow-hidden" aria-hidden="true">
            <img src="{{ $wash }}" alt="" width="2688" height="1152" class="size-full object-cover object-[72%_30%] opacity-95" data-wash>
            <div class="wash-veil absolute inset-0"></div>
        </div>
    @endif

    <x-nav/>
    <main id="main">
        {{ $slot }}
    </main>
    <x-footer/>

    @if ($showPreviews)
        <div class="cursor-preview overflow-hidden rounded-xl bg-surface p-2 shadow-xl shadow-ink/10 ring-1 ring-ink/5" data-cursor-preview aria-hidden="true">
            <img src="" alt="" width="480" height="360" class="hidden aspect-[4/3] w-full rounded-lg object-cover" data-preview-image-slot>
            <p class="px-2 pt-2 pb-1 font-display text-sm font-medium text-ink" data-preview-title-slot></p>
            <p class="px-2 pb-1.5 text-sm text-pretty text-muted" data-preview-note-slot></p>
        </div>
    @endif

    <script src="/js/main.js" defer></script>
</body>
</html>
