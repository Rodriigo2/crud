<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table='productos';
    protected $primaryKey = 'id';
    protected $fillable = ['idcategoria', 'nombre', 'cantidad', 'precio'];
    public $timestamps=false;

    public function categoria(){
        return $this->hasOne(Categoria::class, 'id', 'idcategoria');
    }
}

