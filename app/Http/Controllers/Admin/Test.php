<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Month_model;

class Test extends Controller
{
    public function __construct(){
        $this->Month_model = new Month_model;
    }
    public function view_months(){
        $months = $this->Month_model->get_months();
        return view("Admin\Months\month_all", ["months"=>$months]);
    }
}
