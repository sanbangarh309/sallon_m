<!DOCTYPE html>
<html lang="@if(isset($locale)){{$locale}}@else en @endif">
<head>
    @section('meta_tags')
        @include('layouts.meta')
    @show
    <meta name="author" content="Sandeep Bangarh">
    <meta name="baseurl" content="{{ url('/') }}">
    @auth
        <meta name="userID" content="{{ auth()->user()->id }}">
    @endauth
    <!-- <title>MASK {{ucwords(str_replace("_"," ",$page))}}</title> -->
    <title>Sallon Management | {{$provider_name}}</title>

    @section('style')
        @include('layouts.style')
    @show
    @yield('custom_css')
 </head>
<body class="{{$page}}">
    <div class="submit_catgry loading_">
		<i class="fa fa-spinner fa-spin"></i><span>Loading....</span>
   </div>
    @yield('main-content')
    @section('scripts')
        @include('layouts.scripts')
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
