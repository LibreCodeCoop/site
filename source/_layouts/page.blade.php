<!DOCTYPE html>
<html>
  <head>
    @include('_layouts.head')
  </head>
  <body class="layout-page">
    <div class="page-wrap">
      @include('_layouts.header')
      <!-- Content-->
      <div class="md-content">
        <!-- Section -->
        <section class="md-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
                
                <!-- title-01 -->
                <div class="title-01 title-01__style-04">
                  <h6 class="title-01__subTitle">{{ $page->subtitle }}</h6>
                  <div>{{ $page->description }}</div>
                </div><!-- End / title-01 -->
                
              </div>
            </div>
          </div>
        </section>
        <!-- End / Section -->
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