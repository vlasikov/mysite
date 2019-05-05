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
                $(".postbutton").click(function(){
                    $.ajax({
                        type:'get',
                        url:'/read',
                        data:{
                            id:1
                        },
                        dataType: 'JSON',
                        success: function (data) { 
                            $(".writeinfo").append(data.msg); 
                        },
                        error: function() {
                            console.log('error ajax');
                        }
                    });
                });
            });    
         </script>

      </head>
      <body>
         <div class="writeinfo">
            <!-- <p><img src="css/2.gif"></p> -->
            <button class="postbutton">
               <p  >Кликни меня</p>
            </button>

            <br><br>
            <input class="getinfo"></input><br><br>
         </div>
      </body>
   </div>
</section>
@stop
