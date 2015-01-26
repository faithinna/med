@extends('layout2')
@section('content')
<div>
    <ul class="breadcrumb alert alert-info">
    <li><a href="{{URL::route('home')}}">Home</a></li>
    <li><a href="{{URL::route('about')}}">About</a></li>
    <li class="active">Overview</li>
    </ul>
</div>
  <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9">
                <div id="contact_border"  class="panel panel-danger">
                    <div class="panel-heading">Overview</div>
                    <div class="panel-body">
                      
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