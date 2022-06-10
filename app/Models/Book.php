<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use HasFactory;

  protected $fillable = [
    'isbn', 'cadastrado_por', 'ativo', 'titulo', 'subtitulo', 'category_id',
    'subcategory_id', 'autor', 'editora', 'ano', 'edicao', 'n_paginas', 'descricao', 'slug'
  ];
  public $timestamps = true;

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