@extends('Admin.Layout.app')

@section('heading', 'Edit Blog Page Content')

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_page_blog_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Blog Heading *</label>
                                        <input type="text" class="form-control" name="blog_heading"
                                            value="{{ $page_data->blog_heading }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"> SEO Title</label>
                                        <input type="text" class="form-control" name="blog_seo_title"
                                            value="{{ $page_data->blog_seo_title }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"> SEO Meta Description</label>
                                       <textarea name="blog_seo_meta_description" class="form-control editor" cols="30" rows="10">{{ $page_data->blog_seo_meta_description }}</textarea>
                                    </div>
                              
                                    <div class="mb-4">
                                        <label class="form-label">Existing Banner</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $page_data->blog_banner) }}" alt=""
                                            class="profile-photo w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner</label>
                                        <input type="file" class="form-control mt_10" name="blog_banner">
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
