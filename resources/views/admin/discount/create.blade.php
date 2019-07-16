@extends('layout.admin')

@section('content')
    <div class="masonry-item col-md-12">
        <div class="bgc-white p-20 bd">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    {{--<h1 class="page-header">Tạo mới thể loại</h1>--}}
                    <h2 class="c-grey-900">New Discount</h2>
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

                    <form action="admin/discount/create" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label ><h6>Code</h6></label>
                                <input type="text" class="form-control" name="code" placeholder="code..." required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 mb-3" id="type">
                                <label><h6>Type of discount: </h6></label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="multiply" checked="" id="multiply">Multiply
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="minus" id="minus">Minus
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label ><h6>Value</h6></label>
                                <input type="number" class="form-control" name="value">
                                <span id="currency">%</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label ><h6>Start at:</h6></label>
                                <input type="date" class="form-control" name="dateStart">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mb-3">
                                <label ><h6>Expired at:</h6></label>
                                <input type="date" class="form-control" name="dateExpired">
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Create">
                            <a class="btn btn-link" href="admin/discount">Back</a>
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