@extends('layouts._layout')
@section('content')
<section id="content">
   <div class="container__">

<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
</head>

<body>

sadasdsd
<button id="slideUp">Скрыть</button>
<button id="slideDown">Раскрыть</button>
<script type="text/javascript">
$(function() {
    $('#slideUp').click(function(){
         $(this).slideUp();
    });
    $('#slideDown').click(function(){
         $('#slideUp').slideDown();
    });
});
</script>

</body>

</section>
@stop
