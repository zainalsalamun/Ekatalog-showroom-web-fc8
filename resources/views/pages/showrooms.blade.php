@extends('layouts.showroom')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('img/homepage.jpg') }})">
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Quick Vehicle Search</h3>
                    <p> FROM 100+ BRAND CARS </p>
                </div>
            </div>
        </section><!-- End Cta Section -->
        <div class="d-flex justify-content-center">
            <div class="advanceSearchForm">
                <form action="forms/appointment.php" method="post" role="form" data-aos="fade-up" data-aos-delay="85">
                    <div class="row d-flex aligns-items-center justify-content-center mx-auto mt-4">
                        <div class="input-group">
                            <input class="form-control border-end-0 border" type="search" value="Search"
                                id="example-search-input">
                            <span class="input-group-append">
                                <button
                                    class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border searchInputLens"
                                    type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="row d-flex aligns-items-center justify-content-center">
                        <div class="col-md-2 form-group">
                            <label for="type" class="searchLabel">Vehicle Type</label>
                            <select name="type" id="type" class="form-select">
                                <option value="">All</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="Condition" class="searchLabel">Vehicle Condition</label>
                            <select name="condition" id="condition" class="form-select">
                                <option value="">All</option>
                                <option value="Baru">Baru</option>
                                <option value="Bekas">Bekas</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="transmission" class="searchLabel">Transmission</label>
                            <select name="transmission" id="transmission" class="form-select">
                                <option value="">All</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="fuel" class="searchLabel">Fuel Type</label>
                            <select name="fuel" id="fuel" class="form-select">
                                <option value="">All</option>
                                <option value="1">Fuel</option>
                                <option value="2">Electric</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex aligns-items-center justify-content-center">
                        <div class="text-center"><button type="submit" class="cta-btn">Search</button></div>
                    </div>
                </form>
            </div>

        </div>

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Popular Makes</h2>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('img/car1.jpeg') }}"><img
                                    src="{{ asset('img/car1.jpeg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('img/car2.jpeg') }}"><img
                                    src="{{ asset('img/car2.jpeg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('img/car3.jpeg') }}"><img
                                    src="{{ asset('img/car3.jpeg') }}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="{{ asset('img/car4.jpeg') }}"><img
                                    src="{{ asset('img/car4.jpeg') }}" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->


        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2> Our Advantages</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><img class="image-programs" src="{{ asset('img/customerfirst.png') }}">
                            </div>
                            <h4 class="title"><a href="">Customer is Our First Priority</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><img class="image-programs" src="{{ asset('img/schedule.png') }}">
                            </div>
                            <h4 class="title"><a href="">Schedule and Ontime Service</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><img class="image-programs" src="{{ asset('img/consultation.png') }}">
                            </div>
                            <h4 class="title"><a href="">Always Free Consultation</a></h4>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><img class="image-programs" src="{{ asset('img/seminars.png') }}">
                            </div>
                            <h4 class="title"><a href="">Great After Sales Services</a></h4>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Featured Listings Section ======= -->
        <section id="Listings" class="vehicles section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Featured Listings</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('img/car.jpeg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="">Booking Now</a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Car 1</h4>
                                <span>Best Car for Road</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('img/car.jpeg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="">Booking Now</a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Car 2</h4>
                                <span>Best Car for City</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('img/car.jpeg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="">Booking Now</a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Car 3</h4>
                                <span>Best Car for Mountain</span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Listings Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </main>
@endsection
