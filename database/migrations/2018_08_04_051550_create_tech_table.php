<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title',255);
            $table->string('slug',100)->unique();
            $table->string('writer',100)->nullable();
            $table->text('short_des')->nullabe();
            $table->longText('detail_des')->nullable();
            $table->dateTime('publish_date');
            $table->boolean('status')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technology');
    }
}
