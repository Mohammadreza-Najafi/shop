<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

    <link href="{{asset("vendors/overlayscrollbars/OverlayScrollbars.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/theme-rtl.min.css")}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset("assets/css/theme.min.css")}}" rel="stylesheet" id="style-default">
    <link href="{{asset("assets/css/user-rtl.min.css")}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset("assets/css/user.min.css")}}" rel="stylesheet" id="user-style-default">

    

</head>


<body>


            

             @yield("content")

 

<script src="{{asset("vendors/popper/popper.min.js")}}"></script>
<script src="{{asset("vendors/bootstrap/bootstrap.min.js")}}"></script>
<script src="{{asset("vendors/anchorjs/anchor.min.js")}}"></script>
<script src="{{asset("vendors/is/is.min.js")}}"></script>
<script src="{{asset("vendors/echarts/echarts.min.js")}}"></script>
<script src="{{asset("vendors/fontawesome/all.min.js")}}"></script>
<script src="{{asset("vendors/lodash/lodash.min.js")}}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{asset("vendors/list.js/list.min.js")}}"></script>
<script src="{{asset("assets/js/theme.js")}}"></script>

</body>

</html>
