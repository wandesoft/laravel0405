<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $primaryKey ='id';
    protected $fillable = [];
    public $timestamps = false;


    public function articleObject()
    {
        //return $this->hasOne(Article::class,'id','article_id');
        return $this->belongsTo(Article::class,'article_id','id');
        //select * from Article where `article`.id = author.article_id
        //return $this->hasOne(Article::class,'id','article_id');
    }
}
