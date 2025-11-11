<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panorama;

class PanoramaController extends Controller
{
    /**
     * Display a listing of the panoramas.
     */
    public function index()
    {
        $panoramas = Panorama::all();

        return response()->json([
            'status' => true,
            'message' => 'Files found',
            'data' => $panoramas,
        ], 200);
    }

    /**
     * Display the specified panorama.
     */
    public function show($id)
    {
        $panoramas = Panorama::find($id);

        if (! $panoramas) {
            return response()->json([
                'status' => false,
                'message' => 'Panorama not found',
                
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $panoramas,
        ], 200);
    }

    public function destroy($id)
    {
        $panoramas = Customer::findOrFail($id);
        
        if(! $panoramas){
            return response()->json([
                'status' => false,
                'message' => 'Panorama not found with that id',
            ], 404);
        }
        $panoramas->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'panorama deleted successfully'
        ], 204);
    }
}