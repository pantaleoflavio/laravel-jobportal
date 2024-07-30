@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h4 class="group-hover:text-jobCardBorder text-xl font-bold transition-colors duration-700">
            <a href="{{ $job->url }}">
                {{ $job->title }}
            </a>
        </h4>
        <p class="mt-4 text-sm">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo :width='42'></x-employer-logo>
    </div>
</x-panel>