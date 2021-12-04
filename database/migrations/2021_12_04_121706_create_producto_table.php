<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    public function up(){
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->double('precio_total');
            $table->double('impuesto');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('producto');
    }
}
