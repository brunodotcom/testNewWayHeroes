<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey ='idClass';
    protected $fillable = [
        'name'
        ,'idUserInsert'
        ,'idUserUpdate'];
}
