@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>{{ $data->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Menu</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active">{{$data->title}}</li>
        </ol>
    </nav>
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6 col-md-6 text-center">
                    @include('home.messages')
                    <div class="inner-column">
                        <h1>{{ $data->title }}</h1>
                        <h4>{!! $data->detail !!}</h4>
                        <h1>{{ $data->price }} ₺</h1>
                    </div>



                        <div class="inner-column">
                            <form action="{{route('shopcart.store')}}" method="post">
                                @csrf
                                <span class="text-uppercase"> QTY: </span>
                                <input class="input-sm" name="quantity" type="number" value="1" min="1" max="{{$rs->product->quantity}}">
                                <input class="input-sm" name="id" value="{{$data->id}}" type="hidden">
                            <button type="submit" class="btn btn-lg btn-circle btn-outline-new-white">Order</button>
                            </form>
                        </div>
                </div>


                <div class="gallery-box">
                    <div class="container-fluid">
                        <div class="tz-gallery">
                            <div class="row">
                                @foreach($images as $rs)
                                    <div class="col-sm-4">
                                        <a class="lightbox" href="{{Storage::url($rs->image)}}">
                                            <img class="img-fluid" src="{{Storage::url($rs->image)}}" alt="Gallery Images">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="special-menu">
                                <div class="button-group filter-button-group">
                                    <button class="active" data-filter="*">All</button>
                                    <button data-filter=".detail">Detail</button>
                                    <button data-filter=".review">Review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row special-list">
                        <div class="col-lg-4 col-md-6 special-grid detail">
                            <h4>{!! $data->detail !!}</h4>
                        </div>
                    </div>
                    <div class="row special-list">
                        <div class="col-lg-10 col-sm-10 col-xs-10 special-grid review">

                            <div class="blog-comment-box">
                                @foreach($reviews as $rs)
                                <div class="comment-item">
                                        <div class="pull-left">
                                            <strong><a href="#">{{$rs->user->name}}</a></strong>
                                        </div>
                                        <div class="pull-right">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>{{$rs->crated_at}}</span>
                                        </div>
                                        <div class="preview-icon rate pull-right">
                                            <i class="fa fa-star" @if($rs->rate<1) -o empty @endif"></i>
                                            <i class="fa fa-star" @if($rs->rate<2) -o empty @endif"></i>
                                            <i class="fa fa-star" @if($rs->rate<3) -o empty @endif"></i>
                                            <i class="fa fa-star" @if($rs->rate<4) -o empty @endif"></i>
                                            <i class="fa fa-star" @if($rs->rate<5) -o empty @endif"></i>
                                        </div>
                                        <div class="des-l">
                                            <strong>{{$rs->subject}}</strong>
                                            <p>{{$rs->review}}</p>
                                        </div>
                                </div>
                                @endforeach

                            <div class="comment-respond-box">
                                <h3>Leave your comment </h3>
                                <div class="comment-respond-form">
                                    <form id="commentrespondform" class="comment-form-respond row" action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <input class="input-group" type="hidden" name="product_id" value="{{$data->id}}"/>
                                        <div class="col-lg-10 col-md-6 col-sm-10">
                                            <div class="form-group" >
                                                <input id="subject" class="form-control" name="subject" placeholder="Subject"
                                                       type="text">
                                            </div>
                                            <div class="form-group" >
                                                <input id="review" class="form-control" name="review" placeholder="Review"
                                                       type="text">
                                            </div>
                                            <div class="form-group" >
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1" title="text">1 star</label>
                                                </div>
                                            </div>
                                        </div>
                                        @auth
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button class="btn btn-submit">Submit comment</button>
                                        </div>
                                        @else
                                            <a class="btn btn-submit" href="/login">For submit your review,please login</a>
                                        @endauth
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>

        </div>
    </div>
@endsection
