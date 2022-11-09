@extends('Admin.Layout.app')

@section('heading', 'Photo Gallery For "' . $portfolio_single->name . '"')

@section('button')
    <a href="{{ route('admin_portfolio_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Back To Previous</a>
@endsection


@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-8">
                <h4>All Photos</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Portfolio Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($portfolio_photo as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <img src="{{ asset('uploads/' . $item->photo) }}" alt=""
                                                    class="w_200">
                                            </td>

                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_portfolio_photo_gallery_delete', $item->id) }}" class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <h4>Add Photo</h4>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_portfolio_photo_gallery_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
 
                            <input type="hidden" name="portfolio_id" value="{{ $portfolio_single->id }}">
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Photo *</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="photo">
                                        </div>
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
