@extends('app')
@section('content')

    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Section -->
        <section class="fullscreen" data-bg-parallax="{{ asset('/images/banner/4.jpg') }}">
            <div class="container">
                <div>
                    {{--                <div class="text-center m-b-30">
                                        <a href="index.html" class="logo">
                                            <img src="images/logo-dark.png" alt="Polo Logo">
                                        </a>
                                    </div>--}}
                    <div class="row">
                        <div class="col-lg-5 center p-50 background-white b-r-6">
                            <h3>{{__('login_to_account')}}</h3>
                            <form action="{{ route('auth.login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="sr-only">{{__('username_email')}}</label>
                                    <input name="email" type="text" class="form-control"
                                           placeholder="{{__('username_email')}}">
                                </div>
                                <div class="form-group m-b-5">
                                    <label class="sr-only">{{__('password')}}</label>
                                    <input name='password' type="password" class="form-control" placeholder="{{__('enter_password')}}">
                                </div>
                                <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> {{__('remember_me')}}</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-left form-group">
                                    <button type="submit" class="btn">{{__('login')}}</button>
                                </div>
                            </form>
                            <p class="small">{{__('forget_password')}}<a href="{{ route('password.request') }}">{{__('click_here')}}</a></p>
                            <p class="small">{{__('do_not_have_account')}}<a href="{{ route('auth.registerPage') }}">{{__('register_new_account')}}</a></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Section -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
@endsection
