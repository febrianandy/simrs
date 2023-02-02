@include('partials.header')
<!-- Page Wrapper -->
<div id="wrapper">

  @include('components.sidebar')
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column ">
    <!-- Main Content -->
    <div id="content ">

      @include('components.top-navbar')

      <!-- Begin Page Content -->
      <div class="container-fluid">

        @yield('content')

      </div>
      <!-- /.container-fluid -->
    </div>
    @include('partials.footer')