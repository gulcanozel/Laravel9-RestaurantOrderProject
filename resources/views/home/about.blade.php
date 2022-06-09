@extends('layouts.frontbase')

@section('title', 'About Us |'. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keyword)
@section('icon',Storage::url($setting->icon))


@section('content')
    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>
    </nav>

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
