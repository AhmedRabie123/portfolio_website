@extends('Admin.Layout.app')

@section('heading', 'Edit Contact Page Content')

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_page_contact_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Contact Heading *</label>
                                        <input type="text" class="form-control" name="contact_heading"
                                            value="{{ $page_data->contact_heading }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact Address *</label>
                                        <textarea name="contact_address" class="form-control h_100" cols="30" rows="10">{{ $page_data->contact_address}}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact Phone *</label>
                                        <textarea name="contact_phone" class="form-control h_100" cols="30" rows="10">{{ $page_data->contact_phone }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact E-Mail *</label>
                                        <textarea name="contact_email" class="form-control h_100" cols="30" rows="10">{{ $page_data->contact_email }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact Map (Iframe-Code) *</label>
                                        <textarea name="contact_map_iframe" class="form-control h_100" cols="30" rows="10">{{ $page_data->contact_map_iframe }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact SEO Title</label>
                                        <input type="text" class="form-control" name="contact_seo_title"
                                            value="{{ $page_data->contact_seo_title }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Contact SEO Meta Description</label>
                                        <textarea name="contact_seo_meta_description" class="form-control editor" cols="30" rows="10">{{ $page_data->contact_seo_meta_description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Banner</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $page_data->contact_banner) }}" alt=""
                                                class="profile-photo w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner</label>
                                        <input type="file" class="form-control mt_10" name="contact_banner">
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
