<!doctype html>
<html lang="en">
  <head>
    @include('admin.layouts.head')
  </head>
  <body>
    @include('admin.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('admin.layouts.sidebar')    

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">@yield('html_heading')</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          @yield('html_heading_right_sidebar')
        </div>
      </div>
      @yield('content')
    </main>
  </div>
</div>
      @include('admin.layouts.js')
      </body>
</html>