@extends('frontend.layouts.main')

@section('title', 'Sponsors | JURSE 2025')

@section('main-container')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Sponsors</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area start ***** -->

    <section class="main-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <a href="https://www.ieee.org" target="_blank"><img
                                            src="{{ asset('frontend/assets/images/ieee.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <i class="fas fa-building"></i>
                                    <h4>The Institute of Electrical and Electronics Engineers (IEEE)</h4>
                                    <p>IEEE and its members inspire a global community to innovate for a better tomorrow
                                        through highly cited publications,
                                        conferences, technology standards, and professional and educational activities.
                                        IEEE is the trusted “voice” for engineering, computing, and technology
                                        information around the globe.</p>
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
                                    <i class="fas fa-building"></i>
                                    <h4>Geoscience and Remote Sensing Society (GRSS)</h4>
                                    <p>The Geoscience and Remote Sensing Society (GRSS) is a technical Society of the
                                        Institute of Electrical and Electronics Engineers (IEEE).
                                        GRSS fosters engagement of its members for the benefit of society through
                                        science, engineering,
                                        applications, and education as related to the development of the field of
                                        geoscience and remote sensing.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image">
                                    <a href="https://www.grss-ieee.org" target="_blank">
                                        <img src="{{ asset('frontend/assets/images/grss.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <a href="https://www.esa.int" target="_blank">
                                    <img src="{{ asset('frontend/assets/images/esa.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <i class="fas fa-building"></i>
                                    <h4>The European Space Agency (ESA)</h4>
                                    <p>The European Space Agency (ESA) is Europe’s gateway to space.
                                        Its mission is to shape the development of Europe’s space capability and ensure
                                        that investment in space continues to deliver benefits to the citizens of Europe
                                        and the world.</p>
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
                                    <i class="fas fa-building"></i>
                                    <h4>International Society for Photogrammetry and Remote Sensing (ISPRS)</h4>
                                    <p>The International Society for Photogrammetry and Remote Sensing is a
                                        non-governmental organization devoted to the development of international
                                        cooperation for the advancement of photogrammetry and remote sensing and their
                                        applications.
                                        The Society operates without any discrimination on grounds of race, religion,
                                        nationality, or political philosophy.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image">
                                    <a href="https://www.isprs.org/" target="_blank">
                                    <img src="{{ asset('frontend/assets/images/isprs.png') }}" alt="">
                                    </a>
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
