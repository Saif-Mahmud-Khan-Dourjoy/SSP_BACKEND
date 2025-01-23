<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error extends Controller
{
    
    public function Error_list(){
        return response(['message'=>'Invalid token'],200);
    }
}
