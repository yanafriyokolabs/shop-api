<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Book;
class Category extends Model
{
    use HasFactory;
    
      use SoftDeletes;
    protected $dates = ['deleted_at']; 

    protected $fillable = [
        'name', 'slug', 'image', 'status'
    ];
 

  
    public function books(){
        return $this->belongsToMany(Book::class, 'book_categories', 'category_id', 'book_id');
    }
}
