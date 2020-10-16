<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlace extends Model
{
    use HasFactory;

    protected $table = 'work_places';

    protected $fillable = [
        'location', 'staffcount'
    ];
}
