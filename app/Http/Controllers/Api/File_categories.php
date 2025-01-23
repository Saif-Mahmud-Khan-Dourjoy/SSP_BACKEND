<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class File_categories extends Controller
{
    
    public function file_categories_list(){
        $query = DB::select("select * from file_categories");
        return response()->json($query);
    }
}
		