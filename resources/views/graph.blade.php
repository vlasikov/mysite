@extends('layouts._layout')
@section('content')
<section id="content">
   <div class="container__" style="height: 300px;">
      <head>
         <!-- load jQuery -->
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
         <!--<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">-->
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
         <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

         <style type="text/css">
         </style>
      </head>
      <body>
         <div id="myfirstchart" style="height: 250px;"></div>
         <div class="writeinfo">
            <br>
         </div>
         <div id="mychart"></div>
      </body>
   </div>

   <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Age', 'Salary'],
          ['18',  567],
          ['20',  612],
          ['25',  800],
          ['30',  980],
          ['40',  1410],
          ['50',  2350]
        ]);

        var options = {
          title: 'Average salary per age',
          curveType: 'function',
          width:900,
          height:500,
          vAxis: {title: 'Salary (Eur)'},
          hAxis: {title: 'Age'},
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('mychart'));

        chart.draw(data, options);
      }
    </script>

   <script type="text/javascript">

            var pressure;
            var data2 = [];
            var data4 = [];
            $(document).ready(function(){
                  $.ajax({
                        type:'get',
                        url:'/getWeather',
                        data:{
                            id:1
                        },
                        dataType: 'JSON',
                        success: function (weather) {
                           weather.forEach( function(v)
                            {
                              // $(".writeinfo").append(v.created_at);
                              // $(".writeinfo").append('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
                              // $(".writeinfo").append(v.pressure);
                              pressure = v.pressure - 730;
                              date = v.created_at+'';
                              var substringArray = date.split(".");
                              date3 = substringArray[0];
                              // date3 = strtotime("00:00:00");
                              data4.push({y: date3, value: pressure});
                              // $(".writeinfo").append(v.created_at);
                              // data2.push({ y: date, value: 3 });
                              // pressure = '20';
                              // $(".writeinfo").append(date3);
                              // $(".writeinfo").append(v.pressure);
                              // $(".writeinfo").append('<br>');
                            });
                           new Morris.Line({
                           // ID of the element in which to draw the chart.
                           element: 'myfirstchart',
                           // Chart data records -- each entry in this array corresponds to a point on
                           // the chart.

                           data: data4,
                           xkey: 'y',
                           // A list of names of data record attributes that contain y-values.
                           ykeys: ['value'],
                           // Labels for the ykeys -- will be displayed when you hover over the
                           // chart.
                           labels: ['Value']
                        });
                     }
                  });
            });
   </script>
</section>
@stop
