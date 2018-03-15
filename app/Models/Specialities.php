<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialities extends Model
{
    protected $table = 'specialities';
    protected $primaryKey ='idSpeciality';
    protected $fillable = [
        'name'
        ,'idUserInsert'
        ,'idUserUpdate'];
}
