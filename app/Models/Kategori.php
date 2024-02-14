<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = [];


    // public function Student()
    // {
    //     return $this->belongsTo(Student::class,);
    // }

    public function Card()
    {
        return $this->HasOne(Card::class,'kategori_id','id');
    }


    public function Katgoripoint()
    {
        return $this->hasMany(Kategori::class,'kategori_id');
    }
}
