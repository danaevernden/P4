<?php

namespace P4\Http\Controllers;
use P4\Http\Controllers\Controller;

class MasterController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
             return view('Master.index');
      }


    public function getIndex() {
      $wishes = \P4\Wish::all()->sum('donation_amnt_request');
       return view('Master.index')->with('wishes', $wishes);
    }


    public function getIndexPractice() {
      $wish = new \App\Wish();
      foreach($wish->all() as $wish){
          echo $wish->charity;
      }

    }

}
