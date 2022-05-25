<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;

  protected $fillable = ['nome_categoria', 'cadastrado_por', 'ativo'];
  public $timestamps = true;

  public function user()
  {
    return $this->belongsTo(User::class, 'cadastrado_por');
  }

  public function subcategory()
  {
    return $this->hasMany(Subcategory::class);
  }
}