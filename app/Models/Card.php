<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $table = 'cards';
    protected $guarded = [];


    public function Student()
    {
        return $this->belongsTo(Student::class,);
    }

  
    public function Cdpoint()
    {
        return $this->hasMany(Cdpoint::class,);
    }

}
