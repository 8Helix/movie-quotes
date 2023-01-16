<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuoteRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
	public function index()
	{
		return view('admin.quotes', [
			'quotes' => Quote::all(),
		]);
	}

	public function create()
	{
		return view('admin.create-quote', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreQuoteRequest $request): RedirectResponse
	{
		$this->buildQuote($request, new Quote);

		return redirect()->route('quotes.index');
	}

	public function edit(Quote $quote): View
	{
		return view('admin.edit-quote', [
			'movies' => Movie::all(),
			'quote'  => $quote,
		]);
	}

	public function update(StoreQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$this->buildQuote($request, $quote);

		return redirect()->route('quotes.index');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();

		return back();
	}

	protected function buildQuote(Request $request, Quote $quote): void
	{
		$request->validated();

		$quote->movie_id = $request->movie_id;
		$quote->setTranslation('body', 'en', $request->body_en);
		$quote->setTranslation('body', 'ka', $request->body_ka);
		$quote->save();
	}
}
