@extends('Admin.Layout.app')

@section('heading', 'Edit Testimonial')

@section('button')
    <a href="{{ route('admin_testimonial_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_testimonial_update', $testimonial_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $testimonial_single->photo) }}" alt=""
                                            class="profile-photo w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Testimonial Photo</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Testimonial Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{ $testimonial_single->name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Testimonial Designation *</label>
                                        <input type="text" class="form-control" name="designation" value="{{ $testimonial_single->designation }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Testimonial Comment *</label>
                                        <textarea name="comment" class="form-control snote" cols="30" rows="10">{{ $testimonial_single->comment }}</textarea>
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
