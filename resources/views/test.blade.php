<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/test.css")}}">
    <style>

    </style>
</head>
<body>

{{--<h1>name   {{$product->name}}</h1>--}}
{{--<h1>price   {{$product->price}}</h1>--}}

{{--<a href="{{url("favorite",['id' => $product->id])}}">i love</a>--}}

{{--    <div class="box">--}}
{{--        <div class="inner"></div>--}}
{{--    </div>--}}

{{--    <h2>JavaScript HTML Events</h2>--}}

{{--    <h2 onclick="changeText(this)">Click on this text!</h2>--}}
{{--{{json_decode()}}--}}
    <script src="{{asset("js/test.js")}}"></script>
<img src="{{json_decode(\Illuminate\Support\Facades\Storage::url(\App\Models\Product::query()->find(1)->image->urls))}}" alt="" width="300" height="300">
{{--<img src="{{\Illuminate\Support\Facades\Storage::url("productImages/5.jpg")}}" alt="" width="300" height="300">--}}
{{--<img src="{{\Illuminate\Support\Facades\}}" alt="" width="300" height="300">--}}


{{--<a href="{{\Illuminate\Support\Facades\Storage::url("productImages/5.jpg")}}">rger</a>--}}

</body>
</html>

