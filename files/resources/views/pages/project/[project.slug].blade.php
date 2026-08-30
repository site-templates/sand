<x-layouts.main :title="$project->title" :description="$project->description">
    <x-sections.entry-header
        :title="$project->title"
        :description="$project->description"
        :metaOne="$project->kind"
        :metaTwo="$project->year"
        backLabel="All projects"
        backUrl="/projects"
    />
    <x-sections.entry-body :content="$project->content"/>
    <x-sections.more-projects :items="$entries" :current="$project->slug"/>
    <x-sections.connect/>
</x-layouts.main>
