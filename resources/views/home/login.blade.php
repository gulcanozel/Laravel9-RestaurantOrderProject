@extends('layouts.frontbase')

@section('title', 'User Login |')


@section('content')
    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>User Login</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Login</li>
        </ol>
    </nav>

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                @include('auth.login')
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
