@extends('Admin.Layout.app')

@section('heading', 'Video Gallery For "' . $portfolio_single->name . '"')

@section('button')
    <a href="{{ route('admin_portfolio_show') }}" class="btn btn-primary"><i class="fas fa-plus"></i>Back To Previous</a>
@endsection


@section('main_content')

    <div class="section-body">
        <div class="row">
            <div class="col-8">
                <h4>All Videos</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Portfolio video Preview</th>
                                        <th>Portfolio Caption</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($portfolio_video as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>
                                                <div class="video-iframe-container1">
                                                    <iframe width="560" height="315"
                                                        src="https://www.youtube.com/embed/{{ $item->video_id }}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>
                                                </div>


                                            </td>

                                            <td>{{ $item->caption }}</td>

                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_portfolio_video_gallery_delete', $item->id) }}"
                                                    class="btn btn-danger"
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
                        <form action="{{ route('admin_portfolio_video_gallery_submit') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="portfolio_id" value="{{ $portfolio_single->id }}">
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Video Caption *</label>
                                        <div>
                                            <input type="text" class="form-control mt_10" name="caption"
                                                value="{{ old('caption') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Portfolio Video ID *</label>
                                        <div>
                                            <input type="text" class="form-control mt_10" name="video_id"
                                                value="{{ old('caption') }}">
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
