@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="page-header">
                    <h3 class="page-title"> Add Category</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                        </ol>
                    </nav>
                </div>
                <!--form-->
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category</h4>
                            <form role="form" action="/admin/category/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputkeywords1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdescription1">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectstatus">Status</label>
                                    <select class="form-control" name="status">
                                        <option>Ture</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save</button>
                            </form>
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
