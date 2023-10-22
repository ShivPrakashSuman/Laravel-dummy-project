
   
    @extends('layouts.default')
    @section('content')
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch">
      <h1 class="title">update Page</h1>
      <form class="contact-form row" action="{{ route('user.update', ['id' => request()->route('id')]) }}" method="post" >  
         @csrf
         <input id="id" class="input-text js-input" type="hidden" name="id" value="{{ request()->route('id') }}" >
         <div class="form-field col-lg-12 ">
            <input id="name" class="input-text js-input" type="text" name="name" value="{{$data->name}}" >
            <label class="label" for="name">Name</label>
         </div>
         <div class="form-field col-lg-12 ">
            <input id="email" class="input-text js-input" type="email" name="email" value="{{$data->email}}">
            <label class="label" for="email">Email</label>

         </div>
         <div class="form-field col-lg-12">
            <input id="password" class="input-text js-input" type="password" name="password" value="{{$data->password}}">
            <label class="label" for="password">Password</label>

         </div>
         <div class="form-field col-lg-6 ">
            <input id="mobile" class="input-text js-input" type="number" name="mobile" value="{{$data->mobile}}">
            <label class="label" for="mobile">Mobile</label>

         </div>
         <div class="form-field col-lg-6 ">
            <input id="pincode" class="input-text js-input" type="numder" name="pincode" value="{{$data->pincode}}">
            <label class="label" for="pincode">Pin Code</label>

         </div>
         <div class="form-field col-lg-12">
            <input id="address" class="input-text js-input" type="text" name="address" value="{{$data->address}}">
            <label class="label" for="address">Address</label>
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/user" class="submit-btn indexpage">cancel</a>
         </div>
      </form>
   </section>
   @stop