<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummariesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('summaries', function (Blueprint $table) {
      $table->id();
      // $table->string('titulo');
      // $table->integer('n_capitulo');
      // $table->text('objetivos')->nullable();
      // $table->boolean('ativo')->default(true);
      $table->timestamps();

      // $table->foreignId('cadastrado_por')->constrained('users');
      // $table->foreignId('book_id')->constrained('books');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('summaries');
  }
}