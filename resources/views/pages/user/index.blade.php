@extends('layouts.default')
    @section('content')

    <style>
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
         .btnExport{
            border: 1px solid #7a29ca;
            color: rebeccapurple;
            float: right;
            margin: 0px 5px;
         }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   <!------ Include the above in your HEAD tag ---------->
   <section class="get-in-touch" style="max-width: none;">

       @include('includes.toastr') <!-- toastr Show  -->
       
      <h1 class="title">Index Page</h1>
      <div class="row">
         <div class="col-sm-8">

         </div>
         <div class="col-sm-4">
            <a href="/user/export" class="btn btnExport">Export</a>
            <a href="/user/import" class="btn btnExport">Import</a>
         </div>
         <div class="col-sm-12" style="border: 1px solid #ededed;">
            <table class="table table-bordered" id="user_datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Pin Code </th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>   
         </div>
      </div>
   </die>
</section>
   <script>
      function deleteRow(id){
         if (confirm('Delete Row')) {
            console.log('Thing was saved to the database.', id);
         } else {
            console.log('Thing was not saved to the database.');
         }
      }

      $.ajax({
         'url': "{{ route('user.api') }}",
         'method': "GET",
         'contentType': 'application/json'
      }).done( function(data) {
         // console.log('ddd', data);
         $('#user_datatable').dataTable( {
            "aaData": data.data.data,
            "columns": [
                  { "data": "id" },
                  { "data": "name" },
                  { "data": "email" },
                  { "data": "mobile" },
                  { "data": "pincode" },
                  { "data": "address" },
            ]
         })
      })
   </script>
@stop
