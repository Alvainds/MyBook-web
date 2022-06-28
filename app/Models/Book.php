<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_id',
        'publisher_id',
        'category_id',
        'date_of_issue',
        'description',
        'cover',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function publishers()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    public function authors()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
