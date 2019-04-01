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
						    <a href="report.html" class="Export_btn active">Technician</a>
							<a href="other-employee.html" class="Export_btn">Other Employee</a>
							<!-- <a href="report.html" class="Export_btn">Sale Associate</a>
							<a href="report.html" class="Export_btn">Manager</a>
							<a href="report.html" class="Export_btn">Schedule</a> -->

						</div>
						<div class="back-tohome float-right">
						 <a href="report.html" class="Export_btn">Export to Excel</a>
						<!--  <a href="report.html" class="Export_btn">Save</a> -->
					    <a href="{{url('/')}}" class="Exit_btn d-none d-sm-none d-md-block d-lg-block"><i class="fas fa-home"></i></a>
					   </div>
					   </div>
					   <div class="col-md-6 col-lg-8">
					   <div class="appointment_summary-table genrate_customerReport table-responsive ">
						  <table class="table" id="select-table">
								<thead>
									<tr>
										<th> Name</th>
										<th>DOB</th>
										<th>ss</th>
										<th>Phone#</th>
										<th>Roll</th>
										<th>Being</th>
										<th>End</th>
										<th>Address</th>
									
									</tr>
								</thead>
								<tbody>
									 <tr>
										<td>Ashely Thomans</td>
										<td>11-05-2019</td>
										<td>402-203-4587</td>
										<td>40-223-5682</td>
										<td>Receptionist</td>
										<td>1-25-19</td>
										<td>12-30-19</td>
										<td>luv Ave 1254</td>
										
									</tr>
									 <tr>
										<td>Ashely Thomans</td>
										<td>11-05-2019</td>
										<td>402-203-4587</td>
										<td>40-223-5682</td>
										<td>Receptionist</td>
										<td>1-25-19</td>
										<td>12-30-19</td>
										<td>luv Ave 1254</td>
									</tr>
								 </tbody>
							</table>
							
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
					<div class="edit_employeee-detail row" id="open_editfield" style="display:none;">
						<div class="col-md-4">
						   <div class="Employee_Info">
						        <h3>Technician Informations</h3>
								<form method="post" class="emp_Details row">
								   <div class="form-group col-md-6">
								      <input type="text" placeholder="First Name">
								   </div>
								     <div class="form-group col-md-6">
								        <input type="text" placeholder="Last Name">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="DOB">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Job Being">
								     </div>
									 
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Job End">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Roll">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Social Security">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="Phone#">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="Address">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="City">
								     </div>
									  <div class="form-group col-md-6">
								        <input type="text" placeholder="State">
								     </div>
									 <div class="form-group col-md-6">
								        <input type="text" placeholder="zipcode">
								     </div>
									
									   <h3 class="cjheck-payoptn">Chjeck Pay Options</h3>
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
														  
															<input type="radio" name="radio" > 
															  <span class="label-text">Hourly Rate</span>
														</label>
													</div>
													<div class="form-group col-md-8">
													   <input type="text" placeholder="">
													 </div>
												</li>
												</ul>
									 </div>
									 
								</form>
								<div class="update_btn_list">
								  <a href="report.html" class="Export_btn add_emp">Add</a>
					              <a href="report.html" class="Export_btn upd_emp">Update</a>
							      <a href="report.html" class="Export_btn dele_emp">Delete</a>
								</div>
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
        $('#select-table').on('click', 'tbody tr', function(event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
            $('.edit_employeee-detail.row').addClass('open_field').siblings().removeClass('open_field');
        });
</script>
@endsection
@endsection