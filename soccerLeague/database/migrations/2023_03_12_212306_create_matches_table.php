<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('local_team_id')->constrained('teams')->onDelete('cascade');
            $table->foreignId('visiting_team_id')->constrained('teams')->onDelete('cascade');
            $table->dateTime('match_date');
            $table->tinyInteger('local_goals')->default(0);
            $table->tinyInteger('visiting_goals')->default(0);
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
        Schema::dropIfExists('matches');
    }
};
