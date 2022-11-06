@extends('Front.layout.app')

@section('main_content')


<div class="page-banner" style="background-image: url({{ asset('dist_front/images/page-banner.jpg') }}) ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Me</h1>
            </div>
        </div>
    </div>
</div>


<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-photo d-flex justify-content-center">
                    <img src="{{ asset('dist_front/images/t3.jpg') }}" alt="">
                </div>
                <div class="about-content">
                    <h2>About Me</h2>
                    <p>
                        Lorem ipsum dolor sit amet, ad vide autem omnium duo, cu erant tantas doctus per. Duo eu adipisci neglegentur. His at quidam rationibus, has prima petentium inciderint te, dicat discere maiestatis has eu. Per at dicta dictas audiam, cu qui esse scripserit. Dicam signiferumque eu mea, at ius eirmod alienum noluisse, amet accommodare id quo.
                    </p>
                    <h2>My History</h2>
                    <p>
                        Qui ea oporteat democritum, ad sed minimum offendit expetendis. Idque volumus platonem eos ut, in est verear delectus. Vel ut option adipisci consequuntur. Mei et solum malis detracto, has iuvaret invenire inciderint no. Id est dico nostrud invenire.
                    </p>
                    <p>
                        Ius te rebum philosophia, illum instructior te his. Quot option platonem mei an. Homero utroque mei at, congue mentitum ei vix, an luptatum gubergren mel. Has duis indoctum imperdiet ea.
                    </p>
                    <p>
                        Brute illud persequeris ius ne, liber errem no nec, vel ut libris accusam. Ius gloriatur voluptatibus id, ad nec antiopam inciderint. Vis tota molestie vivendum ad. Facete albucius laboramus vel an, vix ea quodsi inciderint. Cu quod assum nominati mei, dictas comprehensam et est. Vidit dolorum fabellas has ad.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection