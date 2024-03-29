<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('username',64)->nullable();
            $table->string('email',64)->nullable();
            $table->string('password',64)->nullable();
            $table->string('name',64)->nullable();
            $table->integer('type_id')->nullable()->unsigned()->index();
            $table->integer('added_by_id')->nullable()->unsigned()->index();

            $table->softDeletes();

            $table->timestamp('created_at')->default(date('y-m-d H:i:s', strtotime('now')));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
