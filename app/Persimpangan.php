<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persimpangan extends Model
{
    protected $table="persimpangan";
    protected $fillable = ['namapersimpangan','kota','utara','timur','barat','selatan'];
}
