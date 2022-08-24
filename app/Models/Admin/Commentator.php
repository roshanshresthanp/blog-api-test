<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentator extends Model
{
    use HasFactory;

    public function comment()
    {
        return $this->hasMany(Comment::class,'commentator_id');
    }
}
