@extends('frontend.layouts.main')

@section('title', 'Conference Venue | JURSE 2025')

@section('main-container')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Conference Venue</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area Start ***** -->

    <section class="main-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Conference Venue</h4>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="left-image">
                                            <div class="custom-image-container">
                                                <img src="{{ asset('frontend/assets/images/tunis14.jpg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 align-self-center">
                                        <div class="right-text-content">
                                            <i class="fas fa-hotel"></i>
                                            <h4>Ramada Plaza Hotel Tunis</h4>
                                            <p>The Ramada Plaza Tunis is a prestigious hotel located in the vibrant city
                                                of Tunis, Tunisia. With its prime location in the Côtes de Carthage
                                                region, the hotel offers luxurious accommodations, state-of-the-art
                                                conference facilities, a variety of dining options, and a range of
                                                wellness amenities. Whether you're a business traveler or a leisure
                                                guest, the Ramada Plaza Tunis provides a memorable experience with its
                                                elegant rooms, professional event spaces, diverse culinary offerings,
                                                fitness center, and outdoor pool. Additionally, the hotel's convenient
                                                location allows easy access to popular attractions and landmarks in the
                                                area. Overall, the Ramada Plaza Tunis is a perfect choice for those
                                                seeking comfort, convenience, and exceptional service during their stay
                                                in Tunis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-text-content">
                                    <i class="fas fa-chair"></i>
                                    <h4>Facilities</h4>
                                    <p>Our conference centre has the capacity for 1,300 people, two ballrooms and ten
                                        meeting rooms. Whether you’re planning a wedding, conference or business event
                                        our dedicated team will provide a worry-free, professional service in the
                                        planning and execution of your event.
                                        At Ramada Plaza Tunis, get together and leave the rest to us!<br>
                                        Get in touch<br>
                                        Email address: adel.messaoud@ramadaplazatunis.com<br>
                                        Telephone number: +216 (71) 911 100<br>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image">
                                    <a href="https://www.grss-ieee.org" target="_blank">
                                        <div class="custom-image-container">
                                            <img src="{{ asset('frontend/assets/images/tunis15.jpg') }}" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12758.241536585527!2d10.2798728!3d36.9247741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b5e87a6cb8cd%3A0x367f9fa2e1690031!2sRamada%20Plaza%20by%20Wyndham%20Tunis!5e0!3m2!1sfr!2stn!4v1704669325193!5m2!1sfr!2stn"
                            width="100%" height="400px" frameborder="1"
                            style="border:0; border-radius: 5px; position: relative; z-index: 2;"
                            allowfullscreen=""></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Main Banner Area End ***** -->

@endsection
