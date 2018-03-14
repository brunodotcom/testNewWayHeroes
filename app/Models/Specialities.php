<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialities extends Model
{
    protected $table = 'specialities';
    protected $fillable = [
        'name'
        ,'idUserInsert'
        ,'idUserUpdate'];
}
