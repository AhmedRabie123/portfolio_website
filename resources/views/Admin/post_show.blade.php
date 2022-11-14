@extends('Admin.Layout.app')

@section('heading', 'View Posts')

@section('button')
    <a href="{{ route('admin_post_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Post</a>
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
                                        <th>Post Photo</th>
                                        <th>Post Banner</th>
                                        <th>Post Title</th>
                                        <th>Post Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_posts as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $item->photo) }}" alt=""
                                                    class="w_100">
                                            </td>
                                            <td>
                                                <img src="{{ asset('uploads/' . $item->banner) }}" alt=""
                                                    class="w_100">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->rPostCategory->category_name }}</td>
                                       
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_post_edit', $item->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('admin_post_delete', $item->id) }}"
                                                    class="btn btn-danger"
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
