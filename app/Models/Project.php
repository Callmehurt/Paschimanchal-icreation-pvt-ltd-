<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name', 'client', 'area', 'year', 'contract_name', 'customer', 'description', 'quantity', 'image'
    ];
}
