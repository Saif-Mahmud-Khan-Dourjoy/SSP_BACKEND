<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Months extends Controller
{
    
    public function months_list(){
        $query = DB::select("select * from months");
        return response()->json($query);
    }
}
		