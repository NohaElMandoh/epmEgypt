<section class="special-products prodIndSlider">
    <div class="title">
        <div class="Titel">
            <h3>{{__('home.OUR EXCLUSIVES')}}</h3>
            <h1>{{__('home.Featured Properties')}}</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="slider-items-products">
            <div class="jtv-special-block">
                <div id="special-sliderprod" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid block-content">
                        @if(!empty($projects))
                        @foreach($projects as $project)
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a class="product-image" title="Product Title Here"
                                            href=" single_product.html "> <img alt="Product Title Here "
                                                src="{{Voyager::image($project->image)}}"> </a>

                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title">
                                            <a title="Product Title Here" href="#"> {{$project->title}} </a>
                                            <p>{{$project->address}}</p>
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
</section>