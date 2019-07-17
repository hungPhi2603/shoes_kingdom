@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    {{--<h1 class="page-header">Tạo mới thể loại</h1>--}}
                    <h4 class="c-grey-900">{{ $product->title }} </h4>
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

                    <form action="admin/product/{{ $product->id }}/product_image/create" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h3>Image</h3></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Create">
                            <a class="btn btn-link" href="admin/product/{{ $product->id }}/product_image">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection