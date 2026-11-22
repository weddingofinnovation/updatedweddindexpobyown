@props([
    'color' => 'green',
])

@php
$classes = match($color) {
    'green' => 'bg-green-100 text-green-700',
    'red' => 'bg-red-100 text-red-700',
    'yellow' => 'bg-yellow-100 text-yellow-700',
    'blue' => 'bg-blue-100 text-blue-700',
    default => 'bg-gray-100 text-gray-700',
};
@endphp

<span {{ $attributes->merge([
    'class' => "inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {$classes}"
]) }}>
    {{ $slot }}
</span>