<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CharityController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /*the following 4 functions set up the menu of the charity page*/
    public function preIndex() {
        return view('Charity.preindex');
    }

    public function getIndexCharityFinder(){
      $charities = \App\Charity::orderBy('id','DESC')->get();
        return view('Charity.indexCharityFinder');
    }

    public function getIndexAddCharity(){
        return view('Charity.indexAddCharity');
    }

    public function getIndexAddCrowdSource(){
        return view('Charity.indexAddCrowdSource');
    }

    /*responds to requests to POST /new charity*/
    public function postIndexAddCharity(Request $request) {
      $this->validate( $request, [
        'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);

        $charity = new \App\Charity();
        $charity->name = $request->name;
        $charity->description = $request->description;
        $charity->city = $request->city;
        $charity->state = $request->state;
        $charity->hashtags = $request->hashtags;
        $charity->mission = $request->mission;
        $charity->website = $request->website;
        $charity->year_founded = $request->year_founded;
        $charity->charity_or_crowdsource = 'charity';
        $charity->logo_or_pic = $request->logo_or_pic;

        $charity->save();

    /*    add this once i understand it better
    \Session::flash('flash_message', 'Thank you! That charity is now added!');
        return redirect('/charities'); */
    }

    /*responds to requests to POST /new charity*/
    public function postIndexAddCrowdsource(Request $request) {
      $this->validate( $request, [
        'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);

        $charity = new \App\Charity();
        $charity->name = $request->name;
        $charity->description = $request->description;
        $charity->city = $request->city;
        $charity->state = $request->state;
        $charity->hashtags = $request->hashtags;
        $charity->website = $request->website;
        $charity->charity_or_crowdsource = 'crowdsource';
        $charity->logo_or_pic = $request->logo_or_pic;

        $charity->save();

    /*    add this once i understand it better
    \Session::flash('flash_message', 'Thank you! That charity is now added!');
        return redirect('/charities'); */
      }
}
