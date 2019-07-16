@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">

                    <h2 class="c-grey-900">Edit "{{ $product_status->product->title }}" information</h2>
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

                    <form action="admin/product/{{ $product_status->product_id }}/product_status/edit/{{ $product_status->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Size</h6></label>
                                <input type="text" class="form-control" name="size" value="{{ $product_status->size }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01"><h6>Available Quantity</h6></label>
                                <input type="text" class="form-control" name="quantity" value="{{ $product_status->quantity_available }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Edit">
                            <a class="btn btn-link" href="admin/product/{{ $product_status->product_id }}/product_status/">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
