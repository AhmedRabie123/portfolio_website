@extends('Admin.Layout.app')

@section('heading', 'Edit Setting')

@section('button')
@endsection

@section('main_content')


    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin_setting_update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="mb-4">
                                        <label class="form-label">Existing Logo</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $all_setting->logo) }}" alt=""
                                                class="w_100">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Logo</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="logo">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Favicon</label>
                                        <div>
                                            <img src="{{ asset('uploads/' . $all_setting->favicon) }}" alt=""
                                                class="w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Favicon</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="favicon">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Existing Footer Logo</label>
                                        <div style="background: #e1e1e1;">
                                            <img src="{{ asset('uploads/' . $all_setting->logo_footer) }}" alt=""
                                                class="w_200">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Change Footer Logo</label>
                                        <div>
                                            <input type="file" class="form-control mt_10" name="logo_footer">
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Text</label>
                                        <textarea name="footer_text" class="form-control editor" cols="30" rows="10">{{ $all_setting->footer_text }}</textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 1</label>
                                        <input type="text" class="form-control" name="footer_icon_1"
                                            value="{{ $all_setting->footer_icon_1 }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 1 URL</label>
                                        <input type="text" class="form-control" name="footer_icon_1_url"
                                            value="{{ $all_setting->footer_icon_1_url }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 2</label>
                                        <input type="text" class="form-control" name="footer_icon_2"
                                            value="{{ $all_setting->footer_icon_2 }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 2 URL</label>
                                        <input type="text" class="form-control" name="footer_icon_2_url"
                                            value="{{ $all_setting->footer_icon_2_url }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 3</label>
                                        <input type="text" class="form-control" name="footer_icon_3"
                                            value="{{ $all_setting->footer_icon_3 }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 3 URL</label>
                                        <input type="text" class="form-control" name="footer_icon_3_url"
                                            value="{{ $all_setting->footer_icon_3_url }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 4</label>
                                        <input type="text" class="form-control" name="footer_icon_4"
                                            value="{{ $all_setting->footer_icon_4 }}">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Footer Icon 4 URL</label>
                                        <input type="text" class="form-control" name="footer_icon_4_url"
                                            value="{{ $all_setting->footer_icon_4_url }}">
                                    </div>



                                    <div class="mb-4">
                                        <label class="form-label">Footer Copyright *</label>
                                        <textarea name="footer_copyright" class="form-control h_100" cols="30" rows="10">{{ $all_setting->footer_copyright }}</textarea>
                                    </div>


                                    <div class="mb-4">
                                        <label class="form-label">Preloader Status *</label>
                                        <select name="preloader_status" class="form-control">
                                            <option value="Show" @if ($all_setting->preloader_status == 'Show') selected @endif>Show
                                            </option>
                                            <option value="Hide" @if ($all_setting->preloader_status == 'Hide') selected @endif>Hide
                                            </option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Theme Color *</label>
                                        <input type="text" class="form-control jscolor"  name="theme_color"
                                            value="{{ $all_setting->theme_color }}">
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

{{-- data-jscolor="{}" --}}