<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSACMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_a_c_members', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('phase_no');
            $table->integer('department_name');
            $table->string('sac_one_name');
            $table->tinyInteger('sac_one_role');
            $table->string('sac_one_mobile');
            $table->string('sac_one_email');
            $table->string('sac_two_name');
            $table->tinyInteger('sac_two_role');
            $table->string('sac_two_mobile');
            $table->string('sac_two_email');
            $table->string('sac_three_name');
            $table->tinyInteger('sac_three_role');
            $table->string('sac_three_mobile');
            $table->string('sac_three_email');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('s_a_c_members');
    }
}
