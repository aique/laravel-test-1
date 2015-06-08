<?php

    class UserTableSeeder extends Seeder
    {
        public function run()
        {
            DB::table('users')->delete();

            Sentry::createUser(array('email' => 'test1@test.com', 'name' => 'test1', 'password' => 'test1', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test2@test.com', 'name' => 'test2', 'password' => 'test2', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test3@test.com', 'name' => 'test3', 'password' => 'test3', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test4@test.com', 'name' => 'test4', 'password' => 'test4', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test5@test.com', 'name' => 'test5', 'password' => 'test5', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test6@test.com', 'name' => 'test6', 'password' => 'test6', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test7@test.com', 'name' => 'test7', 'password' => 'test7', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test8@test.com', 'name' => 'test8', 'password' => 'test8', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test9@test.com', 'name' => 'test9', 'password' => 'test9', 'activated' => '1'));
            Sentry::createUser(array('email' => 'test10@test.com', 'name' => 'test10', 'password' => 'test10', 'activated' => '1'));
        }
    }