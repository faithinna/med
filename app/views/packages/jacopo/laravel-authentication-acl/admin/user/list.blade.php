@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
    Admin area: users list
@stop

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="stats-item margin-left-5 margin-bottom-12"><i class="fa fa-user icon-large"></i> <span class="text-large margin-left-15">{{$registered}}</span>
          <br/>Total users</div>
          <div class="stats-item margin-left-5 margin-bottom-12"><i class="fa fa-unlock-alt icon-large"></i> <span class="text-large margin-left-15">{{$active}}</span>
              <br/>Active users</div>
          <div class="stats-item margin-left-5 margin-bottom-12"><i class="fa fa-lock icon-large"></i> <span class="text-large margin-left-15">{{$pending}}</span>
              <br/>Pending users</div>
          <div class="stats-item margin-left-5 margin-bottom-12"><i class="fa fa-ban icon-large"></i> <span class="text-large margin-left-15">{{$banned}}</span>
              <br/>Banned users</div>
  </div>
    <div class="col-md-12">
            <div class="col-md-9">
                {{-- print messages --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                    <div class="alert alert-success">{{$message}}</div>
                @endif
                {{-- print errors --}}
                @if($errors && ! $errors->isEmpty() )
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                {{-- user lists --}}
                @include('laravel-authentication-acl::admin.user.user-table')
            </div>
            <div class="col-md-3">
                @include('laravel-authentication-acl::admin.user.search')
            </div>
        </div>
</div>
@stop

@section('footer_scripts')
    <script>
        $(".delete").click(function(){
            return confirm("Are you sure to delete this item?");
        });
    </script>
@stop