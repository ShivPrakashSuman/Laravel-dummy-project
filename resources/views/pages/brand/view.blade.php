@extends('layouts.default')
    @section('content')

    <style>
         .search-box{
            width: fit-content;
            height: fit-content;
            position: relative;
         }
         .input-search{
            height: 50px;
            width: 50px;
            border-style: none;
            padding: 10px;
            font-size: 18px;
            letter-spacing: 2px;
            outline: none;
            border-radius: 25px;
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
            width: 300px;
            border-radius: 0px;
            border-bottom:1px solid rgba(255,255,255,.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
         }
         .input-search:focus{
            width: 300px;
            border-radius: 0px;
            border-bottom:1px solid rgba(255,255,255,.5);
            transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
         }
         .fa-refresh{
            font-size: 24px !important;
            margin: 5px;
         }
         .overflow {
            overflow: hidden;
            height:50px;
            line-height:25px;
            } 

         .overflow  {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1; 
            -webkit-box-orient: vertical;
         }
         .overflow  {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; 
            -webkit-box-orient: vertical;
         }
         a{
            text-decoration: none !important;
         }
         th{
            color: #337ab7;
         }
</style>
    </style>
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch" style="max-width: none;">
      <h1 class="title">Brand View Page</h1>
      <div class="row">
         <form style="float:left;">
            <div class="search-box" >
               <button class="btn-search"><i class="fa fa-search"></i></button>
               <input type="text" class="input-search" placeholder="Type to Search..." name="search">
            </div>
         </form>
         <div class="col-sm-12" style="border: 1px solid #ededed;">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th scope="col">Id</th>
                     <th scope="col">Image </th>
                     <th scope="col">Title </th>
                     <th scope="col">Description </th>
                     <th scope="col">Status</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">{{ $data->id }}</th>
                     <td>{{ $data->image }}</td>
                     <td>{{ $data->title }}</td>
                     <td style="width: 500px;"><div class="overflow">{{ $data->description }}</div></td>
                     <td>{{ $data->status }}</td>
                     <td>
                        <a href="{{ url('/brand/edit', ['id' => $data->id]) }}" ><i class="w3-jumbo w3-spin fa fa-refresh text-success"></i></a>
                        <a href="{{ url('/brand/delete', ['id' => $data->id]) }}" style="font-size: 24px;"><i  class="fa fa-trash text-danger "></i></a>                        
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="col-sm-12">
            <h2 class='text' style="margin: 30px 0px"> Brand Similar Products </h2>
         </die>
         <div class="col-sm-12" style="border: 1px solid #ededed;">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th scope="col"><a href="#">ID<i class='bx bx-sort'></i></a></th>
                     <th scope="col">Primary Image</th>
                     <th scope="col"><a href="#">Title <i class='bx bx-sort'></i></a></th>
                     <th scope="col">Description</th>
                     <th scope="col"><a href="#">Price <i class='bx bx-sort'></i></a></th>
                     <th scope="col"><a href="#">Quantity <i class='bx bx-sort'></i></a></th>
                     <th scope="col">Sell Price</th>
                     <th scope="col">Status</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data->getProduct as $id => $row)
                  <tr>
                     <th scope="row">{{ $row->id }}</th>
                     <td>{{ $row->primary_image }}</td>
                     <td>{{ $row->title }}</td>
                     <td style="width: 200px;"><div class="overflow">{{ $row->description }}</div></td>
                     <td>{{ $row->price }}</td>
                     <td>{{ $row->quantity }}</td>
                     <td>{{ $row->sell_price }}</td>
                     <td>{{ $row->status }}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </die>
</section>
@stop