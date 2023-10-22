@extends('layouts.default')
    @section('content')
    <section class="get-in-touch">
      <h1 class="title">Update Product Page</h1>
      <form class="contact-form row" action="{{ route('product.update', ['id' => request()->route('id')]) }}" method="post" enctype="multipart/form-data">  
         @csrf
         <div class="form-field col-lg-12 ">
            <input id="title" class="input-text js-input" type="text" name="title" value="{{$data->title}}">
            <label class="label" for="title">Title</label>
            @error('title')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <textarea name="description"  class="input-text js-input" id="editor1">{{$data->description}}</textarea>
            <label class="label" for="description">Description</label>
            @error('description')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="price" class="input-text js-input" type="number" name="price" value="{{$data->price}}">
            <label class="label" for="price">Price</label>
            @error('price')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="sell_price" class="input-text js-input" type="number" name="sell_price" value="{{$data->sell_price}}">
            <label class="label" for="sell_price">Sell Price</label>
            @error('sell_price')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="quantity" class="input-text js-input" type="number" name="quantity" value="{{$data->quantity}}">
            <label class="label" for="quantity">Quantity</label>
            @error('quantity')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <select class="input-text js-input" aria-label="Default select example" name="status">
               <option value="Yes" {{ $data->status == 'Yes' ? 'selected' : '' }}>Yes</option>
               <option value="No" {{ $data->status == 'No' ? 'selected' : '' }}>No</option>
            </select>
            <label class="label" for="status">Status</label>
            @error('status')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <select class="input-text js-input" aria-label="Default select example" name="brand_id" >
               @foreach ($brand as $option)
               <option value="{{$option->id}}" {{ $option->id == $data->brand_id ? 'selected' : '' }}>{{$option->title}}</option>
               @endforeach
            </select>
            <label class="label" for="brand_id">Brand</label>
            @error('brand_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <select class="input-text js-input" aria-label="Default select example" name="category_id">
               @foreach ($category as $option)
               <option value="{{$option->id}}" {{ $option->id == $data->category_id ? 'selected' : '' }}>{{$option->title}}</option>
               @endforeach
            </select>
            <label class="label" for="category_id">Category</label>
            @error('category_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="primary_image" style="display: none;" class="input-text js-input" type="file" name="primary_image" value="{{old('primary_image')}}">
            <label class="label" for="primary_image">Primary image</label>
            <div style="border-bottom: 2px solid #6151c6;"> 
            <label for="primary_image" id="primary_image" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload 
            <i class='bx bx-camera' style="font-size: 20px;"></i></label>{{$data->primary_image}}</div>
            @error('primary_image')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <input id="secondary_image" style="display: none;" class="input-text js-input" type="file" name="secondary_image" value="{{old('secondary_image')}}">
            <label class="label" for="secondary_image">Secondary image</label>
            <div style="border-bottom: 2px solid #6151c6;"> 
            <label for="secondary_image" id="secondary_image" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload 
            <i class='bx bx-camera' style="font-size: 20px;"></i></label>{{$data->secondary_image}}</div>
            @error('secondary_image')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/product" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
@stop