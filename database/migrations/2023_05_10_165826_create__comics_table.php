<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_comics', function (Blueprint $table) {
            $table->id();
            $table->string ('title', 50);
            $table->text ('description');
            $table->string ('thumb');
            $table->float('price', 4, 2, true);
            $table->string('series',30);
            $table->timestamps();
            $table->date('sale_date');
            $table->string('artists');
            $table->string('writers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_comics');
    }
};

