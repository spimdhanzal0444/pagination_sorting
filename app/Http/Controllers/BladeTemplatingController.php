<?php

namespace App\Http\Controllers;

class BladeTemplatingController
{
    public function index(){
        $students = array(10,20,30,40,50,60);
//        $students = array("Hanzal"=>"25", "Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        return view('template.index', ['students'=> $students]);
    }
}
