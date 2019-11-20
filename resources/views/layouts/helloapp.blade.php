<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
        th{
          background-color: #999;
        }
        td{
          border: solid 1px #aaa;
        }
        </style>
    </head>
    <body>
      <h1>@yield('title')</h1>
      @section('menber')
      <h2 class="menutile">※メニュー</h2>
      <ul>
        <li>@show</li>
      </ul>
      <hr size="1">
      <div class="content">
        @yield('content')
      </div>
      <div class="footer">
        @yield('footer')
      </div>
    </body>
</html>
