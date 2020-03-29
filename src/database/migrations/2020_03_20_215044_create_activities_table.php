<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum('type', [
                'adding', 'editing', 'sharing', 'deleting', 'renaming', 'archiving',
                'changing_rights', 'moving_to_other_storage', 'adding_to_favorites',
                'sending_to_email'
            ]);
            $table->enum('target_object', [
                'directory', 'object'
            ]);
            $table->bigInteger('target_object_id')->unsigned();
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
        Schema::dropIfExists('activities');
    }
}
