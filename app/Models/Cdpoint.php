<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdpoint extends Model
{
    use HasFactory;
    protected $table = 'cdpoints';
    protected $guarded = [];

  
    public function Card()
    {
        return $this->belongsTo(Card::class);
    }
}
