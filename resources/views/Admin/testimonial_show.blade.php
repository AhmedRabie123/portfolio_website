@extends('Admin.Layout.app')

@section('heading', 'View Testimonial Section')

@section('button')
    <a href="{{ route('admin_testimonial_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Testimonial</a>
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
                                        <th>Testimonial Photo</th>
                                        <th>Testimonial Name</th>
                                        {{-- <th>Testimonial comment</th> --}}
                                        <th>Testimonial Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_testimonial as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'. $item->photo) }}" alt="" class="w_100">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            {{-- <td>{!! $item->comment !!}</td> --}}
                                            <td>{{ $item->designation }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_testimonial_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin_testimonial_delete', $item->id) }}" class="btn btn-danger"
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
