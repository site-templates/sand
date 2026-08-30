@props([
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <ul role="list">
            @foreach ($items as $item)
                <li class="reveal flex flex-col gap-2 border-b border-line py-8 sm:flex-row sm:items-baseline sm:justify-between sm:gap-8">
                    <div class="sm:min-w-0 sm:flex-1">
                        <h2 class="font-display text-lg font-medium text-pretty">{{ $item->heading }}</h2>
                        <p class="mt-2 max-w-[64ch] text-base text-pretty text-muted">{{ $item->body }}</p>
                    </div>
                    <p class="shrink-0 font-mono text-sm text-muted tabular-nums">{{ $item->period }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</section>
