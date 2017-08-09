@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="rwd-slide cycle-slideshow">
            <img src="images/slide2.jpg">
            <img src="images/slide.jpg">
            <img src="images/slide1.jpg">
        </div>
    </div>


    <div class="content page1">
        <div class="container">
            <div class="col-md-2">
                <div class="pad1">
                    <ul class="list">
                        <h3></h3>
                        <li><a  class="link" data-link="introduction" href="#">About Us</a></li>
                        <li><a  class="link" data-link="iso" href="#">ISO Certificate</a></li>
                        <li><a  class="link" data-link="insurance" href="#">Product Insurance</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-10">


                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="introduction" class="emp_box">

                                <h3>
                                    <div class="page-header content-title">
                                        <h2 class="font-welcome-title"><span >About Us</span></h2>
                                    </div>
                                </h3>

                                <div class="gradient-content">
                                    <p class="editor">
                                        <span class="font-span">History</span></br>
                                        Chijiun Tech has developed the battery combination and assembly business since
                                        2000. Not only supplying the various customized battery packs to different
                                        requirements in Taiwan, but exporting to foreign countries, Japan and USA.
                                    </p>

                                    <p class="editor">
                                        <span class="font-span">Mission/Vision</span></br>
                                        No matter for building in devices or instruments or individual pack,the quality
                                        consistence and reliable is the core concept that we do research and develop. To
                                        assure the device or power transition works properly and stably with longest
                                        power life is the major concern we bear in mind.
                                        The liability insurance, we work with major insurance company, Fubon in Taiwan,
                                        for 1 million a year to assure the unexpected matter raised can be covered
                                        globally and managed properly. No worries of the accident matter.
                                    </p>

                                    <p class="editor">
                                        <span class="font-span">Quality</span></br>

                                        The ISO 9001 quality control assurance is carried out in the office and factory
                                        facilities. Do and proceed we planed and researched, correct the procedure
                                        whatever or whenever should be revised to be right.
                                        The superior quality is being watched and mandated to compete correctly. Chijiun
                                        Tech maintains the reputation in the industrial and a good fame for quality
                                        products.
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="iso" class="emp_box">
                                <h3>
                                    <div class="page-header content-title">
                                        <h2 class="font-welcome-title"><span >ISO Certificate</span></h2>
                                    </div>
                                </h3>
                                <div class="container">
                                    <div class="gradient-content col-md-3">
                                        <img src="images/iso9001.jpg" class="img-thumbnail" alt="Cinque Terre"
                                             width="304"
                                             height="236">

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="insurance" class="emp_box">

                                <h3>
                                    <div class="page-header content-title">
                                        <h2 class="font-welcome-title"><span >Product Insurance</span></h2>
                                    </div>
                                </h3>

                                <div class="col-md-12 gradient-content">

                                    <div class="row" style="margin-top: 10px">
                                        <div class="col-md-6">

                                            <img src="images/taiwan_insurance.jpg" class="insurance"
                                                 alt="chijiun">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="images/foreign_insurance.jpg" class="insurance"
                                                 alt="chijiun">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </section>

            </div>
        </div>

    </div>
    </div>

    <script>

        $('.link ').click(function (e) {

            $('.emp_box').hide();
            $('#' + $(this).data('link')).show();
            e.preventDefault();
        });

        $('.emp_box').hide();
        $('#introduction').show();

    </script>

@endsection
