<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @if($categories->isEmpty())
        <p>No categories available.</p>
    @else
    @foreach ($categories as $category)
    <x-posts.category-recommendationcolour :category="$category" />
@endforeach

    @endif


    </div>
</div>
