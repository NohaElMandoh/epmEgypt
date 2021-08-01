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
                                        <div class="RightSideItem">
                                            <div class="Title">
                                                <h3>Latest properties</h3>
                                            </div>
                                            <div class="ContentRight">
                                                <div class="contacctform">
                                                    <form  method="post" id='reserve_project'>
                                                        @csrf
                                                        <div class="alert alert-success alert-success-message" style="display:none">
                                                            {{ Session::get('success') }}
                                                        </div>
                                                        <input type="hidden" id="project_id" name="project_id" value="{{$project->id}}">

                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" id='name' name='name' required
                                                                    class="form-control" placeholder="{{__('home.Your name')}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="email"  id='email' name='email' required class="form-control" placeholder="{{__('home.Your email')}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control"  id='message' name='message' required placeholder="{{__('home.Your message')}}"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn_submit">{{__('home.submit')}}</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none">
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
@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

<script type="text/javascript">

// $(document).on('click', '.btn_submit', function (e) {
    $('#reserve_project').on('submit', function(event) {
               event.preventDefault();

               let email = $('#email').val();
               let name = $('#name').val();
               let message = $('#message').val();
               let project_id = $('#project_id').val();
              

   
               $.ajax({
                   url: "{{ route('reserveProject') }}",
                   type: "POST",
                   data: {
                       "_token": "{{ csrf_token() }}",
                      
                       email: email,
                       name:name,
                       message:message,
                       project_id:project_id
                 
                    
                   },
                   success: function(response) {
   
                       $(".alert-success-message").css("display", "block");
                       $(".alert-success-message").html('<P style="text-align:center">Thank you.').hide()
                           .fadeIn(1500, function() {
                               $('.alert-success-message');
                           }).fadeOut(1500, function() {
                               $('.alert-success-message');
                           }).reset();
                         
                   },
               });
               document.getElementById("reserve_project").reset();
           });
   
       </script>

@endsection
