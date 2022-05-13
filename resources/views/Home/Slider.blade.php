

@yield('slider')



<!-- Carousel -->
@foreach( $sliderdata as $rs )

<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

            <div class="carousel-item active">
                <img class="w-100" src="{{Storage::URL($rs->image)}}" style="height: 600px;width: ">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">}</h3>
                        <h1 class="display-3 text-white mb-3">{{$rs->title}}</h1>
                    </div>
                </div>
            </div>
                @endforeach

    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
</div>
<!-- Carousel End

