@extends('Admin.Layout.app')

@section('heading', 'View Page Pending Replies')

{{-- @section('button')
    <a href="{{ route('admin_client_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Client</a>
@endsection --}}

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
                                        <th>Post</th>
                                        <th>Comment</th>
                                        <th>Person Name</th>
                                        <th>Person Email</th>
                                        <th>Person Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pending_replies as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ route('post', $item->rPost->slug) }}"
                                                    target="_blank">{{ $item->rPost->title }}</a>
                                            </td>
                                            <td>
                                                Name: {{ $item->rComment->person_name }}<br>
                                                E-mail: {{ $item->rComment->person_email }}<br>
                                                Comment: {{ $item->rComment->person_comment }}<br>
                                            </td>
                                            <td>{{ $item->person_name }}</td>
                                            <td>{{ $item->person_email }}</td>
                                            <td>{{ $item->person_comment }}</td>
                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_reply_make_approved', $item->id) }}"
                                                    class="btn btn-primary btn-sm w_100_p mb_10">Make Approved</a>
                                                <a href="{{ route('admin_reply_delete', $item->id) }}"
                                                    class="btn btn-danger btn-sm w_100_p"
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
