@extends('layout.homelayout')
@section('carousel')
@include("non-carousel")
@stop
@section('content')
<style type="text/css">
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus
 {
color: #a94442;
background-color: #f2dede;
}
.navbar
  {
    opacity: 0.8;
  }
</style>
<div>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li class="active">About</li>
    <span class="pull-right" style="text-align:right;">
    <a><i style="color:#3b5998" class="fa fa-facebook-square fa-lg"></i></a>&nbsp
    <a><i style="color:#00aced" class="fa fa-twitter-square fa-lg"></i></a>&nbsp
    <a><i style="color:#dd4b39" class="fa fa-google-plus-square fa-lg"></i></a> 
    </span> 
    </ul>
</div>
  <div class="row">
  <div class="col-lg-9">
    <div id="contact_border" class="panel panel-danger">
        <div  class="panel-heading">Overview</div>
          <div class="panel-body">                    
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="Overview">
   <p>
   The University of Ghana was founded as the University College of the Gold Coast by Ordinance on August 11, 

   1948 for the purpose of providing and promoting university education, learning and research.

   Mission Statement: “To develop world-class human resource and capabilities to meet national 

   development needs and global challenges through quality teaching, learning, research and knowledge dissemination”
  </p>
  <p>
   Comprising of three campuses, the University of Ghana offers academic learning and research through 

   its four colleges. In addition, UG encompassesof a number of research institutes and centers, libraries,

   administrative offices, and other support services.The University has an enrollment of over  

   twenty thousand degree candidates, including undergraduate, graduate, and international students.

   UG’s alumni are leaders in Agriculture, Business, Health Care, Industry, Service, Politics and Education sectors.

   </p>
  </div>
 <div role="tabpanel" class="tab-pane" id="Our_Team">
    <div class="row">
            <div class="col-lg-4">
           <img class="img-rounded" data-src="holder.js/150x150/vine/text:Maxwell" src="{{asset('images/kk.jpg') }}" alt="Generic placeholder image" style="width: 140px;height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" data-src="holder.js/150x150/social/text:Amin" src="{{asset('images/dela.jpg') }}"  alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-rounded" src="{{asset('images/avatar.png') }}" data-src="holder.js/150x150/industrial/text:Mushud" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

  </div>
  <div role="tabpanel" class="tab-pane" id="Objectives">
  </div></div>


   
    </div>
    </div>
  </div>
  <div class="col-lg-3">
      <div class="panel panel-danger">
        <div class="panel-heading">About</div>
          <div class="panel-body">
            <ul class="nav nav-pills nav-stacked" role="tablist" id="newsTab">
            <li role="presentation" class="active"><a href="#Overview" aria-controls="Overview" role="tab" data-toggle="tab">Overview</a></li>
      <li role="presentation"><a href="#Our_Team" aria-controls="Our_Team" role="tab" data-toggle="tab">Our Team</a></li>
      <li role="presentation"><a href="#Objectives" aria-controls="Objectives" role="tab" data-toggle="tab">Objectives & Aims</a></li>
            </ul>
            </div>
          </div>
       </div>
      </div>
@stop
