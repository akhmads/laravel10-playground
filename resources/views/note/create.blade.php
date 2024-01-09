<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Note') }}
            </h2>
        </div>
    </x-slot>

    <x-flash-alert></x-flash-alert>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('note.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <x-hyco.label for="note" :value="__('Note')" class="mb-1" />
                <x-hyco.textarea id="note" name="note" class="w-full h-[100px]">{{ old('note') }}</x-hyco.textarea>
                <x-hyco.input-error class="mt-2" for="note" />
            </div>

            <div>
                <x-hyco.label for="user" :value="__('User')" class="mb-1" />
                <livewire:user-picker :value="old('user_id')" label="-- Select --" />
                <input type="hidden" id="user_id" name="user_id" value="{{ old('user_id') }}">
                <x-hyco.input-error class="mt-2" for="user_id" />
            </div>

            <div>
                <x-hyco.label for="tag" :value="__('Tag')" class="mb-1" />
                <livewire:tag-picker :value="[]" label="-- Select --" />
                <input type="hidden" id="tag_id" name="tag_id" value="{{ old('tag_id') }}">
                <x-hyco.input-error class="mt-2" for="tag_id" />
            </div>

            <div class="flex items-center justify-center gap-5">
                <a href="{{ route('note.index') }}" class="text-white bg-amber-500 px-8 py-2 rounded cursor-pointer">Cancel</a>
                <button type="submit" class="text-white bg-green-600 px-8 py-2 rounded">Save</button>
            </div>
            </form>

        </div>
    </div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('user-picked', (data) => {
            document.getElementById('user_id').value = data.id;
            console.log(data);
        });
        Livewire.on('tag-picked', (data) => {
            document.getElementById('tag_id').value = data.value;
            console.log(data);
        });
    });
</script>
@endpush

</x-app-layout>
