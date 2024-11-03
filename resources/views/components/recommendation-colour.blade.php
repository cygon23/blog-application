<!--setting up colours--->
@props(['textColour', 'bgColour'])

@php
    // Set text color based on input
    $textColour = match ($textColour) {
        'gray' => 'text-gray-800',
        'blue' => 'text-blue-800',
        'red' => 'text-red-800',
        'green' => 'text-green-800',
        default => 'text-pink -800',
    };

    // Set background color based on input
    $bgColour = match ($bgColour) {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'red' => 'bg-red-100',
        'green' => 'bg-green-100',
        default => 'bg-pink -100',

    };
@endphp

<button {{ $attributes }} class="{{ $textColour }} {{ $bgColour }} rounded-xl px-3 py-1 text-base">
    {{ $slot }}
</button>

