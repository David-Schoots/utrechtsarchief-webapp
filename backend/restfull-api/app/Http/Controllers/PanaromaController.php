<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panorama;

class PanaromaController extends Controller
{
    public function index()
    {
        
        $panaroma = Panorama::all();
        return response()->json([
            'status' => true,
            'message' => "File found",
            'data'=> $panaroma
        ],200);
    }
}