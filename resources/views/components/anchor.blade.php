@props(['aType'])

@php
    $classes = '';

    if($aType === 'edit'){
        $classes .= ' px-6 py-2 bg-editAnchor text-white border rounded shadow-md focus:bg-outline-none focus:ring-2 focus:ring-opacity-75"';
    }

    if($aType === 'cancel'){
        $classes .= '';
    } 
@endphp
<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</a>