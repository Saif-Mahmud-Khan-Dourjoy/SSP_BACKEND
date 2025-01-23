<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;
use Request;

class Jur_fd_ranges extends Controller
{
    
    public function jur_fd_ranges_list(){
        
        $query = DB::select("select * from jur_fd_ranges ");
        return response()->json($query);
    }
}
		