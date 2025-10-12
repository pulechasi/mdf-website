<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

   use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'category',
        'event_date',
        'user_id',
        'image'
    ];
    protected $dates = ['deleted_at'];

    // public function category(){

    //     return $this->belongsTo(Category::class);
    // }

    public function getImageAttribute($image){

        return asset($image);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
