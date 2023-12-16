<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoripoint extends Model
{
    use HasFactory;
    protected $table = "kategoripoints";
    protected $guarded = [];

 
    public function Kategori()
    {
        return $this->belongsTo(Kategori::class,);
    }
}
