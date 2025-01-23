<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Inundations extends Controller
{
    
    public function inundations_list(){
        $query = DB::select("select * from inundations");
        return response()->json($query);
    }
}