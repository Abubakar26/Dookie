<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fbdata;
use App\post;
use DB;

class pages extends Controller
{
        public function index()
        {
            return view('Index');
        }

        public function home()
        {
            return view ('Home');
        }




    }
