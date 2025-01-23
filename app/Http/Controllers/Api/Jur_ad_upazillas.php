<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Request as Request;

class Jur_ad_upazillas extends Controller
{
    
    public function jur_ad_upazillas_list(){
        
        $query = DB::select("select * from jur_ad_upazillas ");
        return response()->json($query);
    }
}
		