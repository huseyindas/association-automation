<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('name');
            $table->string('email')->unique();
            $table->string("phone")->unique();
            $table->string("photo")->nullable();
            $table->text("adress")->nullable();
            $table->string("company_name")->unique();
            $table->decimal("debt" ,5,2)->nullable();
            $table->integer("role_id")->unsigned()->default("1");
            $table->integer("status_id")->unsigned()->default("1");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("role_id")->references("id")->on("roles")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign("status_id")->references("id")->on("status")->cascadeOnUpdate()->cascadeOnDelete();

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("users");
    }
}
