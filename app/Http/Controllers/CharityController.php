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
      $charities = \P4\Charity::orderBy('id','DESC')->get();
        return view('Charity.indexCharityFinder')->with('charities', $charities);
    }

    public function postIndexCharityFinder(Request $request){
  #    this isn't working >>>
      $charities = \P4\Charity::find($request->charity_or_crowdsource)->get();
      return view('Charity.indexCharityFinder')->with('charities', $charities);
    }

    public function getIndexCharity(){
        return view('Charity.indexCharity');
    }

    /*responds to requests to POST /new charity*/
    public function postIndexCharity(Request $request) {
      $this->validate( $request, [
        'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);

        $charity = new \P4\Charity();
        $charity->name = $request->name;
        $charity->description = $request->description;
        $charity->city = $request->city;
        $charity->state = $request->state;
        $charity->mission = $request->mission;
    #    $charity->hashtags = $request->hashtags;
        $charity->website = $request->website;
        $charity->year_founded = $request->year_founded;
        $charity->charity_or_crowdsource = 'crowdsource';
        $charity->logo_or_pic = $request->logo_or_pic;

        $charity->save();
        \Session::flash('flash_message', 'Thank you! That charity is now added!');
        return redirect('/charity');
    }



      public function getIndexCrowdSource(){
        return view('Charity.indexCrowdSource');
      }

    /*responds to requests to POST /new charity*/
    public function postIndexCrowdSource(Request $request) {

      $this->validate( $request, [
        'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);
        $charity = new \P4\Charity();
        $charity->name = $request->name;
        $charity->description = $request->description;
        $charity->city = $request->city;
        $charity->state = $request->state;
  #      $charity->hashtags = $request->hashtags;
        $charity->website = $request->website;
        $charity->charity_or_crowdsource = 'crowdsource';
        $charity->logo_or_pic = $request->logo_or_pic;
        $charity->save();
        \Session::flash('flash_message', 'Thank you! Your CrowdSource is now added!');
        return redirect('/charity');
      }

}
