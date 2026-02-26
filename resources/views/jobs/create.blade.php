<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs" enctype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="e.g. Senior Laravel Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="e.g. $50,000 - $70,000" />
        <x-forms.input label="Location" name="location" placeholder="e.g. Remote, New York, London" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="">Select Schedule</option>
            <option value="full-time">Full-Time</option>
            <option value="part-time">Part-Time</option>
            <option value="contract">Contract</option>
            <option value="internship">Internship</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="e.g. https://example.com" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.input label="Tags (Coma separated)" name="tags" placeholder="e.g. Laravel, PHP, JavaScript" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>