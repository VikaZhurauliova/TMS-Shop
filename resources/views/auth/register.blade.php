@extends('app')
@section('content')
<!-- Body Inner -->
<div class="body-inner">
    <!-- Section -->
    <section class="fullscreen" style="background-image: url({{ asset('/images/banner/4.jpg') }})">
        <div class="container container-fullscreen">
            <div class="text-middle">
{{--                <div class="text-center m-b-30">
                    <a href="index.html" class="logo">
                        <img src="images/logo-dark.png" alt="Polo Logo">
                    </a>
                </div>--}}
                <div class="row">
                    <div class="col-lg-6 center p-40 background-white b-r-6">
                        <form class="form-transparent-grey" action="{{ route('auth.register')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Register New Account</h3>
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Name</label>
                                    <input value="{{ old('name') }}"type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Email</label>
                                    <input value="{{ old('email') }}" type="email" name="email" placeholder="Email" class="form-control" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="sr-only">Confirm password</label>
                                    <input type="password" name="password_confirmation" placeholder="Password confirm" class="form-control" required>
                                </div>
                                <div class="col-lg-12 form-group">
                                    @foreach($errors->all() as $key => $error)
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{$error}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 form-group">
                                    <button class="btn" type="submit">Register New Account </button>
                                </div>
                            </div>
                        </form>
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
