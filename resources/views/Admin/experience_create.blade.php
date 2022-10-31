@extends('Admin.Layout.app')

@section('heading', 'Add Experience')

@section('button')
    <a href="{{ route('admin_experience_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_experience_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Experience Company *</label>
                                        <input type="text" class="form-control" name="company" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Designation *</label>
                                        <input type="text" class="form-control" name="designation" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Time *</label>
                                        <input type="text" class="form-control" name="time" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Experience Order *</label>
                                        <input type="text" class="form-control" name="item_order" value="">
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
