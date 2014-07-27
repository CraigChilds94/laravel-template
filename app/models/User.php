<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * The validation rules for this model
	 *
	 * @var array
	 */
	public static $rules = [
		'username' 	=> 'required|min:3|max:32|unique:users',
		'password' 	=> 'required',
		'email' 	=> 'required|email|unique:users'
	];

	/**
	 * Define the validation rules for logging in
	 * @var array
	 */
	public static $loginRules = [
		'username' => 'required|min:3|max:32',
		'password' => 'required'
	];

	/**
	 * Is the user an admin?
	 * @return true | false
	 */
	public function isAdmin() {
		return $this->acl === 'admin';
	}

}
