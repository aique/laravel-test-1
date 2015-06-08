<?php

    class BuyTableSeeder extends Seeder
    {
        public function run()
        {
            DB::table('buys')->delete();

            $randomUser1 = DB::table('users')->skip(0)->take(1)->get();
            $randomAlbum1 = DB::table('albums')->skip(0)->take(1)->get();
            $randomAlbum2 = DB::table('albums')->skip(1)->take(1)->get();
            $randomAlbum3 = DB::table('albums')->skip(2)->take(1)->get();

            Buy::create(array('user_id' => $randomUser1[0]->id, 'album_id' => $randomAlbum1[0]->id, 'units' => '2', 'price' => '18.75'));
            Buy::create(array('user_id' => $randomUser1[0]->id, 'album_id' => $randomAlbum2[0]->id, 'units' => '3', 'price' => '36.15'));
            Buy::create(array('user_id' => $randomUser1[0]->id, 'album_id' => $randomAlbum3[0]->id, 'units' => '1', 'price' => '11.5'));
        }
    }