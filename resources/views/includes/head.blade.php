
 
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>
   <link rel="dns-prefetch" href="//fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

<!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
   <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  

   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
   
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Styles -->
<style>
   .get-in-touch {
      max-width: 800px;
      margin: 50px auto;
      position: relative;

   }

   .get-in-touch .title {
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 3.2em;
      line-height: 48px;
      padding-bottom: 48px;
      color: #5543ca;
      background: #5543ca;
      background: -moz-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
      background: -webkit-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
      background: linear-gradient(to right, #f4524d 0%, #5543ca 100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
   }

   .text {
      color: #5543ca;
      background: #5543ca;
      background: -moz-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
      background: -webkit-linear-gradient(left, #f4524d 0%, #5543ca 100%) !important;
      background: linear-gradient(to right, #f4524d 0%, #5543ca 100%) !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
   }

   .contact-form .form-field {
      position: relative;
      margin: 30px 0;
   }

   .contact-form .input-text {
      display: block;
      width: 100%;
      height: 36px;
      border-width: 0 0 2px 0;
      border-color: #5543ca;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
   }

   .contact-form .input-text:focus {
      outline: none;
   }

   .contact-form .input-text:focus+.label,
   .contact-form .input-text.not-empty+.label {
      -webkit-transform: translateY(-14px);
      transform: translateY(-14px);
   }

   .contact-form .label {
      position: absolute;
      left: 20px;
      bottom: 18px;
      font-size: 18px;
      line-height: 26px;
      font-weight: 400;
      color: #5543ca;
      cursor: text;
      transition: -webkit-transform .2s ease-in-out;
      transition: transform .2s ease-in-out;
      transition: transform .2s ease-in-out,
         -webkit-transform .2s ease-in-out;
   }

   .contact-form .submit-btn {
      display: inline-block;
      background-color: #000;
      background-image: linear-gradient(125deg, #a72879, #064497);
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 16px;
      padding: 8px 30px;
      border: none;
      width: auto;
      cursor: pointer;
   }
   .indexpage{
      float: right;
      text-decoration: none !important;
      text-align: center;
   }
  .register-btn {     /*  USE This Craete Only Butten  */
      display: inline-block;
      background-color: #000;
      background-image: linear-gradient(125deg, #a72879, #064497);
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 15px;
      padding: 8px 16px;
      border: none;
      width: 17%;
      cursor: pointer;
   }

   #copyright {
      background: #333;
      color: #ccc;
      padding: 20px 0;
      font-size: 0.738rem;
   }

   #copyright p {
      margin: 0;
   }

   .footerClass{
      position: fixed;
      bottom: 0px;
      left: 0px;
      right: 0px;
      margin-bottom: 0px;
   }
   #top {
      background: #555;
      padding: 10px 0;
   }
   #top a {
      color: #fff;
   }
   #top ul.menu > li a {
      color: #eee;
   }
   table {
      margin: 0 !important;
   }

   .select-lang{
      background-color: transparent;
      color: white;
      border: none;
   }
   select option{
      background-color: aliceblue;
      color: black;
      font-size: 16px;
   }
</style>