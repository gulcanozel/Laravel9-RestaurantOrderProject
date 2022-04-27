@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="page-header">
                    <h3 class="page-title">
                        <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-success btn-rounded btn-fw">Edit</a>
                        <a href="{{route('admin.category.destroy',['id'=>$data->id])}}"onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-danger btn-rounded btn-fw">Delete</a>
                    </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Show Category</li>
                        </ol>
                    </nav>
                </div>
                <!--form-->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Data</h4>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-contextual">
                                    <tr>
                                        <th style="width: 350px">Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>{{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}" style="width:150px;height:150px;">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>Update Date</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <!--/form-->
            </div>


            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->

        </div>
        <!-- main-panel ends -->
    </div>

@endsection
