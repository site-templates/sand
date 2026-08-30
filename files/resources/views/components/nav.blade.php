@props([
    'showName' => '1',
])
<header class="site-header sticky top-0 z-20" data-header>
    <div class="mx-auto flex h-16 max-w-3xl items-center gap-3 px-6">
        <a href="/" aria-label="Homepage" class="flex shrink-0 items-center rounded-full py-2.5 font-display text-base font-semibold tracking-tight hover:text-accent focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
            @if ($showName)
                <span>{{ $site->author }}</span>
            @endif
        </a>

        <nav aria-label="Primary" class="ml-auto hidden items-center gap-1 sm:flex">
            @foreach ($site->nav_links as $link)
                <a href="{{ $link->url }}" class="rounded-full px-3 py-2.5 text-sm font-medium text-muted hover:text-ink focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent">{{ $link->label }}</a>
            @endforeach
        </nav>

        <details class="relative ml-auto sm:hidden" data-mobile-menu>
            <summary class="flex size-11 cursor-pointer list-none items-center justify-center rounded-full border border-line focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent" aria-label="Open menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-5 shrink-0" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 7.5h16.5M3.75 16.5h16.5"/>
                </svg>
            </summary>
            <div class="absolute right-0 mt-3 w-52 rounded-xl border border-line bg-surface p-1.5 shadow-lg shadow-ink/5">
                @foreach ($site->nav_links as $link)
                    <a href="{{ $link->url }}" class="block rounded-lg px-3 py-2.5 text-base text-ink hover:bg-canvas">{{ $link->label }}</a>
                @endforeach
            </div>
        </details>
    </div>
</header>
