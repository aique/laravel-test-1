<?php

    class Album extends Eloquent
    {
        protected $table = 'albums';

        protected $fillable = array('title', 'artist', 'year');
    }