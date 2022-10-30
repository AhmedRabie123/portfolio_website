@extends('Admin.Layout.app')

@section('heading', 'Add Skill')

@section('button')
    <a href="{{ route('admin_skill_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i>View All</a>
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_skill_submit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Skill Name *</label>
                                        <input type="text" class="form-control" name="name" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Skill Percentage *</label>
                                        <input type="text" class="form-control" name="percentage" value="">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Select Skill Side</label>
                                        <select name="side" class="form-control">
                                            <option value="Right">Right </option>
                                            <option value="Left">Left </option>
                                        </select>
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
