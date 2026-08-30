<x-layouts.main title="About — Theo Brandt" description="Design engineer in Copenhagen. Editors, design systems, and interfaces where the material fights back.">
    <x-sections.page-header
        heading="About"
        intro="Design engineer in Copenhagen. I design an interface and then I build it, and I have never been able to keep those two halves apart for long."
    />
    <x-sections.about-body/>
    <x-sections.timeline :items="$experience"/>
    <x-sections.tools :items="$tools"/>
    <x-sections.connect/>
</x-layouts.main>
