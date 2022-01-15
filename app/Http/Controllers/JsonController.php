<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\User;

class JsonController extends Controller
{
    public function index(){
        return view('blog.index');
    }

    public function store(Request $request){
        $blog = new Blog();
        $input = $request->all();

        $user_id = User::where('name', 'admin')->first();
        array_push($input, $user_id->id);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('/blog',$fileNameToStore);
            $input['image'] = $fileNameToStore;
        }
        $blog->fill($input)->save();
        return back();
    }

    public function view(){
        $data = json_decode(\App\Models\Blog::all(), true);

        for ($i=0; $i < count($data); $i++){

            echo "<h2>";
            echo $data[$i]['category'];
            echo "</h2>";

            for ($x=0; $x < count($data[$i]['title']); $x++){
                echo "<p>";
                echo $data[$i]['title'][$x];
                echo "</p>";
            }

            echo "<br />";
            echo "<h3>";
            echo "Link";
            echo "</h3>";

            for ($x=0; $x < count($data[$i]['link']); $x++){
                echo "<p>";
                echo $data[$i]['link'][$x];
                echo "</p>";
            }
        }
    }
}
