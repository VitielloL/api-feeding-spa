<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('city_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('group_campaign_id')->constrained()->nullable()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('city_groups');
    }
};
