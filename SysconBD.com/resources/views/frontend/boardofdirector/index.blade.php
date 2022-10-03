@extends('frontend.master')
@section('main_content')
<div id="content" class="site-content">
    <div class="page-header flex-middle">
        <div class="container">
            <div class="inner flex-middle">
                <h1 class="page-title" style="font-weight:600;">Board Of Directors</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{url('/home')}}">Home</a></li>
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li class="active">Board Of Directors</li>
                </ul>    
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($director as $val)
        <div class="col-lg-6">
            <section class="team-about sm-space">
                <div class="container">
                    <div class="steam-info">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="team-info-left pt-4 pl-3 mt-3">
                                    <img src="{{ asset('img/' . $val->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="team-detail pt-3">
                                    <h4>{{$val->name}}</h4>
                                    <span class="location">{{$val->designation}}</span>
                                    <ul class="bold member-info">
                                        <li><span class="text-dark">Qualification: </span>{{$val->qualification}}</li>
                                        <li><span class="text-dark">Email: </span>{{$val->email}}</li>
                                        <li><span class="text-dark">Phone: </span>{{$val->phone}}</li>
                                    </ul>
                                    <div class="otf-social-share clearfix shape-circle pb-4">
                                        <a class="share-facebook" href="{{$val->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-twitter" href="{{$val->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="share-pinterest" href="{{$val->pinterest}}" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        <a class="share-linkedin" href="{{$val->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endforeach
    </div>

    <section class="team-slills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Biography</h3>
                    <p style="text-align: justify;">2012, SYSCON Engineering Limited started its journey as a SIEMENS based industrial Automation
                    provider under the name of Syscon Engineering.  In 2017, Syscon Engineering renamed as SYSCON 
                    Engineering ltd, more dynamic to grab new technologies, more focused to customer needs and even
                    more detailed oriented to solve the complex automation tasks while making it simple to use for 
                    end user.</p>
                </div>
            </div>
            <div class="space-25"></div>
            <div class="row">
                @foreach($skill as $val)
                <div class="col-xl-3 col-lg-6 col-md-6 text-center text-md-right">
                    <div class="circle-progress" data-color="#43BAFF" data-height="10" data-size="135">
                        <div class="inner-bar" data-percent="{{$val->skill_amount}}">
                            <span><span class="percent">{{$val->skill_amount}}</span>%</span>
                        </div>
                        <h4>{{$val->skill_name}}</h4>        
                    </div>
                </div>
                @endforeach
            </div>
            <div class="space-25"></div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Hard Skills</h3>
                    <p style="text-align: justify;">Just as a Automation business in real life is remembered not just for its product
                    offerings but also because of its services, support, and customer-friendliness,
                    <span class="text-dark bold">helpful customer support system</span>
                    Over the years, SYSCON has engineered numerous challenging and multidimensional projects through
                    which we enriched our skills, expertise and experiences. We set our benchmark in design and Automation
                    solutions, project management, support & services to a true high level to achieve 100% customer satisfaction.
                    We are continuously improving our way of doing things to deliver beauty and best of the Automation.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <div class="padding-half bg-light-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="owl-carousel owl-theme home-client-carousel"> 
                            @foreach($partner as $val)     
                            <div class="partners-slide">
                                <a href="#" class="client-logo">
                                    <figure class="partners-slide-inner">
                                        <img class="partners-slide-image" src="{{ asset('img/' . $val->image) }}" alt="">
                                    </figure>                             
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection