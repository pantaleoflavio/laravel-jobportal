<x-layout>
    <x-page-heading>Edit Job: {{ $job->title }} </x-page-heading>

    <form class="max-w-2xl mx-auto space-y-6" method="post" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <x-forms.input label="title" name="title" value="{{ $job->title }}" />
        <x-forms.input label="salary" name="salary" value="{{ $job->salary }}" />
        <x-forms.input label="location" name="location" value="{{ $job->location }}" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" value="{{ $job->url }}" />
        <x-forms.checkbox label="Feature (costs extra)" name="featured" />

        <x-forms.divider />
        @php
            $tagsString = $job->tags->pluck('name')->implode(',');
        @endphp
        <x-forms.input label="Tags (comma separated)" name="tags" value="{{ $tagsString }}" />

        <x-forms.button>Update</x-forms.button>
    </form>
</x-layout>