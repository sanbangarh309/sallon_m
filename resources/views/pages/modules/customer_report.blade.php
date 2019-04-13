@php($page = 'Customer Report')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row customer_reportgfenrate">
				      <div class="back-tohome d-block d-sm-block d-md-none d-lg-none">
					     <a href="{{route('template','customer_management')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
					   </div>
                    <div class="col-md-4 col-lg-3">
					   <div class="genrate_csreports">
					      <h3>Generate Reports</h3>
						   <form method="post" class="customerReportGenrate">
						        <div class="filters_byphone select_custmer_reprt">
									<div class="form-group">
									  <label>Cutomers</label>
									    <select>
										   <option>Select Customer</option>
										   <option>New Customer</option>
										   <option>At risk customer</option>
									    </select>
									</div>
									<div class="form-group">
									  <label>Membership Type</label>
									    <select>
										   <option>Select Membership</option>
										   <option>Silver</option>
										   <option>Gold</option>
										   <option>Diamond</option>
									    </select>
									</div>
									<div class="form-group">
									  <label>feedback Rating</label>
									    <select>
										   <option>1-2 star</option>
										   <option>3 star</option>
										   <option>4-5 star</option>
										</select>
									</div>
									<div class="form-group">
									  <label>Birthday</label>
									   <div id="datepicker" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									  </div>
									</div>
									<div class="form-group">
									  <label>Most Spent</label>
									    <select>
										   <option>Service Category</option>
										   <option>Product Category </option>
										   <option>Service Product </option>
										</select>
									</div>
									<div class="form-group">
									  <label>Least Spent</label>
									    <select>
										   <option>Service Category</option>
										   <option>Product Category </option>
										   <option>Service Product </option>
										</select>
									</div>
								</div>
								   <div class="time-frame">
									  <h2><a href="javascript:void(0)" id="Open_frame">Time Frame Option 
									      <span class="change_icon"><i class="fas fa-angle-down"></i></span></a> 
									  </h2>
									  
									</div>
									<div class="custom-radios" style="display:none;" data-box>
									  <ul class="fancy-radios">
										<li>
											<div class="form-check">
												<label>
													<input type="radio" name="radio" checked> <span class="label-text">14 Days</span>
												</label>
											</div>
										</li>
										<li>
											<div class="form-check">
												<label>
													<input type="radio" name="radio"> <span class="label-text">30 Days</span>
												</label>
											</div>
										</li>
										<li>
											<div class="form-check">
												<label>
													<input type="radio" name="radio"> <span class="label-text">60 Days</span>
												</label>
											</div>

										</li>
										<li>
											<div class="form-check">
												<label>
													<input type="radio" name="radio"> <span class="label-text">90 Days</span>
												</label>
											</div>
										</li>
										<li>
											<div class="form-check">
												<label>
													<input type="radio" name="radio"> <span class="label-text">120 Days</span>
												</label>
											</div>
										</li>
										<li>
										   <div class="form-check">
												<label>
													<input type="radio" name="radio"> <span class="label-text">360 Days</span>
												</label>
											</div>
										</li>
										<li>

										</li>
										<li>

										</li>
									</ul>
									<div class="form-group">
									  <label>Or select Month</label>
									   <div id="datepicker2" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									  </div>
								    </div>
									<div class="form-group">
									  <label>Choose Custom Date From</label>
									   <div id="datepicker3" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									  </div>
								    </div>
									<div class="form-group">
									  <label>To</label>
									   <div id="datepicker4" class="input-group date datepicker" data-date-format="mm-dd-yyyy">
										<input class="form-control" type="text" readonly="">
										<span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
									  </div>
								    </div>
									<div class="form-group report-wrapp">
								   <label>Enter Report Name</label>
									<textarea class="textarea_report"></textarea> 
								</div>
								<div class="form-group report-wrapp">
								    <button class="submit_report">Create Report</button>
								</div>
								 </div>
							 </form>
						  
					   </div>
                    </div>
                    <div class="col-md-5 col-lg-6">
					  <div class="total-cstomer">
					     <h2>Total: {{App\Models\Appointment::where('provider_id',app('request')->session()->get('provider_id'))->count()}} Cutsomers</h2>
						 <div class="filters_byphone float-right">
						    <a href="report.html" class="Export_btn ourreport">Export to Excel</a>
						</div>
					  </div>
                        
				   <div class="appointment_summary-table genrate_customerReport table-responsive" id="customer_list_table">
							 @include('includes.customer_report_list')
           </div>
					</div>
					 <div class="col-md-3 col-lg-3">
					   <div class="back-tohome d-none d-sm-none d-md-block d-lg-block">
					     <a href="{{route('template','customer_management')}}" class="Exit_btn"><i class="fas fa-home"></i></a>
					   </div>
                       <div class="genrate_csreports_right">
						  <h3>Customer Groups</h3>
						  <div class="report_data_display">
						     <ul class="custmer_filled_details">
							    <li><p>January Birthday</p></li>
								<li><p>Gold Members</p></li>
								<li><p>60 days no check in</p></li>
								<li><p>1-3 stars Rating</p></li>
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
		let fields = ['fname','lname','phone','appointment_date','note','id','email'];

		// $('body').on('click', '.pagination a', function(e) {
		// 	e.preventDefault();
		// 	$('.loading_').show();
		// 	var url = $(this).attr('href');
		// 	getCustomers(url);
		// 	window.history.pushState("", "", url);
		// });
					
		// function getCustomers(url){
		// 	axios.post(url).then((response) => {
		// 			$('#customer_list_table').html(response.data.customers_html);
		// 			$('.loading_').hide();
		// 	})
		// 	.catch((error) => {
										
		// 	})
		// }
  $(document).ready(function(){
  $("#Open_frame").click(function(){
    $(".custom-radios").toggle("slow");
		$("i", this).toggleClass("fas fa-angle-up fas fa-angle-down");
  });
});

$('#customer_list_table').on('click', '#select-table tbody tr', function(event) {
  $(this).addClass('highlight').siblings().removeClass('highlight');
  $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
});

$(function () {
	$(".datepicker").datepicker({ 
		autoclose: true, 
		todayHighlight: true
	}).datepicker('update', new Date());
});
</script>
@endsection
@endsection