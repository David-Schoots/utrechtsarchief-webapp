<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panorama extends Model
{
    //
    protected $fillable = [
    'page',
    'title',
    'catalog_number',
    'description',
    'img',
    'extra_description',
];

}