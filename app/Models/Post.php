<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; 
    }

    protected $with = ['category', 'author'];

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
