<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tolov extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'price',
        'photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo(Photo::class,'photo_id', 'id');
    }
}
