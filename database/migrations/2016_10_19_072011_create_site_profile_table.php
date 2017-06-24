<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name',250)->nullable();
            $table->string('email',250)->nullable();
            $table->string('address',250)->nullable();
            $table->string('facebook_link',250)->nullable();
            $table->text('logo')->nullable();
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
        Schema::dropIfExists('site_profile');
    }
}
