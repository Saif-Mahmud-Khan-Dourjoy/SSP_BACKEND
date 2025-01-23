<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use DB;

class Email_notifications extends Controller
{
    
    public function email_notifications_list(){
        $query = DB::select("select * from email_notifications");
        return response()->json($query);
    }
}
		