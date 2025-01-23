<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Jur_fd_levels extends Controller
{
    
    public function jur_fd_levels_list(){
        $query = DB::select("select * from jur_fd_levels");
        return response()->json($query);
    }
}
		