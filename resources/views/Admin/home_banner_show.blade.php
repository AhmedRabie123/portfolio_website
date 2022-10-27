@extends('Admin.Layout.app')

@section('heading', 'Edit Home Banner')

@section('main_content')


<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('uploads/'. $page_data->banner_photo) }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="banner_photo">
                            </div>
                            <div class="col-md-9">

                                <div class="mb-4">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="banner_title" value="{{ $page_data->banner_title }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="banner_title" value="{{ $page_data->banner_person_name }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Designation</label>
                                    <input type="text" class="form-control" name="banner_person_designation" value="{{ $page_data->banner_person_designation }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea type="text" class="form-control snote" name="banner_person_description">{{ $page_data->banner_person_description }}</textarea>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="banner_button_text" value="{{ $page_data->banner_button_text }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Button URL</label>
                                    <input type="text" class="form-control" name="banner_button_url" value="{{ $page_data->banner_button_url }}">
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