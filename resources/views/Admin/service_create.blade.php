@extends('Admin.Layout.app')

@section('heading', 'Add Service')

@section('button')
    <a href="{{ route('admin_service_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_service_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Service Photo *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Banner *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="banner">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Name *</label>
                                        <input type="text" class="form-control" name="name" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Short Description *</label>
                                        <textarea name="short_description" class="form-control snote" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Description *</label>
                                        <textarea name="description" class="form-control snote" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Icon *</label>
                                        <input type="text" class="form-control" name="icon" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" name="seo_title" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Meta Description</label>
                                        <textarea name="seo_meta_description" class="form-control snote" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Item Order *</label>
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
