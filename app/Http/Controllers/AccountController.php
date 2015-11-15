<?php

namespace P4\Http\Controllers;
#use P3\Http\Controllers\Controller;
use P4\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getIndex() {
        $wishes = \App\Wish::orderBy('id','DESC')->get();
          //   return view('Account.index')->with('wishes', $wishes);
          dump($wishes);
    }


    public function getIndexMyWishes() {
             return view('Account.indexMyWishes');
    }
//*need to figure out how to connect this*//
    public function postIndexEditWish(Request $request) {
      $this->validate( $request, [
        'name' => 'required|min:3',
        'website' => 'required|min:5',
        ]);

        $wish = \App\Wish::find($request->id);
        $wish->charity -> $request->charity;
        $wish->donation_amnt_request = $request->donation_amnt_request;
        $wish->wisher = $request->wisher;
        $wish->hashtags = $request->hashtags;
        $wish->message = $request->message;
        $wish->wrapping_paper_color = $request->wrapping_paper_color;

        $wish->save();

    /*    add this once i understand it better
    \Session::flash('flash_message','Your book was updated.');
    return redirect('/books/edit/'.$request->id); */
    }
    //*responds to viewing details of wish//
    public function getEdit($id = null){
      $wish = \App\Wish::find($id);
      if(is_null($wish)) {
          \Session::flash('flash_message','Wish not found.');
          return redirect('\books');
      }

    }
}
