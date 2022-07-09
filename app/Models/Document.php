<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function rating()
    {
        return $this->hasMany(Review::class);
    }

    public function download()
    {
        return $this->hasMany(Order::class);
    }
}
