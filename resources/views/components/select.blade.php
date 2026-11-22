@props([
'label'=>'',
'name',
'options'=>[]
])

<div>

<label class="block text-sm font-medium mb-2">

{{ $label }}

</label>

<select
name="{{ $name }}"
{{ $attributes->merge([
'class'=>'w-full rounded-lg border border-gray-300 px-4 py-2'
]) }}>

@foreach($options as $key=>$value)

<option value="{{ $key }}">
{{ $value }}
</option>

@endforeach

</select>

</div>