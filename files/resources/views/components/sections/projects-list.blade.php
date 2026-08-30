@props([
    'heading' => 'Projects',
    'intro' => 'Things I made because I wanted them to exist. A few are used by other people, which still surprises me.',
    'showIntro' => '1',
    'limit' => '4',
    'showLink' => '1',
    'linkLabel' => 'All projects',
    'linkUrl' => '/projects',
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-16 md:py-20">
        <div class="flex flex-wrap items-baseline justify-between gap-4">
            <h2 class="display-section reveal font-display font-semibold text-balance">{{ $heading }}</h2>
            @if ($showLink)
                <a href="{{ $linkUrl }}" class="reveal group/row py-2 -my-2 text-base font-medium text-muted hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">
                    <span class="row-title">{{ $linkLabel }}</span>
                </a>
            @endif
        </div>

        @if ($showIntro)
            <p class="reveal mt-4 max-w-[56ch] text-base text-pretty text-muted">{{ $intro }}</p>
        @endif

        <ul role="list" class="mt-8">
            @foreach ($items as $entry)
                <li class="reveal border-t border-line">
                    <a href="{{ $entry->link }}"
                       data-preview-title="{{ $entry->title }}"
                       data-preview-note="{{ $entry->description }}"
                       data-preview-image="{{ $entry->image }}"
                       class="group/row flex flex-col gap-1 py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:flex-row sm:items-baseline sm:justify-between sm:gap-8">
                        <div class="sm:min-w-0 sm:flex-1">
                            <h3 class="row-title flex items-baseline gap-2 font-display text-lg font-medium text-pretty group-hover/row:text-accent">
                                {{ $entry->title }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="row-mark size-3.5 shrink-0 self-center" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 11 11 5m0 0H6m5 0v5"/>
                                </svg>
                            </h3>
                            <p class="mt-1 max-w-[62ch] text-base text-pretty text-muted">{{ $entry->description }}</p>
                        </div>
                        <p class="shrink-0 font-mono text-sm text-muted tabular-nums sm:text-right">{{ $entry->year }}</p>
                    </a>
                </li>
                @break($loop->iteration == $limit)
            @endforeach
        </ul>
        <div class="border-t border-line"></div>
    </div>
</section>
