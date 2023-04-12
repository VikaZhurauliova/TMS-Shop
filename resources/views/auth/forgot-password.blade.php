@extends('app')
@section('content')
    <section class="fullscreen login-screen" data-bg-parallax="{{ asset('img/bg-login.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 center p-50 background-white b-r-6">
                    <h3>{{__('enter_email')}}</h3>
                    <form action="{{ route('password.email')  }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="sr-only">{{__('email')}}</label>
                            <input type="email" name="email" class="form-control" placeholder="{{__('email')}}">
                        </div>
                        <div class="text-left form-group">
                            <button type="submit" class="btn">{{__('reset')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
