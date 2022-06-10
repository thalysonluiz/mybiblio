<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Book extends Model
{
  use HasFactory;
  use HasSlug;

  protected $fillable = [
    'isbn', 'cadastrado_por', 'ativo', 'titulo', 'subtitulo', 'category_id', 'capa',
    'subcategory_id', 'autor', 'editora', 'ano', 'edicao', 'n_paginas', 'descricao', 'slug'
  ];
  public $timestamps = true;

  /**
   * Get the options for generating the slug.
   */
  public function getSlugOptions(): SlugOptions
  {
    return SlugOptions::create()
      ->generateSlugsFrom('titulo') //Campo de exemplo
      ->saveSlugsTo('slug');
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'cadastrado_por');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function subcategory()
  {
    return $this->belongsTo(Subcategory::class);
  }
}