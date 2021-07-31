
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
