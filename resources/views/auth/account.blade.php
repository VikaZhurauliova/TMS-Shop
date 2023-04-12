@extends('app')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="h4">{{__('profile')}}</span>
                            <p class="text-muted">{{__('change_account_information')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('account.update') }}" method="POST">
                                @csrf
                                <div class="tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab"
                                               href="#tabProfile" role="tab" aria-controls="home" aria-selected="true">{{__('profile_information')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabAddress"
                                               role="tab" aria-controls="contact" aria-selected="false">{{__('address_information')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabPassword"
                                               role="tab" aria-controls="profile" aria-selected="false">{{__('password')}}</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="tabProfile" role="tabpanel"
                                             aria-labelledby="tab-profile">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="first_name">{{__('name')}}</label>
                                                    <input type="text" class="form-control" name="first_name"
                                                           value="{{ $user->information?->first_name }}"
                                                           placeholder="{{__('enter_name')}}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="last_name">{{__('last_name')}}</label>
                                                    <input type="text" class="form-control" name="last_name"
                                                           value="{{ $user->information?->last_name }}"
                                                           placeholder="{{__('enter_last_name')}}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="gender">{{__('date_of_birth')}}</label>
                                                    <input class="form-control" type="date"
                                                           value="{{ $user->information?->birthday }}" name="birthday">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="sex">{{__('gender')}}</label>
                                                    <select class="form-control" name="sex">
                                                        <option value="">{{__('select_gender')}}</option>
                                                        <option value="female">{{__('female')}}</option>
                                                        <option value="male">{{__('male')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="phone">{{__('telephone')}}</label>
                                                    <input class="form-control" type="tel"
                                                           value="{{ $user->information?->phone }}" name="phone"
                                                           placeholder="{{__('enter_telephone')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabAddress" role="tabpanel"
                                             aria-labelledby="tab-billing">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="country">{{__('country')}}</label>
                                                    <select name="country" class="form-control">
                                                        <option value=""></option>
                                                        @foreach($geos as $key => $geo)
                                                            @if($user->information?->country == $key)
                                                                <option value="{{ $key }}"
                                                                        selected>{{ $geo->native }}</option>
                                                            @else
                                                                <option value="{{ $key }}">{{ $geo->native }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="city">{{__('city')}}</label>
                                                    <input type="text" class="form-control"
                                                           value="{{ $user->information?->city }}" name="city"
                                                           placeholder="{{__('enter_city')}}">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="timezone">Timezone</label>
                                                    <select name="timezone" class="form-control">
                                                        <option value=""></option>
                                                        @foreach($timezones as $key => $timezone)
                                                            @if($user->information?->timezone == $key)
                                                                <option value="{{ $key }}"
                                                                        selected>{{ $timezone }}</option>
                                                            @else
                                                                <option value="{{ $key }}">{{ $timezone }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabPassword" role="tabpanel"
                                             aria-labelledby="tab-password">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">{{__('old_password')}}</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">{{__('new_password')}}</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">{{__('confirm_password')}}</label>
                                                        <input class="form-control" type="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-sm">{{__('save_changes')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
