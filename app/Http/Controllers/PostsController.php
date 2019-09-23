<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // echo something or call a view
        //return view('welcome');

        $search = $request->get('search');
        $posts = DB::table('film')->join('film_category', 'film.film_id','=','film_category.film_id')->join('category','film_category.category_id','=','category.category_id')->where('title','like', '%'.$search.'%')->get();
        return view('index',['posts'=>$posts]);
        // return "welcome and your number is ". $id;
    }


    public function search(Request $request) {

        $search = $request->get('search');
        $posts = DB::table('film')->join('film_category', 'film.film_id','=','film_category.film_id')->join('category','film_category.category_id','=','category.category_id')->where('title','like', '%'.$search.'%')->paginate(100);
        return view('index', ['posts' => $posts]);
        
        //return response()->json($posts);
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
