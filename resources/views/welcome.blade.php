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
                            <a href="#experience" class="nav-link" data-animate="scrolling">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a href="#education" class="nav-link" data-animate="scrolling">Education</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skill" class="nav-link" data-animate="scrolling">experience</a>
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
    </div>
    <!-- Portfolio page -->
    <div class="vg-page page-experience" id="experience">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Skill</div>
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
                                <form method="post" action="/skills-delete/{{ $skillD->id }}">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger mt-1">Delete</button>
                                </form>
                                <div class="col-auto"></div>
                                <button type="submit" class="btn btn-primary" onclick="openModalEdit({{$skillD->id}}, {{$skills}})">
                                    edit
                                </button>
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


        </div>
    </div> <!-- End Portfolio page -->

    <!-- Blog -->
    <div class="vg-page page-education" id="education">
        <div class="container">
            <div class="text-center">
                <div class="badge badge-subhead wow fadeInUp">education</div>
            </div>
            <h1 class="fw-normal text-center wow fadeInUp">Majoring of Software Engineering (2018-2021)</h1>
        </div>
    </div>
    <div class="vg-page page-funfact"
        style="background-image: url({{ asset('admin') }}/img/gedung-smk-telkom-jombang.jpg); background-size: cover;">
        <div class="container">
            <div class="fw-normal text-center wow fadeIn">
                <span>SMK TELEKOMUNIKASI DARUL ULUM JOMBANG</span>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="text-center">
                <h1 class="fw-normal text-center wow fadeInUp">Student of Computer Science(2021-Current)</h1>
            </div>
        </div>

    <div class="vg-page page-funfact"
        style="background-image: url({{ asset('admin') }}/img/binus-malang.jpg); background-size: cover;">
        <div class="fw-normal text-center wow fadeIn">
            <span>BINUS UNIVERSITY MALANG</span>
        </div>
    </div> <!-- End blog -->

    <!-- Contact -->
    <div class="vg-page page-skill" id="skill">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Experience</div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <h2 class="fw-normal">Experience</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">2019 - 2020</div>
                            <div class="details">
                                <h5>Internship</h5>
                                <small class="fg-theme">Pegasus Academy</small>
                                <p>Website builder</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <ul class="timeline mt-4 pr-md-5">
                        <li>
                            <div class="title">2022 - Current</div>
                            <div class="details">
                                <h5>Freelancer</h5>
                                <small class="fg-theme">SMEDI (Sanggar Media Digital)</small>
                                <p>Web Architect</p>
                            </div>
                        </li>
                    </ul>
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
    <script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('admin') }}/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/fancybox/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/wow/wow.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/animateNumber/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('admin') }}/js/topbar-virtual.js"></script>
</body>

</html>
