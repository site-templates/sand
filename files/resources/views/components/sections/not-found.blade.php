@props([
    'code' => '404',
    'heading' => 'This page does not exist.',
    'intro' => 'It may have been renamed, or it may never have existed and you are testing me. Either way, the writing is still where it was.',
    'primaryLabel' => 'Back to the start',
    'primaryUrl' => '/',
    'secondaryLabel' => 'All writing',
    'secondaryUrl' => '/writing',
])
<section>
    <div class="mx-auto max-w-3xl px-6 pt-20 pb-24 md:pt-28 md:pb-32">
        <p class="font-mono text-sm text-muted tabular-nums">{{ $code }}</p>
        <h1 class="display-page mt-6 max-w-[18ch] font-display font-semibold text-balance">{{ $heading }}</h1>
        <p class="mt-5 max-w-[52ch] text-lg text-pretty text-muted">{{ $intro }}</p>

        <div class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-3">
            <a href="{{ $primaryUrl }}" class="rounded-full bg-ink px-5 py-2.5 text-base font-medium text-canvas hover:bg-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $primaryLabel }}</a>
            <a href="{{ $secondaryUrl }}" class="group/row text-base font-medium text-muted hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                <span class="row-title">{{ $secondaryLabel }}</span>
            </a>
        </div>
    </div>
</section>
