<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li
                class="nav-item dropdown {{ Request::is('admin/home-banner') || Request::is('admin/home-about') || Request::is('admin/home-skill') || Request::is('admin/home-qualification') || Request::is('admin/home-counter') || Request::is('admin/home-testimonials') || Request::is('admin/home-client') || Request::is('admin/home-service') || Request::is('admin/home-portfolio') || Request::is('admin/home-seo') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Home
                        Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-banner') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_banner') }}"><i class="fas fa-angle-right"></i>Banner Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-about') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i>About Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-skill') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_skill') }}"><i class="fas fa-angle-right"></i>Skill Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-qualification') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_qualification') }}"><i
                                class="fas fa-angle-right"></i>Qualification Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-counter') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_counter') }}"><i class="fas fa-angle-right"></i>Counter
                            Section</a>

                    <li class="{{ Request::is('admin/home-testimonials') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_testimonials') }}"><i
                                class="fas fa-angle-right"></i>Testimonials Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-client') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_client') }}"><i class="fas fa-angle-right"></i>Clients
                            Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-service') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_service') }}"><i class="fas fa-angle-right"></i>services
                            Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-portfolio') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_portfolio') }}"><i class="fas fa-angle-right"></i>Portfolio
                            Section</a>
                    </li>

                    <li class="{{ Request::is('admin/home-seo') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_home_seo') }}"><i class="fas fa-angle-right"></i>SEO
                            Section</a>
                    </li>

                </ul>
            </li>



            <li
                class="nav-item dropdown {{ Request::is('admin/page-service') || Request::is('admin/page-portfolio') || Request::is('admin/page-about') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Other
                        Pages</span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/page-service') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_page_service') }}"><i class="fas fa-angle-right"></i>Services Page
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/page-portfolio') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_page_portfolio') }}"><i class="fas fa-angle-right"></i>Portfolios
                            Page
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/page-about') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_page_about') }}"><i class="fas fa-angle-right"></i>About Page
                        </a>
                    </li>

                </ul>
            </li>


            <li class="{{ Request::is('admin/skill*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_skill_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Skills"><i class="fas fa-hand-point-right"></i> <span>Skills</span></a></li>

            <li class="{{ Request::is('admin/education*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_education_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Educations"><i class="fas fa-hand-point-right"></i> <span>Educations</span></a>
            </li>

            <li class="{{ Request::is('admin/experience*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_experience_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Experience"><i class="fas fa-hand-point-right"></i> <span>Experience</span></a>
            </li>


            <li class="{{ Request::is('admin/testimonial*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_testimonial_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Testimonials"><i class="fas fa-hand-point-right"></i>
                    <span>Testimonials</span></a></li>

            <li class="{{ Request::is('admin/client*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_client_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Clients"><i class="fas fa-hand-point-right"></i>
                    <span>Clients</span></a></li>


            <li class="{{ Request::is('admin/service*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin_service_show') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="services"><i class="fas fa-hand-point-right"></i>
                    <span>services</span></a></li>

            <li
                class="nav-item dropdown {{ Request::is('admin/portfolio-category*') || Request::is('admin/portfolio-show') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-hand-point-right"></i><span>Portfolios
                    </span></a>
                <ul class="dropdown-menu">

                    <li class="{{ Request::is('admin/portfolio-category*') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_portfolio_category_show') }}"><i
                                class="fas fa-angle-right"></i>Category
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/portfolio-show') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin_portfolio_show') }}"><i class="fas fa-angle-right"></i>Portfolio
                        </a>
                    </li>

                </ul>
            </li>


            {{-- <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Setting"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li> --}}

            {{-- <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Form"><i class="fas fa-hand-point-right"></i>
                    <span>Form</span></a></li> --}}

            {{-- <li class=""><a class="nav-link" href="table.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Table"><i class="fas fa-hand-point-right"></i>
                    <span>Table</span></a></li> --}}
            {{-- 
            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li> --}}

        </ul>
    </aside>
</div>
