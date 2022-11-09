@extends('Admin.Layout.app')

@section('heading', 'View Prtofolio Category')

@section('button')
    <a href="{{ route('admin_portfolio_category_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Category</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th style="width: 100px">SL</th>
                                        <th style="width: 580px">Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($portfolio_category as $item)
                                        <tr>
                                            <td style="width: 100px">{{ $loop->iteration }}</td>
                                            <td style="width: 580px">{{ $item->category_name }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_portfolio_category_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin_portfolio_category_delete', $item->id) }}" class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
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
    </div>




@endsection
