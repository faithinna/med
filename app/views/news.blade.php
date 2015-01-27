@extends('layout.homelayout')
@section('carousel')
@include("non-carousel")
@stop
@section('content')
<style type="text/css">
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus
 {
background-color:#d9edf7;
border-color: #d9edf7;
color:#4F5254;
}
</style>
<div>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li class="active">News</li>
    <span class="pull-right" style="text-align:right;">
    <a><i style="color:#3b5998" class="fa fa-facebook-square fa-lg"></i></a>&nbsp
    <a><i style="color:#00aced" class="fa fa-twitter-square fa-lg"></i></a>&nbsp
    <a><i style="color:#dd4b39" class="fa fa-google-plus-square fa-lg"></i></a> 
    </span> 
    </ul>
</div>
<div class="row">
        	<div class="col-lg-9 col-md-9 col-sm-9">             
                <div id="contact_border" class="panel panel-info">
                    <div class="panel-heading">News highlights</div> 
                    <div class="panel-body"> 
                     <!-- Projects Row --> 
                <div id="news_container">
               <div class="media">
                  <a id="news1" class="media-left" href="#">
                    <img id="news1"  class="img-rounded" src="{{ asset('images/world_day.jpg') }}" alt="Generic placeholder image" style="width: 100px;height: 100px;">
                  </a>
                <div class="media-body">
                    <p><h4 style="color:#428bca" class="media-heading">World Health Day</h4></p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. 
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
              <div class="media">
                  <a id="news2" class="media-left" href="#">
                    <img id="news2" class="img-rounded" src="{{ asset('images/kk.jpg') }}" alt="Generic placeholder image" style="width: 100px;height: 100px;">
                  </a>
                <div class="media-body">
                    <p><h4 style="color:#428bca" class="media-heading">World Health Day</h4></p>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. 
                    Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
              </div>
              </div>
                </div>
                  </div>
                </div>
           <div class="col-lg-3 col-md-3 col-sm-3">
                <div  class="panel panel-info">
                    <div class="panel-heading"><a style="text-decoration:none" href="{{URL::route('events')}}"><i class="fa fa-calendar"></i> Events</a></div>
                    <div class="panel-body">                                        
                          
                 <ul class="nav nav-pills nav-stacked" role="tablist" id="myTab">
             <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a></li>
            <li role="presentation"><a href="#Our_Team" aria-controls="Our_Team" role="tab" data-toggle="tab">Our Team</a></li>
             <li role="presentation"><a href="#Objectives" aria-controls="Objectives" role="tab" data-toggle="tab">Objectives & Aims</a></li>
                 </ul>

                    </div>
                </div>

                <div  class="panel panel-info">
                    <div class="panel-heading"><a style="text-decoration:none" href="{{URL::route('announcements')}}"><i class="fa fa-bullhorn"></i> Announcements</a></div>
                    <div class="panel-body">                                        
                       
                 <ul class="nav nav-pills nav-stacked" role="tablist" id="myTab">
             <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a></li>
            <li role="presentation"><a href="#Our_Team" aria-controls="Our_Team" role="tab" data-toggle="tab">Our Team</a></li>
             <li role="presentation"><a href="#Objectives" aria-controls="Objectives" role="tab" data-toggle="tab">Objectives & Aims</a></li>
                 </ul>

                    </div>
                </div>
           </div>
                
         </div>      

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div  class="modal-body">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
       <img id="modal_image_holder" src=""> 
      </div>
      
    </div>
  </div>
</div>   
@stop