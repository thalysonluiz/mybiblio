<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
  use HasFactory;

  protected $fillable = [
    'n_capitulo', 'cadastrado_por', 'ativo', 'titulo', 'objetivos', 'book_id'
  ];
  public $timestamps = true;

  public function user()
  {
    return $this->belongsTo(User::class, 'cadastrado_por');
  }

  public function book()
  {
    return $this->belongsTo(Book::class);
  }
}