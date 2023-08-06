<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // One To One (Polymorphic)
    // public function image(){
    //     return $this->morphOne(Image::class, 'imagable');
    // }
    
     // One To Many (Polymorphic)
    public function image(){
        return $this->morphMany(Image::class, 'imagable');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
