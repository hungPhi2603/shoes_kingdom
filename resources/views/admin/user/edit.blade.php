@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    {{--<h1 class="page-header">Tạo mới thể loại</h1>--}}
                    <h2 class="c-grey-900">Edit an user information</h2>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">

                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    <form action="admin/category/create" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Name</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="name..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Email</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="email..." required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Address</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="address" placeholder="address..." >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Phone</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="phone" placeholder="phone number...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Role</h6></label>
                                <select id="inputState" class="form-control">
                                    <option selected="selected" value="">Choose...</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Avatar</h6></label>
                                <input type="file" class="form-control" id="validationCustom01" name="avatar" placeholder="phone number...">
                                <img src="default.svg" alt="" width="100px">
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Edit">
                            <a class="btn btn-link" href="admin/user">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection