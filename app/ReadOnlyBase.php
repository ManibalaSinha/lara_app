<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//class ReadOnlyBase extends Model
class ReadOnlyBase
{
    //method and attributes
    protected $titles_array = [];

    public function all()
    {
    	# code...
    	return $this->titles_array;
    }
    //receive id
    public function get( $id )
    {
    	return $this->titles_array[$id];
    }
}
