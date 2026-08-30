@props([
    'title' => 'Untitled',
    'description' => '',
    'metaOne' => '',
    'metaTwo' => '',
    'backLabel' => 'All writing',
    'backUrl' => '/writing',
    'showBack' => '1',
])
<section>
    <div class="mx-auto max-w-3xl px-6 pt-12 pb-8 md:pt-16 md:pb-10">
        @if ($showBack)
            <a href="{{ $backUrl }}" class="group/row inline-flex items-baseline gap-2 py-2 -my-2 font-mono text-sm text-muted hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="size-3.5 shrink-0 self-center" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 8H3m0 0 4-4M3 8l4 4"/>
                </svg>
                {{ $backLabel }}
            </a>
        @endif

        <h1 class="display-page reveal mt-8 max-w-[22ch] font-display font-semibold text-balance">{{ $title }}</h1>
        <p class="reveal mt-5 max-w-[56ch] text-lg text-pretty text-muted [--reveal-delay:80ms]">{{ $description }}</p>

        <div class="reveal mt-8 flex flex-wrap items-center gap-x-5 gap-y-2 border-t border-line pt-5 font-mono text-sm text-muted tabular-nums [--reveal-delay:140ms]">
            <p>{{ $metaOne }}</p>
            <p>{{ $metaTwo }}</p>
        </div>
    </div>
</section>
