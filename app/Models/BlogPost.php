<?php

namespace App\Models;

use Parsedown;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getMarkdownAttribute(): string
    {
        $Parsedown = new Parsedown();

        return $Parsedown->text($this->body);
    }
}
