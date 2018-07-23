<?php

namespace App;

use App\Tag;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'published', 'user_id'
    ];  

    public static function published() {
        return self::where('published', 1)->get();
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
