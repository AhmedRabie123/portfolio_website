@extends('Admin.Layout.app')

@section('heading', 'Add Education')

@section('button')
    <a href="{{ route('admin_education_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_education_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Education Degree *</label>
                                        <input type="text" class="form-control" name="degree" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Institute *</label>
                                        <input type="text" class="form-control" name="institute" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Time *</label>
                                        <input type="text" class="form-control" name="time" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Order *</label>
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
