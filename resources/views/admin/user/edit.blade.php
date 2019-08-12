@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">

                    <h2 class="c-grey-900">Edit {{ $user->name }}'s information</h2>
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

                    @if(session('alert'))
                        <div class="alert alert-success">
                            {{session('alert')}}
                        </div>
                    @endif

                    <form action="admin/user/edit/{{ $user->id }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Name</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Email</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="email" value="{{ $user->email }}" readonly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <input type="checkbox" class="" name="changePassword" id="changePassword">
                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Address</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="address" value="{{ $user->address }}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Phone</h6></label>
                                <input type="text" class="form-control" id="validationCustom01" name="phone" value="{{ $user->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label><h6>Role: </h6></label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="role" value="user"
                                    <?php if($user->role === 'user') echo 'checked= ""'?>
                                    >User
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="role" value="admin"
                                    <?php if($user->role === 'admin') echo 'checked= """'?>
                                    >Admin
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Avatar</h6></label>
                                <img src="{{ asset('storage/upload/user/'.$user->avatar) }}" alt="" width="200px"><br><br>
                                <input type="file" class="form-control" id="validationCustom01" name="avatar" value="{{ $user->avatar }}">
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

@section('script')
    <script>
        $(document).ready(function() {
            $("#changePassword").change(function() {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                } else {
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>
@endsection