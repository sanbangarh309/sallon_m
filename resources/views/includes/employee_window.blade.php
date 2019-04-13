@php($page = 'Employee_Clock_In')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
     <div class="employeclock-in">
        <div class="container">
		   <div class="row">
		       <div class="col-md-12">
			       <div class="dialing-padd checkin-page-emplyee">
				        <h2>Employee Check In</h2>
							  <label class="staff_label-list"> 
								<div class="staff_img">
								<img src="images/staff.jpg" alt="appointment" class="rounded-circle"></div>
								 <div class="profile_deatils">
 								   <h2>{{$user->fname}} {{$user->lname}}</h2>
								   <span class="clockin_time"><i class="far fa-clock"></i>{{$attendent->created_at->format('h:i a')}}</span>
								 </div>
								 </label>
						<button class="em-checkin" id="employee_checkin">Employee Checkin</button>
						</div>	
				   </div>
			   </div>
			  
		   </div>
		</div>       
     </div>
@section('javascript')
<script type="text/javascript">
var token = $('meta[name=csrf-token]').attr("content");
var baseurl = $('meta[name=baseurl]').attr("content");
$('#employee_checkin').on('click',function(){
	window.location.href = baseurl+"/attendence";
});

</script>
@endsection
@endsection