@extends('Admin.Layout.app')

@section('heading', 'Edit Post Category')

@section('button')
    <a href="{{ route('admin_post_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_post_category_update', $category_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">category Name *</label>
                                        <input type="text" class="form-control" name="category_name" value="{{ $category_single->category_name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">category Slug *</label>
                                        <input type="text" class="form-control" name="category_slug" value="{{ $category_single->category_slug }}">
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
