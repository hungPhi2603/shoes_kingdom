@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">Products List</h4>
                            <div class="table-data__tool-right" style="margin-bottom: 30px">
                                <a href="admin/product/create" class="btn cur-p btn-primary">
                                    <i class="zmdi zmdi-plus"></i>+ Create new product
                                </a>
                                <a href="admin/product_status/" class="btn cur-p btn-success float-right">
                                    <i class="zmdi zmdi-plus"></i>Show all status
                                </a>
                            </div>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Unit price</th>
                                        <th>Promotion price</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Actionnnnnnnnnnn</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Unit price</th>
                                        <th>Promotion price</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                        <th>Detail</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($product as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->unit_price }}</td>
                                            <td>{{ $product->promotion_price }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>
                                                <div class="table-data-feature d-flex justify-content-around">

                                                    <a href="admin/product/edit/{{ $product->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <a href="admin/product/delete/{{ $product->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete" OnClick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                        <i class="ti-close"></i>
                                                    </a>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-data-feature d-flex justify-content-around">

                                                    <a href="admin/product/{{$product->id}}/product_status/" class="item" data-toggle="tooltip" data-placement="top" title="Status">
                                                        <i class="ti-layout-list-thumb"></i>
                                                    </a>
                                                    <a href="admin/product/{{$product->id}}/product_image/" class="item" data-toggle="tooltip" data-placement="top" title="Image">
                                                        <i class="ti-image"></i>
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