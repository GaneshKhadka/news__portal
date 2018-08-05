<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('domain',255)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('company_logo',255)->nullable();
            $table->string('company_ceo',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siteprofile');
    }
}
