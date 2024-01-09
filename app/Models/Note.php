<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Traits\FilterByDate;

class Note extends Model
{
    use HasFactory, FilterByDate;

    protected $table = 'notes';
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'note_tags', 'tag_id', 'note_id');
    }
}
