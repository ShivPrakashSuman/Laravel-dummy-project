
   
    @extends('layouts.default')
    @section('content')
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch">
      <h1 class="title">Import Page</h1>
      <form class="contact-form row" action="{{ route('user.import.store') }}" method="post" enctype="multipart/form-data" >  
      @csrf
         <div class="form-field col-lg-12">
            <input id="file" style="display: none;" class="input-text js-input" type="file" name="file" value="{{old('file')}}">
            <label class="label" for="file">Upload CSV File </label>
            <label for="file" id="file" style="font-size: 16px; margin: 2px 8px; cursor: pointer;">Upload <i class='bx bx-camera' style="font-size: 20px;"></i></label>
            <div style="border-bottom: 2px solid #6151c6;"> </div>
            @error('file')<p class="text-danger text-center" style="margin: 0;">{{ $message }}</p> @enderror
         </div>
         <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
            <a href="/user" class="submit-btn indexpage">Back</a>
         </div>
      </form>
   </section>
   @stop