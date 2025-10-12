<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommanderTerm extends Model
{
    use HasFactory;
    protected $fillable = ['commander_id', 'appointed_date', 'retirement_date', 'status'];
    public function commander()
    {
        return $this->belongsTo(Commander::class);
    }
}
