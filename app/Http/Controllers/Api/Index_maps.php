<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Index_maps extends Controller
{
    
    public function index_maps_list(){
        $query = DB::select("select * from index_maps");
        return response()->json($query);
    }
}
		