@props([
    'heading' => 'What I use',
    'intro' => 'A short list, kept short on purpose.',
    'showIntro' => '1',
    'items',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <h2 class="display-section reveal font-display font-semibold text-balance">{{ $heading }}</h2>
        @if ($showIntro)
            <p class="reveal mt-3 max-w-[56ch] text-base text-pretty text-muted">{{ $intro }}</p>
        @endif

        <dl class="reveal mt-8 grid gap-x-12 sm:grid-cols-2">
            @foreach ($items as $item)
                <div class="flex items-baseline justify-between gap-4 border-t border-line py-4">
                    <dt class="text-base font-medium">{{ $item->name }}</dt>
                    <dd class="shrink-0 text-base text-right text-muted">{{ $item->note }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
