@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>
        <h4 class="font-bold text-xl mt-3 group-hover:text-jobCardBorder transition-colors duration-700">
            <a href="/jobs/{{$job['id']}}" target="_blank">
                {{ $job->title }}
            </a>
        </h4>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size='small' />
            @endforeach
        </div>

    </div>
</x-panel>