@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">

            <div class="content-wrapper">

                    <div class="page-header">
                        <a href="{{route('admin.faq.create')}}"class="btn btn-inverse-secondary btn-md">+ Add Question</a>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQ List</li>
                            </ol>
                        </nav>
                    </div>
                        <!--form-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">FAQ List</h4>
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">Id</th>
                                                <th>Question</th>
                                                <th>Answer</th>
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
                                                    <td>{{$rs->question}}</td>
                                                    <td>{!! $rs->answer !!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger btn-sm"
                                                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a></td>
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
