<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compra';

    protected $fillable = [
      'user_id',
      'producto_id',
      'status',
      'factura_id',
    ];

    protected $cast = [
      'status' => 'boolean',
      'created_at' => 'date:d-m-Y'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function producto(){
      return $this->belongsTo(Producto::class);
    }

    public function factura(){
      return $this->belongsTo(Factura::class);
    }
}
