@extends('layouts.FrontBase')

@section('title', 'Services')
@section('content')

    <!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
<body style="background-color:white;">

<title>CodePen - CSS image slider w/ next/prev buttons</title>
    <link rel="stylesheet" href="{{asset("assets")}}/mail/slider-style.css">
    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Category :{{$data->Category->title}}</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">{{$data->title}}</span>
                <h5 class="text-muted mb-3">{{$data->description}}</h5>
                <p class="mb-4">{{$data->detail}}</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3">PRICE :</i>${{$data->price}}</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3">QUANTITY :</i>{{$data->quantity}}</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3">TAX :</i>{{$data->tax}}</h5></li>
                </ul>
                <a href="" class="btn btn-lg btn-primary mt-3 px-4">Buy Now</a>
            </div>
                <div class="col-lg-5">
            <ul id="body">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li id="img-container">
                    <div id="img-inner">
                        <img src="{{Storage::URL($data->image)}}">
                    </div>
                    <label for="img-6" class="sb-bignav" title="Previous">&#x2039;</label>
                    <label for="img-2" class="sb-bignav" title="Next">&#x203a;</label>
                </li>
                @foreach($images as $rs)
                    <input type="radio" name="radio-btn" id="img-2" />
                    <li id="img-container">
                        <div id="img-inner">
                            <img src="{{Storage::URL($rs->image)}}">
                        </div>

                        <label for="img-1" class="sb-bignav" title="Previous">&#x2039;</label>
                        <label for="img-2" class="sb-bignav" title="Next">&#x203a;</label>
                    </li>
            @endforeach
            </ul>
            </div>

            <!-- partial -->
                <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                </body>
                </html>
            </div>
        </div>
    </div>
    <!-- About End -->


@endsection
