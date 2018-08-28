<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title',255);
            $table->string('slug',100)->unique();
            $table->text('image')->nullabe();
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
        Schema::dropIfExists('news');
    }
}
