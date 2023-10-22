@extends('layouts.app')

@section('content')
<div class="container">
   <div>
      @if(Session::has('message'))
         <div class="alert alert-success text-center">
               {{Session('message')}} 
               <button type='button' class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
         </div>
      @endif
   </div>
   <section class="get-in-touch">
      <h1 class="title">{{ __('Register Page') }}</h1>
      <form class="contact-form row" action="{{ route('register.store') }}" method="post" >  
         @csrf
         <div class="form-field col-lg-12 ">
            <input id="name" class="input-text js-input" type="text" name="name" value="{{old('name')}}" >
            <label class="label" for="name">{{ __('Name') }}</label>
            @error('name')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12 ">
            <input id="email" class="input-text js-input" type="email" name="email" value="{{old('email')}}">
            <label class="label" for="email">{{ __('Email') }}</label>
            @error('email')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="password" class="input-text js-input" type="password" name="password" value="{{old('password')}}">
            <label class="label" for="password">{{ __('Password') }}</label>
            @error('password')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <input id="mobile" class="input-text js-input" type="number" name="mobile" value="{{old('mobile')}}">
            <label class="label" for="mobile">{{ __('Mobile') }}</label>
            @error('mobile')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <input id="pincode" class="input-text js-input" type="numder" name="pincode" value="{{old('pincode')}}">
            <label class="label" for="pincode">{{ __('Pin Code') }}</label>
            @error('pincode')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="address" class="input-text js-input" type="text" name="address" value="{{old('address')}}">
            <label class="label" for="address">{{ __('Address') }}</label>
            @error('address')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <button type="submit" class="submit-btn">{{ __('Register') }}</button>
            <a href="{{ route('login') }}" class="submit-btn indexpage">Log in</a>
         </div>
      </form>
   </section>
</div>
@endsection
