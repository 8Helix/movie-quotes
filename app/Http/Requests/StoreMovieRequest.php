<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function rules()
	{
		return [
			'title_en'  => 'required',
			'title_ka'  => 'required',
			'thumbnail' => 'image',
		];
	}
}
