@extends('layouts.web')
@section('content')
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>Albina Khadka</span></h1>
                                <h2 class="mb-4">Jr. Web Developer</h2>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#"
                                        class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(images/bg_2.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm a <span>Jr. Web Developer</span> based in Lalitpur</h1>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#"
                                        class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(images/bg_1.png);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>{{ setting('about.description') }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Name:</span> <span>{{ setting('about.name') }}</span></li>
                                <li class="d-flex"><span>Address:</span> <span>{{ setting('about.address') }}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{ setting('about.email') }}</span></li>
                                <li class="d-flex"><span>Phone:</span> <span>{{ setting('about.contact') }}</span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="120">0</span>
                                <span>Project complete</span>
                            </p>
                            <p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div class="resume-wrap ftco-animate">

                        <h2>Bachelor's Degree of B.C.A</h2>
                        <span class="position"> Tribhuvan University</span>
                        <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2014-2015</span>
                        <h2>Diploma in Computer</h2>
                        <span class="position">Cambridge University</span>
                        <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2014-2015</span>
                        <h2>Art &amp; Creative Director</h2>
                        <span class="position">Cambridge University</span>
                        <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2014-2015</span>
                        <h2>Wordpress Developer</h2>
                        <span class="position">Cambridge University</span>
                        <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.</p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2017-2018</span>
                        <h2>UI/UX Designer</h2>
                        <span class="position">Cambridge University</span>
                        <p class="mt-4">A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                            mouth.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4 text-center d-flex ftco-animate">
                        <a href="#" class="services-1">
                            <span class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </span>
                            <div class="desc">
                                <h3 class="mb-5">{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Skills</h1>
                    <h2 class="mb-4">My Skills</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                @foreach ($skills as $skill)
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>{{ $skill->title }}</h3>
                            <div class="progress">
                                <div class="progress-bar color-{{ $loop->index + 1 }}" role="progressbar"
                                    aria-valuenow="{{ $skill->proficiency }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width:{{ $skill->proficiency }}%">
                                    <span>{{ $skill->proficiency }}%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-4.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-5.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-1.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>

                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/project-6.jpg);">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/project-2.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/project-3.jpg);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                                    <span>Web Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blog</h1>
                    <h2 class="mb-4">Our Blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">June 21, 2019</span>
                                    <a href="#" class="mr-2">Admin</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                            <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
                            </h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="100">0</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="1200">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="1200">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="500">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>



@endsection
