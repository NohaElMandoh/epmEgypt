<div class="jtv-slideshow">

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
                    <ul>
                        @if(!empty($slider))
                        @foreach($slider as $slide)
                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                            data-thumb='{{Voyager::image($slide->image)}}'><img src="{{Voyager::image($slide->image)}}"
                                alt="slide-img" data-bgposition='left top' data-bgfit='cover'
                                data-bgrepeat='no-repeat' />
                            <div class="info">

                            </div>
                        </li>
                        @endforeach
@endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- end JTV Home Slider -->


    </div>

</div>