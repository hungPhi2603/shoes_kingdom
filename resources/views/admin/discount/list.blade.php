@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Discount List</h4>
                        <div class="table-data__tool-right" style="margin-bottom: 30px">
                            <a href="admin/discount/create" class="btn cur-p btn-primary">
                                <i class="zmdi zmdi-plus"></i>+ Create new discount
                            </a>

                        </div>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Date start</th>
                                <th>Date expired</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Date start</th>
                                <th>Date expired</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($discount as $discount)
                                <tr>
                                    <td>{{ $discount->id }}</td>
                                    <td>{{ $discount->code }}</td>
                                    <td>{{ $discount->type }}</td>
                                    <td>{{ $discount->value }}</td>
                                    <td>{{ $discount->date_start }}</td>
                                    <td>{{ $discount->date_expire }}</td>
                                    <td>
                                        <div class="table-data-feature d-flex justify-content-around">

                                            <a href="admin/discount/edit/{{ $discount->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a href="admin/discount/delete/{{ $discount->id }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete" OnClick="return confirm('Bạn có chắc chắn muốn xóa?');">
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