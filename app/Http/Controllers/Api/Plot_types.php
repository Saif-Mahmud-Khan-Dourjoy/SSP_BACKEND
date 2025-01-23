<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Plot_types extends Controller
{
    
    public function plot_types_list(){
        $query = DB::select("select * from plot_types");
        return response()->json($query);
    }
}
		