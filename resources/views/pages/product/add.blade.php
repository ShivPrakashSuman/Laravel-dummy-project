@extends('layouts.default')
    @section('content')
    <section class="get-in-touch">
      <h1 class="title">Add Product Page</h1>
      <form class="contact-form row" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">  
         @csrf
         <div class="form-field col-lg-12 ">
            <input id="title" class="input-text js-input" type="text" name="title" value="{{old('title')}}">
            <label class="label" for="title"> title</label>
            @error('title')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <textarea name="description"  class="input-text js-input" id="editor1" placeholder="Enter Description...">{{old('description')}}</textarea>
            <label class="label" for="description">description</label>
            @error('description')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="price" class="input-text js-input" type="number" name="price" value="{{old('price')}}">
            <label class="label" for="price">price</label>
            @error('price')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="sell_price" class="input-text js-input" type="number" name="sell_price" value="{{old('sell_price')}}">
            <label class="label" for="sell_price">sell_price</label>
            @error('sell_price')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="quantity" class="input-text js-input" type="number" name="quantity" value="{{old('quantity')}}">
            <label class="label" for="quantity">quantity</label>
            @error('quantity')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <select class="input-text js-input" aria-label="Default select example" name="status">
               <option value="" selected disabled>Select Status..</option>
               <option value="Yes" {{ old('status') == 'Yes' ? 'selected' : '' }}>Yes</option>
               <option value="No" {{ old('status') == 'No' ? 'selected' : '' }}>No</option>
            </select>
            <label class="label" for="status">status</label>
            @error('status')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <select class="input-text js-input" aria-label="Default select example" name="brand_id" >
               <option value="" selected disabled>Select Brand..</option>
               @foreach ($brand as $option)
               <option value="{{$option->id}}" {{ $option->id == old('brand_id') ? 'selected' : '' }}>{{$option->title}}</option>
               @endforeach
            </select>
            <label class="label" for="brand_id">Brand</label>
            @error('brand_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <select class="input-text js-input" aria-label="Default select example" name="category_id">
               <option value="" selected disabled>Select category..</option>
               @foreach ($category as $option)
               <option value="{{$option->id}}" {{ $option->id == old('category_id')? 'selected':'' }}>{{$option->title}}</option>
               @endforeach
            </select>
            <label class="label" for="category_id">Category</label>
            @error('category_id')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6">
            <input id="primary_image" style="display: none;" class="input-text js-input" type="file" name="primary_image" value="{{old('primary_image')}}">
            <label class="label" for="primary_image">primary image</label>
            <label for="primary_image" id="primary_image" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload <i class='bx bx-camera' style="font-size: 20px;"></i></label>
            <div style="border-bottom: 2px solid #6151c6;"> </div>
            @error('primary_image')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-6 ">
            <input id="secondary_image" style="display: none;" class="input-text js-input" type="file" name="secondary_image" value="{{old('secondary_image')}}">
            <label class="label" for="secondary_image">Secondary image</label>
            <label for="secondary_image" id="secondary_image" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload <i class='bx bx-camera' style="font-size: 20px;"></i></label>
            <div style="border-bottom: 2px solid #6151c6;"> </div>
            @error('secondary_image')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/product" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
@stop