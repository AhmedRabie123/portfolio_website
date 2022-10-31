@extends('Admin.Layout.app')

@section('heading', 'Edit Education')

@section('button')
    <a href="{{ route('admin_education_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_education_update', $education_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Education Degree *</label>
                                        <input type="text" class="form-control" name="degree" value="{{ $education_single->degree }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Institute *</label>
                                        <input type="text" class="form-control" name="institute" value="{{ $education_single->institute }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Time *</label>
                                        <input type="text" class="form-control" name="time" value="{{ $education_single->time }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Education Order *</label>
                                        <input type="text" class="form-control" name="item_order" value="{{ $education_single->item_order }}">
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
