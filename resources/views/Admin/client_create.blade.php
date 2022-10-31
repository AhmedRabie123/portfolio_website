@extends('Admin.Layout.app')

@section('heading', 'Add Client')

@section('button')
    <a href="{{ route('admin_client_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_client_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Client Photo *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Client URL</label>
                                        <input type="text" class="form-control" name="url" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"></label>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
