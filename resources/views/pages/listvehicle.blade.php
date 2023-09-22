@extends('layouts.showroom')

@section('main')
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
                                <option value="">Select Service</option>
                                <option value="therapy">Therapy</option>
                                <option value="assesment 2">Assesment</option>
                                <option value="counseling">Counseling</option>
                                <option value="seminars">Seminars & Workshops</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="Condition" class="searchLabel">Vehicle Condition</label>
                            <select name="condition" id="condition" class="form-select">
                                <option value="">Select Service</option>
                                <option value="therapy">Therapy</option>
                                <option value="assesment 2">Assesment</option>
                                <option value="counseling">Counseling</option>
                                <option value="seminars">Seminars & Workshops</option>
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="transmission" class="searchLabel">Transmission</label>
                            <select name="transmission" id="transmission" class="form-select">
                                <option value="">Select Service</option>
                                <option value="therapy">Therapy</option>
                                <option value="assesment 2">Assesment</option>
                                <option value="counseling">Counseling</option>
                                <option value="seminars">Seminars & Workshops</option>
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
        <!-- ======= Listings Section ======= -->
        <section id="Listings" class="vehicles">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>List Vehicle</h2>
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
    </main>
@endsection
