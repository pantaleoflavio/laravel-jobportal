@props(['aType' => 'base'])

@php
$classes = ' px-6 py-2 border rounded shadow-md focus:bg-outline-none focus:ring-2 focus:ring-opacity-75';

    if($aType === 'edit'){
        $classes .= ' bg-editAnchor';
    }

@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>