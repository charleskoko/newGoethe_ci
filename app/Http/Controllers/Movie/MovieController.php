<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('movie.overview', [
            'movies' => Movie::orderBy('created_at', 'desc')->paginate(15),
            'counter' => count(Movie::all())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | string',
            'description' => 'nullable | string| max:255',
            'numberOfCopies' => 'required | numeric',
            'director' => 'required | string',

        ]);

        $validatedData['numberOfCopiesAvailable'] = $validatedData['numberOfCopies'];
        $validatedData['is_available'] = true;

        $movie = Movie::create($validatedData);

        session()->flash('notif', 'success to save film');

        return redirect(route('movie-overview'))->with('success', trans('movie.successfulAdded'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function view(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', ['movie'=> $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required | string',
            'description' => 'nullable | string| max:255',
            'numberOfCopies' => 'required | numeric',
            'director' => 'required | string',

        ]);

        $movie->update($validatedData);

        return redirect(route('movie-overview'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    }
}
