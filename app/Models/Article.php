<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
        /**
     * Get the category that owns the article.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
