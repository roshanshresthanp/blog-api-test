<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function article()
    {
        return $this->belongsTo(Article::class,'article_id');
    }
    
    public function commentator()
    {
        return $this->belongsTo(Commentator::class,'commentator_id');
    }
}
