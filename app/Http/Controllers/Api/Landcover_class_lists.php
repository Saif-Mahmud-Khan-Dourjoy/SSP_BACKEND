<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Landcover_class_lists extends Controller
{
    
    public function landcover_class_lists_list(){
        $query = DB::select("select * from landcover_class_lists");
        return response()->json($query);
    }
}
		