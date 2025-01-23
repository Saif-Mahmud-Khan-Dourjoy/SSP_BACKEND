<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Migrations extends Controller
{
    
    public function migrations_list(){
        $query = DB::select("select * from migrations");
        return response()->json($query);
    }
}
		