
<x-layout>


<x-page-heading>{{ $job->title }}</x-page-heading>
    <x-forms.divider></x-forms.divider>
    <x-job-card-wide :$job />
    <div class="mt-6">
        <x-forms.button href="">Edit Job</x-forms.button>
    </div>
</x-layout>