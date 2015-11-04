<?php

namespace P4\Http\Controllers;
use P4\Http\Controllers\Controller;

class MasterController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
             return view('Master.index');
      }


    public function getIndex() {
       return view('Master.index');
    }
}
