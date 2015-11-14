<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharityController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }


    public function preIndex() {
        return view('Charity.preindex');
    }

    public function getIndexCharityFinder(){
        return view('Charity.indexCharityFinder');
    }

    public function getIndexAddCharity(){
        return view('Charity.indexAddCharity');
    }

    public function getIndexAddCrowdSource(){
        return view('Charity.indexAddCrowdSource');
    }
}
