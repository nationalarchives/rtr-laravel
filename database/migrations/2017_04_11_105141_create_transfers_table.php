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
            $table->integer('records_selected_for_transfer_under_lci');
            $table->integer('records_still_to_be_reviewed');
            $table->integer('records_still_to_be_reviewed_under_lci');
            $table->integer('planned_total_for_year_end_transfer');
            $table->integer('awaiting_disposal');
            $table->integer('awaiting_disposal_under_lci');
            $table->mediumText('comments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
