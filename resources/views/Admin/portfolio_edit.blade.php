@extends('Admin.Layout.app')

@section('heading', 'Edit Portfolio')

@section('button')
    <a href="{{ route('admin_portfolio_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_portfolio_update', $portfolio_single->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Existing Portfolio Photo </label>
                                        <div>
                                            <img src="{{ asset('uploads/'. $portfolio_single->photo) }}" class="w_150" alt="">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Photo *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
                                     </div>

                                     <div class="mb-4">
                                        <label class="form-label">Existing Portfolio Banner </label>
                                        <div>
                                            <img src="{{ asset('uploads/'. $portfolio_single->banner) }}" class="w_150" alt="">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Banner *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="banner">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Name *</label>
                                        <input type="text" class="form-control" name="name" value="{{ $portfolio_single->name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Slug *</label>
                                        <input type="text" class="form-control" name="slug" value="{{ $portfolio_single->slug }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Description *</label>
                                        <textarea name="description" class="form-control editor" cols="30" rows="10">{{ $portfolio_single->description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project client Name </label>
                                        <input type="text" class="form-control" name="project_client" value="{{ $portfolio_single->project_client }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project Company Name</label>
                                        <input type="text" class="form-control" name="project_company" value="{{ $portfolio_single->project_company }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project Start Date</label>
                                        <input type="text" class="form-control" name="project_start_date" value="{{ $portfolio_single->project_start_date }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project End Date</label>
                                        <input type="text" class="form-control" name="project_end_date" value="{{ $portfolio_single->project_end_date }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project Cost</label>
                                        <input type="text" class="form-control" name="project_cost" value="{{ $portfolio_single->project_cost }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Project Website</label>
                                        <input type="text" class="form-control" name="project_website" value="{{ $portfolio_single->project_website }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" class="form-control" name="seo_title" value="{{ $portfolio_single->seo_title }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">SEO Meta Description</label>
                                        <textarea name="seo_meta_description" class="form-control editor" cols="30" rows="10">{{ $portfolio_single->seo_meta_description }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Category ID *</label>
                                        <select name="portfolio_category_id" class="form-control select2">
                                            @foreach ($portfolio_categories as $item)
                                                <option value="{{ $item->id }}" @if($portfolio_single->portfolio_category_id == $item->id) selected @endif>{{ $item->category_name }}</option>
                                            @endforeach
                                        </select>
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
