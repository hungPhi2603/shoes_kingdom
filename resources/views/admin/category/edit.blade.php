@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">

                    <h2 class="c-grey-900">Edit {{ $category->code }}</h2>
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

                    <form action="admin/category/edit/{{ $category->id }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Name</h6></label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Edit">
                            <a class="btn btn-link" href="admin/category">Back</a>
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
            $('#type').change(function() {
                if($('#multiply').is(':checked')){
                    $('#currency').html('%');
                } else $('#currency').html('VND');
            })
        })
    </script>
@endsection