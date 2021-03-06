<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\User;
use App\UserActivity;
use Session;
use Illuminate\Support\Facades\Auth;


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
        return view('FilmCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film;
        $film->title = $request->title;
        $film->year = $request->year;
        $film->synopsis = $request->synopsis;
        $film->country = $request->country;
        $film->directors = $request->directors;
        $film->actors = $request->actors;
        $film->rating = $request->rating;
        $film->duration = $request->duration;
        $film->type = $request->type;

        $film->save();

        Session::flash('flash_message', 'Data of movies saved');
        return redirect('/movies');
    }

    public function search(Request $request) {
        $kata_kunci = $request->input('kata_kunci');
        $query = Film::where('title', 'LIKE', '%' . $kata_kunci . '%');
        $list_film = $query->paginate(2);
        $pagination = $list_film->appends($request->except('page'));
        $jumlah_film = $list_film->total();
        return view('ShowAllFilm', compact('list_film', 'kata_kunci', 'pagination', 'jumlah_film'));
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
        $user = Auth::user();
        // $userget = DB::table('user')
        //            ->join('user_activity', 'user.user_id', '=', 'user_activity.user_id')
        //            ->where('film.film_id', '=', $id);
        return view('Review', compact('review', 'title_film', 'user'));
    }

    public function savereview(Request $request) {
        $activity = new UserActivity;
        $activity->film_id = $request->film_id;
        $activity->user_id = $request->user_id;
        $activity->rating_film = $request->rating_film;
        $activity->review_film = $request->review_film;

        $activity->save();
        return redirect('/movies')->with('status', 'Data review berhasil ditambahkan!');
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
