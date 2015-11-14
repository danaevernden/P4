<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewWishController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
          return view('NewWish.preindex');
    }

    public function preIndex() {
        return view('NewWish.preindex');
    }

    public function getIndexDonation(){
        return view('NewWish.indexDonation');      
    }

    public function getIndexCrowdSource(){
        return view('NewWish.indexCrowdSource');
    }
    public function getIndexMaterial(){
        return view('NewWish.indexMaterial');
    }

}
