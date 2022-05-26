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
                    <div class="inner-column">
                        <h1>{{ $data->title }}</h1>
                        <h4>{!! $data->detail !!}</h4>
                        <h1>{{ $data->price }} ₺</h1>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order</a>
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
                </div>
            </div>

        </div>
    </div>
@endsection
