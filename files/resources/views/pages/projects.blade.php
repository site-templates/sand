<x-layouts.main title="Projects — Theo Brandt" description="Selected projects: an accounting library, a shader playground, a research tool, a clinical design system, and a map-making toy.">
    <x-sections.page-header
        heading="Projects"
        intro="Things I made because I wanted them to exist. A few are used by other people, which still surprises me."
    />
    <x-sections.projects-index :items="$project"/>
    <x-sections.connect/>
</x-layouts.main>
