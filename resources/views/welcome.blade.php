<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>Virtual Folio - Portfolio HTML5 Template</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendor/owl-carousel/owl.carousel.css">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin') }}/vendor/perfect-scrollbar/css/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendor/nice-select/css/nice-select.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/vendor/fancybox/css/jquery.fancybox.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/virtual.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/topbar.virtual.css">

</head>

<body class="theme-red">

    <!-- Back to top button -->
    <div class="btn-back_to_top">
        <span class="ti-arrow-up"></span>
    </div>

    {{-- <!-- Setting button -->
    <div class="config">
        <div class="template-config">
            <!-- Settings -->
            <div class="d-block">
                <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span
                        class="ti-settings"></span></button>
            </div>
            <!-- Puschase -->
            <div class="d-block">
                <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm"
                    title="Get this template" data-toggle="tooltip" data-placement="left"><span
                        class="ti-download"></span></a>
            </div>
            <!-- Help -->
            <div class="d-block">
                <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip"
                    data-placement="left"><span class="ti-help"></span></a>
            </div>
        </div>
        <div class="set-menu">
            <p>Select Color</p>
            <div class="color-bar" data-toggle="selected">
                <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
                <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
                <span class="color-item bg-theme-green" data-class="theme-green"></span>
                <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
                <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
            </div>
            <select class="custom-select d-block my-2" id="change-page">
                <option value="">Choose Page</option>
                <option value="index">Topbar</option>
                <option value="blog-topbar">Blog (Topbar)</option>
                <option value="index-2">Minibar</option>
                <option value="blog-minibar">Blog (Minibar)</option>
            </select>
        </div>
    </div> --}}

    <div class="vg-page page-home" id="home"
        style="background-image: url({{ asset('admin') }}/img/bg_image_1.jpg)">
        <!-- Navbar -->
        <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
            <div class="container">
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#experience" class="nav-link" data-animate="scrolling">experience</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link" data-animate="scrolling">education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skill" class="nav-link" data-animate="scrolling">skill</a>
                        </li>
                    </ul>
                    <ul class="nav ml-auto">
                        <li class="nav-item">

                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- End Navbar -->
        <!-- Caption header -->
        <div class="caption-header text-center wow zoomInDown">
            <h5 class="fw-normal">Welcome</h5>
            <h1 class="fw-light mb-4">I'm Adie Ageng <b class="fg-theme">Prayogo</b></h1>
            <div class="badge">Student of Computer Science</div>
        </div> <!-- End Caption header -->
    </div>

    <div class="vg-page page-about" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/person.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                    <h1 class="fw-light">Adie Ageng Prayogo</h1>
                    <h5 class="fg-theme mb-3">Student of Computer Science, Binus University</h5>
                    <p class="text-muted">
                        I'm a majors student in computer science from the same educational background when I was in high
                        school. I am also interested in new things such as English lessons, so I want to impart my
                        knowledge of English to many people by applying for jobs as an English Tutor. The speed with
                        which I adapt made me even more satisfied with the company, plus my internship experience was
                        very satisfying. I am able to work individually as well as with a team so that the company's
                        goals and growth are increasingly achieved.
                    </p>
                    <ul class="theme-list">
                        <li><b>From:</b> Lamongan, Lamongan City</li>
                        <li><b>Lives In:</b> Blimbing, Malang</li>
                        <li><b>Age:</b> 20</li>
                        <li><b>Gender:</b> Male</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <h1 class="text-center fw-normal wow fadeIn">My Skills
                <button type="button" class="btn btn-primary" onclick="openModal()">
                    <i class="fas fa-plus"></i> +
                </button>
            </h1>

            <!-- Modal -->
            <form method="POST" action="/add-skill">
                @csrf
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Enter New Skill</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="percentage">Percentage:</label>
                                        <input type="text" class="form-control" name="percentage"
                                            id="percentage">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type:</label>
                                        <input type="text" class="form-control" name="type" id="type">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="saveBtn">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row py-3">
                <div class="col-md-6">
                    <div class="px-lg-3">
                        <h4 class="wow fadeInUp">Coding skills</h4>
                        <?php foreach($skillsC as $skillC): ?>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">{{ $skillC->name }}
                                <form method="post" action="/skills-delete/{{ $skillC->id }}">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger mt-1">Delete</button>
                                </form>
                            </span>
                            <div class="col-auto"></div>
                            <button type="submit" class="btn btn-primary" onclick="openModalEdit({{$skillC->id}}, {{$skills}})">
                                edit
                            </button>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $skillC->percentage }}%;" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100">{{ $skillC->percentage }} %
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="px-lg-3">
                        <h4 class="wow fadeInUp">Design Skills</h4>
                        <?php foreach($skillsD as $skillD): ?>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">{{ $skillD->name }}</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $skillD->percentage }}%;" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100">{{ $skillD->percentage }} %
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="/skills-update/{{$skillC->id}}">
                @method('PUT')
                @csrf
                <div class="modal fade" id="myModelEdit" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Edit Skill</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="name" id="editSkillName"
                                            id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="percentage">Percentage:</label>
                                        <input type="text" class="form-control" name="percentage"
                                            id="editSkillPercentage">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type:</label>
                                        <input type="text" class="form-control" name="type"
                                            id="editSkillType">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"
                                            id="saveBtn">save edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 wow fadeInRight">
                    <h2 class="fw-normal">Education</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">2010</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">2009</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">2008</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <h2 class="fw-normal">Experience</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">2017 - Current</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">2014</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                        <li>
                            <div class="title">2011</div>
                            <div class="details">
                                <h5>Specialize of course</h5>
                                <small class="fg-theme">University of Study</small>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="vg-page page-service">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Service</div>
            </div>
            <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card-service wow fadeInUp">
                        <div class="icon">
                            <span class="ti-paint-bucket"></span>
                        </div>
                        <div class="caption">
                            <h4 class="fg-theme">Web Design</h4>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card-service wow fadeInUp">
                        <div class="icon">
                            <span class="ti-search"></span>
                        </div>
                        <div class="caption">
                            <h4 class="fg-theme">SEO</h4>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card-service wow fadeInUp">
                        <div class="icon">
                            <span class="ti-vector"></span>
                        </div>
                        <div class="caption">
                            <h4 class="fg-theme">UI/UX Design</h4>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card card-service wow fadeInUp">
                        <div class="icon">
                            <span class="ti-desktop"></span>
                        </div>
                        <div class="caption">
                            <h4 class="fg-theme">Web Development</h4>
                            <p>There are many variations of passages of Lorem Ipsum available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vg-page page-funfact" style="background-image: url({{ asset('admin') }}/img/bg_banner.jpg);">
        <div class="container">
            <div class="row section-counter">
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="768">768</h1>
                    <span>Clients</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="230">230</h1>
                    <span>Project Compleate</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="97">97</h1>
                    <span>Project Ongoing</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="699">699</h1>
                    <span>Client Satisfaction</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio page -->
    <div class="vg-page page-experience" id="experience">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Experience</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
            <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
                <button class="btn btn-theme-outline selected" data-filter="*">All</button>
                <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
                <button class="btn btn-theme-outline" data-filter=".template">Template</button>
                <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
                <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
                <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
                <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button>
            </div>

            <div class="gridder my-3">
                <div class="grid-item apps wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-1.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
                        <img src="{{ asset('admin') }}/img/work/work-1.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Mobile Travel App</h5>
                            <p>Travel, Discovery</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item template wireframes wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-2.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Music App</h5> <p>Musics</p>">
                        <img src="{{ asset('admin') }}/img/work/work-2.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Music App</h5>
                            <p>Musics</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item apps ios wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-3.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Gaming Dashboard</h5> <p>Games, Streaming</p>">
                        <img src="{{ asset('admin') }}/img/work/work-3.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Gaming Dashboard</h5>
                            <p>Games, Streaming</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item graphic ui-ux wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-4.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Drugs Delivery App</h5> <p>Health, Drugs</p>">
                        <img src="{{ asset('admin') }}/img/work/work-4.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Drugs Delivery App</h5>
                            <p>Health, Drugs</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item apps ios wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-5.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
                        <img src="{{ asset('admin') }}/img/work/work-5.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Musics Discover</h5>
                            <p>Musics, Dashboard</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item graphic ui-ux wireframes wow zoomIn">
                    <div class="img-place" data-src="{{ asset('admin') }}/img/work/work-6.jpg" data-fancybox
                        data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
                        <img src="{{ asset('admin') }}/img/work/work-6.jpg" alt="">
                        <div class="img-caption">
                            <h5 class="fg-theme">Game Streaming</h5>
                            <p>Games, Streaming</p>
                        </div>
                    </div>
                </div>
            </div> <!-- End gridder -->
            <div class="text-center wow fadeInUp">
                <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
            </div>
        </div>
    </div> <!-- End Portfolio page -->

    <!-- Testimonial -->
    <div class="vg-page page-testimonial">
        <div class="container">
            <h1 class="text-center fw-normal wow fadeInUp">What Clients are Saying</h1>
            <div class="row justify-content-center mt-5 wow fadeInUp">
                <div class="col-md-9">
                    <div class="owl-carousel testi-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-place">
                                        <img src="{{ asset('admin') }}/img/testimonials/testimonials_1.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="caption">
                                        <div class="testi-content">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered</div>
                                        <div class="testi-info">
                                            <div class="thumb-profile">
                                                <img src="{{ asset('admin') }}/img/testimonials/testimonials_1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="tagline">
                                                <h5 class="mb-0">Satria Nugraha</h5>
                                                <span class="text-muted">CEO Nutshell</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-place">
                                        <img src="{{ asset('admin') }}/img/testimonials/testimonials_2.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="caption">
                                        <div class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Saepe natus expedita ab facilis ut, animi explicabo amet. Voluptatibus
                                            possimus iste enim, doloremque, fugiat accusamus nisi optio fugit ratione
                                            expedita harum?</div>
                                        <div class="testi-info">
                                            <div class="thumb-profile">
                                                <img src="{{ asset('admin') }}/img/testimonials/testimonials_2.jpg"
                                                    alt="">
                                            </div>
                                            <div class="tagline">
                                                <h5 class="mb-0">Selena Arrini</h5>
                                                <span class="text-muted">CEO BigTree</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End testimonial -->

    <!-- Client -->
    <div class="vg-page page-client">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_1.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_2.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_3.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_4.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_5.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_6.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_7.svg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 item">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('admin') }}/img/logo/company_8.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End client -->

    <!-- Blog -->
    <div class="vg-page page-education" id="education">
        <div class="container">
            <div class="text-center">
                <div class="badge badge-subhead wow fadeInUp">education</div>
            </div>

            <h1 class="fw-normal text-center wow fadeInUp">Majoring of Software Engineering (2018-2021)</h1>
            <div class="vg-page page-funfact"
                style="background-image: url({{ asset('admin') }}/img/gedung-smk-telkom-jombang.jpg); background-size: cover;">
                <div class="container">
                    <div class="fw-normal text-center wow fadeIn">
                        <span>SMK TELEKOMUNIKASI DARUL ULUM JOMBANG</span>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="vg-page page-funfact"
        style="background-image: url({{ asset('admin') }}/img/binus-malang.jpg); background-size: cover;">
    </div> <!-- End blog -->

    <!-- Contact -->
    <div class="vg-page page-skill" id="skill">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">skill</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
            <div class="row py-5">
                <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
                    <div class="vg-maps">
                        <div id="google-maps" style="width: 100%; height: 100%;"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="vg-contact-form">
                        <div class="form-row">
                            <div class="col-12 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="Name" placeholder="Your Name">
                            </div>
                            <div class="col-6 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="Email"
                                    placeholder="Email Address">
                            </div>
                            <div class="col-6 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="Subject" placeholder="Subject">
                            </div>
                            <div class="col-12 mt-3 wow fadeInUp">
                                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
                            </div>
                            <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End Contact -->

    <script>
        function openModal() {
            $('#myModal').modal('show');
        }

        function openModalEdit(id, skills) {
            var skill = skills.find(function (s) {
                return s.id === id;
            });
            $('#editSkillName').val(skill.name);
            $('#editSkillPercentage').val(skill.percentage);
            $('#editSkillType').val(skill.type);
            $('#myModelEdit').modal('show');
        }
    </script>
    <script src="{{ asset('admin') }}/js/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('admin') }}/js/axios.min.js"></script>
    <script src="{{ asset('admin') }}/js/axios.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin') }}/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/animateNumber/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/js/google-maps.js"></script>
    <script src="{{ asset('admin') }}/js/topbar-virtual.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>
