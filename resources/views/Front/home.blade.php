@extends('Front.layout.app')

@section('main_content')



<div class="home-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div class="left">
                    <h4>Hello, I'm</h4>
                    <h2>Morshedul Arefin</h2>
                    <h3>Professional Web Developer</h3>
                    <p>
                        I am 25 years old web designer & developer; and working to build websites for my international clients.
                    </p>
                    <div class="button">
                        <a href="contact.html" class="btn btn-primary">Hire Me</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right">
                    <img src="{{ asset('dist_front/images/man.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="left wow fadeInLeft">
                    <img src="{{ asset('dist_front/images/man2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="right wow fadeInRight">
                    <h3>Who Am I</h3>
                    <h2>About Me</h2>
                    <p>
                        I am an experienced web developers from Bangladesh. I am working in my field for about the last 10+ years. I worked on Laravel Development, WordPress Theme and Plugin Development etc.
                    </p>
                    <p>
                        I have created a lot of online courses and I have over 3000 students online who are learning well from my lectures. I hope if you enroll you will also enjoy.
                    </p>
                    <div class="contact-info">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><i class="far fa-user"></i></td>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>Morshedul Arefin</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-phone"></i></td>
                                    <td>Phone</td>
                                    <td>:</td>
                                    <td>123-333-4342</td>
                                </tr>
                                <tr>
                                    <td><i class="far fa-envelope"></i></td>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>arefindev@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="social">
                        <h3>Find me on social media:</h3>
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-skill">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>My Skill</h2>
                <h3>My Expertise Area</h3>
            </div>
            <div class="col-md-6 wow fadeInLeft">

                <div class="progress-text">Photoshop</div>
                <div class="progress">
                    <div class="progress-bar w-70-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>

                <div class="progress-text">Illustrator</div>
                <div class="progress">
                    <div class="progress-bar w-80-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>

                <div class="progress-text">Graphic Design</div>
                <div class="progress">
                    <div class="progress-bar w-65-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                </div>

                <div class="progress-text">Search Engine Optimization</div>
                <div class="progress">
                    <div class="progress-bar w-55-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="progress-text">Laravel</div>
                <div class="progress">
                    <div class="progress-bar w-70-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                </div>

                <div class="progress-text">WordPress</div>
                <div class="progress">
                    <div class="progress-bar w-80-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>

                <div class="progress-text">Python</div>
                <div class="progress">
                    <div class="progress-bar w-65-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                </div>

                <div class="progress-text">Java</div>
                <div class="progress">
                    <div class="progress-bar w-55-p w-0" role="progressbar" aria-label="Example with label" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home-qualification">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>My Qualification</h2>
                <h3>Education and Experience</h3>
            </div>
            <div class="col-md-6">
                <h2 class="title"><i class="fas fa-graduation-cap"></i> Education</h2>
                <div class="inner">
                    <div class="item wow fadeInUp">
                        <h3>B.Sc. in Computer Science and Engineering</h3>
                        <h4>Khulna University</h4>
                        <div class="time"><i class="far fa-clock"></i> 2015-2019</div>
                        <div class="v-line"></div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h3>H.S.C. in Science Group</h3>
                        <h4>Cantonment College, Khulna</h4>
                        <div class="time"><i class="far fa-clock"></i> 2013-2015</div>
                        <div class="v-line"></div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h3>S.S.C. in Science Group</h3>
                        <h4>Cantonment College, Khulna</h4>
                        <div class="time"><i class="far fa-clock"></i> 2011-2013</div>
                        <div class="v-line"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="title"><i class="fas fa-award"></i> Experience</h2>
                <div class="inner">
                    <div class="item wow fadeInUp">
                        <h3>ArefinDev IT Solution</h3>
                        <h4>Main City Road, Khulna</h4>
                        <div class="time"><i class="far fa-clock"></i> 2022-Present</div>
                        <div class="v-line"></div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h3>Prime Software Limited</h3>
                        <h4>55 Main Road, Khulna</h4>
                        <div class="time"><i class="far fa-clock"></i> 2021-2022</div>
                        <div class="v-line"></div>
                    </div>
                    <div class="item wow fadeInUp">
                        <h3>ABC Computer Solution</h3>
                        <h4>34 Street, Khulna</h4>
                        <div class="time"><i class="far fa-clock"></i> 2019-2021</div>
                        <div class="v-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Services</h2>
                <h3>What Services I Offer</h3>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInLeft">
                <div class="item">
                    <div class="icon"><i class="fas fa-volleyball-ball"></i></div>
                    <h3>Website Design</h3>
                    <p>
                        Lorem ipsum dolor sit amet, eos eu tollit argumentum, affert nostrum facilisi ut sit. Ne vide assum suavitate usu, nihil petentium est et.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="item">
                    <div class="icon"><i class="fas fa-toolbox"></i></div>
                    <h3>Website Development</h3>
                    <p>
                        Ne nam mollis hendrerit, ne latine deseruisse sed, ceteros accusam sea id. Vis erant putant assentior eu, in porro nonumy sapientem sed.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInRight">
                <div class="item">
                    <div class="icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>Digital Marketing</h3>
                    <p>
                        Vis in tempor nemore oportere, quidam noluisse comprehensam usu in. Singulis nominati torquatos cum cu, nec aliquid honestatis at.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInLeft">
                <div class="item">
                    <div class="icon"><i class="fas fa-pencil-alt"></i></div>
                    <h3>Content Writing</h3>
                    <p>
                        Lorem ipsum dolor sit amet, eos eu tollit argumentum, affert nostrum facilisi ut sit. Ne vide assum suavitate usu, nihil petentium est et.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="item">
                    <div class="icon"><i class="far fa-lightbulb"></i></div>
                    <h3>Social Media Marketing</h3>
                    <p>
                        Ne nam mollis hendrerit, ne latine deseruisse sed, ceteros accusam sea id. Vis erant putant assentior eu, in porro nonumy sapientem sed.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInRight">
                <div class="item">
                    <div class="icon"><i class="fas fa-search"></i></div>
                    <h3>Search Engine Optimization</h3>
                    <p>
                        Vis in tempor nemore oportere, quidam noluisse comprehensam usu in. Singulis nominati torquatos cum cu, nec aliquid honestatis at.
                    </p>
                    <div class="button">
                        <a href="service-detail.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home-counter">
    <div class="container">
        <div class="row counter-items">
            <div class="col-md-3 counter-item">
                <div class="counter">500</div>
                <div class="text">Clients</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">200</div>
                <div class="text">Projects</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">5000</div>
                <div class="text">Students</div>
            </div>
            <div class="col-md-3 counter-item">
                <div class="counter">80</div>
                <div class="text">Products</div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>My Portfolio</h2>
                <h3>All Main Client Works</h3>
            </div>
            <div class="col-md-12">
                <div class="filter">
                    <ul>
                        <li data-filter="*">All</li>
                        <li data-filter=".web_design">Web Design</li>
                        <li data-filter=".web_development">Web Development</li>
                        <li data-filter=".digital_marketing">Digital Marketing</li>
                    </ul>
                </div>
                <div class="filter-items">
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/design_1.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/development_1.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/design_2.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/marketing_1.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 1</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/marketing_2.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/development_2.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 2</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_design">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/design_3.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Design Project 3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item web_development">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/development_3.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Development Project 3</h2>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item digital_marketing">
                        <div class="inner">
                            <div class="photo"><a href="portfolio-detail.html"><img src="{{ asset('dist_front/images/marketing_3.jpg') }}" alt=""></a></div>
                            <div class="text">
                                <h2>Marketing Project 3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="home-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Client Testimonials</h2>
                <h3>See What My Clients Tell</h3>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme testimonial-carousel">
                    <div class="item">
                        <div class="photo d-flex justify-content-center">
                            <img src="{{ asset('dist_front/images/t1.jpg') }}" alt="">
                        </div>
                        <div class="comment">
                            Ad sea commodo tincidunt. Perfecto pericula ut eum, ei usu fugit utroque qualisque. Ius no illud prodesset repudiandae, mei fastidii iudicabit id. Zril democritum an cum, mel cu solet diceret. Est error abhorreant contentiones ea, in stet intellegebat eum.
                        </div>
                        <div class="person-detail">
                            <h3>Patrick Henderson</h3>
                            <h4>CEO, ABC Software</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo d-flex justify-content-center">
                            <img src="{{ asset('dist_front/images/t2.jpg') }}" alt="">
                        </div>
                        <div class="comment">
                            Minim scriptorem eos te, debet habemus laboramus usu te. Ei mel alia graeco melius, ius elit tacimates consectetuer ea. Erat exerci menandri no his, primis repudiare at vix, cu quod novum nemore vix. Ne lucilius maluisset persequeris mea, vix inermis accusamus.
                        </div>
                        <div class="person-detail">
                            <h3>David Scott</h3>
                            <h4>Founder, ZZ Multimedia</h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="photo d-flex justify-content-center">
                            <img src="{{ asset('dist_front/images/t3.jpg') }}" alt="">
                        </div>
                        <div class="comment">
                            Vis summo suscipit splendide ne, ad augue consul impetus vel. Et qui inani utroque accusata, sit tation fastidii ut, eos ex natum urbanitas. Dolorum civibus democritum in usu. Quodsi accusam appellantur quo id, ea mel saepe viderer. Nam id stet comprehensam.
                        </div>
                        <div class="person-detail">
                            <h3>Brent Grundy</h3>
                            <h4>Director, MN Business Solution</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>Latest Blog</h2>
                <h3>Updated Posts Are Listed</h3>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_front/images/post-1.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_front/images/post-2.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp">
                <div class="item">
                    <div class="photo">
                        <img src="{{ asset('dist_front/images/post-3.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <h3>Blog Post Title</h3>
                        <p>
                            Lorem ipsum dolor sit amet, sit vidit soluta assueverit ei. Pro ut case abhorreant persequeris. Mei at adhuc invenire. Id purto eloquentiam duo, ne erroribus rationibus mel.
                        </p>
                        <div class="button">
                            <a href="blog-detail.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>My Clients</h2>
                <h3>Clients with Whom I worked</h3>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme client-carousel">
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('dist_front/images/client.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection