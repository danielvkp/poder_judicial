<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = [
      'nombre',
      'precio_total',
      'impuesto',
    ];

    protected $appends = [
      'precio_sin_impuesto'
    ];

    public function getPrecioSinImpuestoAttribute(){
      $impuesto = ($this->impuesto/100) + 1;
      $precio_sin_impuesto = $this->precio_total / $impuesto;
      return (float) number_format($precio_sin_impuesto, 2, '.', '');
    }

    public function setPrecioTotalAttribute($value){
      $this->attributes['precio_total'] = (float) number_format($value, 2, '.', '');
    }

    public function setImpuestoAttribute($value){
      $this->attributes['impuesto'] = (float) number_format($value, 2, '.', '');
    }

    public function compra(){
      return $this->hasMany(Compra::class);
    }
}
