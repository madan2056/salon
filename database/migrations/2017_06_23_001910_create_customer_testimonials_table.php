<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['happy_customer','testimonials']);
            $table->string('video_title')->nullable();
            $table->string('video_url')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_image')->nullable();
            $table->string('customer_comment')->nullable();
            $table->boolean('status')->default(1);
            $table->integer('rank')->nullable()->index();
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
        Schema::dropIfExists('customer_testimonials');
    }
}
