<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('file_type_id')->unsigned()->nullable();
            $table->string('icon')->nullable();
            $table->string('location');
            $table->boolean('shared')->default(false);
            $table->boolean('synchronization')->default(false);
            $table->boolean('backup')->default(false);
            $table->boolean('is_favorite')->default(false);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('directory_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('file_type_id')->references('id')->on('file_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
