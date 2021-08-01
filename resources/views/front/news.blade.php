@extends('front.layouts.app')

@section('content')
<div class="pageHeader">
    <div class="container-fluid">
        <div class="pageHeaderLinks">
            <ul>
                <li> <a href="{{route('home')}}" class="linkprvpage">{{__('home.Home')}}</a> </li>
                <li> <span>/</span> </li>
                <li> <p>{{__('home.News')}}</p> </li>
            </ul>
        </div>
    </div>
</div>


<div class="News">
    <div class="container-fluid">
        <div class="NewsContent">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="NewsNews">
                        <div class="row">
                            @if($news)
                        @foreach($news as $new)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="NewsItem">
                                    <div class="images">
                                  <a href="{{route('news_details',$new->id)}}">      <img src="{{Voyager::image($new->image)}}"></a>
                                    </div>
                                    <div class="details">
                                        <div class="Date">
                                            <h6>{{ $new->created_at->format('Y') }}</h6>
                                            <h1>{{ $new->created_at->format('d') }}</h1>
                                            <h3>{{ $new->created_at->format('M') }}</h3>
                                        </div>
                                        <div class="DetalsDesc">
                                            <a href="#" class="uncate">{{$new->category->title}}</a>
                                            <a href="{{route('news_details',$new->id)}}" class="titleblog">{{$new->title}}</a>
                                            <p>{{$new->desc}}</p>
                                            <a href="{{route('news_details',$new->id)}}" class="readmore">{{__('home.Read More')}}</a>
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
                                        <h2>{{__('home.Search')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="search">
                                            <form method='post' action='{{route('news')}}'>
                                                @csrf
                                            <div class="form-group">
                                                <span class="icon"><i class="fas fa-search"></i></span>
                                                <input type="text" id='name' name='name'placeholder="{{__('home.Search')}}" class="form-control">
                                                <button type="submit" class="btn btn-search">{{__('home.Search')}}</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Recent Posts')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="Posts">
                                            <div class="row">
                                                @foreach($last_news as $news)
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="postItem">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="images">
                                                                    <a href="{{route('news_details',$news->id)}}" class="NAME">    <img src="{{Voyager::image($news->image)}}"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                                                                <div class="details">
                                                                    <a href="{{route('news_details',$news->id)}}" class="NAME">{{$news->title}}</a>
                                                                    <a href="{{route('news_details',$news->id)}}" class="coments">{{$news->comments->count()}} {{__('home.Comments')}}</a>
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
                                        <h2> {{__('home.Recent Comments')}}</h2>
                                    </div>
                                    <div class="tapContent">
                                        <div class="Comments">
                                            <ul>
                                                @if(!empty($comments))
                                                @foreach($comments as $comment)
                                                <li>
                                                    <span><i class="far fa-comment"></i></span>
                                                    <p>{{$comment->name}} {{__('home.on')}} 
                                                    <a href="{{route('news_details',$comment->news->id)}}" >{{$comment->news->title}}</a></p>
                                                </li>
                                                @endforeach
                                             @endif
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
                                                @if(!empty($last_news))
                                                @foreach($last_news as $news)
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="postItem">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="images">
                                                                  <a href="{{route('news_details',$news->id)}}" >  <img src="{{Voyager::image($news->image)}}"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                                                                <div class="details">
                                                                    <a href="{{route('news_details',$news->id)}}" class="NAME">{{$news->title}}</a>
                                                                    <p><span class="dattsasa">{{ $news->created_at->format('M') }}&nbsp {{ $news->created_at->format('d') }} &nbsp,{{ $news->created_at->format('Y') }} —</span> <a href="{{route('news_details',$news->id)}}"  class="coments">{{$news->comments->count()}} Comments</a></p>
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
                                <div class="tapItem">
                                    <div class="titleTap">
                                        <h2>{{__('home.Blog categories')}}</h2>
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
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
