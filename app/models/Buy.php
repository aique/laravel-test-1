<?php

    class Buy extends Eloquent
    {
        protected $table = 'buys';

        protected $fillable = array('price', 'units');

        public function user()
        {
            return $this->belongsTo('User'); // belongsTo debe figurar en el modelo que en la tabla tiene la clave foránea
        }

        public function album()
        {
            return $this->belongsTo('Album');
        }
    }