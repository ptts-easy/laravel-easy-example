<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


trait Wheel
{
    public function roll()
    {
        echo "I am rolling!";
    }
}

class Car
{
    use Wheel;
}

$c = new Car();
$c->roll();


class MyController extends Controller
{
    //
}
