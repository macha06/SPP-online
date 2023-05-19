<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('layouts.head')
    <style>
        body {
            background: #eee;
        }
    </style>
  </head>

  <body>
    @yield('content')
  </body>
</html>
