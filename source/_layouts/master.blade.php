<!DOCTYPE html>
<html>
  <head>
	@include('_layouts.head')
  </head>
  <body>
      <div class="page-wrap">
      @include('_layouts.header')
      <!-- Content-->
      <div class="md-content">
        @yield('body')
      </div>
      <!-- End / Content-->
      <!-- footer -->
		  @include('_layouts.footer')
      <!-- End / footer -->
    </div>
    @include('_layouts.script')
  </body>
</html>