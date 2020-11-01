<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','content'];
    protected $guarded  = ['id','_token'];
    // protected $table="post";
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function Comments()
    {
        return $this->hasMany(Comment::class);
        // return $this->hasMany(Comment::class,'post','...');
    }
    public function Image()
    {
        return $this->hasOne(Image::class);
    }
}
