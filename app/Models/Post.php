<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'category_id', 'description', 'owner'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
