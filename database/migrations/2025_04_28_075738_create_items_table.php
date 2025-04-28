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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_of_item');
            $table->string('type');
            $table->string('mode');
            $table->string('status');
            $table->integer('pieces');
            $table->decimal('weight', 10, 2)->nullable(); // 10 total digits, 2 decimal places
            $table->decimal('cubic', 10, 2)->nullable();
            $table->date('start_date');
            $table->date('arrival_date');
            $table->string('sender');
            $table->string('package_origin');
            $table->string('parcel_destination');
            $table->string('receiver');
            $table->string('active_current_location')->nullable();
            $table->text('message')->nullable();
             // created_at and updated_at




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
