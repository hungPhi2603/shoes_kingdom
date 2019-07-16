@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">Users List</h4>
                            <div class="table-data__tool-right" style="margin-bottom: 30px">
                                <a href="admin/user/create" class="btn cur-p btn-primary">
                                    <i class="zmdi zmdi-plus"></i>+ Create new user
                                </a>

                            </div>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <div class="table-data-feature d-flex justify-content-around">

                                                    <a href="admin/user/edit/{{ $user->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <a href="admin/user/delete/{{ $user->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete" OnClick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                        <i class="ti-close"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection