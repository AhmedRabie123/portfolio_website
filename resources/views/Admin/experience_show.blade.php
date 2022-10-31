@extends('Admin.Layout.app')

@section('heading', 'View Page Experience')

@section('button')
    <a href="{{ route('admin_experience_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Experience</a>
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
                                        <th>SL</th>
                                        <th>experience Company</th>
                                        <th>experience Designation</th>
                                        <th>experience Time</th>
                                        <th>experience Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_experience as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->company }}</td>
                                            <td>{{ $item->designation }}</td>
                                            <td>{{ $item->time }}</td>
                                            <td>{{ $item->item_order }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_experience_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin_experience_delete', $item->id) }}" class="btn btn-danger"
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
