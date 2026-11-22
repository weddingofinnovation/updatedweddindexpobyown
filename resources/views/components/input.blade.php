@props([
    'label' => '',
    'name',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
])

<div>
    @if($label)
        <label
            for="{{ $name }}"
            class="block text-sm font-medium text-gray-700 mb-2">

            {{ $label }}

            @if($required)
                <span class="text-red-500">*</span>
            @endif

        </label>
    @endif

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge([
            'class' => 'w-full rounded-lg border border-gray-300 px-4 py-2.5 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500'
        ]) }}>

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>