<?php 


class PageController extends BaseController
{

 public function home()
{
return View::make('home');
}

public function contact()
{
return View::make('contact');
}

public function about()
{
return View::make('about');
}
public function dashboard()
{
return View::make('dashboard');
}
public function login()
{
return View::make('login');

}
public function news()
{
return View::make('news');
}
public function overview()
{
return View::make('About.overview');
}
public function owners()
{
return View::make('About.owners');
}

public function announcements()
{
return View::make('news.announcements');
}
public function events()
{
return View::make('news.events');
}

//Contact Form
public function ContactUsForm(){

//Get all the data and store it inside Store Variable
$data = Input::all();

//Validation rules
$rules = array (
'firstname' => 'required|alpha',
'lastname' => 'required|alpha',
'subject'=>'required|alpha',
'email' => 'required|email',
'message' => 'required|min:25',
'captcha' => 'required|captcha'
);

//Validate data
$validator = Validator::make ($data, $rules);

//If everything is correct than run passes.
if ($validator -> passes())
{
//Send email using Laravel send function
Mail::send('emails.hello', $data, function($message) use ($data)
{
//email 'From' field: Get users email add and name
$message->from($data['email'] , $data['firstname']);
//email 'To' field: cahnge this to emails that you want to be notified. 
$message->to('maxwell.agbamey@gmail.com', 'maxwell agbamey')->cc('maxwell.agbamey@yahoo.com')->subject('contact request');

});
return Redirect::route('contact')->with('message', 'Your message has been sent. Thank You!');

}
else
{
//return contact form with errors
return Redirect::to('contact')->withErrors($validator);
}
}

}

?>