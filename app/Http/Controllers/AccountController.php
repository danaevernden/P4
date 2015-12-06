<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class AccountController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getIndexMyWishes() {
    //    $wishes = \App\Wish::orderBy('id','DESC')->get();
          //   return view('Account.index')->with('wishes', $wishes);
      //    dump($wishes);
    }


    public function getIndex() {
      $user = \Auth::user();
        $wishes = \P4\Wish::with('charity')->where('user_id','=',\Auth::user()->id)->get();
      //  foreach($wishes as $wish) {
      //    echo $wish->charity->name.' has the following wishes: '.$wish->donation_amnt_request.' from '.$wish->wisher.'<br>';
      //  }

      //  dump($wishes->toArray());
             return view('Account.index')->with(
             ['wishes'=>$wishes, 'user'=>$user]);
    }


    public function getEditUser(){
    #  id = null
    #  return('hi');
      $user =\Auth::user();
      $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
      "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
      "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
      "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
      "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
      "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
      "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
      "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
      "West Virginia", "Wisconsin", "Wyoming" );

      return view('Account.editUser')->with(['user'=>$user, 'states'=>$states]);
    }

    public function postEditUser(Request $request){
      $user =\Auth::user();
      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->city = $request->city;
      $user->state = $request->state;
      $user->save();
      \Session::flash('flash_message','Your user information was updated.');

      return redirect('/account');
    }
    public function getdeleteWish($id = null){
        $wish = \P4\Wish::find($id);
        return view('Account.deleteWish')->with(['wish'=>$wish]);
    }
    public function postdeleteWish($id = null){
      $wish = \P4\Wish::find($id);
      $wish->delete();
      \Session::flash('flash_message','Your wish was deleted.');
      return redirect('/account');
    }

    public function getEdit($id = null) {
        $wish = \P4\Wish::find($id);
        $charities = \P4\Charity::orderby('name', 'ASC')->get();
        $user=\Auth::user();
        $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
        "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
        "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas",
        "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
        "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire",
        "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota",
        "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
        "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington",
        "West Virginia", "Wisconsin", "Wyoming" );


          if(is_null($wish)) {

            return view('Account.editUser')->with(['user'=>$user, 'states'=>$states]);
          }
          else{
            #return('hey');
            return view('Account.edit')->with(['wish'=>$wish, 'charities'=>$charities]);
        }
      }

//*need to figure out how to connect this*//
    public function postEdit(Request $request) {
        $wish2 = \P4\Wish::find($request->id);
        dump($wish2);
        $wish->charity_id = $request->charity;
        $wish->donation_amnt_request = $request->donation_amnt_request;
        $wish->user_id = \Auth::user()->id;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;
        $wish->save();
    \Session::flash('flash_message','Your wish was updated.');
     return redirect('/account');
     return view('Account.edit')->with(['user'=>$user]);

    }
    //*responds to viewing details of wish//

#    public function email(Request $request, $id)
#       {
#           $user = User::findOrFail($id);
#
#           Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
#               $m->from('hello@app.com', 'Your Application');
#
#               $m->to($user->email, $user->name)->subject('Your Reminder!');
#           });

}
