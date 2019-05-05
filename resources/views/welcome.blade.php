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
                //$(".writeinfo").append(data.ip); 

                    var time = new Date();
                    var dateStr = (
                                                      time.getFullYear() + "-" + 
                                                     (time.getUTCMonth()+1) + "-" + 
                                                      time.getUTCDate() + " " + 
                                                      time.getHours() + ":" + 
                                                      time.getMinutes() + ":" + 
                                                      time.getSeconds() 
                                                      ); 
                    $.ajax({
                        type:'get',
                        url:'/dbpuship',
                        data:{
                            timestamp:dateStr,
                            ip:data.ip
                        },
                        dataType: 'JSON',
                        success: function (guests) {
                            console.log('сообщение в консоль 3');                            
                        }            
                    });
              });
            });    
         </script>

      </head>
                                <h4>Главная страница</h4>
                                <p>
                                    Сайт будет отлично смотреться на экранах различных устройств. Достаньте свой телефон и посмотрите.
                                </p>
    </div>
</section>

@stop
