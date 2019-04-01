<!DOCTYPE html>
<html lang="@if(isset($locale)){{$locale}}@else en @endif">
<head>
    @section('meta_tags')
        @include('admin.layouts.meta')
    @show
    <meta name="author" content="Sandeep Bangarh">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>MASK {{ucwords(str_replace("_"," ",$page))}}</title> -->
    <title>Sallon Management | List Your Business Online with us</title>

    @section('style')
        @include('admin.layouts.style')
    @show
    @yield('custom_css')
 </head>
<body class="{{$page}}">
    <div class="wrapper">
        <!-- <div class="preloader">
            <i class="fa fa-circle-o-notch fa-spin"></i>
        </div> -->
         @section('sidebar')
            @include('admin.includes.sidebar')
         @show
         <div class="main-panel">
             @section('head')
                @include('admin.includes.head')
             @show
             @yield('main-content')
             @section('footer')
                @include('admin.includes.footer')
             @show 
         </div>
    </div>
    <div id="bootstrap_models">
        @section('bootstrap_models')
            @include('admin.includes.bootstrap_models')
        @show
    </div>
    @section('scripts')
        @include('admin.layouts.scripts')
    @show
    @if(session()->has('message'))
      <script type="text/javascript">
        swal("","{{ session()->get('message') }}", "{{ session()->get('alert-type') }}");
      </script>
      @php(session()->forget('message'))
      @php(session()->forget('alert-type'))
    @endif
    @yield('javascript')
</body>
</html>
