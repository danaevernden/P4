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
Route::get('/addcharity', 'CharityController@getIndexAddCharity');
Route::post('/addcharity', 'CharityController@postIndexAddCharity');

Route::get('/addcrowdsource', 'CharityController@getIndexAddCrowdSource');
Route::post('/addcrowdsource', 'CharityController@postIndexAddCrowdSource');


Route::get('/newwish', 'NewWishController@preIndex');
Route::get('/newwish/donation', 'NewWishController@getIndexDonation');
Route::post('/newwish/donation', 'NewWishController@postIndexDonation');

Route::get('/newwish/crowdsource', 'NewWishController@getIndexCrowdSource');
Route::post('/newwish/crowdsource', 'NewWishController@postIndexCrowdSource');

Route::get('/newwish/material', 'NewWishController@getIndexMaterial');
Route::post('/newwish/material', 'NewWishController@postIndexMaterial');

Route::get('/account', 'AccountController@getIndex');
Route::get('/account/mywishes', 'AccountController@getIndexMyWishes');

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
