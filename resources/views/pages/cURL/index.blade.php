@extends('layouts.default')
    @section('content')

    <style>
         .search-box{
            width: fit-content;
            height: fit-content;
            position: relative;
            margin: auto;
         }
         .input-search{
            height: 50px;
            width: 600px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            transition: all .5s ease-in-out;
            background-color: #22a6b3;
            padding-right: 40px;
            color:white; 
         }
         .input-search::placeholder{
            color:rgba(255,255,255,.5);
            font-size: 18px;
            letter-spacing: 2px;
            font-weight: 100;
         }
         .btn-search{
            width: 50px;
            height: 50px;
            border-style: none;
            font-size: 20px;
            font-weight: bold;
            outline: none;
            cursor: pointer;
            border-radius: 50%;
            position: absolute;
            right: 0px;
            color:white;
            background-color:transparent;
            pointer-events: painted;  
         }
         .btn-search:focus ~ .input-search{
            width: 800px;
            border-radius: 0px;
            border-bottom:1px solid rgba(255,255,255,.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
         }
         .input-search:focus{
            width: 800px;
            border-radius: 0px;
            border-bottom:1px solid rgba(255,255,255,.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
         }
         .fa-refresh{
            font-size: 24px !important;
            margin: 5px;
         }
         a{
            text-decoration: none !important;
         }
         th{
            color: #337ab7;
         }
         img {
            max-width:300px;
            max-height:300px;
            width:auto;
            height:auto;
            padding: 5px;
        }
    </style>
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch" style="max-width: none;">
      <h1 class="title">{{request()->get('website')==''?'Pixabay': request()->get('website')}} Page</h1>
      <div class="row">
         <form class="contact-form row" action="{{ route('curl') }}" method="GET">
            <div class="form-field col-lg-12">
               <select class="input-text js-input" aria-label="Default select example" name="website">
                  <option value="" selected disabled>Select Website..</option>
                  <option value="Pixabay" {{ request()->get('website') == 'Pixabay' ? 'selected' : '' }}>Pixabay</option>
                  <option value="Pixels" {{ request()->get('website') == 'Pixels' ? 'selected' : '' }}>Pixels</option>
               </select>
               <label class="label" for="website" style="margin-left: -16px;">Website</label>
            </div>
            <div class="search-box">
               <button class="btn-search"><i class="fa fa-search"></i></button>
               <input type="text" class="input-search" placeholder="Type to Search..." name="search" value="{{request()->get('search')}}">
            </div>
         </form>
         <div class="col-sm-12" style="border: 1px solid #ededed; margin-top: 40px; padding: 15px;">
            @if ($status == 'pixabay')
            <div class='row'>
                @foreach($data->hits as $comment)
                    <div class="col-sm-3">
                    <a href="{{$comment->largeImageURL}}" download="myimage"> <img src="{{$comment->largeImageURL}}"></a>
                    </div>
                @endforeach
            </die>
            @else
            <div class='row'>
                @foreach($data->photos as $comment)
                    <div class="col-sm-3">
                    <a href="{{$comment->src->medium}}" download="myimage"> <img src="{{$comment->src->medium}}"></a>
                    </div>
                @endforeach
            </die>
            @endif
         </div>
      </div>
   </die>
</section>
@stop