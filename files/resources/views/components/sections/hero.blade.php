@props([
    'avatar' => '/images/avatar.jpg',
    'avatarAlt' => 'Theo Brandt',
    'showAvatar' => '1',
    'heading' => 'Theo Brandt',
    'intro' => 'I am a design engineer in Copenhagen. I build interfaces for a living, mostly the parts nobody demos — the empty state, the error copy, the hundred milliseconds before a click.',
    'secondary' => 'Right now that means the editor at Vellum. Before that, design systems for hospital wards. In between, a lot of writing about the parts of the work that resist being turned into a process.',
    'showStatus' => '1',
    'statusUrl' => '/now',
    'statusLabel' => 'What I am doing now',
])
<section>
    <div class="mx-auto max-w-3xl px-6 pt-16 pb-16 md:pt-24 md:pb-24">
        @if ($showAvatar)
            <img src="{{ $avatar }}" alt="{{ $avatarAlt }}" width="320" height="320" class="reveal size-16 rounded-full object-cover outline-1 -outline-offset-1 outline-ink/10 md:size-20">
        @endif

        <h1 class="display-hero reveal mt-7 max-w-[20ch] font-display font-semibold text-balance [--reveal-delay:60ms]">{{ $heading }}</h1>

        <p class="reveal mt-6 max-w-[46ch] text-xl text-pretty text-muted [--reveal-delay:120ms]">{{ $intro }}</p>
        <p class="reveal mt-5 max-w-[52ch] text-lg text-pretty text-muted [--reveal-delay:160ms]">{{ $secondary }}</p>

        @if ($showStatus)
            <a href="{{ $statusUrl }}" class="reveal group/row mt-8 inline-flex items-center gap-2.5 rounded-full border border-line py-3 pr-5 pl-4 text-sm sm:py-2 sm:pr-4 sm:pl-3.5 font-medium hover:border-ink/25 hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent [--reveal-delay:220ms]">
                <span class="relative flex size-1.5 shrink-0" aria-hidden="true">
                    <span class="absolute inline-flex size-full animate-ping rounded-full bg-accent opacity-60"></span>
                    <span class="relative inline-flex size-1.5 rounded-full bg-accent"></span>
                </span>
                <span class="row-title">{{ $statusLabel }}</span>
            </a>
        @endif
    </div>
</section>
