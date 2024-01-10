@extends('frontend.layouts.main')

@section('title', 'Social Events| JURSE 2025')

@section('main-container')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Social Events</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area Start ***** -->

    <section class="contact-us-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Social Events</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="py-1">
                        <div class="container">
                            <p>The JURSE 2023 program will host social events, which are addressed to all registered
                                participants and accompanying persons.</p>

                            <h3>Ice Breaker (May 16)</h3>

                            <p>This welcome event will take place at the conference venue and will include snack buffet
                                and beverages. This event is ideal for networking among participants in a hospitable
                                setting, while participants will also have the chance to register in advance for the
                                conference.</p>

                            <h3>Cultural Tour (May 17)</h3>

                            <p>A guided cultural tour at the Knossos Palace has been planned including transport with
                                bus from/to the conference venue. Visitors will learn about the thriving Minoan
                                civilization and will wander across the ruins of this unique archaeological site. The
                                tour will end with a buffet and beverages on-site.</p>


                            <h3>Gala Dinner (May 18)</h3>

                            <p>A visit to the Lyrarakis winery at the Heraklion outskirts with bus from/to the
                                conference venue has been organized. Visitors will have the chance to taste different
                                local wine varieties and delectable cuisine at a site surrounded by the natural beauty
                                of the island. During the dinner, the result of the student contest will be announced
                                too.</p>
                            <div class="row mb-5">
                                <div class="col-lg-4 custom-col">
                                    <div class="custom-image-container">
                                        <img src="{{ asset('frontend/assets/images/tunis1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 custom-col">
                                    <div class="custom-image-container">
                                        <img src="{{ asset('frontend/assets/images/tunis2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 custom-col">
                                    <div class="custom-image-container">
                                        <img src="{{ asset('frontend/assets/images/tunis3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Main Banner Area End ***** -->

@endsection
