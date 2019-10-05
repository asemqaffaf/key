<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    protected $fillable = ['room_id','title','location','price','floor','gender','phone','description','num_bed','rating'];
}
