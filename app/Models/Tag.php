<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    const TABLE = 'tags';
    protected $table = self::TABLE;

    protected $fillable = [
        'name',
        'slug'
    ];
}
