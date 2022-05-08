<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    use HasFactory;
    protected $table = 'flyers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'flyer_path',
    ];
}
