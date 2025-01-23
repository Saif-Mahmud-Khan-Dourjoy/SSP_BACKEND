<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Nursery_location extends Controller
{
    
    public function nursery_location_list(){
        $query = DB::select("select * from nursery_location");
        return response()->json($query);
    }
}
		