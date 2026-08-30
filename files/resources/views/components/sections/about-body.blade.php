@props([
    'portrait' => '/images/avatar.jpg',
    'portraitAlt' => 'Theo Brandt',
    'showPortrait' => '1',
    'caption' => 'Copenhagen, February 2026.',
    'metaOneLabel' => 'Based in',
    'metaOneValue' => 'Copenhagen',
    'metaTwoLabel' => 'Currently',
    'metaTwoValue' => 'Vellum',
    'metaThreeLabel' => 'Writing since',
    'metaThreeValue' => '2018',
    'content' => '<p>I am a design engineer, which is an awkward title for the thing I actually do: I design an interface and then I build it, and I have never been able to keep those two halves apart for long.</p><p>I started as a designer who could not hand off. A spec is a lossy format — you can describe a transition in a document, but you cannot feel it until it exists, and the thing you feel is almost never the thing you described. So I learned to build, and then I stopped writing specs, and the work got better.</p><h2>What I work on</h2><p>Editors, mostly. Text selection, collaborative cursors, the way a document behaves when two people are inside it at once. Before that, a design system for hospital wards, which taught me more about constraints than any product ever has. Before that, research tooling for a distributed team who were losing almost everything they learned.</p><p>The thread through all of it is interfaces where the material fights back. A text editor is not a form. A ward screen is not a laptop. When the medium has opinions, the design gets specific, and specific is where the interesting work lives.</p><h2>How I work</h2><p>Small teams, short cycles, a running thing by the end of the first week. I do not believe in the design phase. I believe in building something badly on Monday and being embarrassed by it on Friday, because that embarrassment carries more information than a month of documents.</p><p>I write here every few weeks, usually about something that annoyed me while making it work.</p>',
])
<section class="border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <div class="grid gap-x-12 gap-y-10 md:grid-cols-[13rem_1fr]">
            @if ($showPortrait)
                <div class="reveal md:sticky md:top-24 md:self-start">
                    <img src="{{ $portrait }}" alt="{{ $portraitAlt }}" width="640" height="640" class="w-40 rounded-[min(1vw,10px)] object-cover outline-1 -outline-offset-1 outline-ink/5 md:w-full">
                    <p class="mt-3 font-mono text-sm text-muted">{{ $caption }}</p>

                    <dl class="mt-8 space-y-4 border-t border-line pt-6">
                        <div>
                            <dt class="text-sm text-muted">{{ $metaOneLabel }}</dt>
                            <dd class="mt-0.5 text-base font-medium">{{ $metaOneValue }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-muted">{{ $metaTwoLabel }}</dt>
                            <dd class="mt-0.5 text-base font-medium">{{ $metaTwoValue }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-muted">{{ $metaThreeLabel }}</dt>
                            <dd class="mt-0.5 font-mono text-base font-medium tabular-nums">{{ $metaThreeValue }}</dd>
                        </div>
                    </dl>
                </div>
            @endif

            <div class="prose reveal max-w-[64ch] [--reveal-delay:80ms]">{!! $content !!}</div>
        </div>
    </div>
</section>
