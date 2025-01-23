<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Land_cover_model extends Model
{
    //
    public function land_cover_list(){
        $query = DB::select("select * from land_cover");
        return $query;
    }
}
