<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey ='id';
    protected $fillable = [];
    public $timestamps = false;


    public function authorb(){
        //return $this->hasone(Author::class,'article_id','id');
        return $this->belongsTo(Author::class,'id','article_id');
        //return $this->hasone(Author::class,);
    }




}
