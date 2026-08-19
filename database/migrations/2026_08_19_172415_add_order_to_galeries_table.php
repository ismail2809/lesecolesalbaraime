<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('galeries', function (Blueprint $table) {
            $table->unsignedInteger('order')->default(0)->after('image');
        });
    }

    public function down(): void
    {
        Schema::table('galeries', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
