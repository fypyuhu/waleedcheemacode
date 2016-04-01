<?php namespace App\Http\Requests;

class UserCreateRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'type' =>'required',
			'username' => 'required|max:30|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8'
		];
	}

}