<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   protected $table = 'member';
   protected $primaryKey = 'id';
   protected $fillable = ['name','age'];
   public    $timestamps = false;




}
