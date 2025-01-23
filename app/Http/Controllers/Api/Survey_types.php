<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Survey_types extends Controller
{
    
    public function survey_types_list(){
        $query = DB::select("select * from survey_types");
        return response()->json($query);
    }
}
		