@php
    $defaultClasses = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-jobCardBorder group transition-colors duration-700';
@endphp

<div {{ $attributes->merge(['class' => $defaultClasses])}}>
    {{$slot}}
</div>