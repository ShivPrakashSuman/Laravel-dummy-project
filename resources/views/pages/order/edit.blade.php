@extends('layouts.default')
    @section('content')
    <section class="get-in-touch">
      <h1 class="title">Add Order Page</h1>
      <form class="contact-form row" action="{{ route('order.update', ['id' => request()->route('id')])}}" method="post" >  
         @csrf
         <div class="form-field col-lg-6">
            <select class="input-text js-input" aria-label="Default select example" name="user_id">
               @foreach ($user as $option)
               <option value="{{$option->id}}" {{ $option->id == $data->user_id ? 'selected' : '' }}>{{$option->name}}</option>
               @endforeach
            </select>
            <label class="label" for="user_id">user</label>
         </div>
         <div class="form-field col-lg-6">
            <input id="address_id" class="input-text js-input" type="number" name="address_id" value="{{$data->address_id}}">
            <label class="label" for="address_id">Address Id</label>
         </div>
         <div class="form-field col-lg-12">
            <input id="product_id" class="input-text js-input" type="text" name="product_id" value="{{$data->product_id}}">
            <label class="label" for="product_id">Product Id</label>
         </div>
         <div class="form-field col-lg-12">
            <input id="quantity" class="input-text js-input" type="number" name="quantity" value="{{$data->quantity}}">
            <label class="label" for="quantity">Quantity</label>
         </div>
         <div class="form-field col-lg-12">
            <input id="price" class="input-text js-input" type="number" name="price" value="{{$data->price}}">
            <label class="label" for="price">Price</label>
         </div>
         <div class="form-field col-lg-12">
            <select class="input-text js-input" aria-label="Default select example" name="status">
               @foreach ($status as $id => $val)
               <option value="{{$val}}" {{ $val == $data->status ? 'selected' : '' }}>{{ $val }}</option>
               @endforeach
            </select>
            <label class="label" for="status">Status</label>
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/order" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
@stop