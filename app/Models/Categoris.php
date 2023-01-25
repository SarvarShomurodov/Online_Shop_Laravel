<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoris extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyboard',
        'meta_description',
        'status',
    ];
}
