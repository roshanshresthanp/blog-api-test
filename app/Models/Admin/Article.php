<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
     protected $guarded = [];

     public function comment()
     {
        return $this->hasMany(Comment::class,'article_id');
     }

     public function author()
     {
        return $this->belongsTo(Author::class,'author_id');
     }
}
