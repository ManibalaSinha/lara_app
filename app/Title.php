<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//class Title extends Model
//inherit the class other than eloquent
class Title extends ReadOnlyBase
{
    //Title array
    protected $titles_array = ['Mr', 'Mrs', 'Ms', 'Dr', 'Mx'];


}
