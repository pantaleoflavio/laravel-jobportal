@props(['typeButton' => 'standard'])

@php
    $classes = '';

    if($typeButton === 'standard'){
        $classes .= 'bg-blue-800 rounded py-2 px-6 font-bold';
    }

    if($typeButton === 'delete'){
        $classes = 'bg-deleteBtn rounded py-2 px-6 font-bold';
    } 
@endphp

<button {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</button>