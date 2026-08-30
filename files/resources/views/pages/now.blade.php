<x-layouts.main title="Now — Theo Brandt" description="What I am working on, reading, and walking this month. Updated when it changes, not on a schedule.">
    <x-sections.page-header
        heading="Now"
        intro="What has my attention this month. Updated when it changes rather than on a schedule, which is the only way a page like this stays honest."
    />
    <x-sections.now-log :items="$now"/>
    <x-sections.connect/>
</x-layouts.main>
