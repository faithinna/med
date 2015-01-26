@extends('layout2')
@section('content')
<div>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li><a href="{{URL::route('about')}}">About</a></li>
    <li class="active">Owners</li>
    </ul>
</div>
  <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9">
                <div id="contact_border"  class="panel panel-danger">
                    <div class="panel-heading">Owners</div>
                    <div class="panel-body">
            
                    </div>
                </div>
           </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="panel panel-danger">
                    <div class="panel-heading">About</div>
                      <div class="panel-body">
                      <div style="font-weight:bolder">
                      <span >></span> <a style="color:#a94442"  href="{{URL::route('overview')}}"> Overview</a>
                     </div>
                     <div style="font-weight:bolder">
                      <span >></span> <a style="color:#a94442" href="{{URL::route('owners')}}">Our Team</>
                     </div>
                     <div style="font-weight:bolder">
                      <span >></span> <a style="color:#a94442" href="#">Aims & objectives</>
                     </div>
                    </div>
                </div>
           </div>
       </div>
@stop