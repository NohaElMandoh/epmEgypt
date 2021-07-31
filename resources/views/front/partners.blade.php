@extends('front.layouts.app')

@section('content')

<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.Our Partners')}}</p> </li>
            </ul>
        </div>
    </div>
</div>

<div class="ourPartners">
    <div class="container-fluid">
        <div class="ourPartnersContent">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="PartnersTap">
                        <p><i class="far fa-building"></i>{{__('home.Our Partners')}}</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="ourPartnersItemsss">
                        <div class="row">
                            @if(!empty($projects))
                            @foreach($projects as $project)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="itemsss">
                                    <div class="itemssstop">
                                        <div class="images">
                                            <a href="{{route('project',$project->id)}}">    <img src="{{Voyager::image($project->image)}}"></a>
                                        </div>
                                        <a href="#" class="overlay">
                                            <span class="imgegall">
                                                <i class="far fa-images"></i> {{count($project->images)}}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="itemsssbootom">
                                        <a href="{{route('project',$project->id)}}">{{$project->title}}</a>
                                        <p>{{$project->address}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
