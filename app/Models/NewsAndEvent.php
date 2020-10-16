<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'date', 'location', 'content', 'image'
    ];
}
