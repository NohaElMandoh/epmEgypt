@extends('front.layouts.app')

@section('content')

<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.Training Courses')}}</p> </li>
            </ul>
        </div>
    </div>
</div>



<div class="TrainingCourses">
    <div class="container">
        <div class="TrainingCoursesContent">
           
                <div class="row">
                    <form method="POST" id='registerCourse' >
                        @csrf
                        <div class="alert alert-success alert-success-message" style="display:none">
                            {{ Session::get('success') }}
                        </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{__('home.Your name')}}</label>
                            <input class="form-control" type="text" id='name' name='name' placeholder="{{__('home.Your name')}}" required>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{__('home.Your email')}}</label>
                            <input class="form-control" type="email" id='email' name='email' placeholder="{{__('home.Your email')}}" required>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{__('home.Phone Number')}}</label>
                            <input class="form-control" type="text"  id='phone' name='phone' placeholder="{{__('home.Your Phone')}}" required>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{__('home.Your message')}}({{__('home.optional')}})</label>
                           
                            <textarea class="form-control"  id='message' name='message'  placeholder="{{__('home.Your message')}}"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="button">
                            <button type="submit" class="btn btn_submit">{{__('home.submit')}}</button>
                        </div>
                    </div>
                    </form>
                </div>
           
        </div>
    </div>
    
</div>

@endsection
@section('script')

     <script type="text/javascript">

$(document).on('click', '.btn_submit', function (e) {
                    event.preventDefault();

                    let email = $('#email').val();
                    let name = $('#name').val();
                    let message = $('#message').val();
                    let phone = $('#phone').val();

        
                    $.ajax({
                        url: "registerCourse",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                           
                            email: email,
                            name:name,
                            message:message,
                            phone:phone
                         
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
                    document.getElementById("registerCourse").reset();
                });
        
            </script>
@endsection
