<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Jur_ad_divisions extends Controller
{
    
    public function jur_ad_divisions_list(){
        $query = DB::select("select * from jur_ad_divisions");
        return response()->json($query);
    }
}
		