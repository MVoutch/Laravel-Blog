<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function art() {
        return $this->belongsTo(Article::class, 'articles_id');
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
