<?php

    class UserController extends BaseController
    {
        public function all()
        {
            $users = User::paginate(5);

            $data = array('sectionTitle' => 'Usuarios', 'users' => $users);

            return View::make('private.user.list', $data);
        }

        public function create()
        {
            $data = array('sectionTitle' => 'Nuevo usuario');

            return View::make('private.user.create', $data);
        }

        public function processCreate()
        {
            $data = array('sectionTitle' => 'Nuevo usuario');

            $validator = Validator::make(Input::all(), User::$createRules, User::$createMessages);

            if($validator->passes())
            {
                Sentry::createUser(Input::all());

                return Redirect::to('users');
            }
            else
            {
                return View::make('private.user.create', $data)->withErrors($validator)->withInput(Input::all());
            }
        }

        public function edit($id)
        {
            $user = User::find($id);

            $data = array('sectionTitle' => 'Editar usuario', 'user' => $user);

            return View::make('private.user.edit', $data);
        }

        public function processEdit($id)
        {
            $user = User::find($id);

            $data = array('sectionTitle' => 'Editar usuario');

            $validator = Validator::make(Input::all(), User::$editRules, User::$editMessages);

            if($validator->passes())
            {
                $user->update(Input::all());

                return Redirect::to('users');
            }
            else
            {
                $data['user'] = $user;

                return View::make('private.user.edit', $data)->withErrors($validator);
            }
        }

        public function detail($id)
        {
            $user = User::find($id);

            if($user)
            {
                $data = array('sectionTitle' => $user->name, 'user' => $user);

                return View::make('private.user.detail', $data);
            }
            else
            {
                return Redirect::to('users');
            }
        }

        public function delete($id)
        {
            $user = User::find($id);

            if($user)
            {
                $user->delete();
            }

            return Redirect::to('users');
        }
    }