@extends('Admin.Layout.app')

@section('heading', 'View Skills Section')

@section('button')
    <a href="{{ route('admin_skill_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Add Skill</a>
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
                                        <th>Skill Name</th>
                                        <th>Skill Percentage</th>
                                        <th>Skill Side</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_skill as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->percentage }}</td>
                                            <td>{{ $item->side }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_skill_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin_skill_delete', $item->id) }}" class="btn btn-danger"
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
