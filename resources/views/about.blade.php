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
                    <h1>{{__('about_our_company')}}</h1>
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
                        <h2>{{__('about_us')}}</h2>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">{{__('company_description_1')}}</div>
                        <div class="col-lg-6">{{__('company_description_2')}}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="row">
            <div style="background-color:#917d5d" class="col-lg-4">
                <h1 class="text-lg text-uppercase">01.</h1>
                <h3>{{__('concept')}}</h3>
                <span>{{__('concept_description')}}</span>
            </div>

            <div style="background-color:#a08c6c" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <h3>{{__('development')}}</h3>
                <span>{{__('development_description')}}</span>
            </div>

            <div style="background-color:#ad9979" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <h3>{{__('testing')}}</h3>
                <span>{{__('testing_description')}}</span>
            </div>
        </div>
    </section>
    <section class="background-grey">
        <div class="container">
            <div class="heading-text heading-section text-center">
                <h2>{{__('our_team')}}</h2>
                <span class="lead">{{__('our_team_description')}}</span>
            </div>
            <div class="row team-members team-members-shadow m-b-40">
                <div class="col-lg-3">
                    <div class="team-member">
                        <div class="team-image">
                            <img src="{{asset('/images/team/1.jpg')}}">
                        </div>
                        <div class="team-desc">
                            <h3>{{__('employee_1')}}</h3>
                            <span>{{__('employee_1_title')}}</span>
                            <p>{{__('employee_1_description')}} </p>
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
                            <h3>{{__('employee_2')}}</h3>
                            <span>{{__('employee_2_title')}}</span>
                            <p>{{__('employee_2_description')}}</p>
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
                            <h3>{{__('employee_3')}}</h3>
                            <span>{{__('employee_3_title')}}</span>
                            <p>{{__('employee_3_description')}}</p>
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
                            <h3>{{__('employee_4')}}</h3>
                            <span>{{__('employee_4_title')}}</span>
                            <p>{{__('employee_4_description')}}</p>
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

