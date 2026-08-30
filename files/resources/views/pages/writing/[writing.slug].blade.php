<x-layouts.main :title="$writing->title" :description="$writing->description">
    <x-sections.entry-header
        :title="$writing->title"
        :description="$writing->description"
        :metaOne="$writing->dateFormatted"
        :metaTwo="$writing->readTime"
        backLabel="All writing"
        backUrl="/writing"
    />
    <x-sections.entry-body :content="$writing->content"/>
    <x-sections.more-entries :items="$entries" :current="$writing->slug"/>
    <x-sections.connect/>
</x-layouts.main>
