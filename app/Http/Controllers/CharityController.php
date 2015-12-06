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
      $charity = \P4\Charity::find($request->city);
      dump($charity);
    #  dump($id);

      if(is_null($charity)) {
          \Session::flash('flash_message','Charity not found.');
          return redirect('\charityfinder');
      }

      return view('Charity.indexCharityFinder')->with('charity', $charity);
    }

    public function getIndexCharity(){
      $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
      "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
      "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
      "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
      "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
      "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
      "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
      "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
      "West Virginia", "Wisconsin", "Wyoming" );

        return view('Charity.indexCharity')->with(['states'=>$states]);
    }

    public function getEditCharity($id = null) {
            $charity = \P4\Charity::find($id);

            $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
            "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
            "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
            "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
            "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
            "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
            "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
            "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
            "West Virginia", "Wisconsin", "Wyoming" );
              return view('Charity.editCharity')->with(['charity'=>$charity, 'states'=>$states]);
        }

   public function postEditCharity(Request $request) {
          $charity = \P4\Charity::find($request->id);
          $charity->name = $request->name;
          $charity->description = $request->description;
          $charity->city = $request->city;
          $charity->state = $request->state;
          $charity->mission = $request->mission;
      #    $charity->hashtags = $request->hashtags;
          $charity->website = $request->website;
          $charity->year_founded = $request->year_founded;
          $charity->charity_or_crowdsource = $request->charity_or_crowdsource;
          $charity->logo_or_pic = $request->logo_or_pic;
          $charity->save();
          \Session::flash('flash_message', 'Your charity was updated.');
          return redirect('/charity/edit/'.$request->id);
      }

    public function getViewCharity($id = null){
      $charity = \P4\Charity::find($id);
      $wish = \P4\Wish::where('charity_id','=',$id);
      # $user = \P4\User::where('id','=',$wishusers);
      $wishsum = $wish->sum('donation_amnt_request');
      $wishgift = \P4\Wish::where('charity_id','=',$id)->pluck('wrapping_paper_color');
      #$userwish = \Auth\User::where('id','=',$user_id);
    #  dump($wishgift);
      return view('Charity.viewCharity')->with(['charity'=>$charity, 'wish'=>$wish, 'wishsum'=>$wishsum, 'wishgift'=>$wishgift]);
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
        $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
        "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
        "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
        "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
        "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
        "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
        "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
        "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
        "West Virginia", "Wisconsin", "Wyoming" );

        return view('Charity.indexCrowdSource')->with(['states'=>$states]);
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

      public function getDeleteCharity($id = null){
          $charity = \P4\Charity::find($id);
          return view('Charity.DeleteCharity')->with(['charity'=>$charity]);
      }
      public function postDeleteCharity($id = null){
        $charity = \P4\Charity::find($id);
        $charity->delete();
        \Session::flash('flash_message','Record deleted.');
        return redirect('/charityfinder');
      }


}
