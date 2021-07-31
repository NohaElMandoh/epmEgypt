@extends('front.layouts.app')

@section('content')
<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.About us')}}</p> </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>{{__('home.About us')}}</h2>
<!--                    <p>التق بفريقنا</p>-->
        </div>
    </div>
</div>


<div class="aboutUs">
    <div class="container-fluid">
        <div class="aboutUsContent">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="images">
                        <img src="{{asset('front/images/EPM_IMG/about.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="details">
                        <div class="abouttop">
                            <h3>{{__('home.ABOUT US')}}</h3>
                            <h1>{{__('home.ABOUT EPM')}}</h1>
                            <p>{{__('home.roll')}}</p> 
                              <div class="lisss">
                                <ul>
                                    @php
                                    $count=1;   
                                   @endphp
                                   @if(!empty($services))
                                   @foreach($services as $service)
                                   <li><span>{{$count}}</span>{{$service->title}}</li>
                                   @php
                                   $count++;   
                                  @endphp
                                   @endforeach
                                   @endif
                                </ul>
                            </div>
                        </div>
                        <div class="aboutbootom">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 otehrcool">
                                    <div class="years">
                                        <h6>{{__('home.We have over')}}</h6>
                                        <h1>{{$website->exp_years}}</h1>
                                        <h3>{{__('home.YEARS')}}</h3>
                                        <p>{{__('home.EXPERTISE')}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 otehrcool">
                                    <div class="img">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="whyus">
    <div class="whyusContent">
        <div class="row">
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-12 othercool">
                <div class="Dtails">
                    <div class="title">
                        <h3>WHY Us</h3>
                        <h1>Projects History</h1>
                    </div>
                    <div class="linksliss">
                        <ul>
                            <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 1.	BETA GREENS</a>
                            </li>
                            <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 2.	BETA RESIDENCANE</a>
                            </li>
                            <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 3.	GOLF MALL</a>
                            </li>
                            <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 4.	CLUB HOUSE</a>
                            </li>
                             <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 5.	MOSQUE</a>
                            </li>
                             <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 6.	Medical Center</a>
                            </li>
                             <li>
                                <a href="#" class="liks"><span><i class="fas fa-check"></i></span> 7.	Kinder Garden </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6col-md-6 col-sm-6 col-xs-12 othercool">
                <div class="imgess">

                </div>
            </div>
        </div>
    </div>
</div>

@include('front.partials.testimonial')

@endsection
