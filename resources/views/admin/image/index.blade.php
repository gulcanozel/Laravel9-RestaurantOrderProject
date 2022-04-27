@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <!--form-->
            <h2>{{$product->title}}</h2>
            <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                             <button class="file-upload-browse btn btn-primary" type="button">Browse</button>
                        </span>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary me-2">Upload</button>
            </form>
            <!--/form-->

            <!--default-box-->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Image List</h4>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th style="width: 40px">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($images as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="width:80px;height:80px;">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--default-box-->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
