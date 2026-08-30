@props([
    'label' => 'Now',
    'heading' => 'Rewriting the selection model',
    'body' => 'Most of my week is inside the Vellum editor, replacing a selection model that assumed text was one-dimensional. It was not, and has not been since we added tables. This is the third attempt and the first one I believe.',
    'period' => 'August 2026',
    'linkLabel' => 'The rest of the list',
    'linkUrl' => '/now',
    'showLink' => '1',
    'showPattern' => '1',
])
<section class="relative isolate overflow-hidden border-y border-line bg-raised">
    @if ($showPattern)
        <div class="dot-field dot-fade-x pointer-events-none absolute inset-0 -z-10" aria-hidden="true"></div>
    @endif

    <div class="mx-auto max-w-3xl px-6 py-16 md:py-20">
        <div class="flex items-baseline justify-between gap-6">
            <h2 class="display-section reveal font-display font-semibold text-balance">{{ $label }}</h2>
            <p class="reveal shrink-0 font-mono text-sm text-muted tabular-nums">{{ $period }}</p>
        </div>

        <h3 class="reveal mt-8 max-w-[34ch] font-display text-xl font-medium tracking-tight text-balance [--reveal-delay:80ms]">{{ $heading }}</h3>
        <p class="reveal mt-3 max-w-[62ch] text-lg text-pretty text-muted [--reveal-delay:120ms]">{{ $body }}</p>

        @if ($showLink)
            <a href="{{ $linkUrl }}" class="reveal group/row mt-7 inline-flex items-baseline gap-2 py-2 text-base font-medium hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent [--reveal-delay:180ms]">
                <span class="row-title">{{ $linkLabel }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="row-mark size-3.5 shrink-0 self-center" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8h10m0 0-4-4m4 4-4 4"/>
                </svg>
            </a>
        @endif
    </div>
</section>
