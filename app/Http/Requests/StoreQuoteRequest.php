<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 */
	public function rules()
	{
		return [
			'body_en'  => 'required',
			'body_ka'  => 'required',
			'movie_id' => 'required',
		];
	}
}
