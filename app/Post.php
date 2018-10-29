<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //primary key
    public $primaryKey = 'id';
    // timestamps
    public $timestamps = true;
}
