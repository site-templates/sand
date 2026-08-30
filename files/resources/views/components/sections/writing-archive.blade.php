@props([
    'showYears' => '1',
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <ul role="list">
            @foreach ($items as $entry)
                <li class="reveal border-b border-line">
                    <a href="{{ $entry->link }}"
                       class="group/row flex flex-col gap-3 py-7 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent sm:flex-row sm:gap-8">
                        @if ($showYears)
                            <p class="shrink-0 font-mono text-sm text-muted tabular-nums sm:w-28 sm:pt-1">{{ $entry->dateFormatted }}</p>
                        @endif
                        <div class="sm:min-w-0 sm:flex-1">
                            <h2 class="row-title flex items-baseline gap-2 font-display text-lg font-medium text-pretty group-hover/row:text-accent">
                                {{ $entry->title }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="row-mark size-3.5 shrink-0 self-center" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 11 11 5m0 0H6m5 0v5"/>
                                </svg>
                            </h2>
                            <p class="mt-2 max-w-[64ch] text-base text-pretty text-muted">{{ $entry->description }}</p>
                        </div>
                        <p class="shrink-0 font-mono text-sm text-muted tabular-nums sm:pt-1">{{ $entry->readTime }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
