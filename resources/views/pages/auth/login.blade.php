@extends('layout.auth')

@section('title', 'Rewardmerchant - Login')

@section('content')
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-12 p-5 bg-white full-height vertical-center">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-0 mr-0">
                            <img src="{{ asset('images/logo.svg') }}" class="img-fluid w-40" alt="LOGO" />
                            <h5 class="mt-3 mb-3">Welcome to Reward Merchant</h5>
                            <p>Please enter your credentals to login</p>
                        </div>
                        <livewire:components.auth.login-form />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
