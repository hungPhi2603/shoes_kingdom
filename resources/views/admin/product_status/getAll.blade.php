@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">All Products Status</h4>

                            <div class="table-data__tool-right" style="margin-bottom: 30px">
                                <a href="admin/product" class="btn cur-p btn-info">
                                    <i class="zmdi zmdi-plus"></i>Back to see products
                                </a>

                            </div>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Promotion price</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Promotion price</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($product as $product)
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->quantity_available }}</td>
                                            <td>{{ $product->unit_price }}</td>
                                            <td>{{ $product->promotion_price }}</td>

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