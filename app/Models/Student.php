<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = [];


    public function Kategori()
    {
        return $this->hasMany(kategori::class,);
    }

   
    public function Card()
    {
        return $this->hasMany(Card::class,);
    }
}
