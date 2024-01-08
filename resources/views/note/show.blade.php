<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Note') }}
            </h2>
            <div>
                <a href="{{ route('note.create') }}" class="text-white bg-indigo-500 px-4 py-2 rounded">Add New</a>
            </div>
        </div>
    </x-slot>

    <x-flash-alert></x-flash-alert>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" value="{{ $product->name }}" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">
                @error('name')
                <div class="text-red-600 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="block mb-1">Description</label>
                <textarea name="description" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">{{ $product->description }}</textarea>
                @error('description')
                <div class="text-red-600 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="flex items-center justify-center gap-5">
                <a href="{{ route('note.index') }}" class="text-white bg-amber-500 px-8 py-2 rounded cursor-pointer">Back</a>
            </div>
            </form>

        </div>
    </div>
</x-app-layout>
