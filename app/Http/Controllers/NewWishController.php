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

/*the following 4 functions set up the menu of the newwish page*/
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

    /*responds to requests to POST /newwish/donation*/
        public function postIndexDonation(Request $request) {
          $this->validate( $request, [
            'charity' => 'required|min:3',
            ]);

            $wish = new \App\Wish();
            $wish->charity -> $request->charity;
            $wish->donation_amnt_request = $request->donation_amnt_request;
            $wish->wisher = $request->wisher;
            $wish->hashtags = $request->hashtags;
            $wish->message = $request->message;
            $wish->wrapping_paper_color = $request->wrapping_paper_color;

            $wish->save();
            return redirect('/newwish');
    }


    /*responds to requests to POST /newwish/donation*/
    public function postIndexCrowdSource(Request $request) {
      $this->validate( $request, [
        'charity' => 'required|min:3',
        ]);

        $wish = new \App\Wish();
        $wish->charity -> $request->charity;
        $wish->donation_amnt_request = $request->donation_amnt_request;
        $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();
        return redirect('/newwish');
    }


    /*responds to requests to POST /newwish/donation*/
    public function postIndexMaterial(Request $request) {
      $this->validate( $request, [
        'charity' => 'required|min:3',
        ]);

        $wish = new \App\Wish();
        $wish->charity -> $request->charity;
        $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();
        return redirect('/newwish');
    }

}
