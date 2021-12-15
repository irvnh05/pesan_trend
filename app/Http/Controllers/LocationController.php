<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function provinces(Request $request)
    {
        return Province::all();
    }

    public function regencies(Request $request)
    {
        $regencies = Regency::where('province_id', $request->get('id'))
            ->pluck('name', 'id');
       
        return response()->json($regencies);
    }

    public function districts(Request $request)
    {
        $districts = District::where('regency_id', $request->get('id'))
            ->pluck('name', 'id');
        // $districts = District::where('regency_id',1112)->get();
        // dd($districts);
        return response()->json($districts); 
       
    }

    
    public function villages(Request $request)
    {
        $villages = Village::where('district_id', $request->get('id'))
            ->pluck('name', 'id');

        return response()->json($villages);
    }

}
