<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Jur_fd_ecozones extends Controller
{
    
    public function jur_fd_ecozones_list(){
        $query = DB::select("select * from jur_fd_ecozones");
        return response()->json($query);
    }
}
		