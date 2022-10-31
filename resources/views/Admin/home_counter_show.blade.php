@extends('Admin.Layout.app')

@section('heading', 'Edit Home Page Counter')

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_home_counter_update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Counter Number - 1</label>
                                        <input type="text" class="form-control" name="counter1_number"
                                            value="{{ $page_data->counter1_number }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Name - 1</label>
                                        <input type="text" class="form-control" name="counter1_name"
                                            value="{{ $page_data->counter1_name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Number - 2</label>
                                        <input type="text" class="form-control" name="counter2_number"
                                            value="{{ $page_data->counter2_number }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Name - 2</label>
                                        <input type="text" class="form-control" name="counter2_name"
                                            value="{{ $page_data->counter2_name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Number - 3</label>
                                        <input type="text" class="form-control" name="counter3_number"
                                            value="{{ $page_data->counter3_number }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Name - 3</label>
                                        <input type="text" class="form-control" name="counter3_name"
                                            value="{{ $page_data->counter3_name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Number - 4</label>
                                        <input type="text" class="form-control" name="counter4_number"
                                            value="{{ $page_data->counter4_number }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Counter Name - 4</label>
                                        <input type="text" class="form-control" name="counter4_name"
                                            value="{{ $page_data->counter4_name }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Background</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $page_data->counter_background) }}" alt=""
                                            class="profile-photo w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Background</label>
                                        <input type="file" class="form-control mt_10" name="counter_background">
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label">Counter Status</label>
                                        <select name="counter_status" class="form-control">
                                            <option value="Show" @if ($page_data->counter_status == 'Show') selected @endif>Show
                                            </option>
                                            <option value="Hide" @if ($page_data->counter_status == 'Hide') selected @endif>Hide
                                            </option>
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
