@php($page = 'Technician')
@extends('layouts.app')
@section('main-content')
    <div class="Saloon_web_wrapper" data-parallax="scroll" style="background:url({{url('public/provider/images/bg1.png')}});">
        <div class="customrReportGenrate_summary" id="GenrateCustomer_report">
            <div class="container-fluid">
                <div class="filter_lists row">
				  <div class="col-md-12">
				        <a href="index.html" class="Exit_btn d-block d-sm-block d-md-none d-lg-none"><i class="fas fa-home"></i></a>
                        <div class="filters_byphone">
						    <a href="{{url()->current()}}" class="Export_btn active">{{ucfirst($user_type)}}</a>
							<a href="other-employee.html" class="Export_btn">Other Employee</a>
							<!-- <a href="report.html" class="Export_btn">Sale Associate</a>
							<a href="report.html" class="Export_btn">Manager</a>
							<a href="report.html" class="Export_btn">Schedule</a> -->

						</div>
						<div class="back-tohome float-right">
						 <a href="report.html" class="Export_btn">Export to Excel</a>
						<!--  <a href="report.html" class="Export_btn">Save</a> -->
					    <a href="{{route('template','employee_management')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
					   </div>
					   </div>
					   <div class="col-md-6 col-lg-8">
					   <div class="appointment_summary-table genrate_customerReport table-responsive" id="table_{{$user_type}}">
						 	@include('includes.employee_table')
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
					      <div class="appointment_summary-table genrate_customerReport table-responsive">
						    <table class="table tech_skills" id="select-table">
								<thead>
									<tr>
									  <th>Skill List</th>
									</tr>
								</thead>
								<tbody>
									 <tr>
									<td>
										<ul class="skilllist_msg">
											<li><span class="help-block" id="msg"></span></li>
										</ul>
									    <ul class="skilllist d-flex">
											@foreach(App\Models\Service::all() as $service)
										     <li>
											      <div class="checkbox_area">
													  <span class="skilname">{{$service->name}}</span>
													  <input type="checkbox" name="service" value="{{$service->id}}">
													   <label class="box-check"></label>
												  </div>
											  </li>
												@endforeach
										 </ul>
										 
										</td>
										
									</tr>
								</tbody>
							</table>
							  <div class="update_btn_list skill_btnlist">
								  <a href="javascript:void(0)" class="dele_emp" id="update_skill_to_employee">Update Skill</a>
					        <a href="javascript:void(0)" class="upd_emp" id="add_skill_to_employee">Add Skill</a>
							 </div>
						</div>
					</div>
					<!-- style="display:none;" -->
					<div class="edit_employeee-detail row" id="open_editfield">
						<form method="post" class="emp_Details row" id="add_employee_form">
						<div class="col-md-4">
						   <div class="Employee_Info">
						        <h3>Technician Informations</h3>
								  <input type="hidden" value="{{app('request')->segment(3)}}" name="user_type">
									<input type="hidden" value="" name="id">
									<div class="form-group col-md-6" id="alert_msgs" style="text-align: center;">
											<span class="help-block success" id="msgs"></span>
										</div>
								   <div class="form-group col-md-6">
								      <input type="text" placeholder="First Name" name="fname" required>
								   </div>
								     <div class="form-group col-md-6">
								        <input type="text" placeholder="Last Name" name="lname">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="DOB" class="datepicker" name="dob" data-date-format="mm-dd-yyyy" required>
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Job Being" class="datepicker" name="job_being" data-date-format="mm-dd-yyyy" required>
								     </div>
									<div class="form-group col-md-6" id="profile_pic">
											<label class="btn btn-success">
													Browse Image<input type="file" name="image" hidden="">
											</label>
									</div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Job End" class="datepicker" name="job_end" data-date-format="mm-dd-yyyy" required>
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Social Security" name="ssn">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Phone#" name="phone" required>
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Address" name="address" required>
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="City" name="city">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="State" name="state">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="zipcode" name="zipcode">
								     </div>
									
									   <h3 class="cjheck-payoptn">Check Pay Options</h3>
									   <!-- <div class="form-group col-md-6">
								        <input type="text" placeholder="By%">
								       </div>
									   <div class="form-group col-md-6">
								        <input type="text" placeholder="Fixed $">
								       </div> -->
									   <div class="custom-radios">
											  <ul class="fancy-radios emply_contact">
												<li >
													<div class="form-check col-md-4">
														<label>
														  
															<input type="radio" name="hourly_rate_check" value="1"> 
															  <span class="label-text">Hourly Rate</span>
														</label>
													</div>
													<div class="form-group col-md-8">
													   <input type="text" placeholder="" name="hourly_rate">
													 </div>
												</li>
												</ul>
									 </div>
									 <div class="update_btn_list">
								  <button type="submit" class="Export_btn add_emp" id="employee_add_btn" style="width: 200%;">Add</button>
					        <button type="submit"  class="Export_btn upd_emp" id="employee_update_btn" style="width: 100%;display:none">Update</button>
							    <button type="button" class="Export_btn dele_emp" id="employee_delete_btn" style="width: 100%;display:none">Delete</button>
								</div>
						   </div>
						</div>
						<div class="col-md-4">
						   <div class="Employee_Info contact_Info">
						        <h3>Contract Options</h3>
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="contract" checked value="by_per"> 
													  <span class="label-text">By%</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="by_per">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="contract" value="contract_hourly_rate"> <span class="label-text">Hourly Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="contract_hourly_rate">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
												<input type="radio" name="contract" value="overtime_rate"> <span class="label-text">Overtime Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="overtime_rate">
											 </div>

										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="contract" value="per_per_day"> <span class="label-text">Per Per day</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="per_per_day">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="contract" value="weekly"> <span class="label-text">Weekly</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="weekly">
											 </div>
										</li>
										<li>
										   <div class="form-check col-md-6">
												<label>
													<input type="radio" name="contract" value="commission"> <span class="label-text">Commission</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="" name="commission">
											 </div>
										</li>
									</ul>
								 </div>
								   <div class="deductions deduction_technician">
								      <h3>Deductions</h3>
									      <div class="form-group">
											<input type="text" placeholder="CC Tips Charges %" name="tips_charges">
										  </div>
										   <div class="form-group">
											<input type="text" placeholder="Clean up" name="clean_ups">
										  </div>
										  <div class="form-group">
											<input type="text" placeholder="Other" name="other">
										  </div>
									    </div>
							 </div>
						</div>
						
						<div class="col-md-4 employ-p-0">
						   <div class="Employee_Info contact_Info">
						        <h3>w4-Withholding</h3>
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact w4holding">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="w4_status" checked="" value="single"> 
													  <span class="label-text">Single</span>
												</label>
											</div>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="w4_status" value="married"> <span class="label-text">Married</span>
												</label>
											</div>
										</li>
										
									   <div class="form-group">
									     <label>#Dependents</label>
								           <input type="text" placeholder="#Dependents" name="dependents">
								       </div>
									   <div class="form-group">
									       <label>Medicare%</label>
								           <input type="text" placeholder="Medicare%" name="medicare">
								       </div>
									   <div class="form-group">
									      <label>Social Security%</label>
								           <input type="text" placeholder="Social Security%" name="social_security">
								       </div>
									   <div class="form-group">
									        <label>Federal Allowance</label>
								           <input type="text" placeholder="Federal Allowance" name="fed_allowance">
								       </div>
									   <div class="form-group">
									      <label>State Allowance</label>
								           <input type="text" placeholder="State Allowance" name="state_allowance">
								       </div>
									</ul>
								 </div>
							 </div> 
						</div>
						</form>
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
				let user_type = '{{$user_type}}';
				let fields = ['fname','lname','dob','job_being','job_end','ssn','phone','address','city','state','zipcode','hourly_rate','id','image'];
				let contract_options = ['by_per','overtime_rate','per_per_day','weekly','commission','contract_hourly_rate'];

				$('body').on('click', '.pagination a', function(e) {
          e.preventDefault();
					$('.loading_').show();
          var url = $(this).attr('href');
          getEmployees(url);
          window.history.pushState("", "", url);
				});
				
				function getEmployees(url){
					axios.post(url).then((response) => {
							let html = '';
							$('#table_'+user_type).html(response.data.employee_html);
							$('.loading_').hide();
						})
						.catch((error) => {
									
						})
				}

        $('#table_'+user_type).on('click', '#select-table tbody tr', function(event) {
						event.preventDefault();
						if(!$(this).attr('id')){
							return false;
						}
						$(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
						$('.loading_').show();
						axios.get(baseurl+'/employee/'+$(this).attr('id')).then((response) => {
							$.each(response.data.detail,function(index, value){
								if(index != 'image'){
									if(index == 'hourly_rate' && value != ''){
										$( "input[name='hourly_rate_check']").prop('checked',true);
									}
									$( "input[name='"+index+"']").val(value);
								}
							});
							if(response.data.detail.contract_option != ''){
									$( "input[name='contract'][value='"+response.data.detail.contract_option+"']").prop('checked',true);
									var val = response.data.detail.contract_option;
									$( "input[name='"+val+"']").val(response.data.detail.contract_option_value);
								}
							$.each(response.data.detail.skills,function(index, value){
								$(".skilllist li input:checkbox[value="+value+"]").prop('checked',true);
							});
							if(!$('#profile_pic_').hasClass('image_pic')){
								$('#profile_pic').append('<img src="'+response.data.detail.image+'" id="profile_pic_" style="width:20%" class="image_pic" alt="No Pic"><label id="pic_label">Browse Pic to Update</label>');
							}else{
								$('#profile_pic_').attr('src',response.data.detail.image);
							}
							
							$('#employee_add_btn').hide();
							$('#employee_update_btn').show();
							$('#employee_delete_btn').show();
							$('.loading_').hide();
						});
        });
				$('form#add_employee_form').on('submit', function(e){
					e.preventDefault();
						let data = new FormData(this);
						var id = $( "form input[name='id']").val();
						var val = $("button[type=submit][clicked=true]").attr('id');
						if(val == 'employee_delete_btn'){
							return false;
						}
						$('.loading_').show();
					  axios.post(baseurl+'/addemployee', data, {
								headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {	
									if(!response.data.success){
										$('#alert_msgs #msgs').css("color", "red");
										$('#alert_msgs #msgs').text(response.data.message);
										$('.loading_').hide();
										return false;
									}
									if(id){
										$('#table_'+user_type+' table tbody tr#'+response.data.detail.id).remove();
									}
									$('tr#no_employee').remove();
									$('table.'+user_type+' tbody').append('<tr id="'+response.data.detail.id+'"><td>'+response.data.detail.fname+' '+response.data.detail.lname+'</td><td>'+response.data.detail.dob+'</td><td>'+response.data.detail.ssn+'</td><td>'+response.data.detail.phone+'</td><td>'+response.data.detail.role.name+'</td><td>'+response.data.detail.job_being+'</td><td>'+response.data.detail.job_end+'</td><td>'+response.data.detail.address+'</td></tr>')
									if(!id){
										$.each(fields,function(index, value){
											$( "input[name='"+value+"']").val('');
										});
									}
									$('#alert_msgs #msgs').css("color", "green");
									$('#alert_msgs #msgs').text(response.data.message);
									$('.loading_').hide();
									
						})
						.catch((error) => {
									console.log(error.data);
									$('.loading_').hide();
						})
					return false;
				});
				$('#employee_delete_btn').on('click',function(){
					var id = $( "form input[name='id']").val();
					$('.loading_').show();
					axios.delete(baseurl+'/employee/'+id).then((response) => {
						$('#table_'+user_type+' table.'+user_type+' tbody tr#'+id).remove();
						$.each(fields,function(index, value){
							$( "input[name='"+value+"']").val('');
						});
						$('#profile_pic_').remove();
						$('#pic_label').remove();
						$('.loading_').hide();
					})
				});
				// Add Skill
				function addUpdateSkills(){
					var id = $( "form input[name='id']").val();
					var skills = $(".skilllist li input:checkbox:checked").map(function(){
						return $(this).val();
					}).get();
					if(!id){
						alert('Please Select Employee to add skill')
						return;
					}
					if(!skills){
						alert('Please Select skill to add ')
						return;
					}
					$('.loading_').show();
					  axios.post(baseurl+'/addskills', {'id':id,'skills':skills}, {
								headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {
									$('.loading_').hide();
									if(response.data.success){
										$('.skilllist_msg #msg').css("color", "green");
									}else{
										$('.skilllist_msg #msg').css("color", "red");
									}
									$('.skilllist_msg #msg').text(response.data.message);
									
						})
						.catch((response) => {
									$('.skilllist_msg #msg').css("color", "red");
									$('.skilllist_msg #msg').text(response.data.message);
			
						})
					return false;
				}
				$('#add_skill_to_employee').on('click', function(e){
					e.preventDefault();
					addUpdateSkills();
				});
				$('#update_skill_to_employee').on('click', function(e){
					e.preventDefault();
					addUpdateSkills();
				});
</script>
@endsection
@endsection