@extends('layouts.frontbase')

@section('title', 'User ShopCart')

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
            <li class="breadcrumb-item active">User ShopCart</li>
        </ol>
    </nav>
    <!-- Start blog details -->
    <div class="blog-box">
        <div class="container">

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="right-side-blog">
                        <h2><b>User ShopCart</b></h2>
                        <div class="blog-categories">
                            @include('home.user.usermenu')
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="blog-inner-details-page">
                        <h2><b>User ShopCart</b></h2>

                        <div class="blog-inner-box">
                            <div class="inner-blog-detail details-page">

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style=>Product</th>
                                        <th style=>Price</th>
                                        <th style=>Quantity</th>
                                        <th style=>Total</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php
                                        $total=0;
                                    @endphp
                                    @foreach($data as $rs)
                                    <tr>
                                       <td>
                                            <a href="">{{$rs->product->title}}</a>
                                        </td>
                                        <td>{{$rs->product->price}} ₺</td>
                                        <td class="text-sm-center">
                                            <form action="{{route('shopcart.update',['id'=> $rs->id])}}" method="post">
                                                @csrf
                                                <input name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}"
                                                onchange="this.form.submit()">
                                            </form>
                                        </td>
                                        <td>{{$rs->product->price * $rs->quantity}} ₺</td>
                                        <td class="text-right">
                                            <a href="{{route('shopcart.destroy',['id'=>$rs->id])}}" class="btn btn-icon small"
                                               onclick="return confirm('Deleting !! Are you sure ?')"><i class="fa fa-close"></i></a>
                                        </td>

                                    </tr>
                                        @php
                                    $total += $rs->product->price * $rs->quantity;
                                    @endphp
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th class="text-dark">TOTAL PRICE</th>
                                        <th class="text-dark">{{$total}} ₺</th>
                                    </tr>

                                    </tfoot>
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

