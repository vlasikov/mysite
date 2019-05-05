@extends('layouts._layout')
@section('content')
<section id="content">
   <div class="container__">
      <head>
         <!-- load jQuery -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script>
            $(document).ready(function(){            
               console.log('сообщение в консоль');
               // $(".postbutton").click(function(){
                  $.ajax({
                        type:'get',
                        url:'/db_',
                        data:{
                            id:1
                        },
                        dataType: 'JSON',
                        success: function (guests) {
                            guests.forEach( function(v)// { ar2.push(v*2); } );
                            {
                              $(".writeinfo").append(v.timestamp);
                              $(".writeinfo").append('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); 
                              $(".writeinfo").append(v.ip); 
                              $(".writeinfo").append('<br>');
                            });
                            
                        }
            
                  });
               //  });
            });    
         </script>

      </head>
      <body>
         <div class="writeinfo">
            <br>
         </div>
      </body>
   </div>
</section>
@stop
