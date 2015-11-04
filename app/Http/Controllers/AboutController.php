<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getIndex() {
         return view('About.index');
    }
}
