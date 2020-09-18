<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memos extends Model
{
    protected $guarded = ['no','created_at','updated_at'];
    protected $primaryKey = 'no';
}
