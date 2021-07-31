<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="RightSide">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="RightSideItem">
                    <div class="Title">
                        <h3>{{__('home.Contact an Agent')}}</h3>
                    </div>
                    <div class="ContentRight">
                        <div class="ContactAgen">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a href="{{route('agent',$project->agent->id)}}" class="img">
                                        <img src="{{Voyager::image($project->agent->image)}}">
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                    <div class="details">
                                        <a href="{{route('agent',$project->agent->id)}}" class="azzlink">{{$project->agent->title}}</a>
                                        <p>{{$project->agent->mobile}}</p>
                                        <p>{{$project->agent->email}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="linkss">
                                        <a href="{{route('agent',$project->agent->id)}}">{{__('home.Request Details')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="RightSideItem">
                    <div class="Title">
                        <h3>{{__('home.Popular properties')}}</h3>
                    </div>
                    <div class="ContentRight" style="    padding: 0 30px 0 0;">
                        <div class="Popular">
                            <div id="carouselExampleIndicators1" class="carousel slide"
                                data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="1">
                                    </li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="2">
                                    </li>
                                    <li data-target="#carouselExampleIndicators1" data-slide-to="3">
                                    </li>
                                </ol>
                                <div class="carousel-inner">
                                    @if(!empty($projects))
                                    @foreach($projects as $project)
                                    <div class="carousel-item  @if ($loop->first) active @endif">
                                        <div class="ProjectItem">
                                            <div class="projecttop">
                                                <div class="images">
                                                    <img src="{{Voyager::image($project->image)}}">
                                                </div>
                                                <a href="{{route('project',$project->id)}}" class="overlay">
                                                    <span class="imgegall">
                                                        <i class="far fa-images"></i>  {{count($project->images)}}
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="projectbootom">
                                                <a href="{{route('project',$project->id)}}">{{$project->title}}</a>
                                                <p>{{$project->address}}</p>
                                            </div>

                                        </div>
                                    </div>
                               
                                    @endforeach
                                    @endif
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators1"
                                    role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">{{__('home.Previous')}}</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators1"
                                    role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">{{__('home.Next')}}</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="RightSideItem">
                    <div class="Title">
                        <h3>{{__('home.Latest properties')}}</h3>
                    </div>
                    <div class="ContentRight">
                        <div class="Posts">
                            <div class="row">
                              
                                @if(!empty($lastProp))
                                @foreach($lastProp as $last)
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="postItem">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="images">
                                                    <a href="{{route('project',$last->id)}}">     <img src="{{Voyager::image($last->image)}}"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                                                <div class="details">
                                                    <a href="{{route('project',$last->id)}}">{{$last->title}}</a>

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
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="RightSideItem Mortgage">
                    <div class="Title">
                        <h3>Mortgage Calculator</h3>
                    </div>
                    <div class="ContentRight">
                        <div class="Calculator">
                            <div class="mortgage_calc">
                                <div class="calc_payment">
                                    <div class="form-group total">
                                        <label>Total Amount</label>
                                        <span>EGP 0</span>
                                    </div>
                                    <div class="form-group payment">
                                        <label>Your payment</label>
                                        <span>EGP 0</span>
                                    </div>
                                </div>
                                <div class="calc_info">
                                    <div class="form-group">
                                        <label>Total cost of loan</label>
                                        <span>EGP 0</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Total interest paid</label>
                                        <span>EGP 0</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Payment</label>
                                        <span class="out">Monthly</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Mortgage payment:</label>
                                        <span class="out">EGP 0</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mortgage_form">
                                <div class="form-group">
                                    <label>Total Amount </label>
                                    <input type="text" class="form-control" value="222">
                                </div>
                                <div class="form-group">
                                    <label>Down Payment </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Interest Rate </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Amortization Period </label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Payment Period </label>
                                    <select class="form-control">
                                        <option value="Monthly">Monthly</option>
                                        <option value="Semi-Monthly">Semi-Monthly</option>
                                        <option value="Bi-Weekly">Bi-Weekly</option>
                                        <option value="Weekly">Weekly</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>