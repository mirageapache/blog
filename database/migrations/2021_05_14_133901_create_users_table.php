<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('user_id',36)->unique();
            $table->string('user_account',30)->unique();
            $table->string('user_password',20)->unique();
            $table->string('user_name',20);
            $table->string('email',50)->unique();
            $table->string('phone_num',20)->nullable();
            $table->string('user_type',10)->default('normal');
            $table->boolean('available')->default(false);
            $table->timestamps();
            $table->timestamp('delete_at')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
