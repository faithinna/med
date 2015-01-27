@extends('layout.homelayout')
@include("carousel")
@section('content')
<style type="text/css">
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
background-color:#d9edf7;
border-color: #d9edf7;
color:#4F5254;
}
</style>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li> 
    <span class="pull-right">
    <a><i style="color:#3b5998" class="fa fa-facebook-square fa-lg"></i></a>&nbsp
    <a><i style="color:#00aced" class="fa fa-twitter-square fa-lg"></i></a>&nbsp
    <a><i style="color:#dd4b39" class="fa fa-google-plus-square fa-lg"></i></a> 
    </span> 
    </ul>
<br>
<div class="row">
        <div class="col-lg-4">
          <img class="img-rounded" src="{{ asset('images/bootstrap.png') }}" alt="Generic placeholder image" style="width: 100px;height: 100px;">
            <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="{{ asset('images/medical_file.png') }}" alt="Generic placeholder image" style="width: 100px; height: 100px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. 
            Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, 
            porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna
            .</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="{{ asset('images/health2.jpg') }}" alt="Generic placeholder image" style="width: 100px; height: 100px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row --> 

  <div class="row">
        <div id="contact_border" class="col-lg-9 panel panel-info">
        <div class="panel-heading"> News highlights</div> 
        <div class="panel-body"> 
      <div id="newspager">
          <div class="col-lg-3">
          <img id="1" class="img-rounded" src="{{ asset('images/IMG_8028.JPG') }}" alt="Generic placeholder image" style="width: 170px;height: 150px;">
          <h4 id="1">Dinner Party</h4>
          <p id="1" >Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          <p><a id="1" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img id="2" class="img-rounded" src="{{ asset('images/giftyeffort.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="2">X'mas Celebration</h4>
          <p id="2">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, </p>
          <p><a id="2" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img id="3" class="img-rounded" src="{{ asset('images/world_day.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="3">World health day</h4>
          <p id="3">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in</p>
          <p><a id="3" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->       
        <div class="col-lg-3">
          <img id="4"class="img-rounded" src="{{ asset('images/folder3.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="4">Health assessment</h4>
          <p id="4">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in</p>
          <p><a id="4" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 --> 
        </div>  
        </div>
        <p class="text-center"><span id="go" class="pagination"></span></p>
        </div> 

        <div style="display: none;">
         <div id="newspage1"></div>
         <div id="newspage2">
          
          <div class="col-lg-3">
          <img id="5" class="img-rounded" src="{{ asset('images/kk.jpg') }}" alt="Generic placeholder image" style="width: 170px;height: 150px;">
          <h4 id="5">Dinner Party</h4>
          <p id="5">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          <p><a id="5" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img id="6" class="img-rounded" src="{{ asset('images/folders.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="6">X'mas Celebration</h4>
          <p id="6">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
          <p><a id="6" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img id="7" class="img-rounded" src="{{ asset('images/unnamed--f50b2a4f6c-2048x1365.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="7">World health day</h4>
          <p id="7">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in</p>
          <p><a id="7" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->       
        <div class="col-lg-3">
          <img id="8" class="img-rounded" src="{{ asset('images/unnamed--ee0654b41b-2560x1600.jpg') }}" alt="Generic placeholder image" style="width: 170px; height: 150px;">
          <h4 id="8">Health assessment</h4>
          <p id="8">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in</p>
          <p><a id="8" class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->  

         </div>
       </div>  
     <div class="col-lg-3 col-md-3 col-sm-3">
                <div id="contact_border"  class="panel panel-info">
                    <div class="panel-heading"><a style="text-decoration:none"  href="{{URL::route('events')}}"><i class="fa fa-calendar"></i> Events</a></div>
                    <div class="panel-body">                                        
            <ul class="nav nav-pills nav-stacked" role="tablist" id="newsTab">
            <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a></li>
           <li role="presentation"><a href="#Our_Team" aria-controls="Our_Team" role="tab" data-toggle="tab">Our Team</a></li>
           <li role="presentation"><a href="#Objectives" aria-controls="Objectives" role="tab" data-toggle="tab">Objectives & Aims</a></li>
            </ul>
                    </div>
                </div>

            <div id="contact_border"  class="panel panel-info">
                    <div class="panel-heading"><a style="text-decoration:none"  href="{{URL::route('announcements')}}"><i class="fa fa-bullhorn"></i> Announcements</a></div>
                    <div class="panel-body">                                        
            <ul class="nav nav-pills nav-stacked" role="tablist" id="eventTab">
             <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a></li>
            <li role="presentation"><a href="#Our_Team" aria-controls="Our_Team" role="tab" data-toggle="tab">Our Team</a></li>
             <li role="presentation"><a href="#Objectives" aria-controls="Objectives" role="tab" data-toggle="tab">Objectives & Aims</a></li>
                 </ul>
                    </div>
                </div>
           </div>      
                           
    </div>           
    @stop