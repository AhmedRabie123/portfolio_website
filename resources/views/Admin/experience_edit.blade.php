@extends('Admin.Layout.app')

@section('heading', 'Edit Experience')

@section('button')
    <a href="{{ route('admin_experience_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_experience_update', $experience_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Experience Company *</label>
                                        <input type="text" class="form-control" name="company" value="{{ $experience_single->company }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Designation *</label>
                                        <input type="text" class="form-control" name="designation" value="{{ $experience_single->designation }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Time *</label>
                                        <input type="text" class="form-control" name="time" value="{{ $experience_single->time }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Order *</label>
                                        <input type="text" class="form-control" name="item_order" value="{{ $experience_single->item_order }}">
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
