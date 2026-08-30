@props([
    'heading' => 'Writing',
    'intro' => 'Notes on interface craft, design systems, and the parts of the work that resist being turned into a process.',
    'showIntro' => '1',
])
<section>
    <div class="mx-auto max-w-3xl px-6 pt-14 pb-10 md:pt-20 md:pb-12">
        <h1 class="display-page reveal max-w-[18ch] font-display font-semibold text-balance">{{ $heading }}</h1>
        @if ($showIntro)
            <p class="reveal mt-5 max-w-[56ch] text-lg text-pretty text-muted [--reveal-delay:80ms]">{{ $intro }}</p>
        @endif
    </div>
</section>
