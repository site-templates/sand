@props([
    'heading' => 'Where I have worked',
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <h2 class="display-section reveal font-display font-semibold text-balance">{{ $heading }}</h2>

        <ul role="list" class="mt-8">
            @foreach ($items as $item)
                <li class="reveal flex flex-col gap-2 border-t border-line py-6 sm:flex-row sm:gap-8">
                    <p class="shrink-0 font-mono text-sm text-muted tabular-nums sm:w-32 sm:pt-1">{{ $item->period }}</p>
                    <div class="sm:min-w-0 sm:flex-1">
                        <h3 class="font-display text-lg font-medium text-pretty">{{ $item->role }}</h3>
                        <p class="mt-0.5 text-base text-muted">{{ $item->company }}</p>
                        <p class="mt-2 max-w-[62ch] text-base text-pretty text-muted">{{ $item->note }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="border-t border-line"></div>
    </div>
</section>
