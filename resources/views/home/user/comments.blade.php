@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews')

@section('content')
    <!-- Start header -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>User Comments & Reviews</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">User Comment</li>
        </ol>
    </nav>
    <!-- Start blog details -->
    <div class="blog-box">
        <div class="container">

            <div class="row">

                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="right-side-blog">
                        <h2><b>User Menu</b></h2>
                        <div class="blog-categories">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <h2><b>User Comments & Reviews</b></h2>

                        <div class="blog-inner-box">
                            <div class="inner-blog-detail details-page">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th style="width: 30px">Product</th>
                                        <th>Subject</th>
                                        <th style="width: 300px">Review</th>
                                        <th style="width: 10px">Rate</th>
                                        <th style="width: 20px">Status</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>
                                                <a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a>
                                            </td>
                                            <td>{{$rs->subject}}</td>
                                            <td>{{$rs->review}}</td>
                                            <td>{{$rs->rate}}</td>
                                            <td>{{$rs->status}}</td>

                                            <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End blog details -->
@endsection

