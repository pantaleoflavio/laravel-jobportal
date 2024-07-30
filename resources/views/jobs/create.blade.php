<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="post" action="/jobs">
        <x-forms.input label="title" name="title" placeholder="Developer" />
        <x-forms.input label="salary" name="salary" placeholder="50000 euro" />
        <x-forms.input label="location" name="location" placeholder="Milan, Italy" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://test.com" />
        <x-forms.checkbox label="Feature (costs extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated" name="tags" placeholder="PHP, education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>