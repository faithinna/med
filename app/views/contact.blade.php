@extends('layout.homelayout')
@section('carousel')
@include("non-carousel")
@stop
@section('content')
<style type="text/css">

.navbar
  {
    opacity: 0.8;
  }
</style>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li class="active">Contact</li>
    <span class="pull-right" style="text-align:right;">
    <a><i style="color:#3b5998" class="fa fa-facebook-square fa-lg"></i></a>&nbsp
    <a><i style="color:#00aced" class="fa fa-twitter-square fa-lg"></i></a>&nbsp
    <a><i style="color:#dd4b39" class="fa fa-google-plus-square fa-lg"></i></a> 
    </span> 
    </ul>

        <div class="row">
        	<div class="col-lg-9 col-md-9 col-sm-9">
                <div id="contact_border"  class="panel panel-success">
                    <div class="panel-heading">Contact Us</div>
                    <div class="panel-body">
                    <h5>For any enquiries, please fill the form below;</h5>
                    {{ Form::open(['url'=> 'contact_request']) }}              
                                 <ul class="errors">
                                  @foreach($errors->all('<li class="text-danger">:message</li>') as $message)
                                  {{ $message }}
                                  @endforeach
                                  </ul> 
                                  <p class="text-success">{{Session::get('message')}}</p>                          
                                      <div class="form-group input-group col-lg-5">                                            
                                       {{ Form::text('firstname',null,['class'=>'form-control','placeholder'=>'Firstname']) }}
                                       	<span class="input-group-addon" style="color:red"> *</span>
                                        </div>

                                        <div class="form-group input-group col-lg-5">                                            
                                       {{ Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Lastname']) }}
                                        <span class="input-group-addon" style="color:red"> *</span>
                                        </div>
                                            <div class="form-group input-group col-lg-5">                                            
                                             {{ Form::email('email',null,['class'=>'form-control','placeholder'=>'Your email address']) }}
                                             <span class="input-group-addon" style="color:red">*</span>
                                        </div> 
                                        <div class="form-group input-group col-lg-5">                                          
                                             {{ Form::text('subject',null,['class'=>'form-control','placeholder'=>'subject']) }}
                                             <span class="input-group-addon" style="color:red">*</span>
                                        </div>   
                                        <div class="form-group input-group col-lg-5">
                                            {{ Form::textarea('message',null,['class'=>'form-control','placeholder'=>'message']) }}
                                            <span class="input-group-addon" style="color:red">*</span>
                                        </div>  
                                        <p>Please note that fields marked with<span style="color:red"> * </span> are all required </p>  
                                        <hr>
                                        <div>
                                        <h4>CAPTCHA</h4> 		
                                        <p>This question is for testing whether or not you are a human visitor and to prevent automated spam submissions.</p>
                                        <p><img src="{{Captcha::getImage(7,205)}}"></p>
                                        <div class="form-group input-group col-lg-3">                                        
                                        {{ Form::text('captcha',null,['class'=>'form-control','placeholder'=>'captcha']) }}
                                        <span class="input-group-addon" style="color:red">*</span>
                                        </div>  
                                        </div>    
                                    {{ Form::submit('send message', ['class'=>'btn btn-success']) }}   
                                    {{ Form::reset('Clear', array('class' => 'btn btn-danger')) }}                           
                    {{ Form::close() }}
                    </div>
                </div>
           </div>
            <div  class="col-lg-3 col-md-3 col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Contact Info</div>
                    <div class="panel-body">
                    <img class="img-responsive" src="{{ asset('images/contact.jpg') }}" alt="Generic placeholder image"
                     style="width: 240px;height: 140px;">
          			<h5>You can also reach us here:</h5>
          			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-map-marker"></span> P.O. Box 25, Accra</div>
					<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-phone"></span> +233-(0)302-500381</div>
					<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-envelope"></span> pad@ug.edu.gh</div>
                    </div>
                </div>
           </div>
       </div>

@stop