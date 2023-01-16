<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movies', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$this->buildMovie($request, new Movie);

		return redirect()->route('movies.index');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function update(StoreMovieRequest $request, Movie $movie): RedirectResponse
	{
		$this->buildMovie($request, $movie);

		return redirect()->route('movies.index');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		File::delete('storage/' . $movie->thumbnail);
		$movie->delete();

		return back();
	}

	protected function buildMovie(Request $request, Movie $movie): void
	{
		$request->validated();

		if ($request->file('thumbnail'))
		{
			if ($movie->thumbnail)
			{
				File::delete('storage/' . $movie->thumbnail);
			}
			$movie->thumbnail = $request
				->file('thumbnail')
				->store('thumbnails');
		}

		$movie->setTranslation('title', 'en', $request->title_en);
		$movie->setTranslation('title', 'ka', $request->title_ka);
		$movie->save();
	}
}
