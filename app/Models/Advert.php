<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'user_id',
        'description',
        'file',
        'advert_type',
        'status',
        'due_date'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
