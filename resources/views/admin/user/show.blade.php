@extends('layouts.adminwindow')

@section('title', 'User Detail :'.$data->title)


@section('content')
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <!--form-->

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail User</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-contextual">
                                    <tr>
                                        <th>Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name & Surname</th>
                                        <td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            @foreach($data->roles as $role)
                                                {{$role->name}}
                                                <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>
                                        @endforeach
                                        </td>
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
                                        <th>Add Role to User</th>
                                        <td>
                                            <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                             @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                                <button type="submit" class="btn btn-primary me-2">Add role</button>
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
