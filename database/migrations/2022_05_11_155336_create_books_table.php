<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('books', function (Blueprint $table) {
      $table->id();
      // $table->string('isbn')->nullable();
      // $table->string('titulo');
      // $table->string('subtitulo')->nullable();
      // $table->string('autor');
      // $table->string('editora');
      // $table->integer('ano');
      // $table->integer('edicao')->default(1);
      // $table->integer('n_paginas');
      // $table->text('descricao')->nullable();
      // $table->boolean('ativo')->default(true);
      // $table->string('slug');
      $table->timestamps();

      // $table->foreignId('cadastrado_por')->constrained('users');
      // $table->foreignId('category_id')->constrained('categories');
      // $table->foreignId('subcategory_id')->constrained('subcategories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('books');
  }
}