<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="public/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/frontend/css/prettyPhoto.css" rel="stylesheet">
    <link href="public/frontend/css/price-range.css" rel="stylesheet">
    <link href="public/frontend/css/animate.css" rel="stylesheet">
    <link href="public/frontend/css/main.css" rel="stylesheet">
    <link href="public/frontend/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="public/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precompopublic/frontend/sed" sizes="144x144" href="public/frontend/images/ico/apple-touch-icon-14public/frontend/4-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="public/frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    @include('elements.top')
    
    @include('elements.slide')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('elements.sidebar')
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    
    @include('elements.footer')
    

  
    <script src="public/frontend/js/jquery.js"></script>
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <script src="public/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="public/frontend/js/price-range.js"></script>
    <script src="public/frontend/js/jquery.prettyPhoto.js"></script>
    <script src="public/frontend/js/main.js"></script>
</body>
</html>