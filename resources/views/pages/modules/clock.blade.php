@php($page = 'Clock In Clock Out')
@extends('layouts.app')
@section('main-content')
<div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/salon-staff2.png')}});">
        <!--SALLON-BODY-CONTENT-START-HERE--> 
	   <div class="customer_employer">
	     <div class="container">
		     <div class="row">
			    <div class="employeebtns">
				   <a href="{{route('user_chkin','customer')}}" class="Customer">Customer</a>
				   <a href="{{route('user_chkin','employee')}}" class="Customer employeers">Employer</a>
				</div>
			 </div>
		 </div>  
	   </div>
    </div>
		@section('javascript')
   	<script type="text/javascript">
		</script>
@endsection
@endsection