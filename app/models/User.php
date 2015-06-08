<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Cartalyst\Sentry\Users\Eloquent\User as CartalystUser;

class User extends CartalystUser implements UserInterface, RemindableInterface {

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

    protected $fillable = array('name', 'email', 'password');

    public function buys()
    {
        return $this->hasMany('Buy');
    }

    public static $loginRules = array
    (
        'email' => 'required|email',
        'password' => 'required'
    );

    public static $loginMessages = array
    (
        'email.email' => 'El formato del correo electrónico es incorrecto',
        'email.required' => 'El campo del correo electrónico es obligatorio',
        'password.required' => 'El campo de la contraseña es obligatorio',
    );

    public static $createRules = array
    (
        'name' => 'required|alpha_num',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    );

    public static $createMessages = array
    (
        'name.alpha_num' => 'El formato del nombre es incorrecto',
        'name.required' => 'El campo del nombre es obligatorio',
        'email.email' => 'El formato del correo electrónico es incorrecto',
        'email.required' => 'El campo del correo electrónico es obligatorio',
        'password.required' => 'El campo de la contraseña es obligatorio',
        'password.confirmed' => 'La contraseña no coincide con su confirmación'
    );

    public static $editRules = array
    (
        'name' => 'required|alpha_num',
        'email' => 'required|email',
    );

    public static $editMessages = array
    (
        'name.alpha_num' => 'El formato del nombre es incorrecto',
        'name.required' => 'El campo del nombre es obligatorio',
        'email.email' => 'El formato del correo electrónico es incorrecto',
        'email.required' => 'El campo del correo electrónico es obligatorio'
    );

}
