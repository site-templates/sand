@props([
    'columns' => '2',
    'items',
])
<section class="border-t border-line" data-project-columns="{{ $columns }}">
    <div class="mx-auto max-w-3xl px-6 py-14 md:py-16">
        <ul role="list" class="project-grid grid gap-x-8 gap-y-12 sm:grid-cols-2">
            @foreach ($items as $entry)
                <li class="reveal">
                    <a href="{{ $entry->link }}" class="group/row block focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-accent">
                        <img src="{{ $entry->image }}" alt="{{ $entry->imageAlt }}" width="760" height="570" class="aspect-[4/3] w-full rounded-[min(1vw,10px)] object-cover outline-1 -outline-offset-1 outline-ink/5">
                        <div class="mt-5 flex items-baseline justify-between gap-4">
                            <h2 class="row-title flex items-baseline gap-2 font-display text-lg font-medium text-pretty group-hover/row:text-accent">
                                {{ $entry->title }}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" class="row-mark size-3.5 shrink-0 self-center" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 11 11 5m0 0H6m5 0v5"/>
                                </svg>
                            </h2>
                            <p class="shrink-0 font-mono text-sm text-muted tabular-nums">{{ $entry->year }}</p>
                        </div>
                        <p class="mt-2 text-base text-pretty text-muted">{{ $entry->description }}</p>
                        <p class="mt-3 font-mono text-sm text-muted">{{ $entry->kind }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
