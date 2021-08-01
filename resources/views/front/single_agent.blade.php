@extends('front.layouts.app')

@section('content')
    <div class="pageHeader">
        <div class="container-fluid">
            <div class="pageHeaderLinks">
                <ul>
                    <li> <a href="{{ route('home') }}" class="linkprvpage">{{ __('home.Home') }}</a> </li>
                    <li> <span>/</span> </li>
                    <li>
                        <p>{{ __('home.Articles by')}}:{{ $agent->title }}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="News AgintPage">
        <div class="container-fluid">
            <div class="NewsContent">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div class="AgintPage">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="AzurAgin">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                <div class="images">
                                                    <img src="{{ Voyager::image($agent->image) }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                <div class="Details">
                                                    <h1 class="Name">{{ $agent->title }}</h1>
                                                    <h4 class="subtit">{{ $agent->address }}</h4>
                                                    <div class="paralin">
                                                        <p><span>{{__('home.Phone')}}:</span> {{ $agent->mobile }}</p>
                                                        <p><span>{{__('home.Office')}}:</span> {{ $agent->office }}</p>
                                                        <p><span>{{__('home.Fax')}}</span> {{ $agent->fax }}</p>
                                                        <p><span>{{__('home.License')}}:</span> {{ $agent->license }}</p>
                                                    </div>
                                                    <div class="sociallin">
                                                        <a href="{{ $agent->facebook }}" class="facebook"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                        <a href="{{ $agent->twitter }}" class="twitter"><i
                                                                class="fab fa-twitter"></i></a>
                                                        <a href="{{ $agent->gmail }}" class="google"><i
                                                                class="fab fa-google-plus-g"></i></a>
                                                        <a href="{{ $agent->linkedin }}" class="linkedin"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="{{ $agent->instagram }}" class="instagram"><i
                                                                class="fab fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (!empty($lastProp))
                                    @foreach ($lastProp as $last)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="Aginproduc">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="leftSide">
                                                            <div class="images">
                                                                <img src="{{ Voyager::image($last->image) }}">
                                                            </div>
                                                            <a href="{{ route('project', $last->id) }}" class="overlay">
                                                                <span class="imgegall">
                                                                    <i class="far fa-images" aria-hidden="true"></i>
                                                                    {{ count($last->images) }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="hightfles">
                                                            <div class="Details">
                                                                <a
                                                                    href="{{ route('project', $last->id) }}">{{ $last->title }}</a>
                                                                <h4 class="subtit">{{ $last->address }}</h4>
                                                                <div class="skilss">
                                                                    <ul>
                                                                        <li>
                                                                            <p><span class="icon"><i
                                                                                        class="ion ion-ios-bed"></i></span>
                                                                               {{$last->bedrooms}}{{__('home.Bedrooms')}}</p>
                                                                        </li>
                                                                        <li>
                                                                            <p><span class="icon"><i
                                                                                        class="fas fa-bath"></i></span> 
                                                                                        {{$last->rooms}}{{__('home.Rooms')}}     </p>
                                                                        </li>
                                                                        <li>
                                                                            <p><span class="icon"><i
                                                                                        class="fab fa-uncharted"></i></span>
                                                                                        {{$last->bathrooms}} {{__('home.Bathrooms')}} </p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="DesignBy">
                                                                    <a href="{{ route('agent', $agent->id) }}"
                                                                        class="imglogo">
                                                                        <img src="{{ Voyager::image($agent->image) }}">
                                                                    </a>

                                                                    <a class="agentlink"
                                                                        href="{{ route('agent', $agent->id) }}">
                                                                        {{ $agent->title }} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="tapsss">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="tapItem">
                                        <div class="titleTap">
                                            <h2>{{ __('home.Location') }}</h2>
                                        </div>
                                        <div class="tapContent">
                                            <div class="maps">
                                                <iframe style="border: 0;" src="{{ $agent->map_url }}" width="100%"
                                                    allowfullscreen="allowfullscreen"></iframe>
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
    </div>



@endsection
