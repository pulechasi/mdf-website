<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'slug',
        'user_id',
        'description',
        'image',
        'operation_type',
        'status',
    ];

    public function user(){

        $this->belongsTo(User::class);
    }
}
