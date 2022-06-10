@extends('layouts.adminbase')

@section('title', 'Comment & Reviews List')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">

            <div class="content-wrapper">

                    <div class="page-header">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Comment List</li>
                            </ol>
                        </nav>
                    </div>
                        <!--form-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Comment List</h4>
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">Id</th>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Rate</th>
                                                <th style="width: 30px">Status</th>
                                                <th style="width: 40px">Show</th>
                                                <th style="width: 40px">Delete</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($data as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>
                                                        <a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a>
                                                    </td>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>
                                                        <a href="{{route('admin.comment.show',['id'=>$rs->id])}}"class="btn btn-success btn-sm"
                                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            Show
                                                        </a>
                                                    </td>
                                                    <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!--endform-->
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                </div>
            </footer>

        </div>
            <!-- main-panel ends -->
    </div>


@endsection
