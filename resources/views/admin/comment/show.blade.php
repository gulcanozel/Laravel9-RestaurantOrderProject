@extends('layouts.adminwindow')

@section('title', 'Show Message :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <!--form-->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail Message Data</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-contextual">
                                    <tr>
                                        <th>Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name & Surname</th>
                                        <td>{{$data->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Product</th>
                                        <td>{{$data->product->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{{$data->review}}</td>
                                    </tr>
                                    <tr>
                                        <th>Rate</th>
                                        <td>{{$data->rate}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ip Number</th>
                                        <td>{{$data->IP}}</td>
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
                                    <tr>
                                        <th>Admin Note :</th>
                                        <td>
                                            <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                             @csrf
                                             <select name="status">
                                                 <option selected>{{$data->status}}</option>
                                                 <option>True</option>
                                                 <option>False</option>
                                             </select>
                                                <button type="submit" class="btn btn-primary me-2">Update Comment</button>
                                            </form>
                                        </td>
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
