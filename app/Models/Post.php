<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function user(){  // Property
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title', 'slug', 'description', 'image_path', 'user_id'
    ];



}
