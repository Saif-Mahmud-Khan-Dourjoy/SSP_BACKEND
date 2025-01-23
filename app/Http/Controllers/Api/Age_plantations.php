<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Age_plantations extends Controller
{
    
    public function age_plantations_list(){
        $query = DB::select("select * from age_plantations");
        return response()->json($query);
    }
}
		