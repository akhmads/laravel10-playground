<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

new class extends Component {
    use WithPagination;

    public $perPage = 10;
    public $sortColumn = "id";
    public $sortDir = "desc";
    public $sortLink = [];
    public $searchKeyword = '';
    public $confirmDeletion = false;
    public $set_id;

    public function with(): array
    {
        $note = Note::orderby($this->sortColumn,$this->sortDir)->select('*');
        if(!empty($this->searchKeyword)){
            $keyword = strtolower($this->searchKeyword);
            $note->where(function($query) use ($keyword){
                $query->where(DB::raw('LOWER(note)'),'like',"%".$keyword."%");
            });
        }
        return [ 'notes' => $note->paginate($this->perPage) ];
    }

    public function updated()
    {
        $this->resetPage();
    }

    public function sortOrder($columnName)
    {
        $this->sortColumn = $columnName;
        $this->sortDir = ($this->sortDir == 'asc') ? 'desc' : 'asc';
        $this->sortLink = [];
        $this->sortLink[$columnName] = $this->sortDir;
    }

    public function delete($id)
    {
        $this->confirmDeletion = true;
        $this->set_id = $id;
    }

    public function destroy()
    {
        Note::destroy($this->set_id);
        $this->confirmDeletion = false;
        session()->flash('success', __('Note has been deleted'));
        return redirect()->route('master.note');
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

    <x-hyco.table>
        <x-slot name="headingLeft">
            <x-hyco.table-perpage wire:model.live="perPage" :data="[10,25,50,100]" :value="$perPage" />
            <x-hyco.table-search wire:model.live.debounce.300ms="searchKeyword" />
        </x-slot>

        <x-slot name="headingRight">
            {{-- <x-hyco.link wire:navigate href="{{ route('note.form',0) }}" icon="plus" class="scale-90">
                Create
            </x-hyco.link> --}}
        </x-slot>

        <x-slot name="header">
            <tr>
                <x-hyco.table-th name="note" :sort="$sortLink" wire:click="sortOrder('note')" class="cursor-pointer"></x-hyco.table-th>
                <th class="px-4 py-2 text-left w-[150px]">
                    Action
                </th>
            </tr>
        </x-slot>

        @forelse ($notes as $note)
        <x-hyco.table-tr>
            <td class="px-4 py-3 text-gray-600">
                {{ $note->note }}
            </td>
            <td class="h-px w-px whitespace-nowrap px-4 py-3">
                <a href="{{ route('master.note.form',$note->id) }}" wire:navigate class="text-xs text-white bg-blue-600 px-3 py-1 rounded-lg">Edit</a>
                <a href="javascript:void(0)" wire:click="delete({{ $note->id }})" class="text-xs bg-red-600 text-white px-3 py-1 rounded-lg">Del</a>
            </td>
        </x-hyco.table-tr>
        @empty
        <tr>
            <td colspan="100" class="text-center py-10">No data</td>
        </tr>
        @endforelse

        <x-slot name="footer">
            {{ $notes->links() }}
        </x-slot>
    </x-hyco.table>

    <x-confirmation-modal wire:model.live="confirmDeletion">
        <x-slot name="title">
            {{ __('Delete Note') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Are you sure you would like to delete this note?') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('confirmDeletion')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3" wire:click="destroy" wire:loading.attr="disabled">
                {{ __('Delete') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
