<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('items',function(Blueprint $table){
        $table->increments('id');
        $table->string('kategori');
        $table->string('judul');
        $table->string('umur');
        $table->string('kepribadian');
        $table->string('tujuan');
        $table->text('gambar');
        $table->timestamps();

        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

       //
    }
}
