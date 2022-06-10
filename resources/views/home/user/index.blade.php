@extends('layouts.frontbase')

@section('title', 'User Panel')

@section('content')
    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>User Panel</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">User Panel</li>
        </ol>
    </nav>
    <!-- Start blog details -->
    <div class="blog-box">
        <div class="container">

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="right-side-blog">
                        <h2><b>User Menu</b></h2>
                        <div class="blog-categories">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <h2><b>User Profile</b></h2>

                        <div class="blog-inner-box">
                            <div class="inner-blog-detail details-page">
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End blog details -->
@endsection

