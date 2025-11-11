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
    'extra_img_1',
    'extra_img_2',
    'extra_img_3',
    'extra_img_4',
    'extra_description_1',
    'extra_description_2',
    'extra_description_3',
    'extra_description_4',
];
}