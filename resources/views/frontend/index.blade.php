@extends('frontend.layouts.main')

@section('title', 'Home | JURSE 2025')

@section('main-container')

    <!-- ***** Main Banner Area Start ***** -->

    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner"
                     style="background-image: url('{{ asset('frontend/assets/images/slide-01.png') }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2>URBAN INSIGHTS<br></h2>
                                    <div class="div-dec"></div>
                                    <p>The Joint Urban Remote Sensing Event (JURSE).<br>
                                        Is a dynamic forum where researchers, practitioners, and students share their
                                        latest findings. Organized by the Remote Sensing Lab of FORTH in Greece,
                                        it explores innovative approaches in urban remote sensing using orbital and
                                        airborne data. The event covers diverse topics such as urban land cover
                                        classification, 3D modeling of buildings, hazard assessment, urban social
                                        studies, and data
                                        interpretation techniques.</p>
                                    <div class="buttons">
                                        <div class="button-menu-container">
                                            <div class="green-button">
                                                <a href="https://ieeexplore.ieee.org/xpl/conhome/10144111/proceeding"
                                                   target="_blank">IEEE JURSE 2023 PROCEEDINGS</a>
                                            </div>
                                            <div class="orange-button">
                                                <a href="https://www.grss-ieee.org/wp-content/uploads/2023/03/cfp_JURSE23_revised.pdf"
                                                   target="_blank">IEEE J-STARS CALL FOR PAPERS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner"
                     style="background-image: url('{{ asset('frontend/assets/images/slide-02.png') }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2>URBAN INSIGHTS<br></h2>
                                    <div class="div-dec"></div>
                                    <p>The Joint Urban Remote Sensing Event (JURSE).<br>
                                        Is a dynamic forum where researchers, practitioners, and students share their
                                        latest findings. Organized by the Remote Sensing Lab of FORTH in Greece,
                                        it explores innovative approaches in urban remote sensing using orbital and
                                        airborne data. The event covers diverse topics such as urban land cover
                                        classification, 3D modeling of buildings, hazard assessment, urban social
                                        studies, and data
                                        interpretation techniques.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="https://ieeexplore.ieee.org/xpl/conhome/10144111/proceeding">IEEE
                                                JURSE 2023 PROCEEDINGS</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="https://www.grss-ieee.org/wp-content/uploads/2023/03/cfp_JURSE23_revised.pdf">IEEE
                                                J-STARS CALL FOR PAPERS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner"
                     style="background-image: url('{{ asset('frontend/assets/images/slide-03.png') }}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2>URBAN INSIGHTS<br></h2>
                                    <div class="div-dec"></div>
                                    <p>The Joint Urban Remote Sensing Event (JURSE).<br>
                                        Is a dynamic forum where researchers, practitioners, and students share their
                                        latest findings. Organized by the Remote Sensing Lab of FORTH in Greece,
                                        it explores innovative approaches in urban remote sensing using orbital and
                                        airborne data. The event covers diverse topics such as urban land cover
                                        classification, 3D modeling of buildings, hazard assessment, urban social
                                        studies, and data
                                        interpretation techniques.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="https://ieeexplore.ieee.org/xpl/conhome/10144111/proceeding">IEEE
                                                JURSE 2023 PROCEEDINGS</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="https://www.grss-ieee.org/wp-content/uploads/2023/03/cfp_JURSE23_revised.pdf">IEEE
                                                J-STARS CALL FOR PAPERS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>organizers</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i> <img src="{{ asset('frontend/assets/images/person1.png') }}" alt=""></i>
                        <h4>Samir Pesiron</h4>
                        <p>Prof. Gustau Camps-Valls (born 1972 in València) is a Physicist and Full Professor in
                            Electrical Engineering in the Universitat de València, Spain, where lectures on machine
                            learning, remote sensing and signal processing. He is the Head of the Image
                        </p>
                        <p> website: <a class="text-decoration-underline" href="https://isp.uv.es/" target="_blank">https://isp.uv.es</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>Useful Links</strong> (Discover boundless knowledge with online exploration)</h4>
                </div>
                <div class="col-lg-12">
                    <div class="buttons">
                        <div class="button-container">
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                            <a href="#" class="blue-button">IEEE TUNISIA</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Tweets</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"En visite en #Tunisie et je suis émerveillé par la beauté de ce pays ! Les plages,
                            l'architecture, la cuisine... tout est incroyable ! #VoyageTunisie #JURSE2025 #JURSETUNISIA
                            #JURSE".</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"La #Tunisie est un pays aux multiples facettes. De la richesse de son patrimoine culturel à
                            la chaleur de son peuple, je suis tombé amoureux de ce pays ! #DécouverteTunisie #JURSE2025
                            #JURSETUNISIA.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"Fière d'être tunisienne ! La #Tunisie est un pays qui a su surmonter de nombreux défis et
                            avancer vers la démocratie. Continuons à construire un avenir meilleur ensemble !
                            #FiertéTunisienne #JURSE2025 #JURSETUNISIA #JURSE".</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"Fière d'être tunisienne ! La #Tunisie est un pays qui a su surmonter de nombreux défis et
                            avancer vers la démocratie. Continuons à construire un avenir meilleur ensemble !
                            #FiertéTunisienne #JURSE2025 #JURSETUNISIA #JURSE".</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"La #Tunisie est le berceau du printemps arabe, un mouvement qui a inspiré le monde entier.
                            Continuons à promouvoir les valeurs de liberté et de justice pour tous ! #PrintempsArabe
                            #JURSE2025 #JURSETUNISIA #JURSE".</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        <i class="fab fa-twitter"></i>
                        <h4>Foulen Tounsi</h4>
                        <p>"La #Tunisie est un paradis pour les amateurs de gastronomie. Les saveurs épicées, les plats
                            traditionnels et les délicieux desserts font de ce pays une destination culinaire
                            incontournable ! #CuisineTunisienne #JURSE2025 #JURSETUNISIA #JURSE".</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-6">
                    <div class="item">
                        <img src="{{ asset('frontend/assets/images/client-01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h4>What They Say</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem.
                                Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus,
                                in euismod ligula. Aliquam vel scelerisque elit.”</p>
                            <h4>David Eigenberg</h4>
                            <span>CEO of Mexant</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-01.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In
                                blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus
                                condimentum tempus.”</p>
                            <h4>Andrew Garfield</h4>
                            <span>CTO of Mexant</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-02.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac
                                gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
                            <h4>George Lopez</h4>
                            <span>Crypto Manager</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-03.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem.
                                Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus,
                                in euismod ligula. Aliquam vel scelerisque elit.”</p>
                            <h4>David Eigenberg</h4>
                            <span>CEO of Mexant</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-01.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In
                                blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus
                                condimentum tempus.”</p>
                            <h4>Andrew Garfield</h4>
                            <span>CTO of Mexant</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-02.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac
                                gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
                            <h4>George Lopez</h4>
                            <span>Crypto Manager</span>
                            <div class="right-image">
                                <img src="{{ asset('frontend/assets/images/testimonials-03.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Main Banner Area End ***** -->

@endsection
