<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class User_logs extends Controller
{
    
    public function user_logs_list(){
        $query = DB::select("select * from user_logs");
        return response()->json($query);
    }
}
		