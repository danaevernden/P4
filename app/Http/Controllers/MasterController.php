<?php

namespace P4\Http\Controllers;
use P4\Http\Controllers\Controller;

class MasterController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
             return view('Master.index');
      }


    public function getIndex() {
      $wish = \P4\Wish::orderby('id','ASC')->get();
      $wishsum = $wish->sum('donation_amnt_request');

      $wishgifts = $wish->pluck('wrapping_paper_color');
       return view('Master.index')->with(['wishsum'=>$wishsum, 'wishgifts'=>$wishgifts]);
    }


    public function getIndexPractice() {
      $wish = new \App\Wish();
      foreach($wish->all() as $wish){
          echo $wish->charity;
      }
    }

    public function getMailtest(){
      return view('Master.mailtest');
    }
}
