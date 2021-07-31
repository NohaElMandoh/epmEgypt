
        <nav>
            <div class="container">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                </div>
                <div class="imglogogo">
                    <img src="{{asset('front/images/EPM_IMG/logo.svg')}}">
                </div>
                <div class="nav-inner">
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                        <li class="drop-menu"> <a href="{{route('home')}}" class="level-top {{ (Route::currentRouteName()== 'home' ) ? 'active' : '' }} " href="{{route('home')}}"><span>{{__('home.Home')}}</span></a></li>
                        <li class="drop-menu"> <a class="level-top {{ (Route::currentRouteName()== 'aboutUs' ) ? 'active' : '' }} "href="{{route('aboutUs')}}"><span>{{__('home.About us')}}</span> </a></li>
                        <li class="mega-menu"> <a class="level-top {{ (Route::currentRouteName()== 'partners' ) ? 'active' : '' }}" href="{{route('partners')}}"><span>{{__('home.Our Partners')}}</span></a></li>
                        <li class="mega-menu"> <a class="level-top  {{ (Route::currentRouteName()== 'news' ) ? 'active' : '' }}" href="{{route('news')}}"><span>{{__('home.News')}}</span></a></li>
                        <li class="mega-menu"> <a class="level-top {{ (Route::currentRouteName()== 'facility' ) ? 'active' : '' }}" href="{{route('facility')}}"><span>{{__('home.Facilities')}}</span></a></li>
                        <li class="mega-menu"> <a class="level-top {{ (Route::currentRouteName()== 'courses' ) ? 'active' : '' }}" href="{{route('courses')}}"><span>{{__('home.Training Courses')}}</span></a></li>
                        <li class="mega-menu"> <a class="level-top {{ (Route::currentRouteName()== 'contactUs' ) ? 'active' : '' }}" href="{{route('contactUs')}}"><span>{{__('home.Contact Us')}}</span></a> </li>
                        <li class="drop-menu"> <a class="level-top " href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><span>{{__('home.English')}}</span> </a>
                            <ul>

                                <li> <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"> <span>{{__('home.Arabic')}} </span> </a> </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>