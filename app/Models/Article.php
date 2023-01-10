<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public $with = ['tags', 'author'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
            $query -> where('title', 'like', '%'.$search.'%')
                ->orWhere('body', 'like', '%'.$search.'%'))
        );

        $query->when($filters['tag'] ?? false, fn($query, $tags) =>
            $query->whereHas('tags', fn($query) =>
                $query->where('slug', $tags))
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author))
        );
    }

    public function tags() {
        return $this->belongsTo(Tags::class);
    }
    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
