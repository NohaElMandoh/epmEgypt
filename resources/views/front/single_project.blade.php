@extends('front.layouts.app')

@section('content')
    <div class="GallaryProd">
        <div class="container-fluid">

            <div class="heasders">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="leftside">
                            <ul>
                                <li><span>Rentex Listing Type</span></li>
                                <li>
                                    <p><i class="icon-clock"></i> 9 months ago</p>
                                </li>
                                <li>
                                    <p><i class="icon-eye"></i> 51 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="RightSide">
                            <ul>
                                <li><a href="#"><i class="far fa-envelope"></i> Email</a></li>
                                <li><a href="#"><i class="icon-printer"></i> Print</a></li>
                                <li>
                                    <div class="dropdown">
                                        <button class=" dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-share"></i> Share
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item facebook" href="#"><i
                                                    class="fab fa-facebook-square"></i></a>
                                            <a class="dropdown-item google" href="#"><i
                                                    class="fab fa-google-plus-square"></i></a>
                                            <a class="dropdown-item linkedin" href="#"><i class="fab fa-linkedin"></i></a>
                                            <a class="dropdown-item twitter" href="#"><i
                                                    class="fab fa-twitter-square"></i></a>
                                            <a class="dropdown-item pinterest" href="#"><i
                                                    class="fab fa-pinterest-square"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="tapssss">

        <div class="title">
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->address }}</p>
        </div>
        <div class="container-fluid">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1default" data-toggle="tab">
                                <i class="far fa-images" aria-hidden="true"></i> <span>{{ __('home.Gallery') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2default" data-toggle="tab">
                                <i class="icon-map"></i> <span>{{ __('home.Map') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">

                            <div class="sliderrproduct">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @if ($project->images)
                                            @foreach ($project->images as $image)
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                    <img src="{{ Voyager::image($image->image) }}">
                                                </li>
                                            @endforeach
                                        @endif
                                        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                            <img src="images/EPM_IMG/proj1.jpg">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                            <img src="images/EPM_IMG/proj2.jpg">
                                        </li> --}}
                                    </ol>
                                    <div class="carousel-inner">
                                        {{-- <div class="carousel-item active">
                                            <div class="imgess">
                                                <img class="d-block w-100" src="images/EPM_IMG/about-us.jpg"
                                                    alt="First slide">
                                            </div>
                                        </div> --}}
                                        @if ($project->images)
                                            @foreach ($project->images as $image)
                                                <div class="carousel-item  @if ($loop->first) active @endif">
                                                    <div class="imgess">
                                                        <img class="d-block w-100" src="{{ Voyager::image($image->image) }}"
                                                            alt="First slide">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        {{-- <div class="carousel-item">
                                            <div class="imgess">
                                                <img class="d-block w-100" src="images/EPM_IMG/proj2.jpg" alt="First slide">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('home.Previous') }}</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('home.Next') }}</span>
                                    </a>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="tab2default">

                            <div class="iframMap">
                                <iframe style="border: 0;" src="{{ $project->map_url }}" width="100%"
                                    allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>



    <div class="DetailsProj">
        <div class="container-fluid">
            <div class="discriptionsContent">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div class="LeftSide">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="LeftSideItem">
                                        <div class="Title">
                                            <h3>{{ __('home.Description') }}</h3>
                                        </div>
                                        <div class="Contetleft">
                                            <div class="Descrip">
                                                <p class="titpp">
                                                    {{ __('home.Vivamus sagittis lacus vel augue laoreet rutrum faucibusdolor auctor.') }}
                                                </p>
                                                <div class="DescripProp">
                                                    <h2>{{ __('home.Property Detail') }}</h2>
                                                    <div class="DescripPropCont">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Bedrooms') }} :
                                                                    </span>{{ $project->bedrooms }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Orienten') }} : </span>
                                                                    {{ $project->orienten }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Bathrooms') }} : </span>
                                                                    {{ $project->bathrooms }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Type') }} : </span>
                                                                    {{ $project->type }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Livingrooms') }} : </span>
                                                                    {{ $project->livingrooms }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Garages') }} :
                                                                    </span>{{ $project->garages }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Rooms') }} :
                                                                    </span>{{ $project->rooms }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Area') }} : </span>
                                                                    {{ $project->area }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Plot size') }} : </span>
                                                                    {{ $project->plot_size }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Kitchens') }} : </span>
                                                                    {{ $project->kitchens }}</p>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <p><span class="key">{{ __('home.Year Built') }} : </span>
                                                                    {{ $project->built_year }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="LeftSideItem">
                                        <div class="Title">
                                            <h3>{{ __('home.Amenities') }}</h3>

                                        </div>
                                        <div class="Contetleft">
                                            <div class="Amenities">
                                                <div class="row">
                                                    @if (count($project->amenities) > 0)
                                                        @foreach ($project->amenities as $amenit)
                                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                                <div class="AmenitiesItem">
                                                                    <p>
                                                                        <span class="icon">
                                                                            <i class="far fa-check-square"></i>
                                                                        </span> {{ $amenit->title }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                            <div class="AmenitiesItem">
                                                                <p>
                                                                    N/A
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="LeftSideItem">
                                        <div class="Title">
                                            <h3>{{ __('home.Floor Plans') }}</h3>
                                        </div>
                                        <div class="Contetleft">
                                            <div class="Floor">
                                                <div class="catigores">
                                                    <div
                                                        class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1537345397344">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner-nile ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="accordion-1 nile-accordion">
                                                                 @php
                                                                  $count=1;   
                                                                 @endphp
                                                                        @if ($project->plans)
                                                                            @foreach ($project->plans as $plan)
                                                                                <div class="card">
                                                                                    <div class="card-header"
                                                                                        id="heading_{{$count}}">
                                                                                        <h5 class="mt-0">
                                                                                            <a class=" no_active collapsed parent"
                                                                                                data-toggle="collapse"
                                                                                                data-target=".collapse_{{$count}}"
                                                                                                aria-expanded="false"
                                                                                                aria-controls=".collapse_{{$count}}">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                                        <div class="leftss">
                                                                                                            <p>{{ $plan->title }}
                                                                                                            </p>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                        <div class="Right">
                                                                                                            <ul>
                                                                                                                <li><span>{{ $plan->sqft }}</span>
                                                                                                                    {{ __('home.sqft') }}
                                                                                                                </li>
                                                                                                                <li><span>{{ $plan->baths }}</span>
                                                                                                                    {{ __('home.Baths') }}
                                                                                                                </li>
                                                                                                                <li><span>{{ $plan->beds }}</span>
                                                                                                                    {{ __('home.Beds') }}
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </a>
                                                                                        </h5>
                                                                                    </div>
                                                                                    <div id=""
                                                                                        class="collapse collapse_{{$count}}"
                                                                                        aria-labelledby="heading_{{$count}}"
                                                                                        data-parent=".accordion-1" style="">
                                                                                        <div class="card-body">
                                                                                            <h2>{{ $plan->title }}</h2>
                                                                                            <p> {{ $plan->desc }}</p>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                                                                        {{-- <div class="card">
                                                                            <div class="card-header" id="heading_2">
                                                                                <h5 class="mt-0">
                                                                                    <a class=" no_active collapsed parent"
                                                                                        data-toggle="collapse"
                                                                                        data-target="#collapse_2"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapse_2">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                                <div class="leftss">
                                                                                                    <p>Second Floor</p>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <div class="Right">
                                                                                                    <ul>
                                                                                                        <li><span>2.750</span>
                                                                                                            sqft</li>
                                                                                                        <li><span>3</span>
                                                                                                            Baths</li>
                                                                                                        <li><span>3</span>
                                                                                                            Beds</li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div id="collapse_2" class="collapse"
                                                                                aria-labelledby="heading_2"
                                                                                data-parent=".accordion-1" style="">
                                                                                <div class="card-body">
                                                                                    <h2>[floorplan1]</h2>
                                                                                    <p> To the left is the modern kitchen
                                                                                        with central island, leading through
                                                                                        to the unique breakfast/family room
                                                                                        which feature glass walls and doors
                                                                                        out onto the garden and access to
                                                                                        the separate utility room.</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="card-header" id="heading_3">
                                                                                <h5 class="mt-0">
                                                                                    <a class=" no_active collapsed parent"
                                                                                        data-toggle="collapse"
                                                                                        data-target="#collapse_3"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapse_3">
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                                <div class="leftss">
                                                                                                    <p>Third Floor</p>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <div class="Right">
                                                                                                    <ul>
                                                                                                        <li><span>1.750</span>
                                                                                                            sqft</li>
                                                                                                        <li><span>3</span>
                                                                                                            Baths</li>
                                                                                                        <li><span>2</span>
                                                                                                            Beds</li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </a>
                                                                                </h5>
                                                                            </div>
                                                                            <div id="collapse_3" class="collapse"
                                                                                aria-labelledby="heading_3"
                                                                                data-parent=".accordion-1" style="">
                                                                                <div class="card-body">
                                                                                    <h2>[floorplan1]</h2>
                                                                                    <p> To the left is the modern kitchen
                                                                                        with central island, leading through
                                                                                        to the unique breakfast/family room
                                                                                        which feature glass walls and doors
                                                                                        out onto the garden and access to
                                                                                        the separate utility room.</p>

                                                                                </div>
                                                                            </div>
                                                                        </div> --}}

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

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="LeftSideItem">
                                        <div class="Title">
                                            <h3>{{ __('home.Video') }}</h3>
                                        </div>
                                        <div class="Contetleft">
                                            <div class="Vediosss">
                                                <iframe title="Property Tour: 400 Park Avenue South, 29B" width="100%"
                                                    src="{{ $project->video_url }}" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="LeftSideItem">
                                        <div class="Title">
                                            <h3>{{ __('home.3D Gallery') }}</h3>
                                        </div>
                                        @if ($project->video_d_url)
                                            <div class="Contetleft">
                                                <div class="Vediosss">
                                                    <iframe src="{{ $project->video_d_url }}" width="100%" frameborder="0"
                                                        allowfullscreen="allowfullscreen"></iframe>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    @include('front.partials.contactAgent')
                </div>
            </div>
        </div>

    </div>



@endsection
