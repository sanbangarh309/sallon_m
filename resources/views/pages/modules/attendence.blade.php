@php($page = 'Attendence')
@extends('layouts.app')
@section('main-content')
<div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/salon-staff2.png')}});">
	  <div class="sallon_body_content">
	       <div class="container">
		         <div class="row">
			        <div class="col col-md-12 col-lg-12">
					    <ul class="sallon-staff-list" id="clock_in_customers">
                            @if(!$cus_users->isEmpty())
                            @foreach($cus_users as $customer) 
                            <li id="{{$customer->id}}"><div class="staff_listng">
							     <input type="checkbox"  name="customers" value="{{$customer->id}}">
								<label class="staff_label-list"> 
								<div class="staff_img">
								<span class="staff_count">1</span>
								 <img src="{{url('storage/app/public/default.png')}}" alt="appointment" class="rounded-circle"></div>
								 <div class="profile_deatils">
 								   <h2>{{$customer->customers->name}}</h2>
								  <span class="clockin_time"><i class="far fa-clock"></i>{{ $customer->created_at->format('h:i a') }}</span>
								 </div></label>
								 </div>
						    </li>
                            @endforeach
                            @endif
						</ul>
						<ul class="sallon-staff-list uncloked_staff" id="clock_in_employees">
                        @if(!$emp_users->isEmpty())
                            @foreach($emp_users as $emp) 
                            <li id="{{$emp->id}}">
							  <div class="staff_listng">
							     <input type="checkbox"  name="employees" value="{{$emp->id}}">
								<label class="staff_label-list"> 
								<div class="staff_img">
								<img src="{{url('storage/app/public/'.str_replace('employees','employees/thumbs',$emp->employees->image))}}" alt="appointment" class="rounded-circle"></div>
								 <div class="profile_deatils">
 								   <h2>{{$emp->employees->name}}</h2>
								   <span class="clockin_time"><i class="far fa-clock"></i>{{ $emp->created_at->format('h:i a') }}</span>
								 </div></label>
								 </div>
						    </li>
                            @endforeach
                            @endif
						</ul>
						<div class="staff-timingclocks">
						  <ul class="time_lists_btn">
						  <li><a href="{{url('/')}}" class="home_in"><span class="homeicvon"><i class="fas fa-home"></i></span></a></li> 
						     <li><a href="javascript:void(0)" class="clock_in">Clock In</a></li> 
							 <li><a href="javascript:void(0)" class="clock_time">10:15:30 AM</a></li>
							   <li><a href="javascript:void(0)" id="clock_out_person" class="clock_out">Clock Out</a></li>
						  </ul>
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
$('#clock_out_person').on('click',function(){
	$('.loading_').show();
	var customers = $("#clock_in_customers li input:checkbox:checked").map(function(){
		return $(this).val();
    }).get();
    var employees = $("#clock_in_employees li input:checkbox:checked").map(function(){
		return $(this).val();
	}).get();
	axios.post("{{route('change_clock_status')}}", {'customers':customers,'employees':employees, 'status':'out'}, {
		headers: {
			'X-CSRF-TOKEN': token
		}
	}).then((response) => {
		$("#clock_in_customers li input:checkbox:checked").each(function( index ) {
            $("#clock_in_customers li#"+$(this).val()).remove();
        });
        $("#clock_in_employees li input:checkbox:checked").each(function( index ) {
            $("#clock_in_employees li#"+$(this).val()).remove();
        });
        $('.loading_').hide();
	})
	.catch((error) => {

	});
});
$('.fill_number').on('click',function(){
	mobile_pad += $( this ).val();
	$('#mobile_pad').val(mobile_pad);
});
</script>
@endsection
@endsection