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


    public function getEditUser($id = null){
      $user =\Auth::user();
      return view('Account.editUser')->with(['user'=>$user]);
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
        $user=\Auth::user();
          if(is_null($wish)) {
            return view('Account.editUser')->with(['user'=>$user]);
          }
          else{
            return view('Account.edit')->with(['wish'=>$wish]);
        }
      }

//*need to figure out how to connect this*//
    public function postEdit(Request $request) {
      $this->validate( $request, [
    #    'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);

        $wish = \P4\Wish::find($request->id);
      #  $wish->charity -> $request->charity;
        $wish->donation_amnt_request = $request->donation_amnt_request;
        $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();
    \Session::flash('flash_message','Your wish was updated.');
    return redirect('/account');
    return view('Account.editUser')->with(['user'=>$user]);

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
