<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        @foreach($sliderdata as $rs)
        <li class="text-center">
            <img src="{{Storage::url($rs->image)}}" style="width: 1920px;height: 1280px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>{{$rs->title}}</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="{{route('product',['id'=>$rs->id])}}">Order Quickly</a></p>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
        <li class="text-center">
            <img src="{{asset('assets')}}/images/slider-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="{{asset('assets')}}/images/slider-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view  <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End slides -->
