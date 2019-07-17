@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">Product Image List</h4>
                            <div class="table-data__tool-right" style="margin-bottom: 30px">
                                <a href="admin/product/{{ $productID }}/product_image/create" class="btn cur-p btn-primary">
                                    <i class="zmdi zmdi-plus"></i>+ Create new image
                                </a>
                            </div>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($product_image as $product_image)
                                        <tr>
                                            <td>{{ $product_image->id }}</td>
                                            <td>{{ $product_image->product->title }}</td>
                                            <td>

                                                <a href="storage/upload/product/{{ $product_image->filename }}">
                                                    <img src="storage/upload/product/{{ $product_image->filename }}" alt="" width="100px" >
                                                </a>
                                            </td>
                                            <td>
                                                <div class="table-data-feature d-flex justify-content-between">

                                                    <a href="admin/product/{{ $product_image->product_id }}/product_image/edit/{{ $product_image->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="ti-pencil"></i>
                                                    </a>
                                                    <a href="admin/product/{{ $product_image->product_id }}/product_image/delete/{{ $product_image->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete" OnClick="return confirm('Bạn có chắc chắn muốn xóa?');">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                    <a href="admin/product/" class="item" data-toggle="tooltip" data-placement="top" title="See products" >
                                                        <i class="ti-back-left"></i>
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