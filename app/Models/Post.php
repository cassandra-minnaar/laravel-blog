<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body', 'category_id'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; 
    }

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }
    
}
