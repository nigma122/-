<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

  protected $fillable = [
    'title', 'description'
  ];

  public function news(): HasMany
  {
    return $this->hasMany(News::class, 'category_id', 'id');
  }
}
