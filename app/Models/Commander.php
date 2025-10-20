<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commander extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'name',
        'commander_roles',
        'user_id',
        'picture',
        'commander_type',
        'appointed_date',
    ];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function terms()
    {
        return $this->hasMany(CommanderTerm::class);
    }
}
