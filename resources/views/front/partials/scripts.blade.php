l <!-- jquery js -->
{{-- <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>

<script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script> --}}

 {{-- <script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script> --}}

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

{{-- <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> --}}
    
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
    
    
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
   
<script type="text/javascript" src="{{asset('front/js/jquery.min.js')}}"></script>

<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('front/js/bootstrap.min.js')}}"></script>



<!-- owl.carousel.min js -->
<script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>

<!-- jtv-jtv-mobile-menu js -->
<script type="text/javascript" src="{{asset('front/js/jtv-mobile-menu.js')}}"></script>

<!-- countdown js -->
<script type="text/javascript" src="{{asset('front/js/countdown.js')}}"></script>

<!-- main js -->
<script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>

<!-- rev-slider js -->
<script type="text/javascript" src="{{asset('front/js/rev-slider.js')}}"></script>


<script type='text/javascript'>
    jQuery(document).ready(function() {
        jQuery('#jtv-rev_slider').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 1140,
            startheight: 500,
            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,
            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',
            touchenabled: 'on',
            onHoverStop: 'on',
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            spinner: 'spinner0',
            keyboardNavigation: 'off',
            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',
            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: 'off',
            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,
            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
</script>
<!-- Hot Deals Timer 1-->
<script type="text/javascript">
    var dthen1 = new Date("12/25/17 11:59:00 PM");
    start = "08/04/15 03:02:11 AM";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
    else
        ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = "countbox_1";
    CountBack_slider(gsecs1, "countbox_1", 1);
</script>
@yield('script')