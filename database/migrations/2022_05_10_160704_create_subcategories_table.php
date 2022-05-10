<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('subcategories', function (Blueprint $table) {
      $table->id();
      $table->string('nome_subcategoria');
      $table->boolean('ativo')->default(true);
      $table->timestamps();

      $table->foreignId('cadastrado_por')->constrained('users');
      $table->foreignId('category_id')->constrained('categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('subcategory');
  }
}