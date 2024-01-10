@extends('frontend.layouts.main')

@section('title', 'Program | JURSE 2025')

@section('main-container')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Program</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area Start -->

    <section class="contact-us-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h4>Sessions</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">

                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                            <td class="cell-grey-color" colspan="3"><b>Sunday May 05</b></td>
                        </tr>
                        <tr>
                            <td style="width: 10%;" class="cell-light-grey-color">8.30-9.00</td>
                            <td class="cell-red-color" colspan="2">
                                <div>Registration</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">9.00-10.30</td>
                            <td style="width: 40%;" class="cell-purple-color"><a href="technical-tutorials.html"
                                                                                 target="_blank">Tutorial 1. Google
                                    Earth Engine (Seminar Room A) - Noel Gorelick (Google)</a></td>
                            <td style="width: 40%;" class="cell-purple-color"><a href="technical-tutorials.html"
                                                                                 target="_blank">Tutorial 2. EnMAP-Box
                                    (Seminar Room B) - Andreas Janz (Humboldt University of Berlin)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">10.30-11.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">11.00-12.30</td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 1.
                                    Google Earth Engine (Seminar Room A) - Noel Gorelick (Google)</a></td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 2.
                                    EnMAP-Box (Seminar Room B) - Andreas Janz (Humboldt University of Berlin)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">12.30-14.00</td>
                            <td colspan="2">Lunch</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">14.00-15.30</td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 3.
                                    DART model (Seminar Room A) - Jean-Philippe Gastellu-Etchegorry (CESBIO)</a></td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 4.
                                    Geohazards Exploitation Platform (Seminar Room B) - Michael Foumelis (Aristotle
                                    University of Thessaloniki)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">15.30-16.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">16.00-17.30</td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 3.
                                    DART model (Seminar Room A) - Jean-Philippe Gastellu-Etchegorry (CESBIO)</a></td>
                            <td class="cell-purple-color"><a href="technical-tutorials.html" target="_blank">Tutorial 4.
                                    Geohazards Exploitation Platform (Seminar Room B) - Michael Foumelis (Aristotle
                                    University of Thessaloniki)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">17.30-19.00</td>
                            <td class="cell-orange-color"><a href="social-events.html" target="_blank">Ice Breaker</a>
                            </td>
                            <td class="cell-red-color">
                                <div>Registration</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-grey-color" colspan="3"><b>Monday May 06</b></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">8.30-9.00</td>
                            <td class="cell-red-color" colspan="2">
                                <div>Registration</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">9.00-9.30</td>
                            <td class="cell-light-blue-color" colspan="2">
                                <div>Opening and Welcome Session (Concert Hall)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">9.30-10.30</td>
                            <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                                                             target="_blank">Advancing AI for Urban
                                    Sustainability (Concert Hall) - Gustau Camps-Valls (Universitat de València)</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">10.30-11.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">11.00-12.30</td>
                            <td class="cell-light-green-color"><a href="#session-information" onclick="closeAll()">Special
                                    Session 1. Deep learning approaches for multi-temporal and multi-modal data
                                    processing and analysis for urban areas (Concert Hall)</a></td>
                            <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session 1.
                                    Urban planning and socioeconomics (Experimental Stage)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">12.30-14.00</td>
                            <td colspan="2">Lunch</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">14.00-15.30</td>
                            <td class="cell-cyan-color" colspan="2"><a href="#session-information" onclick="closeAll()">Poster
                                    Session 1</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">15.30-16.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">16.00-17.15</td>
                            <td class="cell-green-color"><a href="#session-information" onclick="closeAll()">Session 2.
                                    Urban form characterization and dynamics (Concert Hall)</a></td>
                            <td class="cell-light-green-color"><a href="#session-information" onclick="closeAll()">Special
                                    Session 2. GeoAI for Monitoring Rapid Urbanization Processes (Experimental
                                    Stage)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">17.15-19.30</td>
                            <td class="cell-orange-color" colspan="2"><a href="social-events.html" target="_blank">Cultural
                                    Tour</a></td>
                        </tr>
                        <tr>
                            <td class="cell-grey-color" colspan="3"><b>Tuesday May 07</b></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">8.30-9.00</td>
                            <td class="cell-red-color" colspan="2">
                                <div>Registration</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">9.00-10.00</td>
                            <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                                                             target="_blank">Municipality of Heraklion
                                    towards the challenge of Sustainable Urban Development on the horizon of 2030
                                    (Concert Hall) - Ioannis Anastasakis (Heraklion Municipality)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">10.00-10.30</td>
                            <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                                                             target="_blank">Call to contribute to the
                                    IPCC Special Report on Cities and Climate Change in the 7th Assessment Cycle
                                    (Concert Hall) - Karen Seto (Yale University)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">10.30-11.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">11.00-12.30</td>
                            <td class="cell-cyan-color" colspan="2"><a href="#session-information" onclick="closeAll()">Poster
                                    Session 2</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">12.30-14.00</td>
                            <td colspan="2">Lunch</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">14.00-15.30</td>
                            <td class="cell-blue-color"><a href="#session-information" onclick="closeAll()">Student
                                    Contest Session 1 (Concert Hall)</a></td>
                            <td class="cell-light-green-color"><a href="#session-information" onclick="closeAll()">Special
                                    Session 3. Urban Thermal Remote Sensing (Experimental Stage)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">15.30-16.00</td>
                            <td colspan="2">Break</td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">16.00-17.15</td>
                            <td class="cell-blue-color"><a href="#session-information" onclick="closeAll()">Student
                                    Contest Session 2 (Concert Hall)</a></td>
                            <td class="cell-light-green-color"><a href="#session-information" onclick="closeAll()">Special
                                    Session 4. Urban Air Quality (Experimental Stage)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">17.15-18.15</td>
                            <td class="cell-light-blue-color" colspan="2"><a href="videos-and-photos.html"
                                                                             target="_blank">Climate resilient
                                    development in the city: Pathways and barriers identified in the IPCC WGII AR6
                                    report (Concert Hall) - Lisa Schipper (University of Bonn)</a></td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">18.15-19.00</td>
                            <td class="cell-light-blue-color" colspan="2">Visit to <a class="text-decoration-underline"
                                                                                      href="http://rslab.gr/heraklion_eddy.html"
                                                                                      target="_blank">HECMAS</a> Flux
                                Tower
                            </td>
                        </tr>
                        <tr>
                            <td class="cell-light-grey-color">19.00-22.00</td>
                            <td class="cell-orange-color" colspan="2"><a href="social-events.html" target="_blank">Gala
                                    Dinner (incl. Student Contest Results Announcement)</a></td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>
    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4><strong>PROGRAM</strong> JURSE TUNISIA 2025</h4>
                </div>
                <div class="col-lg-12">
                    <div class="buttons">
                        <div class="button-container">
                            <a href="#" class="blue-button">DOWNLOAD PRINTED VERSION</a>
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
                        <h4>Committees</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="py-1">
                        <div class="container committees-container">
                            <div id="sessions-section">
                                <input type="text" id="myInput" onkeyup="myFunction()"
                                       placeholder="Filter sessions by paper ID number, author or title...">
                            </div>

                            <div id="sessions">

                                <h4 class="date-header mt-4">Wednesday May 17</h4>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/deep-learning-approaches-for-multi-temporal-and-multi-modal-data-processing.html"
                                               target="_blank">Special Session 1 - Deep learning approaches for
                                                multi-temporal and multi-modal data processing and analysis for urban
                                                areas</a> (Wednesday May 17 | 11.00-12.30 | Place: Concert Hall) <br>
                                            <span class="session-chairs">Chairs: Jonathan Weber (Universite de Haute-Alsace) and Sylvain Lobry (Universite Paris Cite)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">

                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Fahong Zhang (Technique University of Munich), Yilei Shi (Technique
                                                    University of Munich), Zhitong Xiong (Technique University of
                                                    Munich) and Xiao Xiang Zhu (Technique University of Munich)
                                                </td>
                                                <td>Pseudo Features Guided Self-training for Domain Adaptive Semantic
                                                    Segmentation of Aerial Images
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Romain Wenger (University of Strasbourg), Anne Puissant (University
                                                    of Strasbourg), Jonathan Weber (University of Haute-Alsace),
                                                    Lhassane Idoumghar (University of Haute-Alsace) and Germain
                                                    Forestier (University of Haute-Alsace)
                                                </td>
                                                <td>Exploring inference of a land use and land cover model trained on
                                                    MultiSenGE dataset
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>47</td>
                                                <td>Wen Zhou (ITC, University of Twente), Claudio Persello (ITC,
                                                    University of Twente) and Alfred Stein (ITC, University of Twente)
                                                </td>
                                                <td>Building Usage Classification Using a Transformer-based Multimodal
                                                    Deep Learning Method
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>78</td>
                                                <td>Sebastian Hafner (KTH Royal Institute of Technology), Yifang Ban
                                                    (KTH Royal Institute of Technology) and Andrea Nascetti (KTH Royal
                                                    Institute of Technology)
                                                </td>
                                                <td>Investigating Imbalances in SAR and Optical Utilization for
                                                    Multi-Modal Urban Mapping
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>89</td>
                                                <td>Alex Levering (Wageningen University & Research), Diego Marcos
                                                    (Inria) and Devis Tuia (EPFL)
                                                </td>
                                                <td>Time Series Analysis of Urban Liveability</td>
                                            </tr>
                                            <tr>
                                                <td>100</td>
                                                <td>Ilter Turkmenli (Gebze Technical University), Koray Kayabol (Gebze
                                                    Technical University) and Erchan Aptoula (Sabancı University)
                                                </td>
                                                <td>A SMOOTHING LAYER FOR SAR IMAGE SEMANTIC SEGMENTATION WITH FULLY
                                                    CONVOLUTIONAL NETWORKS
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Session 1 - Urban planning and socioeconomics (Wednesday May 17 |
                                            11.00-12.30 | Place: Experimental Stage) <br>
                                            <span class="session-chairs">Chairs: Hannes Taubenböck (German Aerospace Center (DLR)) and Monika Kuffer (University of Twente)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>15</td>
                                                <td>John Friesen (Technical University Darmstadt) and Oyutan Delger
                                                    (Technical University Darmstadt)
                                                </td>
                                                <td>Spatial Accessibility to Hospitals for Informal Settlement Dwellers
                                                    in Three sub-Saharan Cities
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>91</td>
                                                <td>Yrneh Zarit Ulloa Torrealba (German Aerospace Center (DLR)), Dominik
                                                    Neumayer (Munich University of Applied Sciences), Andreas Schmitt
                                                    (Munich University of Applied Sciences) and Hannes Taubenböck
                                                    (German Aerospace Center (DLR))
                                                </td>
                                                <td>Correlation between remotely sensed solid waste on streets and
                                                    socioeconomic class of an urban area
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>95</td>
                                                <td>Angela Wendnagel-Beck (University of Stuttgart), Ali Jamshed
                                                    (University of Stuttgart), Nimra Iqbal (University of Stuttgart),
                                                    Marvin Ravan (University of Stuttgart), Joanna McMillan (University
                                                    of Stuttgart) and Jörn Birkmann (University of Stuttgart)
                                                </td>
                                                <td>Exploring the link between socio-economic and physical structure in
                                                    cities to inform heat adaptation options: the case of Stuttgart
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>104</td>
                                                <td>Tzu-Hsin Karen Chen (Yale University), Henriette Thisted Horsdal
                                                    (Aarhus University), Karl Samuelsson (University of Gävle), Ane
                                                    Marie Closter (Aarhus University), Megan Davies (University of
                                                    Copenhagen), Stephan Barthel (Stockholm University), Carsten Bøcker
                                                    Pedersen (Aarhus University), Alexander V. Prishchepov (University
                                                    of Copenhagen) and Clive E. Sabel (University of Canberra)
                                                </td>
                                                <td>Association between three-dimensional urban form and depression</td>
                                            </tr>
                                            <tr>
                                                <td>115</td>
                                                <td>Ella McCoshan (University College London / Space Syntax Limited) and
                                                    Kayvan Karimi (University College London / Space Syntax Limited)
                                                </td>
                                                <td>Shining a light on Dar es Salaam - 1992 to 2020: utilizing
                                                    nightlight intensity data as a tool for modelling rapid urban growth
                                                    patterns
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Poster Session 1 (Wednesday May 17 | 14.00-15.30)
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>11</td>
                                                <td>Hannes Taubenböck (German Aerospace Center (DLR)), Lifeng Shi (China
                                                    University of Mining and Technology), Tobias Leichtle (German
                                                    Aerospace Center (DLR)), Shihong Du (Institute of Remote Sensing and
                                                    GIS, Peking University) and Michael Wurm (German Aerospace Center
                                                    (DLR))
                                                </td>
                                                <td>The ‘ghost city’ phenomenon in China: mapping and categorization at
                                                    intra-urban scale
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Flavio Marzialetti (Molise University, Envix Lab, Department of
                                                    Bioscience and Territory), Maria Laura Carranza (Molise University),
                                                    Antonietta Sorriso (University of Pavia) and Paolo Gamba (University
                                                    of Pavia)
                                                </td>
                                                <td>Comparing SAR X and L bands to map the urban extent in a metropolis
                                                    of South America. The potential of multitemporal data.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Katrin Krzepek (Technical University of Darmstadt), Michael Rudolf
                                                    (Technical University of Darmstadt), Benjamin Homuth (Hessian Agency
                                                    for Nature Conservation, Environment and Geology), Andreas Henk
                                                    (Technical University of Darmstadt) and Dorota Iwaszczuk (Technical
                                                    University of Darmstadt)
                                                </td>
                                                <td>Raster Representation of Ground Motion Service Data and Automated
                                                    Hot-Spot Detection
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Alessandra Gandini (TECNALIA), Daniel Navarro (TECNALIA) and Efren
                                                    Feliu (TECNALIA)
                                                </td>
                                                <td>Identification and mapping of areas and buildings with high roof
                                                    greening potential
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Fan Fan (Technical University of Munich), Yilei Shi (Technical
                                                    University of Munich) and Xiao Xiang Zhu (Technical University of
                                                    Munich)
                                                </td>
                                                <td>Urban Land Cover Classification from Sentinel-2 Images with
                                                    Quantum-Classical Network
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>Yikai Yao (University of Waterloo), Sarah Fatholahi (University of
                                                    Waterloo), Yiping Chen (Sun Yat-sen University) and Jonathan Li
                                                    (University of Waterloo)
                                                </td>
                                                <td>Indoor LiDAR Point Clouds Upsampling for Object Detection
                                                    Enhancement
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>Chahine-Nicolas Zede (University of Applied Sciences Western
                                                    Switzerland) and Adrien Gressin (University of Applied Sciences
                                                    Western Switzerland)
                                                </td>
                                                <td>Geolocation of a panoramic camera by reference pairing</td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>Sasha Mullally (University of New Brunswick), Yun Zhang (University
                                                    of New Brunswick), David Fraser (University of New Brunswick),
                                                    William (Weilong) Liu (University of New Brunswick), Toni MacRae
                                                    (University of New Brunswick) and Sean Cox (University of New
                                                    Brunswick)
                                                </td>
                                                <td>Development of a Deep Urban Time Series Using Historical Aerial
                                                    Photos to Document the Evolution of Recreational Urban Spaces
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>Benjamin Palmaerts (Institut Scientifique de Service Public
                                                    (ISSeP)), Benjamin Beaumont (Institut Scientifique de Service Public
                                                    (ISSeP)), Dimitri Graur (Institut Scientifique de Service Public
                                                    (ISSeP)), Gérard Swinnen (Institut Scientifique de Service Public
                                                    (ISSeP)) and Eric Hallot (Institut Scientifique de Service Public
                                                    (ISSeP))
                                                </td>
                                                <td>Oriented aircraft object detector using YOLOv4 on very high
                                                    resolution satellite and synthetic datasets
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>Coraline Wyard (Institut Scientifique de Service Public (ISSeP)),
                                                    Hugo Fauvel (ENSTA Bretagne), Benjamin Palmaerts (Institut
                                                    Scientifique de Service Public (ISSeP)), Benjamin Beaumont (Institut
                                                    Scientifique de Service Public (ISSeP)) and Eric Hallot (Institut
                                                    Scientifique de Service Public (ISSeP))
                                                </td>
                                                <td>From DL approach conception to operational product design :
                                                    identifying roof materials for policy makers
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>48</td>
                                                <td>Johannes Mast (German Aerospace Center (DLR)), Marta Sapena (German
                                                    Aerospace Center (DLR)), Christian Geiß (German Aerospace Center
                                                    (DLR)) and Hannes Taubenböck (German Aerospace Center (DLR))
                                                </td>
                                                <td>Linking remote sensing data and online engagement in flood events in
                                                    Nigeria
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>51</td>
                                                <td>Andreas Braun (University of Tübingen), Oliver Assmann (AT Verband),
                                                    Gebhard Warth (University of Tübingen), Christian Khouri (
                                                    University of Tübingen), Michael Schultz (University of Tübingen)
                                                    and Volker Hochschild (University of Tübingen)
                                                </td>
                                                <td>Urban structures retrieved by satellite imagery correlate with
                                                    socio-economic household data. Insights from the City of Kigali,
                                                    Rwanda
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>54</td>
                                                <td>Friedemann Roy (International Finance Corporation)</td>
                                                <td>Climate change will exacerbate demographic challenges for urban
                                                    planners
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>55</td>
                                                <td>Yajin Xu (German Aerospace Center), Philipp Schuegraf (German
                                                    Aerospace Center) and Ksenia Bittner (German Aerospace Center)
                                                </td>
                                                <td>Vertex Aided Building Polygonization from Satellite Imagery Applying
                                                    Deep Learning
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>59</td>
                                                <td>Yue Zeng (Technical University of Munich), Jianhua Guo (Technical
                                                    University of Munich) and Xiao Xiang Zhu (Technical University of
                                                    Munich)
                                                </td>
                                                <td>Spatial-Temporal Analysis of Urban Green Space and the Impact on
                                                    Land Surface Temperature of Beijing, China
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>62</td>
                                                <td>Dorothee Stiller (German Aerospace Center (DLR)), Thomas Stark
                                                    (German Aerospace Center (DLR)), Verena Strobl (German Aerospace
                                                    Center (DLR)), Maike Leupold (Federal Statistical Office Germany
                                                    (Destatis)), Michael Wurm (German Aerospace Center (DLR)) and Hannes
                                                    Taubenböck (German Aerospace Center (DLR))
                                                </td>
                                                <td>Efficiency of CNNs for Building Extraction: Comparative Analysis of
                                                    Performance and Time
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>64</td>
                                                <td>Xiangyu Zhuo (German Aerospace Center), Jiaojiao Tian (German
                                                    Aerospace Center) and Karl-Heinz Häfele (Karlsruhe Institute of
                                                    Technology)
                                                </td>
                                                <td>Direct Window-to-Wall Ratio Prediction Using Deep Learning
                                                    Approaches
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>87</td>
                                                <td>Michael Foumelis (Aristotle University of Thessaloniki (AUTh)), Jose
                                                    Manuel Delgado Blasco (Universidad de Jaén), Elena Papageorgiou
                                                    (Aristotle University of Thessaloniki (AUTh)), Fabrizio Pacini
                                                    (Terradue s.r.l.) and Philippe Bally (European Space Agency)
                                                </td>
                                                <td>Nationwide Monitoring of Urban Surface Motion in Greece using GEP
                                                    SNAPPING Online Service
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>120</td>
                                                <td>David Parastatidis (Foundation for Research and Technology - Hellas
                                                    (FORTH)) and Nektarios Chrysoulakis (Foundation for Research and
                                                    Technology - Hellas (FORTH))
                                                </td>
                                                <td>RSLab Global Land Surface Albedo from MODIS</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Session 2 - Urban form characterization and dynamics (Wednesday May 17 |
                                            16.00-17.15 | Place: Concert Hall) <br>
                                            <span class="session-chairs">Chairs: Anne Puissant (University of Strasbourg) and Clément Mallet (Univ. Gustave Eiffel, IGN, ENSG)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>9</td>
                                                <td>Qingyu Li (Technical University of Munich), Yao Sun (Technical
                                                    University of Munich), Lichao Mou (Technical University of Munich),
                                                    Yilei Shi (Technical University of Munich) and Xiao Xiang Zhu
                                                    (Technical University of Munich)
                                                </td>
                                                <td>Semi-supervised segmentation of individual buildings from SAR
                                                    imagery
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>Ines Standfuß (German Aerospace Center (DLR)), Matthias Weigand
                                                    (German Aerospace Center (DLR)), Monika Gähler (German Aerospace
                                                    Center (DLR)), Antonia Milbert (Federal Institute for Research on
                                                    Building, Urban Affairs and Spatial Development (BBSR)), Fabian
                                                    Dosch (Federal Institute for Research on Building, Urban Affairs and
                                                    Spatial Development (BBSR)), Silas Eichfuss (Federal Institute for
                                                    Research on Building, Urban Affairs and Spatial Development (BBSR)),
                                                    Nikola Sander (Federal Institute for Population Research (BIB)),
                                                    Christian Geiß (German Aerospace Center (DLR)) and Hannes Taubenböck
                                                    (German Aerospace Center (DLR))
                                                </td>
                                                <td>Categorizing urban areas into “core”, “fringe”, and “periphery”
                                                    based on the built-up morphology
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>67</td>
                                                <td>Yuxing Xie (German Aerospace Center (DLR)) and Jiaojiao Tian (German
                                                    Aerospace Center (DLR))
                                                </td>
                                                <td>Multimodal Co-learning: A Domain Adaptation Method for Building
                                                    Extraction from Optical Remote Sensing Imagery
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>74</td>
                                                <td>Agnieszka Kuras (Norwegian University of Life Sciences), Maximilian
                                                    Brell (GFZ German Research Centre for Geosciences), Stian Teien
                                                    (Capgemini), Ingunn Burud (Norwegian University of Life Sciences)
                                                    and Thomas Thiis (Norwegian University of Life Sciences)
                                                </td>
                                                <td>Feature-Level Based Hyperspectral and Lidar Data Fusion for Urban
                                                    Analysis
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>77</td>
                                                <td>Sébastien Gadal (Aix-Marseille University), Mounir Oukhattar
                                                    (Aix-Marseille University) and Solomon Abody Otobo (Aix-Marseille
                                                    University)
                                                </td>
                                                <td>Multi-temporal recognition of built-up area and land cover changes
                                                    using machine learning approach in the Metropolis of
                                                    Aix-Marseille-Provence in France
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/geoai-for-monitoring-rapid-urbanization-processes.html"
                                               target="_blank">Special Session 2 - GeoAI for Monitoring Rapid
                                                Urbanization Processes</a> (Wednesday May 17 | 16.00-17.15 | Place:
                                            Experimental Stage) <br>
                                            <span class="session-chairs">Chairs: Claudio Persello (University of Twente) and Monika Kuffer (University of Twente)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>19</td>
                                                <td>Yunyu Tian (Wageningen University), Nandin-Erdene Tsendbazar
                                                    (Wageningen University), Eveline van Leeuwen (Wageningen University)
                                                    and Martin Herold (Wageningen University)
                                                </td>
                                                <td>Unraveling global multifaceted urbanization-land-energy-air nexus
                                                    based on Earth Observation
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>70</td>
                                                <td>Thomas Stark (Technical University of Munich (TUM)), Michael Wurm
                                                    (German Aerospace Center (DLR)), Xiao Xiang Zhu (Technical
                                                    University Munich (TUM)), and Hannes Taubenböck (German Aerospace
                                                    Center (DLR))
                                                </td>
                                                <td>Detecting challenging urban environments using a few-shot
                                                    meta-learning approach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>86</td>
                                                <td>Michele Melchiorri (European Commission Joint Research Centre) and
                                                    Thomas Kemper (European Commission Joint Research Centre)
                                                </td>
                                                <td>Establishing an operational and continuous monitoring of global
                                                    built-up surfaces with the Copernicus Global Human Settlement Layer
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>94</td>
                                                <td>Angela Abascal (University of Twente), Christopher Kyba (Deutsches
                                                    GeoForschungsZentrum), Franz Hölker (Leibniz Institute of Freshwater
                                                    Ecology and Inland Fisheries), Monika Kuffer (University of Twente),
                                                    Hector Linares Arroyo (Stars4all Foundation), Ken Walczak (Adler
                                                    Planetarium), Alejandro S. De Miguel (Stars4all Foundation), Tobias
                                                    Degen (Community and Ecosystem Ecology) and Miguel O. Roman (Leidos
                                                    Company)
                                                </td>
                                                <td>Mapping the Invisibles: Global Urban Inequalities through Night
                                                    Lights
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>102</td>
                                                <td>Jeroen Staab (German Aerospace Center (DLR)), Thomas Stark (German
                                                    Aerospace Center (DLR)), Michael Wurm (German Aerospace Center
                                                    (DLR)), Kathrin Wolf (German Research Center for Environmental
                                                    Health (HMGU)), Marco Dallavalle (German Research Center for
                                                    Environmental Health (HMGU)), Arthur Schady (German Aerospace Center
                                                    (DLR)), Tobia Lakes (Humboldt-University Berlin) and Hannes
                                                    Taubenböck (German Aerospace Center (DLR))
                                                </td>
                                                <td>Using CNNs on Sentinel-2 data for road traffic noise modelling</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <h4 class="date-header mt-5">Thursday May 18</h4>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Poster Session 2 (Thursday May 18 | 11.00-12.30)
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>23</td>
                                                <td>Basile Rousse (Université Paris Cité), Sylvain Lobry (Université
                                                    Paris Cité), Géraldine Duthé (French Institute for Demographic
                                                    Studies (INED)), Valérie Golaz (French Institute for Demographic
                                                    Studies (INED)) and Laurent Wendling (Université Paris Cité)
                                                </td>
                                                <td>Seasonal semi-supervised domain adaptation for linking population
                                                    studies and Local Climate Zones
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Romain Wenger (University of Strasbourg), Anne Puissant (University
                                                    of Strasbourg), Jonathan Weber (University of Haute-Alsace),
                                                    Lhassane Idoumghar (University of Haute-Alsace) and Germain
                                                    Forestier (University of Haute-Alsace)
                                                </td>
                                                <td>Exploring inference of a land use and land cover model trained on
                                                    MultiSenGE dataset
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>56</td>
                                                <td>Isabelle Tingzon (Technical University of Munich), James Matthew
                                                    Miraflor (University of the Philippines Diliman), Xiao Xiang Zhu
                                                    (Technical University of Munich) and Mrinalini Kochupillai
                                                    (Technical University of Munich)
                                                </td>
                                                <td>Towards Impactful Applications of AI4EO in the Global South</td>
                                            </tr>
                                            <tr>
                                                <td>65</td>
                                                <td>Wufan Zhao (ITC, University of Twente), Claudio Persello (ITC,
                                                    University of Twente), Hu Ding (South China Normal University) and
                                                    Alfred Stein (ITC, University of Twente)
                                                </td>
                                                <td>Learning General Representations for Semantic Segmentation and
                                                    Height Estimation from Remote Sensing Images
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>68</td>
                                                <td>Katarzyna Goch (Polish Academy of Sciences, Warsaw), Martino
                                                    Pesaresi (European Commission, Joint Research Centre (JRC)),
                                                    Christina Corbane (European Commission, Joint Research Centre
                                                    (JRC)), Panagiotis Politis (Arhs Developments S.A.) and Thomas
                                                    Kemper (European Commission, Joint Research Centre (JRC))
                                                </td>
                                                <td>Multiple regression model for estimating vertical characteristics of
                                                    built-up areas at 100 m resolution from open and global Digital
                                                    Elevation Models
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>71</td>
                                                <td>Antoine Masse (Collecte Localisation Satellite (CLS)), Angelo Amodio
                                                    (Planetek Italia), Luca Congedo (Italian Institute for Environmental
                                                    Protection and Research (ISPRA)), Sadri Haouet (Collecte
                                                    Localisation Satellite (CLS)), Vito De Pasquale (Planetek Italia),
                                                    Annagrazia Calò (Italian Institute for Environmental Protection and
                                                    Research (ISPRA)), Amaury Truffier (Collecte Localisation Satellite
                                                    (CLS)), Loïc Faucqueur (Collecte Localisation Satellite (CLS)),
                                                    Marco Montella (Italian Institute for Environmental Protection and
                                                    Research (ISPRA)), Diana Bianchini (Italian Institute for
                                                    Environmental Protection and Research (ISPRA)) and Alberto Albanese
                                                    (Italian Institute for Environmental Protection and Research
                                                    (ISPRA))
                                                </td>
                                                <td>Innovative Soil Sealing products around the Mediterranean sea</td>
                                            </tr>
                                            <tr>
                                                <td>72</td>
                                                <td>Michael Wurm (German Aerospace Center (DLR)), Raphael Tubbesing
                                                    (German Aerospace Center (DLR)), Thomas Stark (German Aerospace
                                                    Center (DLR)), Marlene Kühnl (German Aerospace Center (DLR)), Marta
                                                    Sapena (German Aerospace Center (DLR)), Wolfgang Sulzer (University
                                                    of Graz) and Hannes Taubenböck (German Aerospace Center (DLR))
                                                </td>
                                                <td>Revealing landslisde exposure of informal settlements in Medellín
                                                    using Deep Learning
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>83</td>
                                                <td>Qiaosi Li (University of Glasgow) and Qunshan Zhao (University of
                                                    Glasgow)
                                                </td>
                                                <td>Weakly-Supervised Semantic Segmentation of Airborne LiDAR Point
                                                    Clouds in Hong Kong Urban Areas
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>85</td>
                                                <td>Jairo Acuna Paz y Miño (Université de Pau et des Pays de l’Adour),
                                                    Inès de Bort (Université de Pau et des Pays de l’Adour) and Benoit
                                                    Beckers (Université de Pau et des Pays de l’Adour)
                                                </td>
                                                <td>Image-based measurement of clear sky radiation distribution from 0
                                                    to 5000 meters above sea level
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>91</td>
                                                <td>Yrneh Zarit Ulloa Torrealba (German Aerospace Center (DLR)), Dominik
                                                    Neumayer (Munich University of Applied Sciences), Andreas Schmitt
                                                    (Munich University of Applied Sciences) and Hannes Taubenböck
                                                    (German Aerospace Center (DLR))
                                                </td>
                                                <td>Correlation between remotely sensed solid waste on streets and
                                                    socioeconomic class of an urban area
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>98</td>
                                                <td>Blewa Kehounbiova Audrey Tohoun (West African Science Service Centre
                                                    on Climate Change and Adapted Land Use (WASCAL)), Marta Sapena
                                                    (Earth Observation Center, German Aerospace Center (DLR)), Johannes
                                                    Mast (Earth Observation Center, German Aerospace Center (DLR)),
                                                    Hannes Taubenböck (German Aerospace Center (DLR)), Ibrahim Haruna
                                                    (Federal University of Technology, Minna), Vincent Orekan
                                                    (Department of Geography, University of Abomey-Calavi) and
                                                    Appollonia A. Okhimamhe (West African Science Service Centre on
                                                    Climate Change and Adapted Land Use (WASCAL))
                                                </td>
                                                <td>Are citizens’ perceptions on urban green spaces influenced by their
                                                    immediate environment? the case of Grand Nokoue, Benin Republic
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>99</td>
                                                <td>Aya Otahara (Hosei University) and Hiroshi Hanaizumi (Hosei
                                                    University)
                                                </td>
                                                <td>An Improved Method for Analyzing Three-Dimensional Human Walking
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>103</td>
                                                <td>Mario Al Sayah (RESALLIENCE by SIXENSE Engineering), Didier Soto
                                                    (RESALLIENCE by SIXENSE Engineering ), Rachid Nedjai (Université
                                                    d'Orléans), Karim Selouane (RESALLIENCE by SIXENSE Engineering),
                                                    Nicolas Ziv (RESALLIENCE by SIXENSE Engineering) and Philippe
                                                    Sohouenou (RESALLIENCE by SIXENSE Engineering)
                                                </td>
                                                <td>On the use of remote sensing and modeling techniques for urban heat
                                                    detection, an operational study
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>106</td>
                                                <td>Sofia Peleli (Hellenic Mediterranean University Research Center),
                                                    Maria Kouli (Hellenic Mediterranean University Research Center) and
                                                    Filippos Vallianatos (Hellenic Mediterranean University Research
                                                    Center)
                                                </td>
                                                <td>Thermal anomalies and crustal deformation related to the November
                                                    26, 2019, Albania (Durrës) earthquake
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>110</td>
                                                <td>Christian Bignami (National Earthquakes Observatory), Cristiano
                                                    Tolomei (National Earthquakes Observatory) and Stefano Salvi
                                                    (National Earthquakes Observatory)
                                                </td>
                                                <td>The contribution of InSAR deformation time series for geohazard in
                                                    urban environment for HARMONIA project
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>111</td>
                                                <td>Aleksandra Łęczek (Institute of Urban and Regional Development) and
                                                    Wojciech Łachowski (Institute of Urban and Regional Development)
                                                </td>
                                                <td>The impact of the impervious surfaces and the condition of
                                                    vegetation on the land surface temperature in urban centers on the
                                                    example of Wloclawek, Poland
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Student Contest Session 1 (Thursday May 18 | 14.00-15.30 | Place: Concert
                                            Hall) <br>
                                            <span class="session-chairs">Chairs: Clément Mallet (Univ. Gustave Eiffel, IGN, ENSG) and Monika Kuffer (University of Twente)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>5</td>
                                                <td>Soukaina Tayi (Mohammed VI Polytechnic University) and Hassan
                                                    Radoine (Mohammed VI Polytechnic University)
                                                </td>
                                                <td>Mapping built-up area: combining Radar and Optical Imagery using
                                                    Google Earth Engine
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Fengxiang Guo (UFZ – Helmholtz Centre for Environmental Research)
                                                    and Uwe Schlink (UFZ – Helmholtz Centre for Environmental Research)
                                                </td>
                                                <td>A nationwide dataset of building features for Germany</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Qipeng Mei (Technical University of Darmstadt), Lina E. Budde
                                                    (Technical University of Darmstadt) and Dorota Iwaszczuk (Technical
                                                    University of Darmstadt)
                                                </td>
                                                <td>Polygon-based mapping of photovoltaic systems and estimation of
                                                    energy generation potential
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>Basile Rousse (Université Paris Cité), Sylvain Lobry (Université
                                                    Paris Cité), Géraldine Duthé (French Institute for Demographic
                                                    Studies (INED)), Valérie Golaz (French Institute for Demographic
                                                    Studies (INED)) and Laurent Wendling (Université Paris Cité)
                                                </td>
                                                <td>Seasonal semi-supervised domain adaptation for linking population
                                                    studies and Local Climate Zones
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>Michael Recla (University of the Bundeswehr Munich) and Michael
                                                    Schmitt (University of the Bundeswehr Munich)
                                                </td>
                                                <td>From Relative to Absolute Heights in SAR-based Single-Image Height
                                                    Prediction
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/urban-thermal-remote-sensing.html"
                                               target="_blank">Special Session 3 - Urban Thermal Remote Sensing</a>
                                            (Thursday May 18 | 14.00-15.30 | Place: Experimental Stage) <br>
                                            <span class="session-chairs">Chairs: Zina Mitraka (Foundation for Research and Technology Hellas (FORTH)) and Will Morrison (Albert-Ludwigs- Universität Freiburg)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>17</td>
                                                <td>Laure Roupioz (Universite de Toulouse), Auline Rodler (BPE/LOCIE),
                                                    Sihem Guernouti (BPE/LOCIE), Ahmad Al Bitar (Universite de
                                                    Toulouse), Laurent Poutier (Universite de Toulouse), Xavier Briottet
                                                    (Universite de Toulouse), Françoise Nerry (Universite de Strasbourg)
                                                    and Marjorie Musy (BPE/LOCIE)
                                                </td>
                                                <td>Monitoring LST at canyon scale for urban micro-climate applications:
                                                    in-situ, simulation and airborne data comparisons
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>53</td>
                                                <td>Panagiotis Sismanidis (Ruhr University Bochum), Benjamin Bechtel
                                                    (Ruhr University Bochum), Iphigenia Keramitsoglou (National
                                                    Observatory of Athens), Zihan Liu (Nanjing University) and Wenfeng
                                                    Zhan (Nanjing University)
                                                </td>
                                                <td>The Intensity of Surface Urban Heat Islands in the Global North
                                                    during the COVID-19 Lockdowns
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>63</td>
                                                <td>Leonie Krelaus (Ruhr-University Bochum), Joy Apfel (Ruhr-University
                                                    Bochum), Benjamin Bechtel (Ruhr-University Bochum) and Panagiotis
                                                    Sismanidis (Ruhr-University Bochum)
                                                </td>
                                                <td>Surface and canopy-layer urban heat island intensities in Europe –
                                                    Quantifying differences in the diurnal cycle for three summer
                                                    periods
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>96</td>
                                                <td>Maria Gkolemi (RSLab/FORTH), Zina Mitraka (RSLab/FORTH) and
                                                    Nektarios Chrysoulakis (RSLab/FORTH)
                                                </td>
                                                <td>Local scale surface temperature estimation by downscaling satellite
                                                    thermal infrared observations using neural networks
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>107</td>
                                                <td>George Kalogeropoulos (Democritus University of Thrace),
                                                    Nerantzia-Julia Tzorzi (Politecnico di Milano) and Argiro Dimoudi
                                                    (Democritus University of Thrace)
                                                </td>
                                                <td>Remote Sensing and In-situ Data Analysis for the Urban Heat Island
                                                    Effect and Land Surface Temperature in the Vertical Forest area
                                                    (‘Bosco Verticale’), in Milan city
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>122</td>
                                                <td>Hoi Kay So (National University of Singapore) and Matthias Roth
                                                    (National University of Singapore)
                                                </td>
                                                <td>Seasonal and diurnal variation of urban park surface temperatures
                                                    and park cooling effects in different cities
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Student Contest Session 2 (Thursday May 18 | 16.00-17.15 | Place: Concert
                                            Hall) <br>
                                            <span class="session-chairs">Chairs: Hannes Taubenböck (German Aerospace Center (DLR)) and Nektarios Chrysoulakis (Foundation for Research and Technology Hellas (FORTH))</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>37</td>
                                                <td>Hiba Hamdi (Kermap), Laure Roupioz (Universite de Toulouse), Thomas
                                                    Corpetti (CNRS), Xavier Briottet (Universite de Toulouse) and
                                                    Antoine Lefebvre (Kermap)
                                                </td>
                                                <td>Evaluation of Urban Weather Generator for air temperature and urban
                                                    heat islands simulation over Toulouse (France)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>49</td>
                                                <td>Patricia Glocke (Ruhr-University Bochum), Benjamin Bechtel
                                                    (Ruhr-University Bochum) and Panagiotis Sismanidis (Ruhr-University
                                                    Bochum)
                                                </td>
                                                <td>Impacts of Altered Human Activities due to COVID 19 Lockdown on Air
                                                    Pollutants and Land Surface Temperatures across European Cities
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td>Louis Newman (Université Paris-Saclay), Flora Weissgerber
                                                    (Université Paris-Saclay), Aurelien Plyer (Université Paris-Saclay)
                                                    and Elise Colin (Université Paris-Saclay)
                                                </td>
                                                <td>Advantages of Polarimetry and Interferometry for Semantic
                                                    Segmentation of Urban SAR Images with Consideration of the Layover
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>58</td>
                                                <td>Qingsong Xu (Technical University Munich), Yilei Shi (Technical
                                                    University Munich) and Xiao Xiang Zhu (Technical University Munich)
                                                </td>
                                                <td>UCDFormer: Unsupervised Change Detection Using Real-time
                                                    Transformers
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>119</td>
                                                <td>Giannis Lantzanakis (Foundation for Research and Technology - Hellas
                                                    (FORTH)), Dimitris Tsirantonakis (Foundation for Research and
                                                    Technology - Hellas (FORTH)), Nektarios Chrysoulakis (Foundation for
                                                    Research and Technology - Hellas (FORTH)), Sue Grimmond (University
                                                    of Reading), Andreas Christen (University of Freiburg) and Joern
                                                    Birkmann (University of Stuttgart)
                                                </td>
                                                <td>Initial development of the urbisphere urban hyperspectral library:
                                                    Berlin, Germany
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/urban-air-quality.html" target="_blank">Special
                                                Session 4 - Urban Air Quality</a> (Thursday May 18 | 16.00-17.15 |
                                            Place: Experimental Stage) <br>
                                            <span class="session-chairs">Chairs: Thilo Erbertseder (German Aerospace Center (DLR)) and Lorenza Gilardi (German Aerospace Center (DLR))</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>69</td>
                                                <td>Ellen Banzhaf (Helmholtz Centre for Environmental Research - UFZ),
                                                    Isabelle Bause (BayWa r.e. Solar Projects GmbH), Carolin Helbig
                                                    (Helmholtz Centre for Environmental Research - UFZ) and Sebastian
                                                    Elze (Helmholtz Centre for Environmental Research - UFZ)
                                                </td>
                                                <td>Personal exposure to environmental stressors in different urban
                                                    residential structures. Linking fieldwork and RS mapping
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>108</td>
                                                <td>Thilo Erbertseder (German Aerospace Center (DLR)), Hannes Taubenböck
                                                    (German Aerospace Center (DLR)), Thomas Esch (German Aerospace
                                                    Center (DLR)), Lorenza Gilardi (German Aerospace Center (DLR)),
                                                    Heiko Paeth (University of Würzburg), Mattia Marconcini (German
                                                    Aerospace Center (DLR)) and Stefan Dech (German Aerospace Center
                                                    (DLR))
                                                </td>
                                                <td>Earth Observation-based analysis of NO2 air pollution and settlement
                                                    growth in megacities
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>112</td>
                                                <td>Lorenza Gilardi (German Aerospace Center (DLR)), Ehsan Khorsandi
                                                    (German Aerospace Center (DLR)) and Thilo Erbertseder (German
                                                    Aerospace Center (DLR))
                                                </td>
                                                <td>Global Air Pollution Data for Health Risk Assessments in Lombardy,
                                                    Italy
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>113</td>
                                                <td>Eleni Athanasopoulou (National Observatory of Athens), Anastasia
                                                    Kakouri (National Observatory of Athens), Dimitris Karagiannis
                                                    (National Observatory of Athens), Orestis Speyer (National
                                                    Observatory of Athens), Georgios Grivas (National Observatory of
                                                    Athens) and Evangelos Gerasopoulos (National Observatory of Athens)
                                                </td>
                                                <td>Enhancing air quality data from multiple platforms towards
                                                    geospatial health-related information in the intra-urban environment
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>121</td>
                                                <td>Konstantinos Politakos (Foundation for Research and Technology -
                                                    Hellas (FORTH)), Stavros Stagakis (University of Basel), Christian
                                                    Feigenwinter (University of Basel), Matthias Roth (University of
                                                    Singapore) and Nektarios Chrysoulakis (Foundation for Research and
                                                    Technology – Hellas (FORTH))
                                                </td>
                                                <td>Dynamic changes in urban form and function affect Carbon Dioxide
                                                    Fluxes in a Mediterranean city
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <h4 class="date-header mt-5">Friday May 19</h4>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/urban-remote-sensing-for-the-global-south.html"
                                               target="_blank">Special Session 5 - Urban remote sensing for the Global
                                                South</a> (Friday May 19 | 11.00-12.30 | Place: Concert Hall) <br>
                                            <span class="session-chairs">Chairs: Angela Abascal (University of Twente) and Stefanos Georganos (KTH Royal Institute of Technology)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>4</td>
                                                <td>John Friesen (Technical University Darmstadt), Nicolas J. Kraff
                                                    (Technical University Darmstadt) and Hannes Taubenböck (German
                                                    Aerospace Center and University of Würzburg)
                                                </td>
                                                <td>Spatiotemporal dynamics of slum populations in Caracas, Venezuela
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Job Rosier (VU Amsterdam), Jasper van Vliet (VU Amsterdam) and Vita
                                                    Bakker (VU Amsterdam)
                                                </td>
                                                <td>Mapping intra-urban development trajectories in Nairobi, Kenya</td>
                                            </tr>
                                            <tr>
                                                <td>46</td>
                                                <td>Marta Sapena (German Aerospace Center (DLR)), Justice N. Inkoom
                                                    (Martin Luther University Halle-Wittenberg), Emmanuel T. Umaru
                                                    (WASCAL CCHH), Johannes Mast (German Aerospace Center (DLR)),
                                                    Appollonia A. Okhimamhe (WASCAL CCHH) and Hannes Taubenböck (German
                                                    Aerospace Center (DLR))
                                                </td>
                                                <td>Integrating multi-source remote sensing data for monitoring urban
                                                    development in West Africa
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>57</td>
                                                <td>Julien Govoorts (Université Libre de Bruxelles), Taïs Grippa
                                                    (Université Libre de Bruxelles), Sabine Vanhuysse (Université Libre
                                                    de Bruxelles) and Eléonore Wolff (Université Libre de Bruxelles)
                                                </td>
                                                <td>Mapping urban deprivation from Sentinel 1/2 using artificial
                                                    intelligence and weakly labelled data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>76</td>
                                                <td>Sebastian Hafner (KTH Royal Institute of Technology), Stefanos
                                                    Georganos (KTH Royal Institute of Technology), Theodomir Mugiraneza
                                                    (University of Rwanda) and Yifang Ban (KTH Royal Institute of
                                                    Technology)
                                                </td>
                                                <td>Mapping Urban Population Growth from Sentinel-2 MSI and Census Data
                                                    using Deep Learning: A Case Study in Kigali, Rwanda
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>101</td>
                                                <td>Monika Kuffer (ITC, University of Twente), Inas M. M. Ali
                                                    (Independent Consultant), Asgad Gummah (Ministry of Social
                                                    Development), André da Silva Mano (ITC, University of Twente), Wafa
                                                    Sakhi (Sudan Urban Development Think Tank), Ibrahim Kushieb
                                                    (Ministry of Social Development), Serkan Girgin (ITC, University of
                                                    Twente), Nuha Eltiny (Sudan Urban Development Think Tank), Julia
                                                    Kumi (Ministry of Social Development), Mosub Abdallah (Ministry of
                                                    Physical Planning), Maysoon Bad (Sudan Urban Development Think
                                                    Tank), Fatima Ahmed (Ministry of Transport), Mustafa Hamza (Ministry
                                                    of Physical Planning), Jon Wang (ITC, University of Twente), Taha
                                                    Elzaki (Ministry of Transport), Caroline Gevaert (ITC, University of
                                                    Twente) and Charlotte Flasse (Université libre de Bruxelles)
                                                </td>
                                                <td>IDeaMapSudan: Geo-Spatial Modelling of Urban Poverty</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/promoting-urban-resilience-through-methodologies-and-tools.html"
                                               target="_blank">Special Session 6 - Promoting Urban Resilience through
                                                Methodologies and Tools Deploying Earth Observation Data</a> (Friday May
                                            19 | 11.00-12.30 | Place: Experimental Stage) <br>
                                            <span class="session-chairs">Chairs: Giorgos Somarakis (Foundation for Research and Technology Hellas (FORTH)) and David Ludlow (University of the West of England)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>3</td>
                                                <td>Fumio Yamazaki (National Research Institute for Earth Science and
                                                    Disaster Resilience), Wen Liu (Chiba University) and Kei Horie
                                                    (MS&AD InterRisk Research & Consulting, Inc.)
                                                </td>
                                                <td>Extraction of collapsed buildings in Minami-Aso Village due to the
                                                    2016 Kumamoto earthquake based on LiDAR data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>David Ludlow (University of the West of England), Zaheer Khan
                                                    (University of the West of England), Nektarios Chrysoulakis
                                                    (Foundation for Research and Technology Hellas) and Zina Mitraka
                                                    (Foundation for Research and Technology Hellas)
                                                </td>
                                                <td>Towards Digital-Twin solutions for the 15 minute city</td>
                                            </tr>
                                            <tr>
                                                <td>75</td>
                                                <td>Mattia Marconcini (German Aerospace Center (DLR)), Annekatrin
                                                    Metz-Marconcini (German Aerospace Center (DLR)), Thomas Esch (German
                                                    Aerospace Center (DLR)), Giorgos Somarakis (Foundation for Research
                                                    and Technology - Hellas (FORTH)), Nektarios Chrysoulakis (Foundation
                                                    for Research and Technology - Hellas (FORTH)) and Zina Mitraka
                                                    (Foundation for Research and Technology - Hellas (FORTH))
                                                </td>
                                                <td>Exploiting Copernicus Core Services for Assessing the Surface Urban
                                                    Heat Island Intensity
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>82</td>
                                                <td>Ivana Hlaváčová (GISAT s.r.o.), Jan Kolomazník (GISAT s.r.o.), Juraj
                                                    Struhár (GISAT s.r.o.) and Erika Orlitová (GISAT s.r.o.)
                                                </td>
                                                <td>InSAR Ground Motion Mapping in Support of Urban Resilience and
                                                    Regional Landscape Planning
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>97</td>
                                                <td>Nimra Iqbal (University of Stuttgart), Ayman Aslam (National
                                                    University of Sciences and Technology), Ali Jamshed (University of
                                                    Stuttgart), Marvin Ravan (University of Stuttgart), Jörn Birkmann
                                                    (University of Stuttgart) and Irfan Ahmad Rana (National University
                                                    of Sciences and Technology)
                                                </td>
                                                <td>Assessment of the human heat vulnerability of different Local
                                                    Climate Zones in Lahore: Coupling remote sensing and socioeconomic
                                                    data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>103</td>
                                                <td>Mario Al Sayah (RESALLIENCE by SIXENSE Engineering), Didier Soto
                                                    (RESALLIENCE by SIXENSE Engineering), Rachid Nedjai (Université
                                                    d'Orléans), Karim Selouane (RESALLIENCE by SIXENSE Engineering),
                                                    Nicolas Ziv (RESALLIENCE by SIXENSE Engineering) and Philippe
                                                    Sohouenou (RESALLIENCE by SIXENSE Engineering)
                                                </td>
                                                <td>On the use of remote sensing and modeling techniques for urban heat
                                                    detection, an operational study
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Session 3 - New Data, Algorithms and Techniques for Urban Remote Sensing
                                            (Friday May 19 | 14.00-15.30 | Place: Concert Hall) <br>
                                            <span class="session-chairs">Chairs: Sébastien Lefèvre (Université Bretagne Sud) and Laurent Caraffa (IGN)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>7</td>
                                                <td>Zhenghang Yuan (Technical University of Munich), Lichao Mou
                                                    (Technical University of Munich) and Xiao Xiang Zhu (Technical
                                                    University of Munich)
                                                </td>
                                                <td>Multilingual Augmentation for Robust Visual Question Answering in
                                                    Remote Sensing Images
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>Sining Chen (Technical University of Munich), Yilei Shi (Technical
                                                    University of Munich) and Xiao Xiang Zhu (Technical University of
                                                    Munich)
                                                </td>
                                                <td>Long-tailed Regression with Ensembles for Monocular Height
                                                    Estimation from Single Remote Sensing Images
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>Sergio Vitale (University Parthenope of Naples), Giampaolo Ferraioli
                                                    (University Parthenope of Naples), Wenyu Yang (University Parthenope
                                                    of Naples), Gilda Schirinzi (University Parthenope of Naples) and
                                                    Vito Pascazio (University Parthenope of Naples)
                                                </td>
                                                <td>A multi-objective deep learning based approach for SAR image
                                                    reconstruction in urban environment
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>Sara Akodad (CNES), Pierre Lassalle (CNES), Brunop Vallet (IGN),
                                                    Etienne Le Bihan (IGN) and Pierre-Marie Brunet (CNES)
                                                </td>
                                                <td>AI4GEO: LOD0 Generation for 3D building models</td>
                                            </tr>
                                            <tr>
                                                <td>88</td>
                                                <td>Xiangtian Yuan (German Aerospace Center (DLR)), Jiaojiao Tian
                                                    (German Aerospace Center (DLR)), Thomas Krauß (German Aerospace
                                                    Center (DLR)), Xiangyu Zhuo (German Aerospace Center (DLR)) and
                                                    Peter Reinartz (German Aerospace Center (DLR))
                                                </td>
                                                <td>Multi-layer Thematic Map Representation for Urban Understanding</td>
                                            </tr>
                                            <tr>
                                                <td>116</td>
                                                <td>Dimitris Poursanidis (Foundation for Research and Technology -
                                                    Hellas (FORTH)), Emmanouil Panagiotakis (Foundation for Research and
                                                    Technology - Hellas (FORTH)) and Nektarios Chrysoulakis (Foundation
                                                    for Research and Technology - Hellas (FORTH))
                                                </td>
                                                <td>Sub-pixel Material Fraction Mapping in the UrbanScape using PRISMA
                                                    Hyperspectral Imagery
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/earth-observation-for-integrated-risk-assessment.html"
                                               target="_blank">Special Session 7 - EO for integrated risk assessment,
                                                urban adaptation towards Climate Change and Sustainable Urban
                                                Development</a> (Friday May 19 | 14.00-15.30 | Place: Experimental
                                            Stage) <br>
                                            <span class="session-chairs">Chairs: Julia Nerantzia Tzortzi (Politecnico di Milano) and Stefano Salvi (Istituto Nazionale di Geofisica e Vulcanologia (INGV))</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>18</td>
                                                <td>Ellen Banzhaf (Helmholtz Centre for Environmental Research - UFZ)
                                                    and Sebastian Elze (Helmholtz Centre for Environmental Research -
                                                    UFZ)
                                                </td>
                                                <td>High-resolution monitoring to infer the dynamics of different
                                                    ecosystem services in a fast-growing city
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Thomas Krauß (DLR - German Aerospace Center), Susanne Weyand (DLR -
                                                    German Aerospace Center), Veronika Gstaiger (DLR - German Aerospace
                                                    Center), Franz Kurz (DLR - German Aerospace Center), Alexandre
                                                    Wiefels (HEAD Aerospace Group) and Shuhai Yu (Chang Guang Satellite
                                                    Technology Co., Ltd)
                                                </td>
                                                <td>Parallel Acquisition of Airborne and Satellite Nighttime Datasets
                                                    over Oldenburg
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Ilias Agathangelidis (National and Kapodistrian University of
                                                    Athens), George Blougouras (National and Kapodistrian University of
                                                    Athens), Constantinos Cartalis (National and Kapodistrian University
                                                    of Athens), Anastasios Polydoros (National and Kapodistrian
                                                    University of Athens), Thaleia Mavrakou (National and Kapodistrian
                                                    University of Athens) and Chris Tzanis (National and Kapodistrian
                                                    University of Athens)
                                                </td>
                                                <td>Surface thermal effects of parks in Mediterranean cities: an
                                                    investigation under typical summer conditions, heatwaves and
                                                    droughts
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>114</td>
                                                <td>Richard Teeuw (University of Portsmouth), Athanasios V. Argyriou
                                                    (ERATOSTHENES Centre of Excellence), Oren Lieberman (University of
                                                    Portsmouth) and Mark Cannata (Kassandra Project, Kassandra Srl)
                                                </td>
                                                <td>Geoinformatics for Caribbean hurricane risk management and improved
                                                    community resilience
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>123</td>
                                                <td>Annekatrin Metz-Marconcini (German Aerospace Center (DLR)), Stefanie
                                                    Lumnitz (European Space Agency (ESA)), Mattia Marconcini (German
                                                    Aerospace Center (DLR)), Francesca Elisa Leonelli (European Space
                                                    Agency (ESA)), Patrick Griffiths (European Space Agency (ESA)) and
                                                    Marc Paganini (European Space Agency (ESA))
                                                </td>
                                                <td>Green Transition from Space: actionable information to support
                                                    Sustainable Cities planning
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>124</td>
                                                <td>Julia Nerantzia Tzortzi (Politecnico di Milano), Maria Stella Lux
                                                    (Politecnico di Milano), Rita Maria Cristina Musacchio (Politecnico
                                                    di Milano) and Carlo Andrea Castiglioni (Politecnico di Milano)
                                                </td>
                                                <td>Integrating Earth-Observation services to improve the resilience of
                                                    Milan urban area towards Climate Change within HARMONIA project
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Session 4 - Urban climatology and ecology (Friday May 19 | 16.00-17.15 |
                                            Concert Hall) <br>
                                            <span class="session-chairs">Chairs: Jean-Philippe Gastellu-Etchegorry (Toulouse III University) and Constantinos Cartalis (National and Kapodistrian University of Athens)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>52</td>
                                                <td>Clément Bressant (University of Strasbourg), Anne Puissant
                                                    (University of Strasbourg) and Pierre-Alexis Herrault (University of
                                                    Strasbourg)
                                                </td>
                                                <td>Assessing the phenology of urban trees: a comparison of in-situ and
                                                    optical remote sensing datasets
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>66</td>
                                                <td>Tobias Leichtle (German Aerospace Center (DLR)), Sophia Helgert
                                                    (German Aerospace Center (DLR)), Matthias Müller (PIKOBYTES GmbH),
                                                    Jana Handschuh (German Aerospace Center (DLR)), Thilo Erbertseder
                                                    (German Aerospace Center (DLR)), Michael Wurm (German Aerospace
                                                    Center (DLR)) and Hannes Taubenböck (German Aerospace Center (DLR))
                                                </td>
                                                <td>Opposing land surface and air temperatures from remote sensing and
                                                    Citizen Science for quantification of the Urban Heat Island effect
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>81</td>
                                                <td>Robbe Neyns (VUB), Kyriakos Efthymiadis (VUB), Pieter Libin (VUB)
                                                    and Frank Canters (VUB)
                                                </td>
                                                <td>Tree species mapping in the Brussels Capital Region using deep
                                                    learning and data fusion
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>93</td>
                                                <td>Zhijun Zhen (CESBIO, Toulouse III University), Najmeddine
                                                    Benromdhane (CESBIO, Toulouse III University), Abdelaziz Kallel
                                                    (CRNS), Yingjie Wang (CESBIO, Toulouse III University), Omar Regaieg
                                                    (CESBIO, Toulouse III University), Paul Boitard (CESBIO, Toulouse
                                                    III University), Lucas Landier (CNES), Eric Chavanon (CESBIO,
                                                    Toulouse III University), Nicolas Lauret (CESBIO, Toulouse III
                                                    University), Jordan Guilleux (CESBIO, Toulouse III University),
                                                    Tiangang Yin (Hong Kong Polytechnic University), Jonathan
                                                    Leon-Tavares (VITO NV Remote Sensing) and Jean-Philippe
                                                    Gastellu-Etchegorry (CESBIO, Toulouse III University)
                                                </td>
                                                <td>DART: a 3D radiative transfer model for urban studies</td>
                                            </tr>
                                            <tr>
                                                <td>117</td>
                                                <td>Emmanouil Panagiotakis (Foundation for Research and Technology -
                                                    Hellas (FORTH)), Giorgos Kochilakis (Foundation for Research and
                                                    Technology - Hellas (FORTH)), Dimitris Tsirantonakis (Foundation for
                                                    Research and Technology - Hellas (FORTH)), Konstantinos Politakos
                                                    (Foundation for Research and Technology - Hellas (FORTH)), Dimitris
                                                    Poursanidis (Foundation for Research and Technology - Hellas
                                                    (FORTH)) and Nektarios Chrysoulakis (Foundation for Research and
                                                    Technology - Hellas (FORTH))
                                                </td>
                                                <td>A web-based tool for supporting USM in Heraklion</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="toggle toggle-border">
                                    <div id="berlin" class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed fa fa-plus"></i>
                                        </div>
                                        <div class="toggle-title">
                                            <a class="text-decoration-underline"
                                               href="special-sessions/future-settlement-growth-modelling-with-eo-products.html"
                                               target="_blank">Special Session 8 - Future settlement growth modelling
                                                with EO products</a> (Friday May 19 | 16.00-17.15 | Place: Experimental
                                            Stage) <br>
                                            <span class="session-chairs">Chairs: Felix Bachofer (German Aerospace Center (DLR)) and Andreas Rienow (Ruhr University Bochum)</span>
                                        </div>
                                    </div>
                                    <div class="toggle-content" style="display: none;">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 47.5%;">Authors</th>
                                                <th style="width: 47.5%;">Title</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>31</td>
                                                <td>Andreas Rienow (Ruhr University Bochum)</td>
                                                <td>Modeling Future Urban Expansion based on Global Settlement Products
                                                    – A Comparative Study
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>Jonathan Prexl (University of the Bundeswehr Munich) and Michael
                                                    Schmitt (University of the Bundeswehr Munich)
                                                </td>
                                                <td>The Potential of Sentinel-2 Data for Global Building Footprint
                                                    Mapping with High Temporal Resolution
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>Melika Ghobakhloo (University of New Brunswick), Yun Zhang
                                                    (University of New Brunswick) and Sasha Mullally (University of New
                                                    Brunswick)
                                                </td>
                                                <td>Preliminary Study of Urban Land Use Classification Using Historical
                                                    Aerial Photos and AI Technology
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>60</td>
                                                <td>Zhiyuan Wang (German Aerospace Center (DLR)), Mattia Marconcini
                                                    (German Aerospace Center (DLR)), Linh Hoang Khanh Nguyen (Hue
                                                    University), Tung Gia Pham (Hue University) and Felix Bachofer
                                                    (German Aerospace Center (DLR))
                                                </td>
                                                <td>Settlement Growth Prediction exploiting EO-based Time Series with
                                                    the Spatio-Temporal Matrix Approach: a Case Study for the City of
                                                    Hue, Vietnam
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>61</td>
                                                <td>Christian Geiß (German Aerospace Center (DLR)), Jana Maier (German
                                                    Aerospace Center (DLR)), Emily So (University of Cambridge) and Yue
                                                    Zhu (University of Cambridge)
                                                </td>
                                                <td>LSTM models for spatiotemporal extrapolation of population data</td>
                                            </tr>
                                            </tbody>
                                        </table>
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
