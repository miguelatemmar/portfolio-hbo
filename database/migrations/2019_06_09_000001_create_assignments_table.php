<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'assignments';

    /**
     * Run the migrations.
     * @table assignments
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->longText('beschrijving')->nullable();
            $table->unsignedBigInteger('status_id')->unsigned()->nullable();
            // nullable toevoegen, geen error [nog steeds een leeg record]

            $table->nullableTimestamps();

            $table->foreign('status_id')
                ->references('id')->on('statuses')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}