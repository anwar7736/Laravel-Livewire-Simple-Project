<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['author', 'body', 'photos'];

    public function getPhotosAttribute($value)
    {
        return 'storage/'.$value;
    }
}
