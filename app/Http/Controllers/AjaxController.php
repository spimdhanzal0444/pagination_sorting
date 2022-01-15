<?php

namespace App\Http\Controllers;

use App\Models\ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index()
    {
        $data = ajax::all();
        return view('blog.ajax_index', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new ajax();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return response()->json(['data'=>$data, 'msg'=>'Data Insert Success !!!!']);
    }
}
