@extends('layout.admin')

@section('content')
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20">Category List</h4>
                        <div class="table-data__tool-right" style="margin-bottom: 30px">
                            <a href="admin/category/create" class="btn cur-p btn-primary">
                                <i class="zmdi zmdi-plus"></i>+ Create new category
                            </a>

                        </div>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($category as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="table-data-feature d-flex justify-content-between">

                                            <a href="admin/category/edit/{{ $category->id }}" class="item float-leftleft" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a href="admin/category/delete/{{ $category->id }}" class="item float-right" data-toggle="tooltip" data-placement="top" title="Delete" OnClick="return confirm('Bạn có chắc chắn muốn xóa?');">
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