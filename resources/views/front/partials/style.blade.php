@if (Config::get('app.locale') == 'en')
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
@elseif ( Config::get('app.locale') == 'ar' )
<link rel="stylesheet" href="{{ asset('front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-rtl.css') }}">
@endif
<link rel='stylesheet' id='arabic-webfonts-css' href='http://www.fontstatic.com/f=cairo,' type='text/css' media='all' />
