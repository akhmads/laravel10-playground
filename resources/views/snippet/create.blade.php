<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Snippets') }}
            </h2>
            <div>
                <a href="{{ route('snippet.index') }}" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-xl">Back</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 px-4 lg:px-10 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('snippet.store') }}" method="POST">
                    @csrf
                    <div class="lg:flex items-start justify-between gap-10">
                        <div class="grow space-y-6">
                            <div class="px-10">
                                <div>
                                    <x-input-label for="title" :value="__('Title')" />
                                    <x-text-input name="title" id="title" class="mt-1 w-full" value="{{ old('title') }}" autofocus />
                                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                                </div>
                            </div>
                            {{-- <div>
                                <x-input-label for="content" :value="__('Content')" />
                                <x-textarea wire:model="content" id="content" class="mt-1 w-full h-[350px] "></x-textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div> --}}
                            <div id="editorjs"></div>
                            <input type="hidden" name="content" id="editorContent" value="{{ old('content') }}" />
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                        <div class="lg:w-[220px]">
                            <div class="flex justify-center gap-4">
                                <x-button type="submit" icon="check" class="w-full">{{ __('Save') }}</x-button>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
