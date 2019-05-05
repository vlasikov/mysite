<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ts</title>

      <meta name="description" content="" />
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="author" content="http://bootstraptaste.com" />
      <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

   </head>
<style>
hr {
  margin: 0px 0;
  height: 1px;
  border: none;
  background: #e2e2e2;
  color: #a2a2a2; /* цвет линии в IE */
  clear: both; /* запрещаем обтекание с обоих сторон, блок выводится с новой строки */
}
</style>

   <body>
      <div class ="main">
         @include('layouts.headerlink')
<hr />
         <div class="wrapper">
            @include('layouts.header')
<hr />
            {{-- @include('layouts.left-sidebar')  --}}
            @yield('content')
<hr />
            @include('layouts/footer')
         </div>
<hr />
         @include('layouts.headerlink')
      </div>
   </body>
</html>
