@php($page = 'New_Customer')
@extends('layouts.app')
@section('main-content')
<div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
	<div class="employeclock-in custmer-chkin">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12">
					<div class="Customers-info form-list">
						<h2>Customers informations</h2>
						<form id="add_appointment_form">
							<div class="form-group" id="alert_msg">
								<span class="help-block success" id="msg"></span>
							</div>
							<input type="hidden" value="" name="id">
							<div class="form-group">
								<input type="text" placeholder="Phone" name="phone" value="{{$mobile}}">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<input type="text" placeholder="First Name" name="fname">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Last Name" name="lname">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Date" name="appointment_date" class="datepicker" data-date-format="yyyy-mm-dd">
							</div>
							<div class="form-group">
								<textarea name="note" placeholder="Notes"></textarea>
							</div>
							<div class="form-group">
								<button class="apointment_infoo">Submit</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="Customers-info form-list1">
						<h2>Select Technicians</h2>
						<div class="select_teciecn">
							<ul class="slect_tecns" id="slect_tecns_apnt">
								@foreach(App\Models\Employee::where('role_id',2)->get() as $emp)
								<li>
									<div class="slect_boxtech">
										<input type="checkbox" value="{{$emp->id}}">
										<label class="aftercheck">{{$emp->fname}} {{$emp->lname}}</label>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="web-tabs">
						<nav>
							<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> 
								@foreach(App\Models\Category::all() as $key => $cat)
								@php($active='')
								@if($key == 0)
								@php($active = 'active')
								@endif
								<a class="nav-item nav-link {{$active}}" id="nav-home-tab" data-toggle="tab" href="#{{$cat->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$cat->name}}</a>
								@endforeach
								<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Others</a>
							</div>
						</nav>
						<div class="tab-content py-3 px-3 px-sm-0 san_cat_services" id="nav-tabContent"> 
							@foreach(App\Models\Category::with('services')->get() as $key => $cat)
							@php($active='')
							@if($key == 0)
							@php($active = 'show active')
							@endif
							<div class="tab-pane fade {{$active}}" id="{{$cat->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
								<div class="Customers-info">
									<div class="select_teciecn">
										<ul class="slect_tecns service_list">
											@foreach($cat->services as $service)
											<li>
												<div class="slect_boxtech">
													<input type="checkbox" value="{{$service->id}}">
													<label class="aftercheck">{{$service->name}}</label>
												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							@endforeach
							<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
								<div class="select_teciecn">
									<ul class="slect_tecns service_list">
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Classic manicure</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Design</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Royal manicure</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Delux manicure</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Long Nails</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Princess manicure</label>
											</div>
										</li>
										<li>
											<div class="slect_boxtech">
												<input type="checkbox">
												<label class="aftercheck">Dipping Powder</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div> 
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
	$('form#add_appointment_form').on('submit', function(e){
						e.preventDefault();
						let data = new FormData(this);
						var technicians = $("#slect_tecns_apnt li input:checkbox:checked").map(function(){
							return $(this).val();
						}).get();
						data.append('technicians',JSON.stringify(technicians));
						var services = $(".san_cat_services ul li input:checkbox:checked").map(function(){
							return $(this).val();
						}).get();
						if(services.length <= 0){
							$(this).find('#msg').css("color", "red");
							$(this).find('#msg').text('Please Select Services');
							return false;
						}
						data.append('services',JSON.stringify(services));
						$('.loading_').show();
					    axios.post(baseurl+'/addappointment', data, {
							headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {
							if(!response.data.success){
								$('#alert_msg #msg').css("color", "red");
								$('#alert_msg #msg').text(response.data.message);
                                $('.loading_').hide();
							}	
							$('#alert_msg #msg').css("color", "green");
							$('#alert_msg #msg').text(response.data.message);
                            $('.loading_').hide();
                            $('#alert_msg #msg').text('Redirecting..');
                            setTimeout(function(){ window.location.href = baseurl+"/attendence"; }, 1500);
									
						})
						.catch((error) => {
							$('.loading_').hide();
						})
					return false;
				});
</script>
@endsection
@endsection