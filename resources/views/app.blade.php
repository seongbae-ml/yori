<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Yori @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="yori, cooking, frugal, foodie"/>
    @show @section('meta_author')
        <meta name="author" content="Seong Bae"/>
    @show @section('meta_description')
        <meta name="description"
              content="Never waste food!"/>
    @show

		<link href="{{ asset('/css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{--<link href="{{elixir('css/all.css')}}" rel="stylesheet">--}}

    {{-- TODO: Incorporate into elixer workflow. --}}
    <link rel="stylesheet"
          href="{{asset('assets/site/css/half-slider.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/site/css/justifiedGallery.min.css')}}"/>
    <link rel="stylesheet"
          href="{{asset('assets/site/css/lightbox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap-theme.min.css')}}">

    <link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    @yield('styles')

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{{ asset('assets/site/ico/favicon.ico') }}}">
</head>
<body>
@include('partials.nav')

@if ($errors->any())
    <div class='flash alert-danger'>
        @foreach ( $errors->all() as $error )
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<div class="container">
@yield('content')
</div>
@include('partials.footer')

<!-- Scripts -->
<script src="{{ asset('/js/vendor.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>

{{-- TODO: Incorporate into elixir workflow. --}}
<script src="{{asset('assets/site/js/jquery.justifiedGallery.min.js')}}"></script>
<script src="{{asset('assets/site/js/lightbox.min.js')}}"></script>

<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-danger').delay(3000).slideUp(300);
</script>

<script src="{{asset('/js/bootstrap-datepicker.js')}}"></script>

@yield('scripts')

</body>
</html>
