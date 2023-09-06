@extends('theme.default')

@section('content')
<!-- ==================== Start Header ==================== -->

<header class="pages-header bg-img valign parallaxie" data-background="{!! asset('img/about.jpg') !!}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>About Us</h1>
                    <div class="path">
                        <a href="{!! route('home') !!}">Home</a><span>/</span><a href="{!! route('about') !!}" class="active">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Header ==================== -->

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">About Us</h6>
                    <h2 class="mb-20 playfont">PASSORN <br> Private Pool Villa</h2>
                    <p>ภายใต้การฟอร์มทีมของผู้บริหาร บริษัท อินเตอร์พูลสปา จำกัด จากการสั่งสม ประสบการณ์ยาวนานกว่า20ปีบนถนนธุรกิจอสังหาริมทรัพย์และสระว่ายน้ำ โครงการ ภัสสร พลูวิลล่า (Passorn Pool Villa) จึงถือกำเนิดขึ้นและยังได้รับการตอบรับอย่างท่วมท้น อีกทั้งยังเป็นโครงการที่ผู้บริโภคให้ความไว้วางใจในด้านคุณภาพ การออกแบบ 
                        </p>
                    <ul>
                        <li>Architecture</li>
                        <li>Interior Design</li>
                        <li>Pool Villa</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ab-exp">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <div class="pattern bg-img bg-repeat" data-background="img/line-pattern.png">
                            </div>
                        </div>
                        <div class="col-md-8 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img mb-20 wow imago">
                                <img src="img/house/1689746570505.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="img/house/1689746566522.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="years-exp">
                                <div class="exp-text">
                                    <h2 class="custom-font">20ปี</h2>
                                    <h6>ประสบการณ์</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials grid " style="padding-bottom: 100px;">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Vision</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">วิสัยทัศน์</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testim">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="quote-icon"><img src="{!! asset('img/clients/quote.svg') !!}" alt=""></span>
                        <div class="cont">
                            <p class="">"BEST SERVICE IS THE FIRST WE DO"
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="{!! asset('img/user.png') !!}" alt="">
                            </div>
                            <h6>Passorn Pool Villa <span>ภัสสรพลูวิลล่า</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="navs mt-30">
                    <span class="prev">
                        <i class="fas fa-long-arrow-alt-left"></i>
                    </span>
                    <span class="next">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== Start Skills Circle ==================== -->

<section class="skills-circle section-padding bg-img parallaxie" data-background="{!! asset('img/house/1689746567404.jpg') !!}" data-overlay-dark="7">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Skills</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">Best Skills</h4>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.9">
                        <span class="custom-font">90%</span>
                        <h6>ARCHITECTURE</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.75">
                        <span class="custom-font">75%</span>
                        <h6>INTERIOR DESIGN</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.88">
                        <span class="custom-font">88%</span>
                        <h6>INOVATION</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="item text-center">
                    <div class="skill" data-value="0.83">
                        <span class="custom-font">83%</span>
                        <h6>CONTEMPORARY IDEAS</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Skills Circle ==================== -->



@endsection