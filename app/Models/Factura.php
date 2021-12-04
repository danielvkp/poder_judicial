<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'factura';

    protected $fillable = [
      'user_id',
      'total_productos',
      'total_impuesto',
      'total',
    ];

    protected $casts = [
      'created_at' => 'date:d-m-Y'
    ];

    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }

    public function items(){
      return $this->hasMany(Compra::class)->orderBy('created_at', 'ASC');
    }
}
