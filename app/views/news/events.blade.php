@extends('layout2')
@section('content')
<div>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li><a href="{{URL::route('news')}}">News</a></li>
    <li class="active">events</li>
    </ul>
</div>
<div class="row">
        	<div class="col-lg-9 col-md-9 col-sm-9">
                <div id="contact_border"  class="panel panel-primary">
                    <div class="panel-heading">Events</div>
                    <div class="panel-body">                                  
                     
                    </div>
                </div>
           </div>
           <div class="col-lg-3 col-md-3 col-sm-3">
                <div id="contact_border"  class="panel panel-primary">
                    <div class="panel-heading"><a style="color:#fff" href="{{URL::route('events')}}">Events</a></div>
                    <div class="panel-body">                                        
       
                    </div>
                </div>
           </div>
       </div>

@stop