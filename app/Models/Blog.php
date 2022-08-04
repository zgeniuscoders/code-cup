<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function getExerpt()
    {
        return substr($this->content,0,200) . '...';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
