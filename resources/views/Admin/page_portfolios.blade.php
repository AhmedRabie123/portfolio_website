@extends('Admin.Layout.app')

@section('heading', 'Edit Portfolios Page Content')

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_page_portfolio_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Portfolios Heading</label>
                                        <input type="text" class="form-control" name="portfolios_heading"
                                            value="{{ $page_data->portfolios_heading }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"> SEO Title</label>
                                        <input type="text" class="form-control" name="portfolios_seo_title"
                                            value="{{ $page_data->portfolios_seo_title }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label"> SEO Meta Description</label>
                                       <textarea name="portfolios_seo_meta_description" class="form-control snote" cols="30" rows="10">{{ $page_data->portfolios_seo_meta_description }}</textarea>
                                    </div>
                              
                                    <div class="mb-4">
                                        <label class="form-label">Existing Banner</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $page_data->portfolios_banner) }}" alt=""
                                            class="profile-photo w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner</label>
                                        <input type="file" class="form-control mt_10" name="portfolios_banner">
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
