@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
Change password
@stop
@section('content')
<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-info">
            <div class="panel-heading">
             <h3 class="panel-title"><a href="{{URL::route('home')}}" style="text-decoration:none;font-weight:bolder"><span style="color:crimson;" class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp {{Config::get('laravel-authentication-acl::app_name')}}</a></h3>
            </div>
            <div class="panel-body">
                <h5><strong>Change your password</strong></h5>
                @if($errors && ! $errors->isEmpty() )
                @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                {{$error}}
                </div>
                @endforeach
                @endif
                {{Form::open(array('url' => URL::action("Jacopo\Authentication\Controllers\AuthController@postChangePassword"), 'method' => 'post') )}}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {{Form::label('password', 'New password: ')}}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                {{Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'New password', 'required', 'autocomplete' => 'off'])}}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Change password" class="btn btn-info btn-block">
                {{Form::hidden('email',$email)}}
                {{Form::hidden('token',$token)}}
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@stop