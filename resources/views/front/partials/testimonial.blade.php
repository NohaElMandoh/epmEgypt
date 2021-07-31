<div class="tstimonials">
    
    <div class="title">
        <h3>{{__('home.TESTIMONIALS')}}</h3>
        <h1>{{__('home.Here’s what clients say')}} <br> {{__('home.about us')}}</h1>
    </div>
    <div class="container-fluid">
        <div class="tstimonialsContent">
            <div class="row">
                @if($testimonial)
                @foreach($testimonial as $test)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="tstimonialsitem">
                        <div class="icons">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testDetails">
                            <h2 class="Name">{{$test->name}}</h2>
                            <h4>{{$test->address}}</h4>
                            <p>{{$test->comment}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
             @endif
            </div>
        </div>
    </div>
</div>
