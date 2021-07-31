@extends('front.layouts.app')

@section('content')

<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.Contact Us')}}</p> </li>
            </ul>
        </div>
    </div>
</div>



<div class="MapGoogle">
    <div class="Titel">
        <h3>{{__('home.Contact Us')}}</h3>
        <h1>{{__('home.Get in touch')}}</h1>
    </div>
    <div class="container-fluid">
        <div class="MapGoogleContent">
        <iframe style="border: 0;" src="{{$website->map_url}}" width="100%"  allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>
</div>

<div class="Getintouch">
    <div class="container-fluid">
        <div class="GetintouchContent">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="GETE">
                        <div class="title">
                            <h2>{{__('home.Get in touch')}}</h2>
                        </div>
                        <div class="GETECont">
                            <p>{{__('home.not be published')}}</p>
                            <form id="contactForm" method="post">
                                @csrf
                                <div class="alert alert-success alert-success-message" style="display:none">
                                    {{ Session::get('success') }}
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" id='name' name='name' class="form-control" placeholder="{{__('home.Your name')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id='email'name='email'placeholder="{{__('home.Your email')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea  class="form-control" id='message'name='message' placeholder="{{__('home.Your message')}}" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="checkOption">
                                                <div class="bg">
                                                    <div class="chiller_cb"> <label for="myCheckbox1">{{__('home.Save')}} </label> <input id="myCheckbox1" class="myCheckbox1" type="checkbox"> <span></span></div>
                                                </div>
                                              
                                                
                                            </div>
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
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ContactRight">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Office')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="Contantusss">
                                           <ul>
                                                <li>
                                                    <p><span>{{__('home.Address')}} :-</span> {{$website->address}}</p>
                                               </li>
                                               <li>
                                                    <p><span>{{__('home.Phone')}} :-</span> <a href="#">{{$website->phone}}</a></p>
                                               </li>
                                               <li>
                                                    <p><span>{{__('home.Fax')}} :-</span> <a href="#">{{$website->fax}}</a></p>
                                               </li>
                                               <li>
                                                    <p><span>{{__('home.Email')}} :-</span> <a href="#"> {{$website->email}}</a></p>
                                               </li>
                                             
                                            </ul>
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
@section('script')

     <script type="text/javascript">

$('#contactForm').on('submit', function(event) {
                    event.preventDefault();

                    let email = $('#email').val();
                    let name = $('#name').val();
                    let message = $('#message').val();
                
        
                    $.ajax({
                        url: "contactUs",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                           
                            email: email, 
                            name:name,
                            message:message,
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
                    document.getElementById("contactForm").reset();
                });
        
            </script>
@endsection
