@extends('layouts.header')

@section('content')


    <div class="container">
        <div class="col-md-2">
            <div class="pad1">
                <ul class="list">
                    <h3></h3>
                    <li><a class="link" data-link="application" href="#">應用領域</a></li>
                    <li><a class="link" data-link="service-introduce" href="#">服務介紹</a></li>
                    <li><a class="link" data-link="certificate" href="#">認證服務</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-10">

            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div id="application" class="emp_box">

                            <h3>
                                <div class="page-header content-title">
                                    <i class="fa fa-battery-full" style="color:blue"></i>
                                    應用領域
                                </div>
                            </h3>

                            <div class="col-md-12 gradient-content">


                                <div class="row">
                                    <div class="col-md-6 center">
                                        <a href="javascript: void(0)"><img src="../images/telecom.png"></a>
                                        <span class="span-middle">3C/IA產品電池組</span>
                                    </div>
                                    <div class="col-md-6 center">
                                        <a href="javascript: void(0)"><img src="../images/telecom.png"></a>
                                        <span class="span-middle">智慧型手機/數位相機</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        行動電源
                                    </div>
                                    <div class="col-md-6">
                                        電動機車/教踏車
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        醫療器材/儀器
                                    </div>
                                    <div class="col-md-6">
                                        行動麥克風/喇叭
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        鋰聚合物電池組開發
                                    </div>
                                    <div class="col-md-6">
                                        各項可攜式產品研發製造
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div id="service-introduce" class="emp_box">

                            <h3>
                                <div class="page-header content-title">
                                    <i class="fa fa-handshake-o" style="color:blue"></i>
                                    服務介紹
                                </div>
                            </h3>

                            <div class="col-md-12 gradient-content">


                                <div class="row">
                                    <div class="col-md-12">
                                        <i class="fa fa-battery-full margin-bottom-s" style="color:green">
                                            <a href="" class="span-middle font-s">Li-Ion</a>
                                        </i>
                                    </div>
                                    <div class="col-md-12">
                                        <i class="fa fa-battery-full margin-bottom-s" style="color:green">
                                            <a href="" class="span-middle font-s">Li-Polymer</a>
                                        </i>
                                    </div>

                                    <div class="col-md-12">
                                        <i class="fa fa-battery-full margin-bottom-s" style="color:green">
                                            <a href="" class="span-middle font-s">Ni-MH/Ni-Cd</a>
                                        </i>
                                    </div>

                                    <div class="col-md-12">
                                        <i class="fa fa-battery-full margin-bottom-s" style="color:green">
                                            <a href="" class="span-middle font-s">LiFePO4</a>
                                        </i>
                                    </div>

                                    <div class="col-md-12">
                                        <i class="fa fa-battery-full margin-bottom-s" style="color:green">
                                            <a href="" class="span-middle font-s">Coin Battery</a>
                                        </i>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="certificate" class="emp_box">

                            <h3>
                                <div class="page-header content-title">
                                    <i class="fa fa-binoculars" style="color:blue"></i>
                                    &nbsp;認證服務
                                </div>
                            </h3>
                            <span class="font-span">騏駿科技可協助各種認證諮詢與送件服務</span>

                            <div class="col-md-12 gradient-content-cornflowerblue">
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/certificate1.jpg" class="certificate-image"
                                             alt="騏駿認證">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/certificate2.jpg" class="certificate-image"
                                             alt="騏駿認證">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/certificate3.jpg" class="certificate-image"
                                             alt="騏駿認證">
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
        $('#application').show();

    </script>

@endsection
