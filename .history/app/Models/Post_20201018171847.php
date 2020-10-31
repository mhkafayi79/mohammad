<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title','content'];
    protected $guard = ['id'];
    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
}
