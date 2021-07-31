<header class=" hidden-xs">

    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <div class="welcome-msg"><span><i class="icon-location-pin"
                                    aria-hidden="true"></i></span>@if(!empty($website)) {{$website->address}}@endif</div>
                        <div class="welcome-msg"><span><i class="icon-paper-plane"></i></span>@if($website) {{$website->phone}}@endif </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 hidden-xs">
                        <!-- Header Top Links -->
                        <div class="jtv-top-links">
                            <div class="links">
                                <ul>
                                    <li> <a href="account_page.html"><span
                                                class="hidden-xs">@if($website) {{$website->email}}@endif</span></a> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Top Links -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>