<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		$movie = Movie::all()->random(1)[0];

		$quote = $movie->quotes->isEmpty() ? null : $movie->quotes->random(1)[0];

		return view('components.home', [
			'movie' => $movie,
			'quote' => $quote,
		]);
	}

	public function show(Movie $movie): View
	{
		return view('components.movie', [
			'movie' => $movie,
		]);
	}
}
