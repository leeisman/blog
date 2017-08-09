@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="rwd-slide cycle-slideshow">
            <img src="images/slide2.jpg">
            <img src="images/slide.jpg">
            <img src="images/slide1.jpg">
        </div>
    </div>


    <div class="container">
        <div class="col-md-2">
            <div class="pad1">
                <ul class="list">
                    <h3></h3>
                    <li><a class="link" data-link="introduction" href="#">公司簡介</a></li>
                    <li><a class="link" data-link="iso" href="#">ISO證書</a></li>
                    <li><a class="link" data-link="insurance" href="#">產品責任險</a></li>

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
                                    <h2 class="font-welcome-title"><span >公司簡介</span></h2>
                                </div>
                            </h3>

                            <div class="gradient-content">
                                <span class="font-span">公司歷史</span>
                                <p class="editor">
                                    騏駿科技有限公司成立於2000年9月，為專業電池加工組裝廠，此電池組之成品，可應用於3C及可攜式產品上。因應不同類別產業客戶研發設計出客製化產品，並提供客戶解決方案。本公司產品之電池芯採用擁有多國專利與品質穩定的日系大廠，產品自原料採購、檢驗、生產、封裝、檢測、出貨一貫流程皆在臺灣運作，可提升顧客產品品質；另為強化產品服務，特別投保富邦全球100萬美金高額意外產險，以及一年產品保固，本公司使命為提供客戶高品質、高穩定、高水準的產品與服務。
                                </p>

                                <span class="font-span">使命與願景</span>
                                <p class="editor">
                                    騏駿科技在台灣的包裝廠全面實施ISO 9001品質系統，流暢的生產線與技術是騏駿引以為傲的。工廠的生產設備每年都會進行檢驗與校正，讓客戶安心。同時也歡迎客戶至工廠參觀。
                                </p>

                                <span class="font-span">我們的產品</span>
                                <p class="editor">
                                    騏駿科技不斷精進自我，現今合作客戶除了台灣，更有日本、香港、美國等等。我們希望透過技術與品質的提升，讓更多客戶認識騏駿。期許騏駿成為知名的國際企業，讓騏駿的產品遍及全世界。
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
                                    <h2 class="font-welcome-title"><span >ISO認證</span></h2>
                                </div>
                            </h3>

                            <div class="container">
                                <div class="gradient-content col-md-3">
                                    <img src="images/iso9001.jpg" class="img-thumbnail" alt="Cinque Terre" width="304"
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
                                    <h2 class="font-welcome-title"><span >產品責任險</span></h2>
                                </div>
                            </h3>

                            <div class="col-md-12 gradient-content">

                                <div class="row" style="margin-top: 10px">
                                    <div class="col-md-6">

                                        <img src="images/taiwan_insurance.jpg" class="insurance"
                                             alt="騏駿產險">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/foreign_insurance.jpg" class="insurance"
                                             alt="騏駿產險">
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
