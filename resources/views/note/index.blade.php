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

            @if(session()->has('success'))
            <div class="border border-green-200 bg-green-50 px-4 py-2 rounded mb-5">
                {{ session('success') }}
            </div>
            @endif

            {{-- <div class="flex items-center justify-end mb-5">
                <a href="{{ route('note.create') }}" class="text-white bg-indigo-500 px-4 py-2 rounded">Add New</a>
            </div> --}}

            <div class="w-full border border-gray-200 dark:border-gray-500 rounded-xl overflow-x-auto">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-500">
                <thead class="bg-gray-50 dark:bg-slate-700 text-slate-800 dark:text-slate-300">
                <tr class="divide-x divide-gray-200 dark:divide-gray-500">
                    <th class="px-4 py-2 md:w-[100px]">No</th>
                    <th class="px-4 py-2">Note</th>
                    <th class="px-4 py-2 md:w-[300px]">Created By</th>
                    <th class="px-4 py-2 md:w-[100px]">Action</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-500 bg-white dark:bg-slate-600 text-slate-800 dark:text-slate-300">
                    @forelse ($notes as $note)
                    <tr class="divide-x divide-gray-200 dark:divide-gray-500">
                        <td class="px-4 py-2">{{ ++$i }}</td>
                        <td class="px-4 py-2">{{ $note->note }}</td>
                        <td class="px-4 py-2">{{ $note->user->name ?? '' }}</td>
                        <td class="px-4 py-2" style="width:150px;">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('note.show',$note->id) }}" class="bg-blue-800 text-white text-sm px-3 py-1 rounded">
                                    show
                                </a>
                                <a href="{{ route('note.edit',$note->id) }}" class="bg-blue-500 text-white text-sm px-3 py-1 rounded">
                                    edit
                                </a>
                                <div>
                                    <form action="{{ route('note.destroy',$note->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white text-sm px-3 py-1 rounded">delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="100" class="px-4 py-2 text-center">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
                </table>
            </div>
            <div class="mt-5">
                {!! $notes->links() !!}
            </div>

        </div>
    </div>
</x-app-layout>
