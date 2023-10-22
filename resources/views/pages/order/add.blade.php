@extends('layouts.default')
    @section('content')
    <section class="get-in-touch">
      <h1 class="title">Add Order Page</h1>
      <form class="contact-form row" action="{{ route('order.store') }}" method="post" >  
         @csrf
         <div class="form-field col-lg-6">
            <select class="input-text js-input" aria-label="Default select example" name="user_id" value="{{old('user_id')}}">
               <option value="" selected disabled>Select user..</option>
               @foreach ($user as $val)
               <option value="{{ $val->id}}" {{ old('user_id') == $val->id ? 'selected' : '' }}>{{$val->name}}</option>
               @endforeach
            </select>
            <label class="label" for="status">User</label>
            @error('user_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="address_id" class="input-text js-input" type="number" name="address_id" value="{{old('address_id')}}">
            <label class="label" for="address_id">Address Id</label>
            @error('address_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="product_id" class="input-text js-input" type="text" name="product_id" value="{{old('product_id')}}">
            <label class="label" for="product_id">Product Id</label>
            @error('product_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="quantity" class="input-text js-input" type="number" name="quantity" value="{{old('quantity')}}">
            <label class="label" for="quantity">Quantity</label>
            @error('quantity')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="price" class="input-text js-input" type="number" name="price" value="{{old('price')}}">
            <label class="label" for="price">Price</label>
            @error('price')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <select class="input-text js-input" aria-label="Default select example" name="status" value="{{old('status')}}">
               <option value="" selected disabled>Select Order Status</option>
               @foreach ($status as $id => $val)
               <option value="{{ $val}}" {{ old('status') == $val ? 'selected' : '' }}>{{$val}}</option>
               @endforeach
            </select>
            <label class="label" for="status">Status</label>
            @error('status')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/order" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
@stop