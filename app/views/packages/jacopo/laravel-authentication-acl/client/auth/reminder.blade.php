@extends('laravel-authentication-acl::client.layouts.base')
@section ('title')
    Password recovery
@stop
@section('content')
<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">
        <h3 class="panel-title"><a href="{{URL::route('home')}}" style="text-decoration:none;font-weight:bolder"><span style="color:crimson;" class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp {{Config::get('laravel-authentication-acl::app_name')}}</a></h3>
            </div>
            <div class="panel-body">
                <h5><strong>Password recovery</strong></h5>
                @if($errors && ! $errors->isEmpty() )
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{$error}}
                </div>
                @endforeach
                @endif
                {{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postReminder"), 'method' => 'post') )}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="display:none">{{Form::label('email','Email')}}</strong>
                            <div class="input-group" id="password-field">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                {{Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your account email', 'required', 'autocomplete' => 'off'])}}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Recover" class="btn btn-info btn-block">
                {{Form::close()}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                        <a href="{{URL::Action('Jacopo\Authentication\Controllers\AuthController@getClientLogin')}}"><i class="fa fa-arrow-left"></i> Back to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop