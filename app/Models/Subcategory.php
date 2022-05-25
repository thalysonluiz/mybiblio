<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  use HasFactory;

  protected $fillable = ['nome_subcategoria', 'cadastrado_por', 'ativo', 'category_id'];
  public $timestamps = true;

  public function user()
  {
    return $this->belongsTo(User::class, 'cadastrado_por');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}