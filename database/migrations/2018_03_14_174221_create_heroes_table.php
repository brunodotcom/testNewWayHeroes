<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('idHero');
            $table->string('name', 150);
            $table->integer('idClass');
            $table->integer('idSpeciality');
            $table->integer('lifePoints');
            $table->integer('defensePoints');
            $table->integer('damagePoints');
            $table->integer('attackSpeed');
            $table->integer('movementSpeed');
            $table->integer('idUserInsert')->nullable();
            $table->integer('idUserUpdate')->nullable();            
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
