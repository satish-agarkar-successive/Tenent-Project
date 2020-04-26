<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->integer('type_of_room_id')->nullable();
            $table->string('type_of_room');
            $table->integer('property_name_id')->nullable();
            $table->string('property_name');
            $table->double('budget', 8, 2);
            $table->timestamp('date_of_expiry')->nullable();
            $table->timestamp('followup_date')->nullable();
            $table->string('followup_remark');
            $table->tinyInteger('active')->default(1);
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
        Schema::dropIfExists('leads');
    }
}
