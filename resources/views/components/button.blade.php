<button
{{ $attributes->merge([
'class'=>'inline-flex items-center justify-center rounded-lg bg-indigo-600 text-white px-5 py-2.5 hover:bg-indigo-700'
]) }}>

{{ $slot }}

</button>