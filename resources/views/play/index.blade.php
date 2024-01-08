<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playground') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <article class="prose lg:prose-base">
                        <p>Here we go</p>

                        <ul>
                        <li>Lorem ipsum</li>
                        <li>Dolor sit amet</li>
                        </ul>
                    </article>

                    <form action="{{ route('snippet.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <livewire:user-picker value="" id="user_id" label="-- Select --" />
                        <x-hyco.input-error class="mt-2" for="user_id" />
                    </div>

                    <x-button type="submit" icon="check" class="w-full">{{ __('Save') }}</x-button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('user-picked', (data) => {
            console.log(data);
        });
    });
</script>
@endpush

</x-app-layout>
