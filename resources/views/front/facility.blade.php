@extends('front.layouts.app')

@section('content')


<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.Facilities')}}</p> </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>{{__('home.Facilities')}}</h2>

        </div>
    </div>
</div>


<div class="Facilities">
    <div class="container-fluid">
        <div class="title">
            <h3>{{__('home.EPM')}}</h3>
            <h1>{{__('home.Facilities')}}</h1>
        </div>
        <div class="FacilitiesContent">
            <div class="row">
                @if(!empty($facilities))
                @foreach($facilities as $facility)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="FacilitiesItem">
                        <div class="FacilitiesItemDetails">
                            <div class="Icon">
                                <i class="fas {{$facility->icon}}"></i>
                            </div>
                            <div class="name">
                                <p>{{$facility->title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>


@endsection
