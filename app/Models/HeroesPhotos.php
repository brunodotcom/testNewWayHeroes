<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroesPhotos extends Model
{
    protected $table = 'heroes_photos';
    protected $primaryKey ='idPhoto';
    protected $fillable = [
        'name'
        ,'idUserInsert'
        ,'idUserUpdate'];
}
