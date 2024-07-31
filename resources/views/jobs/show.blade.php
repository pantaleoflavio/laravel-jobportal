
<x-layout>
    <x-page-heading>{{ $job->title }}</x-page-heading>
    <x-forms.divider></x-forms.divider>
    <x-job-card-wide :$job />
    <div class="mt-6 flex justify-between">
        <x-anchor href="/jobs/{{$job->id}}/edit" aType="edit">Edit Job</x-anchor>
        <x-anchor href="/">back</x-anchor>
    </div>
</x-layout>