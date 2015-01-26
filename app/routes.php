<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", array(
    "as"=>"home",
    "uses"=>"PageController@home"
));
Route::get("contact", array(
    "as"=>"contact",
    "uses"=>"PageController@contact"
));
Route::get("news", array(
    "as"=>"news",
    "uses"=>"PageController@news"
));
Route::get("about", array(
    	"as"=>"about",
    	"uses"=>"PageController@about"
		));

Route::post('contact_request',array(
    	"as"=>"contact_request",
    	"uses"=>"PageController@ContactUsForm"
		));
Route::group(array('prefix' => 'about'), function()
	{
		// main page for the admin section (app/views/about/overview.blade.php)
		Route::get("overview", array(
   		 "as"=>"overview",
    	 "uses"=>"PageController@overview"
        ));
        Route::get("owners", array(
   		 "as"=>"owners",
    	"uses"=>"PageController@owners"
        ));
	});
Route::group(array('prefix' => 'news'), function()
	{
		// main page for the admin section (app/views/about/overview.blade.php)
		Route::get("announcements", array(
   		 "as"=>"announcements",
    	 "uses"=>"PageController@announcements"
        ));
        Route::get("events", array(
   		 "as"=>"events",
    	"uses"=>"PageController@events"
        ));
	});