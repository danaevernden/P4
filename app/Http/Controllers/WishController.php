<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
          return view('Wish.preindex');
    }

/*the following 4 functions set up the menu of the newwish page*/
    public function preIndex() {
        return view('Wish.preindex');
    }

    public function getIndexCrowdSource(){
      $wish = \P4\Wish::orderby('id','ASC')->get();
      $charities = \P4\Charity::where('charity_or_crowdsource','=','crowdsource')->get();
            return view('Wish.indexCrowdSource')->with(['wish'=>$wish, 'charities'=>$charities]);

    }
    public function getIndexMaterial(){
        return view('Wish.indexMaterial');
    }

    public function getIndexDonation(){

      $wish = \P4\Wish::orderby('id','ASC')->get();
      $charities = \P4\Charity::where('charity_or_crowdsource','=','charity')->get();
  #  $charities = \P4\Charity::lists('id');
        #    $charities_for_dropdown = [];
          #  foreach($charities as $charity) {
          #      $charities_for_dropdown[$charity->id] = $charity->name;
        #    }
            return view('Wish.indexDonation')->with(['wish'=>$wish, 'charities'=>$charities]);

    }


    /*responds to requests to POST /newwish/donation*/
        public function postIndexDonation(Request $request) {
          #$this->validate( $request, [
          #  'charity' => 'required|min:3',
          #  ]);
dump($request);
            $wish = new \P4\Wish();
            $wish->charity_id = $request->charity_id;
            $wish->donation_amnt_request = $request->donation_amnt_request;
            $wish->hashtags = $request->hashtags;
            $wish->message = $request->message;
            $wish->wrapping_paper_color = $request->wrapping_paper_color;
            $wish->user_id = $request->user_id;
            $wish->save();
            \Session::flash('flash_message', 'Thank you! Your wish is now added!');

            return redirect('/newwish');
    }


    /*responds to requests to POST /newwish/donation*/
    public function postIndexCrowdSource(Request $request) {
      $this->validate( $request, [
        'charity' => 'required|min:3',
        ]);

        $wish = new \P4\Wish();
        $wish->charity = $request->charity;
        $wish->donation_amnt_request = $request->donation_amnt_request;
      #  $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();
        \Session::flash('flash_message', 'Thank you! Your wish is now added!');

        return redirect('/newwish');
    }


    /*responds to requests to POST /newwish/donation*/
    public function postIndexMaterial(Request $request) {
      $this->validate( $request, [
        'charity' => 'required|min:3',
        ]);

        $wish = new \P4\Wish();

        $wish->charity = $request->charity;
        ##should be changed to material gift later
    #    $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();
        \Session::flash('flash_message', 'Thank you! Your wish is now added!');

        return redirect('/newwish');
    }

}
