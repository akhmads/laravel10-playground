<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Snippets') }}
            </h2>
            <div>
                <a href="{{ route('snippet.create') }}" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-xl">New Snippet</a>
            </div>
        </div>
    </x-slot>

    <x-flash-alert></x-flash-alert>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                </div>
            </div> --}}

            <label class="relative block mx-2 mb-4">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                    <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
                </svg>
                </span>
                <input class="w-full bg-white placeholder:font-italitc border border-slate-300 rounded-full py-2 pl-10 pr-4 focus:outline-none" placeholder="Enter your keyword to search" type="text" />
            </label>

            <div class="md:flex md:flex-wrap items-stretch">
                @for($i=1; $i<=7; $i++)
                <div class="w-full h-full md:1/2 lg:w-1/3">
                    <div class="h-[140px] bg-white border border-gray-200 rounded-lg shadow-sm m-2 p-5">
                        <a href="" class="h-[60px] text-ellipsis overflow-hidden block mb-2 font-semibold text-lg text-gray-700 hover:underline">
                            Lorem ipsum dolor sit amet {{ (rand(0,1)==1) ? 'lorem ipsum dolor sit amet, lorem ipsum dolor sit amet, lorem ipsum' : '' }}
                        </a>
                        <div class="flex items-center justify-between gap-3">
                            <div class="text-gray-500">By <a href="#" class="text-sky-500 hover:text-sky-600 hover:underline">Akhmad</a></div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
                @endfor
                @forelse( $snippets as $snippet )

                @empty

                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
