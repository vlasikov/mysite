@extends('layouts._layout')
@section('content')
<section id="content">
   <div class="container__">
      <head>
         <!-- load jQuery -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script>
            $(document).ready(function(){
              $.getJSON('https://api.ipify.org?format=json', function(data){
                console.log(data.ip);
                $(".ipValue").append(data.ip); 
              });
            });    
         </script>
         <style type="text/css">
            .ipInfo{
            }
            .writeinfo{
            float: left;
            width: 50%;
            text-align: right;
            }
            .ipValue{
            float: left;
            width: 50%;
            text-align: left;
            }
         </style>
      </head>
      <body>
         <br>
         <div class="ipInfo">
            <div class="writeinfo">
               Твой IP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="ipValue">           
            </div>
         </div>
      </body>
   </div>
</section>
@stop
