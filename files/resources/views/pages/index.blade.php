<x-layouts.main title="Theo Brandt — Design engineer" description="Design engineer in Copenhagen. I build interfaces, write about the parts that resist a process, and keep a short list of what I am working on now.">
    <x-sections.hero/>
    <x-sections.writing-list :items="$writing"/>
    <x-sections.projects-list :items="$project"/>
    <x-sections.now-strip/>
    <x-sections.connect/>
</x-layouts.main>
