<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeTaskIdIntoDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('descriptions', function (Blueprint $table) {
            if (!Schema::hasColumn('descriptions', 'task_id')) {
                $table->integer('task_id')->unsigned();
                $table->foreign('task_id')->references('id')->on('tasks');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('descriptions', function (Blueprint $table) {
            if (Schema::hasColumn('descriptions', 'task_id')) {
                $table->dropColumn('task_id');
            }
        });
    }
}
