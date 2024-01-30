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
        return $this->belongsTo(Student::class,'student_id');
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }

  
    public function Cdpoint()
    {
        return $this->hasMany(App\Cdpoint::class,);
    }

}
