<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $guarded = [];

    public function notes(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'note_tags', 'note_id', 'tag_id');
    }
}
