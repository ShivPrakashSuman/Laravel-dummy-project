@extends('layouts.default')
    @section('content')
    <section class="get-in-touch">
      <h1 class="title">Update Cetegory Page</h1>
      <form class="contact-form row"action="{{ route('category.update', ['id' => request()->route('id')])}}" method="post" enctype="multipart/form-data">  
         @csrf
         <div class="form-field col-lg-12 ">
            <input id="title" class="input-text js-input" type="text" name="title" value="{{$data->title}}">
            <label class="label" for="title"> title</label>
            @error('title')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <textarea name="description"  class="input-text js-input" id="editor1">{{$data->description}}</textarea>
            <label class="label" for="description">description</label>
            @error('description')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <select class="input-text js-input" aria-label="Default select example" name="status">
               <option value="Yes" {{ $data->status == 'Yes' ? 'selected' : '' }}>Yes</option>
               <option value="No" {{ $data->status == 'No' ? 'selected' : '' }}>No</option>
            </select>
            <label class="label" for="status">status</label>
            @error('status')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input id="image" style="display: none;" class="input-text js-input" type="file" name="image" value="{{old('image')}}">
            <label class="label" for="image">image</label>
            <div style="border-bottom: 2px solid #6151c6;"> 
            <label for="image" id="image" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload 
            <i class='bx bx-camera' style="font-size: 20px;"></i></label>{{$data->image}}</div>
            @error('image')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/category" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
@stop