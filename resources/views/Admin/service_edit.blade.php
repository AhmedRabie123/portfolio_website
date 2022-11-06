@extends('Admin.Layout.app')

@section('heading', 'Edit Service')

@section('button')
    <a href="{{ route('admin_service_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_service_update', $service_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Existing Photo</label>
                                        <div>
                                            <img src="{{ asset('uploads/'. $service_single->photo) }}" alt="" class="w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Photo</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Banner</label>
                                        <div>
                                            <img src="{{ asset('uploads/'. $service_single->banner) }}" alt="" class="w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="banner">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $service_single->name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Slug </label>
                                        <input type="text" class="form-control" name="slug" value="{{ $service_single->slug }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Short Description</label>
                                        <textarea name="short_description" class="form-control snote" cols="30" rows="10">{{ $service_single->short_description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Service Description</label>
                                        <textarea name="description" class="form-control snote" cols="30" rows="10">{{ $service_single->description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Icon</label>
                                        <input type="text" class="form-control" name="icon" value="{{ $service_single->icon }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" name="seo_title" value="{{ $service_single->seo_title }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Meta Description</label>
                                        <textarea name="seo_meta_description" class="form-control snote" cols="30" rows="10">{{ $service_single->seo_meta_description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Item Order</label>
                                        <input type="text" class="form-control" name="item_order" value="{{ $service_single->item_order }}">
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
