<?php

    class AppController extends BaseController
    {
        public function home()
        {
            $data = array('sectionTitle' => 'Home');

            return View::make('app.home', $data);
        }

        public function login()
        {
            $data = array('sectionTitle' => 'Login');

            if(Sentry::check())
            {
                return Redirect::to('users');
            }

            return View::make('app.login', $data);
        }

        public function processLogin()
        {
            $data = array('sectionTitle' => 'Login');

            if(!Sentry::check())
            {
                $validator = Validator::make(Input::all(), User::$loginRules, User::$loginMessages);

                if($validator->passes())
                {
                    $credentials = array
                    (
                        'email' => Input::get('email'),
                        'password' => Input::get('password')
                    );

                    try
                    {
                        Sentry::login(Sentry::authenticate($credentials, false), false);
                    }
                    catch(Exception $ex)
                    {
                        $validator->getMessageBag()->add('authenticate_failed', 'Los datos de acceso no son correctos');

                        return View::make('app.login', $data)->withErrors($validator)->withInput(Input::all());
                    }
                }
                else
                {
                    return View::make('app.login', $data)->withErrors($validator)->withInput(Input::all());
                }
            }

            return Redirect::to('users');
        }

        public function logout()
        {
            Sentry::logout();

            return Redirect::to('/');
        }

        public function changeLang()
        {
            $rules =
            [
                'language' => 'in:en,es' // lista de lenguajes soportados
            ];

            $language = Input::get('lang');

            $validator = Validator::make(compact($language),$rules);

            if($validator->passes())
            {
                Session::put('language',$language);

                App::setLocale($language);
            }

            return Redirect::to('/');
        }
    }