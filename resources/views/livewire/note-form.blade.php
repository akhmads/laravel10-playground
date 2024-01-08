<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

new class extends Component {

    public $set_id;
    public $name;
    public $user_id;

    public function mount(Request $request)
    {
        $note = Note::Find($request->id);
        $this->set_id = $note->id ?? '';
        $this->name = $note->note ?? '';
        $this->user_id = $note->user_id ?? '';
    }
}; ?>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Note') }}
        </h2>
    </x-slot>

    <x-hyco.flash-alert />
    <div wire:loading class="fixed top-0">
        <x-hyco.loading />
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-hyco.form-section submit="store">
                <x-slot name="title">
                    {{ __('Example Information') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Update your example information.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-3">
                        <x-label for="note" :value="__('Note')" class="mb-1" />
                        <x-input id="note" wire:model="note" class="w-full" autofocus />
                        <x-input-error class="mt-2" for="note" />
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-hyco.link href="{{ route('example') }}" wire:navigate icon="x-mark" class="bg-yellow-500 hover:bg-yellow-400">Back</x-hyco.link>
                    <x-hyco.button wire:loading.attr="disabled" icon="check">Save</x-hyco.button>
                </x-slot>
            </x-hyco.form-section>

        </div>
    </div>
</div>
