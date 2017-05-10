<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{

    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('department_id')->unsigned();
            $table->string('type');
            $table->integer('total_records_held');
            $table->integer('records_selected_for_transfer');
            $table->float('records_selected_for_transfer_as_percentage_of_total');
            $table->integer('records_selected_for_transfer_under_lci');
            $table->float('records_selected_for_transfer_under_lci_as_percentage_of_total');
            $table->integer('records_still_to_be_reviewed');
            $table->float('records_still_to_be_reviewed_as_percentage_of_total');
            $table->integer('records_still_to_be_reviewed_under_lci');
            $table->float('records_still_to_be_reviewed_under_lci_as_percentage_of_total');
            $table->integer('planned_total_for_year_end_transfer');
            $table->integer('awaiting_disposal');
            $table->float('awaiting_disposal_as_percentage_of_total');
            $table->integer('awaiting_disposal_under_lci');
            $table->float('awaiting_disposal_under_lci_as_percentage_of_total');
            $table->mediumText('comments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
