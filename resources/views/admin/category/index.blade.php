@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="page-header">
                    <a href="{{route('admin.category.create')}}"class="btn btn-inverse-secondary btn-md">+ Add Category</a>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category List</li>
                        </ol>
                    </nav>
                </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category List</h4>
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Parent</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th style="width: 30px">Status</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                            <th style="width: 40px">Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }} </td>
                                                <td>{{$rs->title}}</td>
                                                <td>
                                                    @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="width:60px;height:60px;">
                                                    @endif
                                                </td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                                <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                                <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


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
