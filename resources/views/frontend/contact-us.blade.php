@extends('frontend.layouts.main')

@section('title', 'Contact | JURSE 2025')

@section('main-container')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Contact Us</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area Start ***** -->

    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12758.241536585527!2d10.2798728!3d36.9247741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b5e87a6cb8cd%3A0x367f9fa2e1690031!2sRamada%20Plaza%20by%20Wyndham%20Tunis!5e0!3m2!1sfr!2stn!4v1704669325193!5m2!1sfr!2stn"
                            width="100%" height="450px" frameborder="0"
                            style="border:0; border-radius: 5px; position: relative; z-index: 2;"
                            allowfullscreen=""></iframe>

                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-envelope"></i>
                                <h4>Contact Person</h4>
                                <h6>Samir pesiron</h6>
                                <a href="#">Samir.pesiron@jurse.tn</a>
                                <h6>Rabii boudan</h6>
                                <a href="#">Rabii.boudan@jurse.tn</a>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Number</h4>
                                <h6>Samir pesiron</h6>
                                <a href="#">+216-21-010-123</a>
                                <h6>Rabii boudan</h6>
                                <a href="#">+216-21-010-124</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-map-marked-alt"></i>
                                <h4>Address</h4>
                                <h6>Samir pesiron</h6>
                                <a href="#">Les Cotes De Cathage, Gammarth</a>
                                <h6>Rabii boudan</h6>
                                <a href="#">Les Cotes De Cathage, Gammarth</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h4>Feel free to message us</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Your Name..."
                                           autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="phone" name="phone" id="phone" placeholder="Your Phone..."
                                           autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                           placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                           autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Main Banner Area End ***** -->

@endsection
