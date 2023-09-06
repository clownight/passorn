@extends('theme.default')

@section('content')
<!-- ==================== Start Slider ==================== -->

<header class="slid-half">
    <div id="js-cta-slider" class="cta__slider-wrapper nofull swiper-container">
        <div class="swiper-wrapper cta__slider">
            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="img/house/1689746572601.jpg" data-overlay-dark="2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font tag-house">บ้านเดี่ยว</h5>
                                        <h1 data-splitting class="slid-text-shadow"><a href="#0">
                                            Minimal Style
                                            </a></h1>
                                    </div>
                                    <p>บ้านที่คิดออกแบบสะท้อนความเป็นคุณ เพราะบ้านไม่ใช่เพียงที่อยู่อาศัย แต่ยังบ่งบอกถึงความสำเร็จ ตัวตน ความภูมิใจของคุณ</p>
                                    <a href="#0" class="btn-curve btn-color mt-30">
                                        {{-- <span>Discover Work</span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM -->

            <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="img/house/1689746567654.jpg" data-overlay-dark="2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font tag-house">บ้านเดี่ยว</h5>
                                        <h1 data-splitting  class="slid-text-shadow playfont"><a href="#0">Luxury Style</a>
                                        </h1>
                                    </div>
                                    <p>บ้านที่คิดออกแบบสะท้อนความเป็นคุณ เพราะบ้านไม่ใช่เพียงที่อยู่อาศัย แต่ยังบ่งบอกถึงความสำเร็จ ตัวตน ความภูมิใจของคุณ</p>
                                    <a href="#0" class="btn-curve btn-color mt-30">
                                        {{-- <span>Discover Work</span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM -->

            {{-- <!-- SLIDER ITEM -->
            <div class="cta__slider-item swiper-slide">
                <div class="media-wrapper slide-inner valign">
                    <div class="bg-img" data-background="img/slid/03.jpg" data-overlay-dark="5"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="caption">
                                    <span class="top-corn"></span>
                                    <span class="bottom-corn"></span>
                                    <div class="custom-font">
                                        <h5 class="thin custom-font">Elegant &</h5>
                                        <h1 data-splitting><a href="#0">
                                                Unique Design
                                            </a>
                                        </h1>
                                    </div>
                                    <p>Right design and right ideas matter a lot of in interior design
                                        business. <br> a style that makes a statement.</p>
                                    <a href="#0" class="btn-curve btn-color mt-30">
                                        <span>Discover Work</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ITEM --> --}}
        </div>
        <div class="cta__slider-arrows">
            {{-- <i id="js-cta-slider-next" class="cta__slider-arrow cta__slider-arrow--next">
                <i class="fas fa-chevron-up"></i>
            </i>
            <i id="js-cta-slider-previous" class="cta__slider-arrow cta__slider-arrow--previous">
                <i class="fas fa-chevron-down"></i>
            </i> --}}
        </div>
    </div>
    <div class="swiper-pagination top custom-font"></div>
</header>

<!-- ==================== End Slider ==================== -->

<!-- ==================== Start about ==================== -->

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 valign">
                <div class="exp-content nopat wow fadeInUp" data-wow-delay=".3s">
                    <h6 class="sub-title">About Us</h6>
                    <h2 class="mb-20 playfont">PASSORN <br> Private Pool Villa</h2>
                    <p>เราจะดูแล “คุณ”
                        ไม่สิ้นสุด ด้วยบริการที่ครอบคลุม
                        ทุกไลฟ์สไตล์ ตั้งแต่ก้าวแรกที่เยี่ยมชมโครงการ
                        จนตลอดช่วงเวลาการอยู่อาศัย
                        </p>
                    <ul>
                        <li>Architecture</li>
                        <li>Interior Design</li>
                        <li>Pool Villa</li>
                    </ul>
                    <a href="{!! route('about') !!}" class="btn-curve btn-color mt-30">
                        <span>Read More</span>
                    </a>
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

<!-- ==================== End about ==================== -->
 <!-- ==================== Start Services ==================== -->

 <section class="services section-padding bg-gray">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">บริการของเรา</h4>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
                <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".7s" data-background="img/house/1689746568211.jpg">
                    <span class="icon flaticon-interior-design"></span>
                    <h6 class="mb-20">3D Modeling</h6>
                    <p>สร้างแบบจำลอง (Model) 3 มิติ ด้วยโปรแกรมทางคอมพิวเตอร์ เพื่อที่สามารถเห็นแบบจำลองนั้นได้จากทุกมุมมอง</p>
                    {{-- <a href="#0" class="more custom-font mt-30">Read More</a> --}}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".3s" data-background="img/house/1689746571420.jpg">
                    <span class="icon flaticon-houses"></span>
                    <h6 class="mb-20">Architecture</h6>
                    <p>กระบวนการออกแบบสถาปัตยกรรมที่อยู่อาศัยให้ออกมาน่าอยู่ ถูกต้อง สวยงาม</p>
                    {{-- <a href="#0" class="more custom-font mt-30">Read More</a> --}}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="item-bx bg-img wow fadeInUp" data-wow-delay=".5s" data-background="img/house/1689746569404.jpg">
                    <span class="icon flaticon-living-room"></span>
                    <h6 class="mb-20">Interior Design</h6>
                    <p>การออกแบบตกแต่งภายในอาคาร หรืองานสถาปัตยกรรม เพื่อให้สถานที่ต่างๆ ได้รับการออกแบบให้ออกมามีความสวยงาม ซึ่งต้องมีการควบคู่ไปกับประโยชน์ในการใช้งาน ที่จะต้องตอบโจทย์ความสะดวกสบายในการใช้ชีวิ</p>
                    {{-- <a href="#0" class="more custom-font mt-30">Read More</a> --}}
                </div>
            </div>



        </div>
    </div>
</section>

<!-- ==================== End Services ==================== -->


<!-- ==================== Start works ==================== -->

<section class="portfolio full-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 cluom current" data-tab="tab-1">
                <div class="info">
                    <h6 class="custom-font">House</h6>
                    <h5>บ้านตัวอย่าง Minimal</h5>
                </div>
                <div class="more">
                    <a href="{!! route('project_detail',['บ้านตัวอย่าง Minimal']) !!}">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-2">
                <div class="info">
                    <h6 class="custom-font">House</h6>
                    <h5>บ้านตัวอย่าง Luxury</h5>
                </div>
                <div class="more">
                    <a href="{!! route('project_detail',['บ้านตัวอย่าง Luxury']) !!}">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-3">
                <div class="info">
                    <h6 class="custom-font">House</h6>
                    <h5>ภาพและ 3D ภัสสรหาด (ปึกเตียน)</h5>
                </div>
                <div class="more">
                    <a href="{!! route('project_detail',['ภาพและ 3D ภัสสรหาด (ปึกเตียน)']) !!}">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 cluom" data-tab="tab-4">
                <div class="info">
                    <h6 class="custom-font">House</h6>
                    <h5>ภาพและ 3D ภัสสรหาด (ภูเก็ตป่าคลอก)</h5>
                </div>
                <div class="more">
                    <a href="{!! route('project_detail',['ภาพและ 3D ภัสสรหาด (ภูเก็ตป่าคลอก)']) !!}">View Project <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="glry-img">
        <div id="tab-1" class="bg-img tab-img current" data-background="img/house/1689746570702.jpg" data-overlay-dark="2"></div>
        <div id="tab-2" class="bg-img tab-img" data-background="img/house/1689746567404.jpg" data-overlay-dark="2">
        </div>
        <div id="tab-3" class="bg-img tab-img" data-background="img/house/001/001/3D/01.jpg" data-overlay-dark="2">
        </div>
        <div id="tab-4" class="bg-img tab-img" data-background="img/house/002/002/3D/01.jpg" data-overlay-dark="2">
        </div>
    </div>
</section>

<!-- ==================== End works ==================== -->



<!-- ==================== Start process ==================== -->

{{-- <section class="process section-padding bg-img bg-repeat" data-background="img/dots.png">
    <div class="container">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">How We Do It</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">Work Process</h4>
                </div>
            </div>
        </div>
        <div class=" row">
                        <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".3s">
                            <div class="item">
                                <div class="bg-img" data-background="img/process/01.jpg">
                                    <h3 class="numb custom-font">01</h3>
                                </div>
                                <div class="cont">
                                    <h6 class="mb-10">Concept</h6>
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".5s">
                            <div class="item">
                                <div class="bg-img" data-background="img/process/02.jpg">
                                    <h3 class="numb custom-font">02</h3>
                                </div>
                                <div class="cont">
                                    <h6 class="mb-10">Design Process</h6>
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 coulmn wow fadeInUp" data-wow-delay=".4s">
                            <div class="item">
                                <div class="bg-img" data-background="img/process/03.jpg">
                                    <h3 class="numb custom-font">03</h3>
                                </div>
                                <div class="cont">
                                    <h6 class="mb-10">Supervision</h6>
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="item">
                                <div class="bg-img" data-background="img/process/04.jpg">
                                    <h3 class="numb custom-font">04</h3>
                                </div>
                                <div class="cont">
                                    <h6 class="mb-10">Budget Planning</h6>
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod.</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
</section> --}}

<!-- ==================== End process ==================== -->



<!-- ==================== Start Team ==================== -->

{{-- <section class="team section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="tit">
                    <h6 class="custom-font mb-10 wow fadeInDown" data-wow-delay=".3s">Some thoughts from Us</h6>
                    <h3 class="wow flipInX" data-wow-delay=".3s">Our Employees</h3>
                    <p class="wow fadeInUp" data-wow-delay=".3s">We feel proud for our expert team members beatae
                        ipsum dolor sit amet, consectetur
                        adipisicing elit mauris vitae consequat nibh, vitae interdum mi.</p>
                    <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                        <span class="prev">
                            <i class="fas fa-long-arrow-alt-left"></i>
                        </span>
                        <span class="next">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-container">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/1.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Hasib sharif</h5>
                            <span>General Manager</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/2.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Jonson Leo</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/3.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Leio Man</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/4.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Robert Front</h5>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/5.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Legender Mao</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="img wow imago">
                            <img src="img/team/6.jpg" alt="">
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-behance"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="info">
                            <h5>Matt Huk</h5>
                            <span>3D Visualization</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dots-half bg-img bg-repeat" data-background="img/dots.png"></div>
</section> --}}

<!-- ==================== End Team ==================== -->



<!-- ==================== Start Testimonials ==================== -->

{{-- <section class="testimonials grid section-padding bg-img parallaxie" data-background="img/001.jpg"
    data-overlay-dark="9">
    <div class="container mb-50">
        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Testimonials</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">What People Says?</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testim wow fadeInUp" data-wow-delay=".3s">
                    <div class="item">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="playfont">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/1.jpg" alt="">
                            </div>
                            <h6>Mitchl Jhon <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="playfont">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/2.jpg" alt="">
                            </div>
                            <h6>Jane Smith <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="playfont">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/3.jpg" alt="">
                            </div>
                            <h6>Alison Clutcher <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                    <div class="item">
                        <span class="quote-icon"><img src="img/clients/quote.svg" alt=""></span>
                        <div class="cont">
                            <p class="playfont">"I just love their design for all stunning details. You must know
                                what can you do for a project before taking it, but with Archo, the sky is the
                                limit."
                            </p>
                        </div>
                        <div class="info">
                            <div class="author">
                                <img src="img/clients/4.jpg" alt="">
                            </div>
                            <h6>Peter Jefferson <span>Envato Customer</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
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
</section> --}}

<!-- ==================== End Testimonials ==================== -->



<!-- ==================== Start brands ==================== -->

{{-- <div class="brands bg-gray">
    <div class="container box-top wow fadeInUp" data-wow-delay=".3s">
        <div class="row">
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/01.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/02.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/01.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/02.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/01.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-3 col-sm-6">
                <div class="item">
                    <div class="img">
                        <img src="img/clients/brands/02.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- ==================== End brands ==================== -->



<!-- ==================== Start Blog ==================== -->

{{-- <section class="blog-grid center bg-gray section-padding">
    <div class="container">

        <div class="section-head text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Latest News</h6>
                    <h4 class="playfont wow flipInX" data-wow-delay=".5s">Our Blogs</h4>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="item wow fadeInUp md-mb50" data-wow-delay=".3s">
                    <div class="post-img">
                        <div class="img">
                            <img src="img/blog/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0">Alex Smith</a>
                            <a href="#0">Aug 06 2019</a>
                        </div>

                        <h5 class="playfont"><a href="#0">In Good Taste: Mark Finlay Architects and Interiors</a>
                        </h5>

                        <a href="blog-details.html" class="more">
                            <span class="custom-font">Read More</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="item wow fadeInUp md-mb50" data-wow-delay=".1s">
                    <div class="post-img">
                        <div class="img">
                            <img src="img/blog/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="cont">
                        <div class="info">
                            <a href="#0">Alex Smith</a>
                            <a href="#0">Aug 06 2019</a>
                        </div>

                        <h5 class="playfont"><a href="#0">Five Things You Should Know About Modern Furniture.</a>
                        </h5>

                        <a href="blog-details.html" class="more">
                            <span class="custom-font">Read More</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}

<!-- ==================== End Blog ==================== -->

@endsection