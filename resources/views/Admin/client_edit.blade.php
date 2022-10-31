@extends('Admin.Layout.app')

@section('heading', 'Edit Client')

@section('button')
    <a href="{{ route('admin_client_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_client_update', $client_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('uploads/'. $client_single->photo) }}" alt="">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Client Photo</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Client URL</label>
                                        <input type="text" class="form-control" name="url" value="{{ $client_single->url }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
