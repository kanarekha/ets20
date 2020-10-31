<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\User;
use App\UserActivity;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_film = Film::orderBy('film_id', 'asc')->paginate(10);
        $jumlah_film = Film::count();
        return view('ShowAllFilm', compact('list_film', 'jumlah_film'));
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
        $hasil_film = Film::findOrFail($id);
        return view('FilmShow', compact('hasil_film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function review($id) 
    {
        $review = DB::table('film')
                 ->join('user_activity', 'film.film_id', '=', 'user_activity.film_id')
                 ->join('user', 'user.user_id', '=', 'user_activity.user_id')
                 ->where('user_activity.film_id','=',$id)
                 ->get();
        $title_film = Film::findOrFail($id);
        // $userget = DB::table('user')
        //            ->join('user_activity', 'user.user_id', '=', 'user_activity.user_id')
        //            ->where('film.film_id', '=', $id);
        return view('Review', compact('review', 'title_film'));
    }
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