<?php

namespace App\Http\Controllers;

use App\Models\Paginate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginateController extends Controller
{
    public function index(Request $request){
        $paginates = Paginate::orderBy('id', 'DESC')->paginate(3);
        return view('paginate', compact('paginates'));
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $sort_by = $request->get('sortby'); //id
            $sort_type = $request->get('sorttype'); //asc
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $paginates = DB::table('paginates')->where('id', 'like', '%'.$query.'%')
                ->orWhere('title', 'like', '%'.$query.'%')
                ->orWhere('description', 'like', '%'.$query.'%')
                ->orderBy($sort_by, $sort_type)
                ->paginate(5);
            return view('include.paginate_data', compact('paginates'))->render();
        }
    }
}
