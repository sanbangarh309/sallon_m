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
										<th>Add Skill</th>
									</tr>
								</thead>
								<tbody>
									 <tr>
									<td>
									    <ul class="skilllist">
										     <li>
											      <div class="checkbox_area">
													  <span class="skilname">Deluxe Manicure</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												  </div>
											  </li>
											 <li>
											      <div class="checkbox_area">
													  <span class="skilname">Hot Stone Pedicure</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
											 <li>
											     <div class="checkbox_area">
													  <span class="skilname">Eyebrown Waxing</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
										 </ul>
										 
										</td>
										<td> 
										<ul class="skilllist">
										     <li>
											      <div class="checkbox_area">
													  <span class="skilname">Gel Manicure</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												  </div>
											  </li>
											 <li>
											      <div class="checkbox_area">
													  <span class="skilname">Pearl Pedicure</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
											 <li>
											     <div class="checkbox_area">
													  <span class="skilname">Kid Polish</span>
													  <input type="checkbox">
													   <label class="box-check"></label>
												   </div>
											 
											 </li>
										 </ul>
										 </td>
									</tr>
								</tbody>
							</table>
							  <div class="update_btn_list skill_btnlist">
								  <a href="report.html" class="dele_emp">Delete Skill</a>
					              <a href="report.html" class="upd_emp">Add Skill</a>
							 </div>
						</div>
					</div>
					<!-- style="display:none;" -->
					<div class="edit_employeee-detail row" id="open_editfield">
						<div class="col-md-4">
						   <div class="Employee_Info">
						        <h3>Technician Informations</h3>
								<form method="post" class="emp_Details row" id="add_employee_form">
								  <input type="hidden" value="{{app('request')->segment(3)}}" name="user_type">
									<input type="hidden" value="" name="id">
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
									   <div class="form-group col-md-6">
								        <input type="text" placeholder="By%">
								       </div>
									   <div class="form-group col-md-6">
								        <input type="text" placeholder="Fixed $">
								       </div>
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
							    <button type="submit" class="Export_btn dele_emp" id="employee_delete_btn" style="width: 100%;display:none">Delete</button>
								</div>
								</form>
								
						   </div>
						</div>
						<div class="col-md-4">
						   <div class="Employee_Info contact_Info">
						        <h3>Contract Options</h3>
								<form method="post" class="emp_Details emp_contactIfo">
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="radio" checked=""> 
													  <span class="label-text">By%</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Hourly Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
												<input type="radio" name="radio"> <span class="label-text">Overtime Rate</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>

										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Per Per day</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Weekly</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
										<li>
										   <div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Commission</span>
												</label>
											</div>
											<div class="form-group col-md-6">
											   <input type="text" placeholder="">
											 </div>
										</li>
									</ul>
								 </div>
								   <div class="deductions deduction_technician">
								      <h3>Deductions</h3>
									      <div class="form-group">
											<input type="text" placeholder="CC Tips Charges %">
										  </div>
										   <div class="form-group">
											<input type="text" placeholder="Clean up">
										  </div>
										  <div class="form-group">
											<input type="text" placeholder="Other">
										  </div>
									    </div>
								   
								</form>
							 </div>
						</div>
						
						<div class="col-md-4 employ-p-0">
						   <div class="Employee_Info contact_Info">
						        <h3>w4-Withholding</h3>
								<form method="post" class="emp_Details emp_contactIfo">
								  <div class="custom-radios">
									  <ul class="fancy-radios emply_contact w4holding">
										<li >
											<div class="form-check col-md-6">
												<label>
												  
													<input type="radio" name="radio" checked=""> 
													  <span class="label-text">Single</span>
												</label>
											</div>
											<div class="form-check col-md-6">
												<label>
													<input type="radio" name="radio"> <span class="label-text">Married</span>
												</label>
											</div>
										</li>
										
									   <div class="form-group">
									     <label>#Dependents</label>
								           <input type="text" placeholder="#Dependents">
								       </div>
									   <div class="form-group">
									       <label>Medicare%</label>
								           <input type="text" placeholder="Medicare%">
								       </div>
									   <div class="form-group">
									      <label>Social Security%</label>
								           <input type="text" placeholder="Social Security%">
								       </div>
									   <div class="form-group">
									        <label>Federal Allowance</label>
								           <input type="text" placeholder="Federal Allowance">
								       </div>
									   <div class="form-group">
									      <label>State Allowance</label>
								           <input type="text" placeholder="State Allowance">
								       </div>
									</ul>
								 </div>
								</form>
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
				let user_type = '{{$user_type}}';
				let fields = ['fname','lname','dob','job_being','job_end','ssn','phone','address','city','state','zipcode','hourly_rate'];

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
						$(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
						$('.loading_').show();
						axios.get(baseurl+'/employee/'+$(this).attr('id')).then((response) => {
							$.each(response.data.detail,function(index, value){
								if(index == 'hourly_rate' && value != ''){
									$( "input[name='hourly_rate_check']").prop('checked',true);
								}
								$( "input[name='"+index+"']").val(value);
							});
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
							return;
						}
						console.log(id);
						$('.loading_').show();
					  axios.post(baseurl+'/addemployee', data, {
								headers: {
								'X-CSRF-TOKEN': token
							}
						}).then((response) => {	
									if(id){
										console.log('#table_'+user_type+' table tbody tr#'+response.data.detail.id)
										$('#table_'+user_type+' table tbody tr#'+response.data.detail.id).remove();
									}
									$('tr#no_employee').remove();
									$('table.'+user_type+' tbody').append('<tr id="'+response.data.detail.id+'"><td>'+response.data.detail.fname+' '+response.data.detail.lname+'</td><td>'+response.data.detail.dob+'</td><td>'+response.data.detail.ssn+'</td><td>'+response.data.detail.phone+'</td><td>'+response.data.detail.role.name+'</td><td>'+response.data.detail.job_being+'</td><td>'+response.data.detail.job_end+'</td><td>'+response.data.detail.address+'</td></tr>')
									if(id){
										$.each(fields,function(index, value){
											$( "input[name='"+value+"']").val('');
										});
									}
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
					axios.delete(baseurl+'/employee/'+id).then((response) => {
						$('#table_'+user_type+' table.'+user_type+' tbody tr.'+id).remove();
						$.each(fields,function(index, value){
							$( "input[name='"+value+"']").val('');
						});
						$('.loading_').hide();
					})
				});
</script>
@endsection
@endsection