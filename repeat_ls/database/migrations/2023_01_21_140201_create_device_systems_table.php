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
        Schema::create('device_systems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('system_id');

            $table->index('device_id','device_systems_device_idx');
            $table->index('system_id','device_systems_system_idx');

            $table->foreign('device_id','device_systems_device_fk')
                ->on('systems')->references('id');
            $table->foreign('system_id','device_systems_system_fk')
                ->on('devices')->references('id');


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
        Schema::dropIfExists('device_systems');
    }
};
