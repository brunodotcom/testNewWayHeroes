<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    protected $table = 'heroes';
    protected $primaryKey ='idHero';
    protected $fillable = [
        'name'
        ,'idClass'
        ,'idSpeciality'
        ,'lifePoints'
        ,'defensePoints'
        ,'damagePoints'
        ,'attackSpeed'
        ,'movementSpeed'
        ,'idUserInsert'
        ,'idUserUpdate'
        ,'description'];
}
