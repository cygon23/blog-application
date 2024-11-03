@props(['active', 'navigate'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  hover:text-custom-pink-900 text-sm text-custom-pink '
            : 'inline-flex items-center  hover:text-custom-pink-900 text-sm text-black-500';
@endphp

<a {{ ($navigate ?? true) ? 'wire:navigate': ''}}  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
