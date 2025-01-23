<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Jur_fd_circles extends Controller
{
    
    public function jur_fd_circles_list(){
        $query = DB::select("select * from jur_fd_circles");
        return response()->json($query);
    }
}
		