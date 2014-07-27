<?php

/**
 * The controller to handle user interactions with the application
 */
class UserController extends BaseController {

    /**
     * Render the login view
     */
    public function getLogin()
    {

        return View::make('admin.login');
    }

    /**
     * Handle the post request to the login view
     */
    public function postLogin()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$loginRules);

        if($validator->fails())
        {
            return Redirect::route('login')
                ->withErrors($validator)
                ->withInput();
        }

        if(Auth::viaRemember() || Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), true))
        {
            return Redirect::intended('/admin');
        }

        return Redirect::route('login');
    }

    /**
     * Handle user logout
     */
    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('home');
    }
}
