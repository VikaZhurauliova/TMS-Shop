@extends('app')
@section('content')

    <!-- CONTENT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">{{__('get_in_touch')}}</h3>
                    <p>{{__('contacts_proverb')}}  Suspendisse condimentum porttitor cursus. Duis nec nulla
                        turpis. Nulla lacinia laoreet odio, non lacinia nisl malesuada vel. Aenean malesuada fermentum
                        bibendum.</p>
                    <div class="m-t-30">
                        <form class="widget-contact-form" novalidate action="{{ route('send.contacts')}}" role="form"
                              method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">{{__('name')}}</label>
                                    <input value="{{ old('name') }}" type="text" aria-required="true" name="name"
                                           required class="form-control required name" placeholder="{{__('enter_name')}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">{{__('email')}}</label>
                                    <input value="{{ old('email') }}" type="email" aria-required="true" name="email"
                                           required class="form-control required email" placeholder="{{__('enter_email')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">{{__('subject')}}</label>
                                    <input value="{{ old('subject') }}" type="text" name="subject" required
                                           class="form-control required" placeholder="{{__('enter_subject')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">{{__('message')}}</label>
                                <textarea type="text" name="message" required rows="5" class="form-control required"
                                          placeholder="{{__('enter_message')}}"></textarea>
                            </div>
                            <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;{{__('btn_send_message')}}</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">{{__('address')}}</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                @foreach($contacts as $contact)
                                    <strong>{{$contact->name}}</strong><br>
                                    {{$contact->address}}
                                    <abbr title="Phone">P:</h4> {{$contact->phone}}
                                @endforeach
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Content -->
@endsection

