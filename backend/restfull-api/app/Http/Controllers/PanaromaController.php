<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panorama;

class PanaromaController extends Controller
{
    public function index()
    {
        return Panorama::all();
    }
}