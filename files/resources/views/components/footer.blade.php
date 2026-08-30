@props([
    'note' => 'This site is 41 kilobytes and has never seen a cookie banner.',
    'colophon' => 'Set in Schibsted Grotesk and Inter.',
])
<footer class="mt-8 border-t border-line">
    <div class="mx-auto max-w-3xl px-6 py-12">
        <div class="flex flex-col gap-8 sm:flex-row sm:items-start sm:justify-between">
            <div class="max-w-[40ch]">
                <p class="font-display text-base font-semibold tracking-tight">{{ $site->author }}</p>
                <p class="mt-2 text-base text-pretty text-muted">{{ $note }}</p>
                <p class="mt-1 text-base text-pretty text-muted">{{ $colophon }}</p>
            </div>

            <div class="flex gap-12">
                <div>
                    <h2 class="text-sm font-medium text-muted">Pages</h2>
                    <ul role="list" class="mt-2 space-y-0.5">
                        @foreach ($site->nav_links as $link)
                            <li class="text-base"><a href="{{ $link->url }}" class="inline-block py-1.5 font-normal hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a></li>
                        @endforeach
                        <li class="text-base"><a href="/now" class="inline-block py-1.5 font-normal hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">Now</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-medium text-muted">Elsewhere</h2>
                    <ul role="list" class="mt-2 space-y-0.5">
                        @foreach ($site->social as $item)
                            <li class="text-base"><a href="{{ $item->url }}" class="inline-block py-1.5 font-normal hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $item->label }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col gap-1 border-t border-line pt-6 sm:flex-row sm:items-center sm:justify-between">
            <p class="font-mono text-sm text-muted">&copy; 2026 {{ $site->author }}</p>
            <p class="text-sm text-muted">Built with DevDojo Sites</p>
        </div>
    </div>
</footer>
