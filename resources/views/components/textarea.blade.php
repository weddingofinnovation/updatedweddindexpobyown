@props([
'label'=>'',
'name',
'rows'=>5
])

<div>

<label class="block text-sm font-medium mb-2">
{{ $label }}
</label>

<textarea
name="{{ $name }}"
rows="{{ $rows }}"
{{ $attributes->merge([
'class'=>'w-full rounded-lg border border-gray-300 px-4 py-3'
]) }}></textarea>

</div>