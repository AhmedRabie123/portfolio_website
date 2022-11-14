@extends('Admin.Layout.app')

@section('heading', 'Add Post Category')

@section('button')
    <a href="{{ route('admin_post_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_post_category_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">category Name *</label>
                                        <input type="text" class="form-control" name="category_name" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">category Slug *</label>
                                        <input type="text" class="form-control" name="category_slug" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">category SEO Title </label>
                                        <input type="text" class="form-control" name="category_seo_title" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">category SEO Meta Description </label>
                                        <textarea name="category_seo_meta_description"  class="form-control editor" cols="30" rows="10"></textarea>
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
