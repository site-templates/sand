@props([
    'heading' => 'Say hello',
    'intro' => 'I read everything and reply to most of it. Notes about something I wrote are especially welcome, particularly the ones telling me I am wrong.',
    'emailLabel' => 'theo@theobrandt.co',
    'anchor' => 'connect',
    'showPattern' => '1',
    'wash' => '/images/wash-foot.jpg',
    'showWash' => '1',
])
<section id="{{ $anchor }}" class="relative isolate overflow-hidden border-t border-line">
    @if ($showWash)
        <div class="wash-frame-left pointer-events-none absolute bottom-0 left-0 -z-20 h-[26rem] w-[58%] max-w-2xl overflow-hidden" aria-hidden="true">
            <img src="{{ $wash }}" alt="" width="1500" height="643" class="size-full object-cover object-[18%_62%] opacity-45">
            <div class="wash-veil-up absolute inset-0"></div>
        </div>
    @endif

    @if ($showPattern)
        <div class="dot-field dot-fade-bl pointer-events-none absolute inset-0 -z-10" aria-hidden="true"></div>
    @endif

    <div class="mx-auto max-w-3xl px-6 py-16 md:py-24">
        <h2 class="display-page reveal max-w-[16ch] font-display font-semibold text-balance">{{ $heading }}</h2>
        <p class="reveal mt-5 max-w-[52ch] text-lg text-pretty text-muted [--reveal-delay:90ms]">{{ $intro }}</p>

        <a href="mailto:{{ $site->email }}" class="reveal group/row mt-8 inline-flex items-baseline gap-2 py-2 font-display text-xl font-medium tracking-tight underline decoration-line decoration-1 underline-offset-[6px] hover:text-accent hover:decoration-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent [--reveal-delay:150ms]">
            <span class="row-title">{{ $emailLabel }}</span>
        </a>

        <ul role="list" class="reveal mt-10 flex flex-wrap gap-x-6 gap-y-3 border-t border-line pt-6 [--reveal-delay:210ms]">
            @foreach ($site->social as $item)
                <li class="text-base"><a href="{{ $item->url }}" class="inline-block py-1.5 font-normal text-muted hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $item->label }}</a></li>
            @endforeach
        </ul>
    </div>
</section>
