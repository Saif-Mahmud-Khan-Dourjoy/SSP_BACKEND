<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Failed_jobs extends Controller
{
    
    public function failed_jobs_list(){
        $query = DB::select("select * from failed_jobs");
        return response()->json($query);
    }
}
		