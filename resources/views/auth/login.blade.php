@extends('layouts.app')

@section('content')
<style>
    .set-btn{
        font-size: 18px;
        background: aliceblue;
        color: blue;
        margin: 0px 3px;
    }
</style>
<div class="container">
@include('includes.toastr') <!-- toastr Show  -->
    <div>
        @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session('success')}} 
                <button type='button' class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        @elseif(Session::has('error'))
        <div class="alert alert-danger text-center">
            {{Session('error')}} 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        @endif
    </div>
    <section class="get-in-touch">
        <h1 class="title" style="padding-top: 16px;">@lang('lang.login')</h1>
        <form class="contact-form row" action="{{ route('login.store') }}" method="post"  >  
        @csrf
            <div class="form-field col-lg-12 ">
                <input id="email" class="input-text js-input" type="email" name="email" value="{{old('email')}}">
                <label class="label" for="email">{{ __('Email Address') }}</label>
                @error('email')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
            </div>
            <div class="form-field col-lg-12 ">
                <input id="password" class="input-text js-input" type="password" name="password" value="{{old('password')}}">
                <label class="label" for="password">{{ __('Password') }}</label>
                @error('password')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
            </div>
            <div class="form-field mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>
            </div>
            <div class="form-field col-lg-12">
                <button class="submit-btn" type="submit">@lang('lang.submitbtn') </button>
                <a href="javascript:void(0)" class="btn set-btn"><i class="fa fa-facebook"></i> </a> 
                <a href="{{ route('google.login') }}" class="btn set-btn"><i class="fa fa-google-plus"></i></a> 
                <a href="{{ route('github.login') }}" class="btn set-btn"><i class="fa fa-github"></i></a> 
                <a href="{{ route('register') }}" class="submit-btn indexpage">@lang('lang.createbtn')</a>
            </div>
        </form>
   </section>
</div>
@endsection
