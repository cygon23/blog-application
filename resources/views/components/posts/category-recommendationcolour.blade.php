@props(['category'])
<x-recommendation-colour
                    wire:navigate href="{{ route('posts.index',['category' => $category->slug]) }}"
                    :textColour="$category->text_colour"
                    :bgColour="$category->bg_colour">
                           {{ $category->title }}
                     </x-recommendation-colour>
