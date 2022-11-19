@extends('Admin.Layout.app')

@section('heading', 'Dashboard')

@section('main_content')


    <div class="row">

        {{-- Total Skills --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-sliders-h"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Skills</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_skill }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Educations --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Educations</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_education }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Experience --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Experience </h4>
                    </div>
                    <div class="card-body">
                        {{ $all_experience }}
                    </div>
                </div>
            </div>
        </div>


        {{-- Total Testimonial --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Testimonial</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_testimonial }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Client --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Clients</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_client }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Services --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fab fa-servicestack"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Services</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_services }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Portfolios --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Portfolios</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_portfolios }}
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Blogs --}}
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-blog"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Blogs</h4>
                    </div>
                    <div class="card-body">
                        {{ $all_blogs }}
                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection
