<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice', 'MasterController@getIndexPractice');

Route::get('/', 'MasterController@getIndex');

Route::get('/about', 'AboutController@getIndex');

Route::get('/charity', 'CharityController@preIndex');
Route::get('/charityfinder', 'CharityController@getIndexCharityFinder');
Route::post('/charityfinder', 'CharityController@postIndexCharityFinder');

Route::get('/newwish', 'WishController@preIndex');

/*users can't access these pages when logged out*/
Route::group(['middleware'=> 'auth'], function() {

Route::get('/newwish/donation', 'WishController@getIndexDonation');
Route::post('/newwish/donation', 'WishController@postIndexDonation');

Route::get('/newwish/material', 'WishController@getIndexMaterial');
Route::post('/newwish/material', 'WishController@postIndexMaterial');

Route::get('/newwish/crowdsource', 'WishController@getIndexCrowdSource');
Route::post('/newwish/crowdsource', 'WishController@postIndexCrowdSource');

Route::get('/account', 'AccountController@getIndex');
Route::get('/account/mywishes', 'AccountController@getIndexMyWishes');

Route::get('/add/charity', 'CharityController@getIndexCharity');
Route::post('/add/charity', 'CharityController@postIndexCharity');

Route::get('/add/crowdsource', 'CharityController@getIndexCrowdSource');
Route::post('/add/crowdsource', 'CharityController@postIndexCrowdSource');

});



/*users can't access these pages when logged in*/


# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');



if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database charities');
        DB::statement('CREATE database charities');

        return 'Dropped charities; created charities.';
    });

};



Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Route::get('/confirm-login-worked', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});
