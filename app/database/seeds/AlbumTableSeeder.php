<?php

    class AlbumTableSeeder extends Seeder
    {
        public function run()
        {
            DB::table('albums')->delete();

            Album::create(array('title' => 'Kind of blue', 'artist' => 'Miles Davis', 'year' => '1959'));
            Album::create(array('title' => 'A love supreme', 'artist' => 'John Coltrane', 'year' => '1965'));
            Album::create(array('title' => 'Ellington at Newport', 'artist' => 'Duke Ellington', 'year' => '1956'));
            Album::create(array('title' => 'Blue train', 'artist' => 'John Coltrane', 'year' => '1957'));
            Album::create(array('title' => 'Bitches brew', 'artist' => 'Miles Davis', 'year' => '1970'));
            Album::create(array('title' => 'Birth of the cool', 'artist' => 'Miles Davis', 'year' => '1949'));
            Album::create(array('title' => 'Out to lunch', 'artist' => 'Eric Dolphy', 'year' => '1964'));
            Album::create(array('title' => 'Speak no evil', 'artist' => 'Speak no evil', 'year' => '1964'));
            Album::create(array('title' => 'Soul station', 'artist' => 'Hank Mobley', 'year' => null));
        }
    }