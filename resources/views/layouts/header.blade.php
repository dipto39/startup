    
    
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        @if (count($contact) > 0)
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{$contact[0]['location']}}</small>
                        <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{$contact[0]['phone']}}</small>
                        <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{$contact[0]['email']}}</small>
                        @else
                        <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                        <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                        <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                        @endif
                       
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        @if (count($contact) > 0)
                        @if (!empty($contact[0]['tw']))
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contact[0]['tw']}}"><i class="fab fa-twitter fw-normal"></i></a>
                        @endif
                        @if (!empty($contact[0]['fb']))
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contact[0]['fb']}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                        @endif
                        @if (!empty($contact[0]['in']))
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contact[0]['in']}}"><i class="fab fa-instagram fw-normal"></i></a>
                        @endif
                        @if (!empty($contact[0]['li']))
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contact[0]['li']}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        @endif
                        @if (!empty($contact[0]['yo']))
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{$contact[0]['yo']}}"><i class="fab fa-youtube fw-normal"></i></a>
                        @endif
                        @else
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
    
    
        <!-- Navbar & Carousel Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
                <a href="{{url('/')}}" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('/')}}" class="nav-item nav-link @if (request()->route()->uri  == '/') 
                        active
                        @endif">Home</a>
                        <a href="{{url('/about')}}" class="nav-item nav-link @if (request()->route()->uri  == 'about') 
                            active
                            @endif">About</a>
                        <a href="{{url('/services')}}" class="nav-item nav-link @if (request()->route()->uri  == 'services') 
                            active
                            @endif">Services</a>
                        <div class="nav-item dropdown">
                            <a href="{{url('')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('')}}" class="dropdown-item">Blog Grid</a>
                                <a href="{{url('')}}" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="{{url('')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('')}}" class="dropdown-item">Pricing Plan</a>
                                <a href="{{url('')}}" class="dropdown-item">Our features</a>
                                <a href="{{url('')}}" class="dropdown-item">Team Members</a>
                                <a href="{{url('')}}" class="dropdown-item">Testimonial</a>
                                <a href="{{url('')}}" class="dropdown-item">Free Quote</a>
                            </div>
                        </div>
                        <a href="{{route('contactform')}}" class="nav-item nav-link @if (request()->route()->uri  == 'contact') 
                            active
                            @endif">Contact</a>
                    </div>
                    <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                </div>
            </nav>
            @stack('ctitle')
            
        </div>
        <!-- Navbar & Carousel End -->
    
            <!-- Full Screen Search Start -->
            <div class="modal fade" id="searchModal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                        <div class="modal-header border-0">
                            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center justify-content-center">
                            <div class="input-group" style="max-width: 600px;">
                                <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Full Screen Search End -->