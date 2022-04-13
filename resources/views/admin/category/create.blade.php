@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <h3><i class="fa fa-angle-right"></i> Add Category</h3>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="card-body">
                    <h4 class="card-title">Category elements</h4>
                    <!--form start-->
                    <form role="form" action="/admin/category/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail3">Keywords </label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Description">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="fileupload-buttonbar" type="button">Upload</button>
                          </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mr-lg-2">Save</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!--main content end-->
@endsection
