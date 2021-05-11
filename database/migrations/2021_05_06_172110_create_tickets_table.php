<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_id');
            $table->string('service_mode');
            $table->boolean('mode_of_shipment');
            $table->string('sea_opts');
            $table->string('type_of_shipment');
            $table->unsignedInteger('cus_id');
            $table->unsignedInteger('sup_id');
            $table->date('date_of_doc_rec');
            $table->timestamp('timedoc');
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
        Schema::dropIfExists('tickets');
    }
}