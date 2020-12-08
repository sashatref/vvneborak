<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation', function (Blueprint $table) {
            $table->id();
            $table->boolean("enabled")->default(true);
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->integer('cost')->default(0);
            $table->text('duration')->nullable();
            $table->text("image_url")->nullable();
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
        Schema::dropIfExists('consultation');
    }
}
