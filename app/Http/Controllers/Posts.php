<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Posts extends Controller
{
    public function index()
    {
        // Non Fluent
        // DB::select(['table'=>'posts', 'where'=> ['id' => 1]])

        // Fluent
        // DB::table('posts')->where('id',1)->get();

        // $posts = DB::select('select * from posts where id = ?', [1]);
        $data = DB::table('posts')->get();
        // dd($data);
        // return view('posts')->with('data',$data);
        return view('posts',[
            'data'=>json_decode($data)
        ]);
    }
}
