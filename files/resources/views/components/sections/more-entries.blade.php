@props([
    'heading' => 'More writing',
    'limit' => '4',
    'current' => '',
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <h2 class="display-section reveal font-display font-semibold text-balance">{{ $heading }}</h2>

        <ul role="list" class="mt-8">
            @foreach ($items as $entry)
                @if ($entry->slug != $current)
                    <li class="reveal border-t border-line">
                        <a href="{{ $entry->link }}"
                           data-preview-title="{{ $entry->title }}"
                           data-preview-note="{{ $entry->description }}"
                           class="group/row flex flex-col gap-1 py-5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:flex-row sm:items-baseline sm:justify-between sm:gap-8">
                            <h3 class="row-title flex items-baseline gap-2 font-display text-lg font-medium text-pretty group-hover/row:text-accent">
                                {{ $entry->title }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="row-mark size-3.5 shrink-0 self-center" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 11 11 5m0 0H6m5 0v5"/>
                                </svg>
                            </h3>
                            <p class="shrink-0 font-mono text-sm text-muted tabular-nums sm:text-right">{{ $entry->dateFormatted }}</p>
                        </a>
                    </li>
                @endif
                @break($loop->iteration == $limit)
            @endforeach
        </ul>
        <div class="border-t border-line"></div>
    </div>
</section>
