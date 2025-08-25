<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  { // este método nos ayudara a modificar tablas
    Schema::table('posts', function (Blueprint $table) {
      $table->integer('rating')
        ->after('slug')
        ->nullable();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('posts', function (Blueprint $table) {
      $table->dropColumn('rating');
    });
  }
};
