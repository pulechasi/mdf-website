<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;

    protected $fillable = [
        'rank',
        'name',
        'description',
        'user_id',
        'picture'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
