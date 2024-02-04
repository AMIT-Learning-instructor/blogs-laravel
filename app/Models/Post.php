<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','content','views','author_id'
    ];

    protected $read_only = ['id','title'];

    public function getAuthor(){
        $author = $this->belongsTo(Author::class,'author_id','id');
        return $author;
    }
}
