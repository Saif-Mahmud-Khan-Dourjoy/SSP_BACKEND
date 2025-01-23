<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Month_model extends Model
{
    //
    public function get_months(){
        $months = DB::table('months')->get();
        return $months;
    }
}
