@props([
    'content' => '',
])
<section>
    <div class="mx-auto max-w-3xl px-6 pb-16 md:pb-20">
        <div class="prose reveal max-w-[68ch]">{!! $content !!}</div>
    </div>
</section>
