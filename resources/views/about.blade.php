@extends('app')
@section('content')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">
        <!-- Slide 2 -->
        <div class="slide kenburns" style="background-image:url('{{asset('/images/banner/1.jpg')}}');">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="slide-captions text-center text-light">
                    <!-- Captions -->
                    <span class="strong">Who we are</span>
                    <h1>About our company</h1>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->

    </div>
    <!--end: Inspiro Slider -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading-text heading-section">
                        <h2>THE COMPANY</h2>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">For us, clothes are more than just the right things. Clothing helps a
                            woman express her inner state: after all, there are moments when you want to be a playful
                            coquette, the next day - tender and fragile, and then completely a strict fan of the
                            classics. Clothing affects how other people perceive us, which means it becomes a tool that
                            can do a lot in capable hands. Clothes can give new opportunities: when we like the way we
                            look, we act with confidence.
                        </div>

                        <div class="col-lg-6">We want to be better than yesterday. We know how to hear and analyze
                            criticism and are always ready to change.
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="row">
            <div style="background-color:#917d5d" class="col-lg-4">
                <h1 class="text-lg text-uppercase">01.</h1>
                <h3>CONCEPT</h3>
                <span>Those who are ready for change, who appreciate femininity and do not want to give up comfort.</span>
            </div>

            <div style="background-color:#a08c6c" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <h3>DEVELOPMENT</h3>
                <span>We follow trends, but in the first place we always have high-quality fabrics that will not deteriorate in a couple of washes, and thoughtful cuts for a perfect fit.</span>
            </div>

            <div style="background-color:#ad9979" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <h3>TESTING</h3>
                <span>Our main goal is a satisfied customer who will receive quality products in the shortest possible time.</span>
            </div>
        </div>
    </section>
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>OUR TEAM</h2>
                <span class="lead">We are growing and developing every day, and it's all thanks to you.</span>
            </div>
            <div class="row team-members team-members-shadow m-b-40">
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('/images/team/1.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>Alex Shwed</h3>
                            <span>Sales manager</span>
                            <p>Your convenient shopping is us! </p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset("/images/team/2.jpg")}}">
                        </div>
                        <div class="team-desc">
                            <h3>Mega Derry</h3>
                            <span>Creative director</span>
                            <p>Our young company of specialists lives by work, enjoys it and improves every second.</p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('/images/team/3.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>Elena Blame</h3>
                            <span>SMM director</span>
                            <p>Thousands of positive customer reviews motivate us to do even better work.</p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('/images/team/4.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>Linda Perl</h3>
                            <span>Content maker</span>
                            <p>We are growing and developing every day, and it's all thanks to you.</p>
                            <div class="align-center">
                                <a class="btn btn-xs btn-slide btn-light" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="100">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="#" data-width="118">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a class="btn btn-xs btn-slide btn-light" href="mailto:#" data-width="80">
                                    <i class="icon-mail"></i>
                                    <span>Mail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

