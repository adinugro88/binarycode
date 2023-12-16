<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = [];

    
    public function Student()
    {
        return $this->belongsTo(Student::class,);
    }

 
    public function Katgoripoint()
    {
        return $this->hasMany(Kategori::class,);
    }
}
