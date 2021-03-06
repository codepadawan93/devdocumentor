<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Item Name | Documentation by Author Name</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- SYNTAX HIGHLIGHTER -->
    <link rel="stylesheet" type="text/css" href="{{asset('syntax-highlighter/styles/shCore.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('syntax-highlighter/styles/shThemeRDark.css')}}" media="all">

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div class="container">

            @include('partials.navbar')
            <div class="spacer"></div>
            <section id="top" class="section docs-heading">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>{{setting('site.title')}}</h1>
                        <p class="lead">{{setting('site.description')}}</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                </div>
                <!-- end row -->

                <hr>

            </section>
            <!-- end section -->

            @yield('content')
            

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="js/app.js')}}"></script> -->
    <script src="{{asset('js/retina.js')}}"></script>
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="{{asset('syntax-highlighter/scripts/shCore.js')}}"></script>
    <script src="{{asset('syntax-highlighter/scripts/shBrushXml.js')}}"></script>
    <script src="{{asset('syntax-highlighter/scripts/shBrushCss.js')}}"></script>
    <script src="{{asset('syntax-highlighter/scripts/shBrushJScript.js')}}"></script>
    
</body>

</html>
