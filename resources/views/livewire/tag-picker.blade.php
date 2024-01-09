<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Modelable;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;

new class extends Component {

    #[Modelable]
    public $value = [];
    public $label;
    public $searchKeyword;
    public $disabled = false;

    public function with(): array
    {
        $tag = Tag::orderBy('tag');
        if ( ! empty($this->searchKeyword)){
            $keyword = strtolower($this->searchKeyword);
            $tag->where(DB::raw('LOWER(tag)'),'like',"%".$keyword."%");
        }
        return [ 'tags' => $tag->limit(10)->get() ];
    }

    public function mount($value = [], $disabled = false)
    {
        if( count($value) > 0 ){
            $this->value = json_decode($value);
        }
        $this->label = $this->createLabel($this->value);
        $this->disabled = $disabled;
    }

    public function pick($id)
    {
        if ( ! in_array($id,$this->value) ) {
            $this->value = array_merge($this->value, [$id]);
            $this->label = $this->createLabel($this->value);
            $this->dispatch('tag-picked', value: json_encode($this->value));
        }
    }

    public function remove($id)
    {
        if (($key = array_search($id, $this->value)) !== false) {
            unset( $this->value[$key] );
            $this->value = array_values($this->value);
            $this->label = $this->createLabel($this->value);
            $this->dispatch('tag-picked', value: json_encode($this->value));
        }
    }

    public function createLabel( $value )
    {
        $tmp = [];
        $tags = Tag::whereIn('id', $value)->get();
        foreach ( $tags as $tag ) {
            $tmp[$tag->id] = $tag;
        }

        $label = [];
        if (is_array($value) AND count($value) > 0) {
            foreach ( $value as $val ) {
                if ( isset($tmp[$val]) ) {
                    $label[] = $tmp[$val];
                }
            }
        }

        return $label;
    }
}; ?>

<div>
    <div x-data="{ open: false }" @click.outside="open = false" @close-tag-picker="open=false" class="relative">
        <div x-on:click="open = true" tabindex="0" class="w-full flex flex-wrap items-start gap-2 bg-white p-2 text-base cursor-pointer border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 focus:outline-indigo-500 rounded-md shadow-sm">
            @forelse ( $label as $key => $row )
            <div wire:key="tag-item-{{ $row->id }}" class="w-fit flex items-center justify-between gap-2 bg-sky-50 hover:bg-sky-100 py-[2px] px-2 border border-gray-200 rounded-sm text-sm">
                {{ $row->tag }}
                <div wire:click="remove({{ $row->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            @empty
            -- Select --
            @endforelse
        </div>

        <div x-cloak x-show="open" x-trap="open" class="absolute top-[calc(100%+5px)] left-0 z-50 w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm">
            <input wire:model.live.debounce.500ms="searchKeyword" wire:loading.class="bg-sky-50" tabindex="0" type="text" autofocus placeholder="Search" class="w-full border border-gray-300 focus:border-indigo-400 focus:outline-none py-2 px-2 mb-2 rounded-md shadow-sm">
            <div class="max-h-[200px] overflow-y-auto">
                @forelse ( $tags as $tag )
                <div wire:key="tag-picker-{{ $tag->id }}" wire:click="pick('{{ $tag->id }}');" class="p-1 cursor-pointer hover:bg-blue-50">
                    {{ $tag->tag }}
                </div>
                @empty
                <div class="p-1">No data found.</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
