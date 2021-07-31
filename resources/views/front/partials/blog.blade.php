
        <div class="OURBLOG">
            <div class="container-fluid">
                <div class="OURBLOGContent">
                    <div class="Titel">
                        <h3>{{__('home.OUR BLOG')}}</h3>
                        <h1>{{__('home.News')}}</h1>
                    </div>
                    <div class="row">
                        @if($news)
                        @foreach($news as $new)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="BlogItem">
                                <div class="blogtop">
                                    <div class="imgaess">
                                        <a href="{{route('news_details',$new->id)}}" >   <img src="{{Voyager::image($new->image)}}"></a>
                                    </div>
                                    <div class="Date">
                                        
                                        <h6>{{ $new->created_at->format('Y') }}</h6>
                                        <h1>{{ $new->created_at->format('d') }}</h1>
                                        <h3>{{ $new->created_at->format('M') }}</h3>
                                    </div>
                                </div>
                                <div class="blogbootom">
                                    <a href="#" class="uncate">{{$new->category->title}}</a>
                                    <a href="{{route('news_details',$new->id)}}" class="titleblog">{{$new->title}}</a>
                                    <p>{{$new->desc}}</p>
                                    <a href="{{route('news_details',$new->id)}}" class="readmore">{{__('home.Read More')}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     @endif
                    </div>
                </div>
            </div>
        </div>
