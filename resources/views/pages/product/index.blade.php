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
            height:30px;
            line-height:25px;
            } 

         .overflow  {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1; 
            -webkit-box-orient: vertical;
         }
         a{
            text-decoration: none !important;
         }
         th{
            color: #337ab7;
         }
    </style>
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch" style="max-width: none;">
      <h1 class="title">Product Page</h1>
      <div class="row">
         <form style="float:left;">
            <div class="search-box" >
               <button class="btn-search"><i class="fa fa-search"></i></button>
               <input type="text" class="input-search" placeholder="Type to Search..." name="search">
            </div>
         </form>
         <a href="/product/add" class="btn btn-danger" style="float:right;">Add Product </a>
         <div class="col-sm-12" style="border: 1px solid #ededed;">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th scope="col"><a href="{{ route('product',['orderBy'=>'id','orderType'=>$orderType]) }}">ID<i class='bx bx-sort'></i></a></th>
                     <th scope="col">Primary Image</th>
                     <th scope="col">Sec. Image</th>
                     <th scope="col">Category-Title</th>
                     <th scope="col">Cate-Desc</th>
                     <th scope="col"><a href="{{ route('product',['orderBy'=>'title','orderType'=>$orderType]) }}">Title <i class='bx bx-sort'></i></a></th>
                     <th scope="col">Description</th>
                     <th scope="col"><a href="{{ route('product',['orderBy'=>'price','orderType'=>$orderType]) }}">Price <i class='bx bx-sort'></i></a></th>
                     <th scope="col"><a href="{{ route('product',['orderBy'=>'quantity','orderType'=>$orderType]) }}">Quantity <i class='bx bx-sort'></i></a></th>
                     <th scope="col">Sell Price</th>
                     <th scope="col">Status</th>
                     <th scope="col">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($data as $id => $row)
                  <tr>
                     <th scope="row">{{ $row->id }}</th>
                     <td><img src="{{asset('storage/uploads/product/'.$row->primary_image)}}" width="50" height="50"></td>
                     <td><img src="{{asset('storage/uploads/product/'.$row->secondary_image)}}" width="50" height="50"></td>
                     <td>{{ $row->getBrand->title }}</td>
                     <td>{{ $row->getCategory->title }}</td>
                     <td>{{ $row->title }}</td>
                     <td style="width: 200px;"><div class="overflow">{{ $row->description }}</div></td>
                     <td>{{ $row->price }}</td>
                     <td>{{ $row->quantity }}</td>
                     <td>{{ $row->sell_price }}</td>
                     <td>{{ $row->status }}</td>
                     <td>
                        <a href="javascritp:void(0)" data-toggle="modal" data-target="#myModal{{$row->id}}" style="font-size: 24px;" ><i class="fa fa-eye text-warning"></i></a>
                        <a href="{{ url('/product/edit', ['id' => $row->id]) }}" ><i class="w3-jumbo w3-spin fa fa-refresh text-success"></i></a>
                        <a href="{{ url('/product/delete', ['id' => $row->id]) }}" style="font-size: 24px;"><i  class="fa fa-trash text-danger "></i></a>                        
                     </td>
                  </tr>
                  @endforeach
                  @if(!$data)
                  <tr><td colspan="10" class="text-center text-danger">Record Not Found</td></tr>
                  @endif
               </tbody>
            </table>
            {{ $data->links() }}   
         </div>
      </div>
   </die>
</section>
@foreach ($data as $id => $row)
  <div class="container">
   <div class="modal fade" id="myModal{{$row->id}}" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text">Single Row Sata</h4>
         </div>
         <div class="modal-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th scope="col">title</th>
                     <td>{{ $row->title }}</td>
                  </tr>
                  <tr>
                     <th scope="col">Description</th>
                     <td>{{ $row->description }}</td>
                  </tr>
                  <tr>
                     <th scope="col">Price</th>
                     <td>{{ $row->price }}</td>
                  </tr>
                  <tr>
                     <th scope="col">Quantity</th>
                     <td>{{ $row->quantity }}</td>
                  </tr>
                  <tr>
                     <th scope="col">Primary Image</th>
                     <td>{{ $row->primary_image }}</td>
                  </tr>
               </thead>
            </table>
         </div>
         <div class="modal-footer">
            <a href="{{ url('/product/delete', ['id' => $row->id]) }}" type="button" class="btn btn-danger">Delete</a>
            <a href="{{ url('/product/edit', ['id' => $row->id]) }}" type="button" class="btn btn-success" >Update</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>    
      </div>
   </div>
   </div>
@endforeach
@stop