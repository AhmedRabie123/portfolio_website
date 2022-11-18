<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <a style="float: right; font-size: 40px; color: #ee6348" href="https://api.whatsapp.com/send?phone=01015777094" target="_blank"><i class="fab fa-whatsapp"></i></a> --}}

                <div class="logo d-flex justify-content-center">
                    <img src="{{ asset('uploads/' . $global_setting_data->logo_footer) }}" alt="">
                </div>

                @if ($global_setting_data->footer_text != '')
                    <div class="description">
                        {!! nl2br($global_setting_data->footer_text) !!}
                    </div>
                @endif

                @if ($global_setting_data->footer_icon_1 != '' ||
                    $global_setting_data->footer_icon_2 != '' ||
                    $global_setting_data->footer_icon_3 != '' ||
                    $global_setting_data->footer_icon_4 != '')
                    <div class="social">
                        <ul>
                            @if ($global_setting_data->footer_icon_1 != '')
                                <li><a href="{{ $global_setting_data->footer_icon_1_url }}" target="_blank"><i
                                            class="{{ $global_setting_data->footer_icon_1 }}"></i></a></li>
                            @endif

                            @if ($global_setting_data->footer_icon_2 != '')
                                <li><a href="{{ $global_setting_data->footer_icon_2_url }}" target="_blank"><i
                                            class="{{ $global_setting_data->footer_icon_2 }}"></i></a></li>
                            @endif

                            @if ($global_setting_data->footer_icon_3 != '')
                                <li><a href="{{ $global_setting_data->footer_icon_3_url }}" target="_blank"><i
                                            class="{{ $global_setting_data->footer_icon_3 }}"></i></a></li>
                            @endif

                            @if ($global_setting_data->footer_icon_4 != '')
                                <li><a href="{{ $global_setting_data->footer_icon_4_url }}" target="_blank"><i
                                            class="{{ $global_setting_data->footer_icon_4 }}"></i></a></li>
                            @endif

                        </ul>
                    </div>
                @endif

                <div class="copyright">
                    {{ $global_setting_data->footer_copyright }}
                </div>
            </div>
        </div>
    </div>
</div>
