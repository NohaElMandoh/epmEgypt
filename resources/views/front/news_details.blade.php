@extends('front.layouts.app')

@section('content')
   

<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="index.html" class="linkprvpage">Home</a> </li>
                <li> <span>/</span> </li>
                <li> <p>NewsBlogName</p> </li>
                <li> <span>/</span> </li>
                <li> <p>NewsDetails</p> </li>
            </ul>
        </div>
    </div>
</div>


<div class="News newsDetails">
    <div class="container-fluid">
        <div class="NewsContent">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="RightSide">
                        <div class="row">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="RightSideItem">
                                    <div class="title">
                                        
                                    </div>
                                    <div class="RightSideCondetnt">
                                        <div class="Giftssss">
                                            <a href="#" class="Uncatego">Uncategorized</a>
                                            <h1 class="entry_title">{{$news->title}}</h1>
                                            <div class="liss">
                                                <ul>
                                                    <li>
                                                        <p><span class="icon"><i class="icon-calender"></i></span><a href="#">{{ $news->created_at->format('M') }}&nbsp {{ $news->created_at->format('d') }}&nbsp,{{ $news->created_at->format('Y') }}</a></p>
                                                    </li>
                                                    <li>
                                                        <p><span class="icon"><i class="icon-user"></i></span>BY<a href="#">epm</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="RightSideItem">
                                    <div class="title">
                                       
                                    </div>
                                    <div class="RightSideCondetnt">
                                        <div class="NewsArticle">
                                            <div class="imagesNes">
                                                <img src="{{Voyager::image($news->image)}}">
                                            </div>
                                            <div class="paragraphs">
                                              {!!$news->ftext!!}    </div>
                                            
                                            <div class="media">
                                                <audio controls>
                                                  <source src="horse.ogg" type="audio/ogg">
                                                  <source src="horse.mp3" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                            
                                            <div class="Mosaic">
                                                <h1>Mosaic gallery fringilla velaliquet nec</h1>
                                                <div class="MosaicPox">
                                                    <div class="iconsmos">
                                                        <i class="fas fa-quote-left"></i>
                                                    </div>
                                                    <p>This successful response to the Clever Hands test highlights a potential for hypnosis in “treating addictions or compulsive behaviours, where people don’t feel like they’re able to inhibit very ingrained responses</p>
                                                    <div class="line"></div>
                                                    <h4>SAID POLITO</h4>
                                                </div>
                                            </div>
                                            
                                            <div class="paragraphs">
                                                {!!$news->stext!!}   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="RightSideItem">
                                    <div class="title">
                                        
                                    </div>
                                    <div class="RightSideCondetnt">
                                        <div class="Sharelinks">
                                            <ul>
                                                <li>
                                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                
                                                <li>
                                                    <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                
                                                <li>
                                                    <a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                </li>
                                                
                                                <li>
                                                    <a href="#" class="envelope"><i class="far fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($news->comments->count()>0)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="RightSideItem">
                                    <div class="title">
                                        <h3>{{$news->comments->count()}} Comments</h3>
                                    </div>
                                    <div class="RightSideCondetnt">
                                        <div class="Comments">
                                            <div class="row">
                                                @foreach ($news->comments as $comment)
                                                    
                                               
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                     <div class="commentItem">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                                                                <div class="Avatar">
                                                                    <img src="{{asset('front/images/EPM_IMG/avatar.png')}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                <div class="ComenDetails">
                                                                    <h1 class="name">{{$comment->name}}</h1>
                                                                    <a href="#" class="Date">{{ $comment->created_at->format('M') }}&nbsp {{ $comment->created_at->format('d') }} &nbsp,{{ $comment->created_at->format('Y') }}
                                                                       </a>
                                                                    <p>{{$comment->comment}}</p>

                                                                    {{-- <a href="#" class="replay">REPLY</a> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="RightSideItem">
                                    <div class="title">
                                        <h3>{{__('home.Leave a Reply')}}</h3>
                                    </div>
                                    <div class="RightSideCondetnt">
                                        <div class="ReplayForm">
                                            <p>{{__('home.not be published')}}</p>
                                            <div class="formonp">
                                                <form  method="post" action='{{route('saveComment')}}' id='saveComment'>
                                                    @csrf
                                                    <input type="hidden" id="news_id" name="news_id" value="{{$news->id}}">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="fomr-group">
                                                                <input type="text" id='name' name='name'class="form-control" placeholder="Name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="fomr-group">
                                                                <input type="email" id='email' name='email' class="form-control" placeholder="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="fomr-group">
                                                                <input type="text" class="form-control" id='website' name='website' placeholder="website" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="fomr-group">
                                                                <textarea class="form-control"  id='comment' name='comment' required placeholder="Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="checkOption">
                                                                    <div class="bg">
                                                                        <div class="chiller_cb"> <label for="myCheckbox1">{{__('home.Save')}}</label> <input id="myCheckbox1" class="myCheckbox1" type="checkbox"> <span></span></div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="fomr-group">
                                                                <button type="submit" >{{__('home.submit')}}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="tapsss">
                        <div class="row">
                           
                            
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Archives')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="blogs">
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-folder-open"></i></span>
                                                    
                                                    <a href="{{route('news',['search_month'=>$news->created_at->format('M'),'search_year'=>$news->created_at->format('Y')])}}">
                                                        {{ $news->created_at->format('M') }} &nbsp {{ $news->created_at->format('Y') }}</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Categories')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="blogs">
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-folder"></i></span>
                                                    
                                                   
                                                    <a href="{{route('news',['cat_id'=>$news->category->id])}}">{{$news->category->title}}</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>Meta</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="blogs">
                                            <ul>
                                                <li>
                                                  
                                                    <a href="#">Log in</a>
                                                </li>
                                                <li>
                                                  
                                                    <a href="#">Entries feed</a>
                                                </li>
                                                <li>
                                                  
                                                    <a href="#">Comments feed</a>
                                                </li>
                                                <li>
                                                  
                                                    <a href="#">WordPress.org</a>
                                                </li>
                                               
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Latest post')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="Posts">
                                            <div class="row">
                                                @foreach($all_news as $new)
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="postItem">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="images">
                                                                    <img src="{{Voyager::image($new->image)}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                                                                <div class="details">
                                                                    <a href="{{route('news_details',$new->id)}}" class="NAME">{{$new->title}}</a>
                                                                    <p><span class="dattsasa">{{ $new->created_at->format('M') }}&nbsp {{ $new->created_at->format('d') }} &nbsp,{{ $new->created_at->format('Y') }}
                                                                         —</span><a href="#" class="coments">{{$new->comments->count()}} {{__('home.Comments')}}</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                             @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Blog categories')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="blogs">
                                            <ul>
                                                <li>
                                                    <span><i class="far fa-folder"></i></span>
                                                    
                                                    <a href="{{route('news',['cat_id'=>$new->category->id])}}">{{$new->category->title}}</a>
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

$(document).on('click', '#addComment', function (e) {
                    event.preventDefault();

                    let email = $('#email').val();
                    let name = $('#name').val();
                    let website = $('#website').val();
                    let comment = $('#comment').val();

        
                    $.ajax({
                        url: "saveComment",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                           
                            email: email,
                            name:name,
                            website:website,
                            comment:comment
                         
                        },
                        success: function(response) {
        
                            setTimeout("location.reload(true);", 1500)
                              
                        },
                    });
                    document.getElementById("saveComment").reset();
                });
        
            </script>
@endsection
