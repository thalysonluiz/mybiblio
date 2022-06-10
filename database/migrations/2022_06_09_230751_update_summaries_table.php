<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSummariesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('summaries', function (Blueprint $table) {
      $table->string('titulo');
      $table->integer('n_capitulo');
      $table->text('objetivos')->nullable();
      $table->boolean('ativo')->default(true);

      $table->foreignId('cadastrado_por')->constrained('users');
      $table->foreignId('book_id')->constrained('books');
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