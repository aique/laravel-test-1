<?php

    class AlbumController extends BaseController
    {
        public function all()
        {
            $albums = Album::paginate(10);

            $data = array('sectionTitle' => 'Discos', 'albums' => $albums);

            return View::make('private.album.list', $data);
        }

        public function search()
        {
            $albums = Album::where('title', 'like', '%' . Input::get('title') . '%')->get();

            $response = array
            (
                'status' => 'success',
                'albums' => $albums,
            );

            return Response::json($response);
        }
    }