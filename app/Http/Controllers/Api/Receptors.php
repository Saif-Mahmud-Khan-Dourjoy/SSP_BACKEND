<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Receptors extends Controller
{
    
    public function receptors_list(){
        $query = DB::select("select * from receptors");
        return response()->json($query);
    }
}
		