<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div  class="text-gray-600" >
            {{-- clear button --}}
            @if ($this->activeCategory || $search)
            <button class="text-gray-500 text-xs mr-3" wire:click="clearFilter">X</button>
        @endif

            @if ($this->activeCategory)
            <x-recommendation-colour
                :textColour="$this->activeCategory->text_colour"
                :bgColour="$this->activeCategory->bg_colour"
                wire:navigate="{{ route('posts.index', ['category' => $this->activeCategory->slug]) }}">
                {{ $this->activeCategory->title }}
            </x-recommendation-colour>
           @endif

            @if ($search)
            <span class="ml-2">
                Searching results: <strong>{{ $search }}</strong>
            </span>

            {{-- @else
               <p>whats new</p> --}}
            @endif



        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-label wire:model.live='popular'> Popular </x-label>
            <x-checkbox />
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }} py-4" wire:click='setSort("desc")'>Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500' }}" wire:click='setSort("asc")'>Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post )
           <x-posts.post-item :key="'likebutton'.$post->id" :post="$post" />
        @endforeach
    </div>

    <div class="my-3">
         {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
