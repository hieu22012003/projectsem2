<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string("fullname");
            $table->string("country");
            $table->string("city");
            $table->string("state");
            $table->integer("postcode");
            $table->string("email");
            $table->string("note")->nullable();
            $table->boolean("payed")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                "fullname",
                "country",
                "city",
                "state",
                "postcode",
                "email",
                "note",
                "payed"
            ]);
        });
    }
};
